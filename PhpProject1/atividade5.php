<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$intA = 7;
$intB = 8;
$intC = 9;
$intD = 8;

$media = ($intA+$intB+$intC+$intD) / 4;

$passado = "Aluno passou";
$reprovado = "Aluno reprovou";
$recuperacao = "Aluno em Recuperacao";

if($media > 7){
    echo $passado;
}
if($media < 5){
    echo $reprovado;
}
if($media < 7 && $media >5){
    echo $recuperacao;
}