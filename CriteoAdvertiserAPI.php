<?php
/**
 * Created by PhpStorm.
 * User: maksim
 * Date: 03.03.17
 * Time: 12:15
 */

namespace CriteoAPI;


use CriteoAPI\models\clientLogin;
use CriteoAPI\models\clientLoginResponse;
use CriteoAPI\models\getAccount;
use CriteoAPI\models\getAccountResponse;
use CriteoAPI\models\getBudgets;
use CriteoAPI\models\getBudgetsResponse;
use CriteoAPI\models\getCampaigns;
use CriteoAPI\models\getCampaignsResponse;
use CriteoAPI\models\getCategories;
use CriteoAPI\models\getCategoriesResponse;
use CriteoAPI\models\getJobStatus;
use CriteoAPI\models\getJobStatusResponse;
use CriteoAPI\models\getReportDownloadUrl;
use CriteoAPI\models\getReportDownloadUrlResponse;
use CriteoAPI\models\getStatisticsLastUpdate;
use CriteoAPI\models\getStatisticsLastUpdateResponse;
use CriteoAPI\models\mutateCampaigns;
use CriteoAPI\models\mutateCampaignsResponse;
use CriteoAPI\models\mutateCategories;
use CriteoAPI\models\mutateCategoriesResponse;
use CriteoAPI\models\partnerLogin;
use CriteoAPI\models\partnerLoginResponse;
use CriteoAPI\models\scheduleReportJob;
use CriteoAPI\models\scheduleReportJobResponse;
use SoapClient;



/**
 * CriteoAdvertiserAPI class
 *
 *
 *
 * @author    {author}
 * @copyright {copyright}
 * @package   {package}
 */
class CriteoAdvertiserAPI extends SoapClient {

    private static $classmap = array(
        'clientLogin' => 'clientLogin',
        'clientLoginResponse' => 'clientLoginResponse',
        'partnerLogin' => 'partnerLogin',
        'partnerLoginResponse' => 'partnerLoginResponse',
        'getAccount' => 'getAccount',
        'getAccountResponse' => 'getAccountResponse',
        'AdvertiserAccount' => 'AdvertiserAccount',
        'apiHeader' => 'apiHeader',
        'getCampaigns' => 'getCampaigns',
        'CampaignSelectors' => 'CampaignSelectors',
        'CampaignStatus' => 'CampaignStatus',
        'biddingStrategy' => 'biddingStrategy',
        'getCampaignsResponse' => 'getCampaignsResponse',
        'campaign' => 'campaign',
        'bidInformation' => 'bidInformation',
        'CPCBid' => 'CPCBid',
        'CPABid' => 'CPABid',
        'categoryBid' => 'categoryBid',
        'mutateCampaigns' => 'mutateCampaigns',
        'campaignMutate' => 'campaignMutate',
        'mutate' => 'mutate',
        'OperationMutate' => 'OperationMutate',
        'mutateCampaignsResponse' => 'mutateCampaignsResponse',
        'campaignMutateJobResponse' => 'campaignMutateJobResponse',
        'JobResponse' => 'JobResponse',
        'JobStatus' => 'JobStatus',
        'ApiExceptionData' => 'ApiExceptionData',
        'ApiExceptionErrorCode' => 'ApiExceptionErrorCode',
        'apiError' => 'apiError',
        'ApiErrorCode' => 'ApiErrorCode',
        'getCategories' => 'getCategories',
        'CategorySelectors' => 'CategorySelectors',
        'getCategoriesResponse' => 'getCategoriesResponse',
        'category' => 'category',
        'mutateCategories' => 'mutateCategories',
        'categoryMutate' => 'categoryMutate',
        'mutateCategoriesResponse' => 'mutateCategoriesResponse',
        'categoryMutateJobResponse' => 'categoryMutateJobResponse',
        'getBudgets' => 'getBudgets',
        'BudgetSelectors' => 'BudgetSelectors',
        'getBudgetsResponse' => 'getBudgetsResponse',
        'budget' => 'budget',
        'scheduleReportJob' => 'scheduleReportJob',
        'ReportJob' => 'ReportJob',
        'ReportSelector' => 'ReportSelector',
        'ReportType' => 'ReportType',
        'AggregationType' => 'AggregationType',
        'ReportColumn' => 'ReportColumn',
        'scheduleReportJobResponse' => 'scheduleReportJobResponse',
        'ReportJobResponse' => 'ReportJobResponse',
        'getJobStatus' => 'getJobStatus',
        'getJobStatusResponse' => 'getJobStatusResponse',
        'getReportDownloadUrl' => 'getReportDownloadUrl',
        'getReportDownloadUrlResponse' => 'getReportDownloadUrlResponse',
        'getStatisticsLastUpdate' => 'getStatisticsLastUpdate',
        'getStatisticsLastUpdateResponse' => 'getStatisticsLastUpdateResponse',
        'StatUpdate' => 'StatUpdate',
        'StatType' => 'StatType',
    );

    public function CriteoAdvertiserAPI($wsdl = "https://advertising.criteo.com/api/v201010/advertiserservice.asmx?wsdl", $options = array()) {
        foreach(self::$classmap as $key => $value) {
            if(!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        parent::__construct($wsdl, $options);
    }


    /**
     * Client login is secured by using an application token, along with username and password.
     *
     *
     * @param clientLogin $parameters
     * @return clientLoginResponse
     */
    public function clientLogin(clientLogin $parameters) {
        return $this->__soapCall('clientLogin', array($parameters),       array(
                'uri' => 'https://advertising.criteo.com/API/v201010',
                'soapaction' => ''
            )
        );
    }

    /**
     * Partner login is secured by using an application token, along with username and password.
     *
     *
     * @param partnerLogin $parameters
     * @return partnerLoginResponse
     */
    public function partnerLogin(partnerLogin $parameters) {
        return $this->__soapCall('partnerLogin', array($parameters),       array(
                'uri' => 'https://advertising.criteo.com/API/v201010',
                'soapaction' => ''
            )
        );
    }

    /**
     * Returns advertiser account information
     *
     * @param getAccount $parameters
     * @return getAccountResponse
     */
    public function getAccount(getAccount $parameters) {
        return $this->__soapCall('getAccount', array($parameters),       array(
                'uri' => 'https://advertising.criteo.com/API/v201010',
                'soapaction' => ''
            )
        );
    }

    /**
     * Returns campaign information, including all CPC bids per category for each campaign.
     *
     * @param getCampaigns $parameters
     * @return getCampaignsResponse
     */
    public function getCampaigns(getCampaigns $parameters) {
        return $this->__soapCall('getCampaigns', array($parameters),       array(
                'uri' => 'https://advertising.criteo.com/API/v201010',
                'soapaction' => ''
            )
        );
    }

    /**
     * Mutate campaign information. Global CPC per campaign and specific Category Bids can be
     * set.
     *
     * @param mutateCampaigns $parameters
     * @return mutateCampaignsResponse
     */
    public function mutateCampaigns(mutateCampaigns $parameters) {
        return $this->__soapCall('mutateCampaigns', array($parameters),       array(
                'uri' => 'https://advertising.criteo.com/API/v201010',
                'soapaction' => ''
            )
        );
    }

    /**
     * Returns category information. All categories linked to that account are returned.
     *
     * @param getCategories $parameters
     * @return getCategoriesResponse
     */
    public function getCategories(getCategories $parameters) {
        return $this->__soapCall('getCategories', array($parameters),       array(
                'uri' => 'https://advertising.criteo.com/API/v201010',
                'soapaction' => ''
            )
        );
    }

    /**
     * Mutate category information. Can only be used to define which categories will be selected
     * for Bidding and Reporting.
     *
     * @param mutateCategories $parameters
     * @return mutateCategoriesResponse
     */
    public function mutateCategories(mutateCategories $parameters) {
        return $this->__soapCall('mutateCategories', array($parameters),       array(
                'uri' => 'https://advertising.criteo.com/API/v201010',
                'soapaction' => ''
            )
        );
    }

    /**
     * Returns buget information.
     *
     * @param getBudgets $parameters
     * @return getBudgetsResponse
     */
    public function getBudgets(getBudgets $parameters) {
        return $this->__soapCall('getBudgets', array($parameters),       array(
                'uri' => 'https://advertising.criteo.com/API/v201010',
                'soapaction' => ''
            )
        );
    }

    /**
     * Schedules a statistic report Job.
     *
     * @param scheduleReportJob $parameters
     * @return scheduleReportJobResponse
     */
    public function scheduleReportJob(scheduleReportJob $parameters) {
        return $this->__soapCall('scheduleReportJob', array($parameters),       array(
                'uri' => 'https://advertising.criteo.com/API/v201010',
                'soapaction' => ''
            )
        );
    }

    /**
     * Returns status of a asynchronous job (report or mutate). Currently applies to jobs created
     * for mutateCampaign and scheduleReportJob.
     *
     * @param getJobStatus $parameters
     * @return getJobStatusResponse
     */
    public function getJobStatus(getJobStatus $parameters) {
        return $this->__soapCall('getJobStatus', array($parameters),       array(
                'uri' => 'https://advertising.criteo.com/API/v201010',
                'soapaction' => ''
            )
        );
    }

    /**
     * Retrieve reportURL.
     *
     * @param getReportDownloadUrl $parameters
     * @return getReportDownloadUrlResponse
     */
    public function getReportDownloadUrl(getReportDownloadUrl $parameters) {
        return $this->__soapCall('getReportDownloadUrl', array($parameters),       array(
                'uri' => 'https://advertising.criteo.com/API/v201010',
                'soapaction' => ''
            )
        );
    }

    /**
     * Get statistics last update.
     *
     * @param getStatisticsLastUpdate $parameters
     * @return getStatisticsLastUpdateResponse
     */
    public function getStatisticsLastUpdate(getStatisticsLastUpdate $parameters) {
        return $this->__soapCall('getStatisticsLastUpdate', array($parameters),       array(
                'uri' => 'https://advertising.criteo.com/API/v201010',
                'soapaction' => ''
            )
        );
    }

}

?>