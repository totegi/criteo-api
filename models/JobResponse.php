<?php
/**
 * Created by PhpStorm.
 * User: maksim
 * Date: 03.03.17
 * Time: 16:01
 */

namespace CriteoAPI\models;


class JobResponse
{
    public $jobID; // long
    public $jobStatus; // JobStatus
    public $apiException; // ApiExceptionData
}