<?php

require_once '../Transaction.php';

//Classes and Objects

//Before method chaining
//$transaction = new Transaction(100, 'asadasdasdas');
//
//$transaction->addTax(8);
//$transaction->applyDiscount(10);
//var_dump($transaction->getAmount());


//After method chaining
$amount = (new Transaction(100, 'Transaction 1'))
    ->addTax(8)
    ->applyDiscount(10)
    ->getAmount();

var_dump($amount);

echo '<br>';

$transaction = (new Transaction(100, 'Transaction 2'))
    ->addTax(8)
    ->applyDiscount(10);

var_dump($transaction->getAmount());