<?php
/**
 * Created by PhpStorm.
 * User: maksim
 * Date: 03.03.17
 * Time: 16:07
 */

namespace CriteoAPI\models;


class bidInformation
{
    /**
     * @var biddingStrategy
     */
    public $biddingStrategy;

    /**
     * @var CPCBid
     */
    public $cpcBid;

    /**
     * @var CPABid
     */
    public $cpaBid;
}