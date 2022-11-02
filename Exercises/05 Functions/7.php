<?php
// Imagine you own a gun store. Only certain guns can be purchased with license types. Create an object (person) that will be the requester to purchase a gun (object) Person object has a name, valid licenses (multiple) & cash.
// Guns are objects stored within an array. Each gun has license letter, price & name.
// Using PHP in-built functions determine if the requester (person) can buy a gun from the store.

$person = new stdClass();
$person->name = "Ivars";
$person->money = 200;
$person->licenses = ['A','B','C'];

//$weapons = [];

function createWeapon (string $name, string $license,  int $price): stdClass {
    $weapon = new stdClass();
    $weapon->license = $license;
    $weapon->price = $price;
    $weapon->name = $name;
    return $weapon;
}

$weapons = [
    createWeapon('Pistol','A','100'),
    createWeapon('AK-47','C','250'),
    createWeapon('Knife','B','50'),
];
$licenseText = implode(',',$person->licenses);
echo  "Welcome, {$person->name} ({$person->money}$) Licenses:[{$licenseText}]";
echo PHP_EOL;
echo PHP_EOL;
foreach ($weapons as $key => $weapon) {
    echo "[{$key}] {$weapon->name} ({$weapon->price}$) [{$weapon->license}]". PHP_EOL;
}

$selection = (int)readline("Enter weapon to purchase: ");

$selectedWeapon = $weapon[$selection];

if ($selectedWeapon === null){
    echo 'Invalid selection.';
    exit;
}

if ($person->money <  $selectedWeapon->price){
    echo 'You dont have enough money';
    exit;
}

if (! in_array($selectedWeapon->licenses,$person->licenses)){
    echo 'Invalid license.';
    exit;
}
$person->money -= $selectedWeapon->price;
echo "Thank you for purchases {$selectedWeapon->name}";
echo  PHP_EOL;

if (! is_numeric($selection)) {
    echo "Was not a number";
    exit;
}