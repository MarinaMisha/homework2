<?php
require_once  'BankAccount.php';

$account1 = new BankAccount( "123456" , 1000);
echo "Account number: {$account1->getAccountNumber() } , Initial balance: {$account1->getBalance()}\n";

try {
    $account1->deposit(700);
    $account1->withdraw(2000);
    $account1->withdraw(500);
} catch (Exception $e) {
    echo $e . "\n";
}


$account2 = new BankAccount("345634");
echo "Account number: {$account2->getAccountNumber()}, Initial balance: {$account2->getBalance()}\n";
try {
    $account2->deposit(20000);
    $account2->withdraw(800);
} catch (Exception $e) {
    echo $e;
}
echo "Updated balance: {$account2->getBalance()}\n";
