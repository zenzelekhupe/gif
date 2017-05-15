<?php
set_error_handler(null);
set_exception_handler(null);
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once "../vendor/autoload.php";
$platformName = 'GifGiftCard_Test'; // RaaS v2 API Platform Name
$platformKey = 'CDyCRNeJOjRfNOJIxwr$wadcE?&GLI@yPMBdSyJySSloQR'; // RaaS v2 API Platform Key

$client = new RaaSV2Lib\RaaSV2Client($platformName, $platformKey);

$orders = $client->getOrders();

$body = new RaaSV2Lib\Models\CreateOrderRequestModel('shaanaksh','25','shaanaku','false','U157189','','Create Order','','Testing Order','','','');

$result = $orders->createOrder($body);

echo "<pre>";
print_r($result);