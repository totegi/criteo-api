<?php
/**
 * Created by PhpStorm.
 * User: maksim
 * Date: 03.03.17
 * Time: 16:06
 */

namespace CriteoAPI\models;


class categoryBid
{
    public $campaignCategoryUID; // int
    public $campaignID; // int
    public $categoryID; // int
    public $selected; // boolean
    public $bidInformation; // bidInformation
}