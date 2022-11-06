<?php
class FuelGauge
{

    public int $fuelLevel;


    public function __construct($fuelLevel)
    {
        $this->fuelLevel = $fuelLevel;
    }

    //Current amount of fuel, in liters.
    function checkFuelLevel(): int
    {
        return $this->fuelLevel;
    }

    public function fillFuelTank() {

        if ($this->fuelLevel >= 70) {
            echo 'Fuel tank is full!' . PHP_EOL;
        } else {
            $this->fuelLevel++;
        }
    }

    public function burnFuel(){
        if ($this->fuelLevel > 0) {
            $this->fuelLevel--;
        } else {
            echo 'Fuel tank is empty!' . PHP_EOL;
        }

    }
}

class Odometer extends FuelGauge{
    public int $mileage;

    public function  __construct(int $fuelLevel, int $mileage)
    {
        parent::__construct($fuelLevel);
        $this->mileage = $mileage;
    }

    public function checkMileage(){
        return $this->mileage;
    }
    public function incrementMileage(){
        if ($this->mileage >= 999999){
            return $this->mileage = 0;
        } else {
            return $this->mileage;
        }
    }
    public function drive(){
        $this->mileage += 10;
        $this->burnFuel();
    }
}
echo "Enter Fuel: ";
$fuelInCar = readline("Enter fuel: ");
$car = new FuelGauge($fuelInCar);
echo "Enter mileage: ";
$driveMileage = readline("Enter mileage: ");
$totalTrip = new Odometer($car->checkFuelLevel(),$driveMileage);

while ($fuelInCar >= 0){
    if ($totalTrip->incrementMileage() != 999999){
        $totalTrip->drive();
    }

    echo "Current fuel level: " . $totalTrip->checkFuelLevel() . " liters". PHP_EOL;
    echo "Current mileage: " . $totalTrip->checkMileage() . " km" . PHP_EOL;
    echo PHP_EOL;

    if ($totalTrip->checkFuelLevel() == 0){
        while ($totalTrip->checkFuelLevel() != 70){
            $totalTrip->fillFuelTank();
        }
        echo "Fuel tank filled up!" . PHP_EOL;
    }
}