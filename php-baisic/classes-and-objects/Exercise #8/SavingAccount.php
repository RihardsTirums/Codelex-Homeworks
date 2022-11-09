<?php

class SavingAccount {
    private float $balance;
    private float $anualIntrestRate;

    public function __construct(float $balance, float $anualIntrestRate){
        $this->balance = $balance;
        $this->anualIntrestRate = $anualIntrestRate;
    }
    public function withdraw($monthlyWithdraw): void{
        $this->balance -= $monthlyWithdraw;
    }
    public function deposit($depositAmount): void{
        $this->balance += $depositAmount;
    }
    public function balance(): float{
        return $this->balance;
    }
    public function monthlyIntrestRate(): float{
        return $this->balance += $this->balance * ($this->anualIntrestRate / 12);
    }
}
