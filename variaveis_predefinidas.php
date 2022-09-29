<?php 
//Todos os valores que sao passados por GET ou POST viram String entao para armazenar numeros ou fazer somas e armazenar no banco de dados precisa-se
//fazer um Cast

$nome = (int)$_GET["a"];

// var_dump($nome);

// $ip = $_SERVER["REMOTE_ADDR"];
$ip = $_SERVER["SCRIPT_NAME"];
echo $ip;