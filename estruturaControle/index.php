<?php 

$qualASuaIdade = 30;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if($qualASuaIdade > $idadeCrianca){
    echo "Adulto !";
}elseif($qualASuaIdade > $idadeMaior){

    echo "não e criança";
}

//if ternario
echo($qualASuaIdade < $idadeMaior)?"Menor de idade":"Maior de idade";