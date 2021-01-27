<?php


require_once (__DIR__ .'\TableDataGateway.php');
require_once (__DIR__ .'\Student.php');
require_once (__DIR__ .'\StudentService.php');

$data = new TableDataGateway;
$rows = $data->Launch();