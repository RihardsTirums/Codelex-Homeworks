<?php
// Create a 2D associative array in 2nd dimension with fruits and their weight.
// Create a function that determines if fruit has weight over 10kg.
// Create a secondary array with shipping costs per weight.
// Meaning that you can say that over 10 kg shipping costs are 2 euros, otherwise its 1 euro.
// Using foreach loop print out the values of the fruits and how much it would cost to ship this product.

/*$fruits = array(
    0 => array(
       'Apples' => '9',
    ),
    1 => array(
        'Oranges' => '16',
    ),
);*/
$fruits = array(
    array("Apples" => 15),

    array("Oranges" => 3),

    array("Cherry" => 10),

    array("Banana" => 30),

    array("PineApple" => 100),
);


function validateWeigh ($fruits) {
    $shippingCosts = ['1 Euros','2 Euros'];
    $weight = 10;// Second array with shipping costs (2 - 2 Euros), (1 - 1 Euros).
    foreach ($fruits as $key => $value){
        foreach ($value as $name => $item){
            if ($item > $weight) {
                echo "This $name shipping will cost you ${shippingCosts[1]}  \n" ;
            }
            else if ($item < $weight)
            {
                echo "This $name shipping will cost you ${shippingCosts[0]}  \n" ;
            }
        }
    }
}

validateWeigh($fruits);
