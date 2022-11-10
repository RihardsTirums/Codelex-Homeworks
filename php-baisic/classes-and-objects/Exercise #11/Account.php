<?php

class Account {
    private float $balance;
    private string $name;

    public function __construct(float $balance,string $name){
        $this->balance = $balance;
        $this->name = $name;
    }
    //Get Balance
    public function getBalance () : float {
        return $this->balance;
    }
    //Get Name
    public function getName () : string {
        return $this->name;
    }
    //Set Balance
    public function setBalance(float $balance) : void {
        $this->balance = $balance;
    }
    //Set Name
    public function setName(string $name) : void {
        $this->name = $name;
    }
    //Deposit
    public function deposit(float $amount) : void {
        $this->balance += $amount;
    }
    //Withdraw
    public function withdraw(float $withdraw) : void {
        $this->balance -= $withdraw;
    }
}
// Matt's account
$mattsAccount = new Account(1000,"Matt's");

//My account
$myAccount = new Account(0,"Rihards");
//Withdraw 100.0 from Matt's account
$mattsAccount->withdraw(100.0);
//Deposit 100 to my account
$myAccount->deposit(100.0);

//Prints all account
echo $mattsAccount->getName() . ", balance: " . $mattsAccount->getBalance();
echo PHP_EOL;
echo $myAccount->getName() . ", balance: " . $myAccount->getBalance();




/*$bartos_account = new Account("Barto's account", 100.00);
$bartos_swiss_account = new Account("Barto's account in Switzerland", 1000000.00);

echo "Initial state";
echo $bartos_account;
echo $bartos_swiss_account;

$bartos_account->withdrawal(20);
echo "Barto's account balance is now: " . $bartos_account->balance();
$bartos_swiss_account->deposit(200);
echo "Barto's Swiss account balance is now: ".$bartos_swiss_account->balance();

echo "Final state";
echo $bartos_account;
echo $bartos_swiss_account;*/
