<?php
/**
 * Created by PhpStorm.
 * User: maksim
 * Date: 03.03.17
 * Time: 16:05
 */

namespace CriteoAPI\models;


class campaign
{
    public $campaignID; // int
    public $campaignName; // string
    public $endDate; // string
    public $campaignBid; // bidInformation
    public $budgetID; // int
    public $remainingDays; // int
    public $status; // CampaignStatus
    public $categoryBids; // ArrayOfCategoryBid
}