<?php

class BankAccount {
    private string $name;
    private float $balance;

    public function __construct(string $name,float $balance)
    {
    $this->name = $name;
    $this->balance = $balance;

    }
    public function getName ():string{
        return $this->name;
    }
    public function getBalance ():float{
        return $this->balance;
    }

    function show_user_name_and_balance(): string {
        if ($this->getBalance() < 0){
            return $this->getName() . ", -$ " . number_format($this->getBalance(),2,".");
        }
        return $this->getName(). ", $ ". number_format($this->getBalance(),2);
    }

}

$person = new BankAccount("Benson", -17.5);
echo $person->show_user_name_and_balance();