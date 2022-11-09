<?php

require_once "SavingAccount.php";

echo "Please deposit you're funds to you're account: ";
$startBalance = (int)readline("Please deposit you're funds to you're account: ");
echo PHP_EOL;

$anualIntrestRate = (int)readline("Enter Annual Interest %: ");
echo "Enter Annual Intrest %: ";

echo PHP_EOL;
echo "How long account has been open for ?: ";
$savingPeriod = (int)readline("How long account has been open for ?: ");

$account = new SavingAccount($startBalance,$anualIntrestRate);
$depositedAmount = 0;
$withdrawAmount  = 0;
$intrestEarned = 0;

for ($i = 1; $i <= $savingPeriod; $i++){

    $monthlyDeposit = (int)readline("Enter amount deposited for month: $i :");
    $account->deposit($monthlyDeposit);
    $depositedAmount += $monthlyDeposit;
    $monthlyWithdraw = (int)readline("Enter amount to withdraw for month: $i :");
    $account->withdraw($monthlyWithdraw);
    $withdrawAmount += $monthlyWithdraw;
    $currentBalance = $account->balance();
    $intrestEarned += $account->monthlyIntrestRate() - $currentBalance;

}
echo  "Total Deposited : Euros " .number_format($depositedAmount,2,'.',',');
echo PHP_EOL;
echo "Total Withdrawn: Euros " . number_format($withdrawAmount,2,'.',',');
echo PHP_EOL;
echo "Interest Accumulated: " . number_format($intrestEarned,2,".",",");
echo PHP_EOL;
echo "Ending Balance: Euros ". number_format($account->balance(),2,'.',',');
