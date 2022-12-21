<?php
$passwordLength = isset($_GET['passwordLength'])? $_GET['passwordLength'] : '';
$passwordLength = (int)$passwordLength;
var_dump($passwordLength);
$password = "";
$password = passwordBuilder($passwordLength);
function passwordBuilder($lenght)
{
    $lilChar = 'abcdefghjklmnopqrstuvwxyz';
    $bigChar = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '1234567890';
    $symbols = '#$@!?><|+_-*&^%';
    $totals = $lilChar . $bigChar . $numbers . $symbols;
    $toReturn = '';
    for ($i=0; $i < $lenght; $i++) {
        $randNum = rand(0, strlen($totals)); 
        $toReturn = $toReturn . $totals[$randNum];
    }
    return $toReturn;
}
var_dump($password);
?>