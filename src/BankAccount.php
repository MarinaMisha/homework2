<?php
require_once 'main.php';
class BankAccount {
    private int $accountNumber ;
    protected int $balance;

    /**
     * @throws Exception
     */
    public function  __construct(int $accountNumber , int $balance = 0 ) {
        $this->accountNumber = $accountNumber ;
        $this->balance = max($balance, 0);
    }
    public function getAccountNumber(): float| int {
        return $this->accountNumber;
    }
    public function getBalance(): float|int {
        return  $this->balance;
    }

    /**
     * @throws Exception
     */
    public function deposit ($amount) : void
    {
        if ($amount > 0) {
            $this->balance += $amount;
        } else {
            throw new Exception ("Invalid deposit  amount . Please enter a positive number .\n");
        }
    }

    /**
     * @throws Exception
     */
    public function  withdraw($amount) : void
    {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount ;
        } else {
            throw new Exception( "Invalid withdrawal amount\n");
        }
    }
}
