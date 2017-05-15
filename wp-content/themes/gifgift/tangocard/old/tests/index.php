<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require '../vendor/autoload.php';
require 'bootstrap.php';
// Configuration parameters and credentials
$tangoCard = new TangoCard('GifGiftCard_Test','CDyCRNeJOjRfNOJIxwr$wadcE?&GLI@yPMBdSyJySSloQR');
$tangoCard->setAppMode("sandbox");

$customer = 'shaanaksh';
$accountIdentifier = 'shaanaku';
$email = 'navi.sohal162@gmail.com';
$create_account = $tangoCard->createAccount($customer, $accountIdentifier, $email);
print_r($create_account);
/*$orders = $tangoCard->getAccountInfo('shaanaku','shaanaksh');
print_r($orders);*/
