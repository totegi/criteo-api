<?php
/**
 * Created by PhpStorm.
 * User: maksim
 * Date: 03.03.17
 * Time: 15:59
 */

namespace CriteoAPI\models;


class ApiErrorCode
{
    const NoError = 'NoError';
    const MissingMutateStructure = 'MissingMutateStructure';
    const MissingMutateObject = 'MissingMutateObject';
    const MissingJobReportStructure = 'MissingJobReportStructure';
    const UnexpectedError = 'UnexpectedError';
}