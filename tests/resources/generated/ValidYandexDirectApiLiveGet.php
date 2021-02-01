<?php

declare(strict_types=1);

namespace ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 * @release 1.1.0
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named GetVersion
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return int|bool
     */
    public function GetVersion()
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetVersion', ], [], [], $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetClientsList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ClientInfoRequest $params
     * @return \StructType\ClientInfo[]|bool
     */
    public function GetClientsList(\StructType\ClientInfoRequest $params)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetClientsList', [
                $params,
            ], [], [], $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSubClients
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetSubClientsRequest $params
     * @return \StructType\ShortClientInfo[]|bool
     */
    public function GetSubClients(\StructType\GetSubClientsRequest $params)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetSubClients', [
                $params,
            ], [], [], $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSummaryStat
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetSummaryStatRequest $params
     * @return \StructType\StatItem[]|bool
     */
    public function GetSummaryStat(\StructType\GetSummaryStatRequest $params)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetSummaryStat', [
                $params,
            ], [], [], $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCampaignParams
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CampaignIDInfo $params
     * @return \StructType\CampaignInfo|bool
     */
    public function GetCampaignParams(\StructType\CampaignIDInfo $params)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetCampaignParams', [
                $params,
            ], [], [], $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCampaignsParams
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CampaignIDSInfo $params
     * @return \StructType\CampaignInfo[]|bool
     */
    public function GetCampaignsParams(\StructType\CampaignIDSInfo $params)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetCampaignsParams', [
                $params,
            ], [], [], $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetReportList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\ReportInfo[]|bool
     */
    public function GetReportList()
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetReportList', ], [], [], $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetClientsUnits
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string[] $params
     * @return \StructType\ClientsUnitInfo[]|bool
     */
    public function GetClientsUnits(array $params)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetClientsUnits', [
                $params,
            ], [], [], $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetClientInfo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string[] $params
     * @return \StructType\ClientInfo[]|bool
     */
    public function GetClientInfo(array $params)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetClientInfo', [
                $params,
            ], [], [], $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetBanners
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetBannersInfo $params
     * @return \StructType\BannerInfo[]|bool
     */
    public function GetBanners(\StructType\GetBannersInfo $params)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetBanners', [
                $params,
            ], [], [], $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCampaignsList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string[] $params
     * @return \StructType\ShortCampaignInfo[]|bool
     */
    public function GetCampaignsList(array $params)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetCampaignsList', [
                $params,
            ], [], [], $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCampaignsListFilter
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetCampaignsInfo $params
     * @return \StructType\ShortCampaignInfo[]|bool
     */
    public function GetCampaignsListFilter(\StructType\GetCampaignsInfo $params)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetCampaignsListFilter', [
                $params,
            ], [], [], $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetBalance
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param int[] $params
     * @return \StructType\CampaignBalanceInfo[]|bool
     */
    public function GetBalance(array $params)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetBalance', [
                $params,
            ], [], [], $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetBannerPhrases
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param int[] $params
     * @return \StructType\BannerPhraseInfo[]|bool
     */
    public function GetBannerPhrases(array $params)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetBannerPhrases', [
                $params,
            ], [], [], $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetBannerPhrasesFilter
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\BannerPhrasesFilterRequestInfo $params
     * @return \StructType\BannerPhraseInfo[]|bool
     */
    public function GetBannerPhrasesFilter(\StructType\BannerPhrasesFilterRequestInfo $params)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetBannerPhrasesFilter', [
                $params,
            ], [], [], $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetRegions
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\RegionInfo[]|bool
     */
    public function GetRegions()
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetRegions', ], [], [], $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetBannersStat
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\NewReportInfo $params
     * @return \StructType\GetBannersStatResponse|bool
     */
    public function GetBannersStat(\StructType\NewReportInfo $params)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetBannersStat', [
                $params,
            ], [], [], $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetForecast
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $params
     * @return \StructType\GetForecastInfo|bool
     */
    public function GetForecast($params)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetForecast', [
                $params,
            ], [], [], $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetRubrics
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\RubricInfo[]|bool
     */
    public function GetRubrics()
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetRubrics', ], [], [], $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTimeZones
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\TimeZoneInfo[]|bool
     */
    public function GetTimeZones()
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetTimeZones', ], [], [], $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetForecastList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\ForecastStatusInfo[]|bool
     */
    public function GetForecastList()
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetForecastList', ], [], [], $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAvailableVersions
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\VersionDesc[]|bool
     */
    public function GetAvailableVersions()
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetAvailableVersions', ], [], [], $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetKeywordsSuggestion
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\KeywordsSuggestionInfo $params
     * @return string[]|bool
     */
    public function GetKeywordsSuggestion(\StructType\KeywordsSuggestionInfo $params)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetKeywordsSuggestion', [
                $params,
            ], [], [], $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetWordstatReportList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\WordstatReportStatusInfo[]|bool
     */
    public function GetWordstatReportList()
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetWordstatReportList', ], [], [], $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetWordstatReport
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $params
     * @return \StructType\WordstatReportInfo[]|bool
     */
    public function GetWordstatReport($params)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetWordstatReport', [
                $params,
            ], [], [], $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetStatGoals
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\StatGoalsCampaignIDInfo $params
     * @return \StructType\StatGoalInfo[]|bool
     */
    public function GetStatGoals(\StructType\StatGoalsCampaignIDInfo $params)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetStatGoals', [
                $params,
            ], [], [], $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetChanges
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetChangesRequest $params
     * @return \StructType\GetChangesResponse|bool
     */
    public function GetChanges(\StructType\GetChangesRequest $params)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetChanges', [
                $params,
            ], [], [], $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetEventsLog
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetEventsLogRequest $params
     * @return \StructType\EventsLogItem[]|bool
     */
    public function GetEventsLog(\StructType\GetEventsLogRequest $params)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetEventsLog', [
                $params,
            ], [], [], $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCampaignsTags
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CampaignIDSInfo $params
     * @return \StructType\CampaignTagsInfo[]|bool
     */
    public function GetCampaignsTags(\StructType\CampaignIDSInfo $params)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetCampaignsTags', [
                $params,
            ], [], [], $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetBannersTags
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\BannersRequestInfo $params
     * @return \StructType\BannerTagsInfo[]|bool
     */
    public function GetBannersTags(\StructType\BannersRequestInfo $params)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetBannersTags', [
                $params,
            ], [], [], $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCreditLimits
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\CreditLimitsInfo|bool
     */
    public function GetCreditLimits()
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetCreditLimits', ], [], [], $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetRetargetingGoals
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetRetargetingGoalsRequest $params
     * @return \StructType\RetargetingGoal[]|bool
     */
    public function GetRetargetingGoals(\StructType\GetRetargetingGoalsRequest $params)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetRetargetingGoals', [
                $params,
            ], [], [], $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetOfflineReportList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\OfflineReportInfo[]|bool
     */
    public function GetOfflineReportList()
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetOfflineReportList', ], [], [], $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return int|string[]|\StructType\BannerInfo[]|\StructType\BannerPhraseInfo[]|\StructType\BannerTagsInfo[]|\StructType\CampaignBalanceInfo[]|\StructType\CampaignInfo|\StructType\CampaignInfo[]|\StructType\CampaignTagsInfo[]|\StructType\ClientInfo[]|\StructType\ClientsUnitInfo[]|\StructType\CreditLimitsInfo|\StructType\EventsLogItem[]|\StructType\ForecastStatusInfo[]|\StructType\GetBannersStatResponse|\StructType\GetChangesResponse|\StructType\GetForecastInfo|\StructType\OfflineReportInfo[]|\StructType\RegionInfo[]|\StructType\ReportInfo[]|\StructType\RetargetingGoal[]|\StructType\RubricInfo[]|\StructType\ShortCampaignInfo[]|\StructType\ShortClientInfo[]|\StructType\StatGoalInfo[]|\StructType\StatItem[]|\StructType\TimeZoneInfo[]|\StructType\VersionDesc[]|\StructType\WordstatReportInfo[]|\StructType\WordstatReportStatusInfo[]
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
