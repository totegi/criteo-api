<?php
/**
 * Created by PhpStorm.
 * User: maksim
 * Date: 03.03.17
 * Time: 16:26
 */

namespace CriteoAPI\models;


class CampaignSelectors
{
    /**
     * @var int[]
     */
    public $campaignIDs;

    /**
     * @var int[]
     */
    public $budgetIDs;

    /**
     * @var CampaignStatus[]
     */
    public $campaignStatus;

    /**
     * @var BiddingStrategy[]
     */
    public $biddingStrategy;
}