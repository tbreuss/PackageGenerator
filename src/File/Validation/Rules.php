<?php

declare(strict_types=1);

namespace WsdlToPhp\PackageGenerator\File\Validation;

use WsdlToPhp\PackageGenerator\Container\PhpElement\Method as MethodContainer;
use WsdlToPhp\PackageGenerator\Generator\Generator;
use WsdlToPhp\PhpGenerator\Element\PhpMethod;
use WsdlToPhp\PackageGenerator\File\AbstractModelFile;
use WsdlToPhp\PackageGenerator\Model\StructAttribute;

final class Rules
{
    protected StructAttribute $attribute;

    protected AbstractModelFile $file;

    protected PhpMethod $method;

    protected MethodContainer $methods;

    private static array $rulesAppliedToAttribute = [];

    public function __construct(AbstractModelFile $file, PhpMethod $method, StructAttribute $attribute, MethodContainer $methods)
    {
        $this->file = $file;
        $this->method = $method;
        $this->attribute = $attribute;
        $this->methods = $methods;
    }

    public function applyRules(string $parameterName, bool $itemType = false): void
    {
        if ($this->attribute->isArray() && !$itemType) {
            $this->getArrayRule()->applyRule($parameterName, null, $itemType);
        } elseif ($this->attribute->isList() && !$itemType) {
            $this->getListRule()->applyRule($parameterName, null, $itemType);
        } elseif ($this->getFile()->getRestrictionFromStructAttribute($this->attribute)) {
            $this->getEnumerationRule()->applyRule($parameterName, null);
        } elseif ($itemType) {
            $this->getItemTypeRule()->applyRule($parameterName, null);
        } elseif (($rule = $this->getRule($this->getFile()->getStructAttributeTypeAsPhpType($this->attribute))) instanceof AbstractRule) {
            $rule->applyRule($parameterName, null, $itemType);
        }
        $this->applyRulesFromAttribute($parameterName, $itemType);
    }

    protected function applyRulesFromAttribute(string $parameterName, bool $itemType = false): void
    {
        foreach ($this->attribute->getMeta() as $metaName => $metaValue) {
            $rule = $this->getRule($metaName);
            if ($rule instanceof AbstractRule) {
                $rule->applyRule($parameterName, $metaValue, $itemType);
            }
        }
    }

    public function getRule(string $name): ?AbstractRule
    {
        if (is_string($name)) {
            $className = sprintf('%s\%sRule', __NAMESPACE__, ucfirst($name));
            if (class_exists($className)) {
                return new $className($this);
            }
        }

        return null;
    }

    public function getArrayRule(): ArrayRule
    {
        return $this->getRule('array');
    }

    public function getEnumerationRule(): EnumerationRule
    {
        return $this->getRule('enumeration');
    }

    public function getItemTypeRule(): ItemTypeRule
    {
        return $this->getRule('itemType');
    }

    public function getListRule(): ListRule
    {
        return $this->getRule('list');
    }

    public function getAttribute(): StructAttribute
    {
        return $this->attribute;
    }

    public function setAttribute(StructAttribute $attribute): self
    {
        $this->attribute = $attribute;

        return $this;
    }

    public function getFile(): AbstractModelFile
    {
        return $this->file;
    }

    public function getMethod(): PhpMethod
    {
        return $this->method;
    }

    public function setMethod(PhpMethod $method): self
    {
        $this->method = $method;

        return $this;
    }

    public function getMethods(): MethodContainer
    {
        return $this->methods;
    }

    public function getGenerator(): Generator
    {
        return $this->file->getGenerator();
    }

    private static function getAppliedRuleToAttributeKey(AbstractRule $rule, $value, StructAttribute $attribute): string
    {
        return implode('_', [
            $rule->validationRuleComment($value),
            $attribute->getOwner()->getName(),
            $attribute->getName(),
        ]);
    }

    public static function ruleHasBeenAppliedToAttribute(AbstractRule $rule, $value, StructAttribute $attribute): void
    {
        self::$rulesAppliedToAttribute[self::getAppliedRuleToAttributeKey($rule, $value, $attribute)] = true;
    }

    public static function hasRuleBeenAppliedToAttribute(AbstractRule $rule, $value, StructAttribute $attribute): bool
    {
        return array_key_exists(self::getAppliedRuleToAttributeKey($rule, $value, $attribute), self::$rulesAppliedToAttribute);
    }
}
