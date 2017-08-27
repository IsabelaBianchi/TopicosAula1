<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$valorGasolina = 3.99;
$valorAlcool = 2.99;
$abastecaAlcool = "abasteça com álcool";
$abastecaGasolina = "abasteca com gasolina";

if($valorGasolina*0.7 > $valorAlcool){
    echo $abastecaAlcool;
}else{
    echo $abastecaGasolina;
}