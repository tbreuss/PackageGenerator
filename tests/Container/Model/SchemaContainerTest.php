<?php

declare(strict_types=1);

namespace WsdlToPhp\PackageGenerator\Tests\Container\Model;

use WsdlToPhp\PackageGenerator\Tests\AbstractTestCase;
use WsdlToPhp\PackageGenerator\Model\Schema as SchemaModel;
use WsdlToPhp\PackageGenerator\Container\Model\Schema as SchemaContainer;

final class SchemaContainerTest extends AbstractTestCase
{
    public const SCHEMA_BING = 'bingsearch.wsdl';
    public const SCHEMA_EBAY = 'ebaySvc.wsdl';

    public static function instance(): SchemaContainer
    {
        $schemaContainer = new SchemaContainer(self::getBingGeneratorInstance());
        $schemaContainer->add(new SchemaModel(self::getBingGeneratorInstance(), self::SCHEMA_BING, file_get_contents(self::wsdlBingPath())));
        $schemaContainer->add(new SchemaModel(self::getBingGeneratorInstance(), self::SCHEMA_EBAY, file_get_contents(self::wsdlEbayPath())));
        return $schemaContainer;
    }

    public function testGetSchemaByName()
    {
        $schemaContainer = self::instance();

        $this->assertInstanceOf(SchemaModel::class, $schemaContainer->getSchemaByName(self::SCHEMA_BING));
        $this->assertInstanceOf(SchemaModel::class, $schemaContainer->getSchemaByName(self::SCHEMA_EBAY));
        $this->assertNull($schemaContainer->getSchemaByName('Bar'));
    }
}
