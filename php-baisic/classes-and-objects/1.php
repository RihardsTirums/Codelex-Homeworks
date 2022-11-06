<?php
class Product {
    public $price;
    public $amount;
    public $name;

    function __construct(string $name, float $price, int $amount){
        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;
    }
    // Prints Products
    function printProduct(string $name, float $price, int $amount){

        echo $this->name. ', price '. $this->price . ', amount '. $this->amount . PHP_EOL;
    }
    //Gets Name
    public function getName(){
        return $this->name;
    }
    //Gets Price
    public function getPrice(){
        return $this->price;
    }
    //Gets Amount
    public function getAmount(){
        return $this->amount;
    }
    //Change Quantity
    public function changeAmount($afterChanged){
        $this->amount = $afterChanged;
    }
    //Change Price
    public function changePrice($newPrice){
        $this->price = $newPrice;
    }



}
$banana = new Product("Banana",1.1,13);
$banana->printProduct('Banana',1.1,13);
echo PHP_EOL;

class Tech {
    public static function staticMethod(){
        $mouse = new Product("Logitech mouse", 70.00, 14);
        $iphone = new Product("iPhone 5s", 999.99, 3);
        $epson = new Product("Epson EB-U05", 440.46, 1);

        $allProducts = [
            $mouse,
            $iphone,
            $epson,
        ];

        foreach ($allProducts as $product){
            echo $product->getName(). ', '. $product->getPrice(). ', '. $product->getAmount();
            echo PHP_EOL;
        }

        $iphone->changePrice(499.99);
        $mouse->changeAmount(3000);

        foreach ($allProducts as $product){
            echo $product->getName(). ', ' .$product->getPrice() . ', ' .$product->getAmount();
            echo PHP_EOL;
        }
}

}
Tech::staticMethod();