<?php

require_once '../PaymentGateway/Paddle/Transaction.php';
require_once '../Notification/Email.php';
require_once '../PaymentGateway/Stripe/Transaction.php';
require_once '../PaymentGateway/Paddle/CustomerProfile.php';

//use with grouping
    //use PaymentGateway\Paddle\{Transaction, CustomerProfile};
//import the namespace
use PaymentGateway\Paddle as Paddle;
use PaymentGateway\Stripe\Transaction as StripeTransaction;

$paddleTransaction = new Paddle\Transaction();
$stripeTransaction = new StripeTransaction();
$customerProfile = new Paddle\CustomerProfile();

var_dump($paddleTransaction, $stripeTransaction);
