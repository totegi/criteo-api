<?php
/**
 * Created by PhpStorm.
 * User: maksim
 * Date: 03.03.17
 * Time: 15:52
 */

namespace CriteoAPI\models;


class ReportJob
{
    public $reportSelector; // ReportSelector
    public $reportType; // ReportType
    public $aggregationType; // AggregationType
    public $startDate; // string
    public $endDate; // string
    public $selectedColumns; // ArrayOfReportColumn
    public $isResultGzipped; // boolean
}