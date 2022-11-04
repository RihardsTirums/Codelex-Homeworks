<?php
//Izveidot populārās slota mašīnas aparāta loģiku.
//Loģikai jāsastāv no kombināciju līnijām, kas veido uzvaras gadījumu. Uzvaras gadījumā lietotājam tiek piešķirta naudas summa.
//Jābūt starta kapitālam, ko lietotājam piešķirtas, vai iespēju ievadīt sākuma summu. DONE
//Katrs gājiens/spēle maksā noteiktu summu.
//Ja naudas summa beidzās, izvadam paziņojumu un aizveram spēli.

// Player Wallet
echo "WELCOME TO CASINO! \n";
echo "Please deposit you're funds: ";
$playerWallet = readline("Deposit you're funds: ");

$costPerSpin = 5;
// Check if user deposited enough funds.
if ($playerWallet > $costPerSpin){
    echo "You successfully deposited: " .$playerWallet ."$ \n";
} else {
    echo "You haven't deposited enough funds we returned you're money back to you. ".$playerWallet . "$";
    exit;
}



// Possible winning combinations.
$winningCombos = [
    [   // Mid line --->
        [1, 0], [1, 1], [1, 2], [1, 3],[1, 4]
    ],
    [   // Top line --->
        [0, 0], [0, 1], [0, 2], [0, 3], [0, 4]
    ],
    [   // Bottom line --->
        [2, 0], [2, 1], [2, 2], [2, 3],[2, 4]
    ],
    [   // Arrow line upside down
        [0, 0], [1, 1], [2, 2], [1,3], [0,4]
    ],
    [   // Arrow line up
        [2, 0], [1, 1], [0, 2], [1, 3], [2, 4]
    ],
    [   // Mini arrow upside down
        [0, 0], [0, 1], [1, 2], [0, 3], [0, 4]
    ],
    [   // Mini arrow up
        [2, 0], [2, 1], [1, 2], [2, 3], [2, 4]
    ],
    [   // Smile ) up
        [1, 0], [2, 1], [2, 2], [2, 3], [1, 4]
    ],
    [   // Sad smile ( down
        [1, 0], [0, 1], [0, 2], [0, 3], [1, 4]
    ],
    [   // ZigZag line
        [1, 0], [0, 1], [1, 2], [0, 3], [1, 4]
    ],
    [   // ZigZag line upside down
        [1, 0], [2, 1], [1, 2], [2, 3], [1, 4]
    ]
];

function board() {
    global $cells;

    echo " {$cells[0][0]} | {$cells[0][1]}  |  {$cells[0][2]} |  {$cells[0][3]} | {$cells[0][4]}\n";
    echo "---+----+----+----+---\n";
    echo " {$cells[1][0]} | {$cells[1][1]}  |  {$cells[1][2]} |  {$cells[1][3]} |  {$cells[1][4]}\n";
    echo "---+----+----+----+---\n";
    echo " {$cells[2][0]} | {$cells[2][1]}  |  {$cells[2][2]} |  {$cells[2][3]} |  {$cells[2][4]}\n";
}

function gameBoard(){
    global $boardRows, $bordColumns, $symbols;
    $GLOBALS['board'] = [];
    for($i = 0; $i < $boardRows; $i++){
        for($j = 0; $j < $bordColumns; $j++){
            $GLOBALS['board'][$i][] = $symbols[array_rand($symbols)];
        }
    }
    foreach ($GLOBALS['board'] as $i){
        echo implode(' ', $i) . PHP_EOL;
    }
}


// Board Size
$boardRows = 30;
$bordColumns = 50;

// Game Symbols and payouts
$symbols = ['A', 'K', 'Q', 'JACKPOT', '7', '$'];
$payout = ['$' => 10, '7' => 50, 'JACKPOT' => 5000, 'Q' => 30, 'K' => 50, 'A' => 100];


// Game Starts and every spin costs 5
while (true){
    // PLAY OR NOT TO PLAY ?
    echo PHP_EOL;
    echo "Would you like to spin ? It will cost you: " .$costPerSpin ."$";
    echo PHP_EOL;
    echo "You're current balance is: ".$playerWallet."$";
    echo PHP_EOL;
    echo "If YES enter y. If NO enter n: ";
    $userInput = readline("Yes or No");
    if ($userInput == "y"){
        echo "Game has started GOOD LUCK ! :)";
        echo PHP_EOL;
    } else {
        echo "You have successfully withdrawn your money: ". $playerWallet . "$";
        echo PHP_EOL;
        echo "THANK YOU FOR PLAYING!";
        exit;
    }
    gameBoard();


    $lineCount = 0;

    if($lineCount > 0) {
        echo "WOOOOW! YOU GOT A LINE $lineCount !!!!!!\n";
    }

    foreach ($winningCombos as $combo){
        $valueCombo = [];
        foreach ($combo as $position){
            [$x, $y] = $position;
            $valueCombo[] = $GLOBALS['board'][$x][$y];
        }
        if(count(array_unique($valueCombo)) === 1){
            $lineCount++;
            $playerWallet += $payout["{$valueCombo[0]}"];
        }
    }



// For Every Spin take 5$ From Players Wallet
    $playerWallet -= 5;


    // If player run's out of money game stops
    if ($playerWallet < 0 || $playerWallet < $costPerSpin){
        echo PHP_EOL;
        echo "You don't have enough funds to begin with";
        echo PHP_EOL;
        echo "Would you like to pawn your house or car for one more spin?: ";
        $pawn = readline("Pawn ?");
        if ($pawn == "house"){
            echo "Thank you you can now keep playing we got you're house";
            continue;
        } elseif ($pawn == "car"){
            echo "Thank you you can now keep playing we got you're car";
            continue;
        }
        echo "You're balance is: ". $playerWallet;
        exit;
    }

}


