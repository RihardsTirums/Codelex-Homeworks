<?php

require_once "Date.php";

$date = new Date(11,7,2022);
$date->setMonth(11);
$date->setDay(7);
$date->setYear(2022);

$date->setYear(3000);


echo "Tomorrow will be " . $date->displayDate(11,8,2022);