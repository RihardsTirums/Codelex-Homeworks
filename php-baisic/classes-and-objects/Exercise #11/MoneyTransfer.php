<?php
require_once "Account.php";

class MoneyTransfer {

    private Account $account;

    public function transfer (Account $from, Account $to, int $howMuch) : void {
        $from->deposit($howMuch);
        $to->withdraw($howMuch);
    }
    // Testing Function
    public function test() {
        // Create Accounts to test if everything works
        $A = new Account(100.0,"A");
        $B = new Account(0.0,"B");
        $C = new Account(0.0,"C");

        //Testing functions
        $this->transfer($A,$B,50.0);
        $this->transfer($B,$C,25.0);

        echo PHP_EOL;
        echo "Account: " . $A->getName() . ", has balance of: ". $A->getBalance();
        echo PHP_EOL;
        echo "Account: " . $B->getName() . ", has balance of: " . $B->getBalance();
        echo PHP_EOL;
        echo "Account: " . $C->getName() . ", has balance of: " . $C->getBalance();

    }

}


(new MoneyTransfer())->test();
