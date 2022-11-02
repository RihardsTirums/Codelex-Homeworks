<?php
$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2165, 1457, 2456
];
//todo
foreach ($numbers as $number){
    echo "Original numeric array: $number" ;
    echo PHP_EOL;
}
echo "------------------------------------ \n";

//todo
sort($numbers);
foreach ($numbers as $key => $val){
    echo "Sorted numeric array:$key = $val \n" ;
}





$words = [
    "Java",
    "Python",
    "PHP",
    "C#",
    "C Programming",
    "C++"
];
echo "------------------------------------ \n";
//todo
foreach ($words as $word) {
    echo "Original string array: $word";
    echo PHP_EOL;
}
echo "------------------------------------ \n";

//todo
sort($words);
foreach ($words as $word) {
    echo "Sorted string array: $word ";
    echo PHP_EOL;
}


