<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$sexo = "feminino";
$peso = "56";

$imcF= (62.1 * $peso)-44;
$imcM = (72.7 * $peso)-58;

if($sexo = "feminino"){
   echo $imcF;
}else{
   echo $imcM;
}
