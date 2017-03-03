<?php
/**
 * Created by PhpStorm.
 * User: maksim
 * Date: 03.03.17
 * Time: 15:52
 */

namespace CriteoAPI\models;


class budget
{
    public $budgetID; // int
    public $budgetName; // string
    public $totalAmount; // int
    public $remainingBudget; // double
    public $remainingBudgetUpdated; // string
}