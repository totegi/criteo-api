<?php
/**
 * Created by PhpStorm.
 * User: maksim
 * Date: 03.03.17
 * Time: 16:00
 */

namespace CriteoAPI\models;


class ApiExceptionData
{
    public $errorCode; // ApiExceptionErrorCode
    public $errors; // ArrayOfApiError
    public $message; // string
    public $trigger; // string
}