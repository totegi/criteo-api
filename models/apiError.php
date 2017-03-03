<?php
/**
 * Created by PhpStorm.
 * User: maksim
 * Date: 03.03.17
 * Time: 15:59
 */

namespace CriteoAPI\models;


class apiError
{
    public $code; // ApiErrorCode
    public $detail; // string
    public $field; // string
    public $index; // int
    public $isExemptable; // boolean
    public $textIndex; // int
    public $textLength; // int
    public $trigger; // string
}