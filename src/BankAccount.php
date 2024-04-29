<?php
class BankAccount {
    private int $accountNumber ;
    protected int $balance;

    public function  __construct( int$accountNumber , int $balance = 0 ) {
        $this->accountNumber = $accountNumber ;
        $this->balance = $balance ;


    }
    public function getAccountNumber(): float| int {
        return $this->accountNumber;


    }
    public function getBalance(): float|int {
        return  $this->balance;
    }
    public function deposit ($amount) : void
    {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Deposited $amount into account {$this->accountNumber} . New balance: {$this->balance}\n";
        } else {
            echo "Invalid deposit  amount . Please enter a positive number .\n";
        }
    }
    public function  withdraw($amount) : void
    {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount ;
            echo "Withdraw $amount . New balance: {$this->balance}\n";

        } else {
            echo  "Invalid withdrawal amount\n";
        }


    }



}
$account1 = new BankAccount( "123456" , 1000);
echo "Account number: {$account1->getAccountNumber() } , Initial balance: {$account1->getBalance()}\n";

$account1->deposit(700);
$account1->withdraw(2000);
$account1->withdraw(500);

$account2 = new BankAccount("345634");
echo "Account number: {$account2->getAccountNumber()}, Initial balance: {$account2->getBalance()}\n";
$account2->deposit(600);
$account2->withdraw(800);