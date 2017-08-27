<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$intA = 50;
$intB = 40;
$intC = 30;
$intD = 20;
$maior = "o valor é maior";
$menor = "o valor é menor";

$somaAD = $intA + $intD;
$divBC = $intB/$intC;

if($somaAD > $divBC){
    echo $maior;
}
if($somaAD < $divBC){
    echo $menor;
}
