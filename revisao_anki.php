<?php 

$nome = (int)$_GET["a"];

// var_dump($nome);

// $ip = $_SERVER["REMOTE_ADDR"];
$ip = $_SERVER["SCRIPT_NAME"];
echo $ip;

//============================

$nome = "Igor";
$anoNascimento = 1992; //padrao studltCase
// Variaveis n podem usar caracteres especiais nem nomes reservados.
echo $nome . " nasceu em " . $AnoNascimento;
echo "<br>";
//Mtas vezes você precisa apagar a variavel depois de usa-la pra isso usa-se a funcao unset()
unset($nome, $AnoNascimento);
//funcao isset verifica se a variavel existe por isso o echos abaixo nao vao funcionar
if (isset($nome)) {
echo $nome;
}

echo $nome . " nasceu em " . $AnoNascimento;

//===================

rename('arquivo.php', 'test.log');

//======================

$nome = "Igor";
$AnoNascimento = 1992; 
echo $nome . " nasceu em " . $AnoNascimento;
echo "<br>";
unset($nome, $AnoNascimento);
//funcao isset verifica se a variavel existe por isso o echos abaixo nao vao funcionar
if (isset($nome)) {
echo $nome;
}


echo $nome . " nasceu em " . $AnoNascimento;

//revisar a aula de tipos de dados em PHP

$nome = "Igor";
$AnoNascimento = 1992; 
echo $nome . " nasceu em " . $AnoNascimento;
echo "<br>";
unset($nome, $AnoNascimento);
//funcao isset verifica se a variavel existe por isso o echos abaixo nao vao funcionar
if (isset($nome)) {
echo $nome;
}

echo $nome . " nasceu em " . $AnoNascimento;

//============================

copy('test.log', 'test/arquivo.php');

//============================

file_put_contents('test/arquivo.php', '<h1>Vida que segue </h1> <?php echo "Olá de novo PHP" ?>'); 

file_get_contents('test/arquivo.php');
// ps: a função lê somente o conteúdo que esta dentro de uma string


$file = fopen('arquivo.log', 'a+');

//===================================

$dataAtual = 'test log' . date('Y-m-d H:i:s');
fwrite($file, $dataAtual);

//===========================

fclose($file);

//============================

$file = fopen('especializati.log', 'a+');
echo fgets($file, 4096);
fclose($file);

//===========================

touch("arquivo.php");

//===========================

if (file_exists('arquivo.php'))
echo 'O Arquivo existe';
else
echo 'O arquivo não existe';

//==========================

$file = fopen('especializati.log', 'a+');
while (!feof($file)) {
echo fgets($file) . '<br>';
}
fclose($file);

//==========================
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[0]; // piece1
echo $pieces[1];

// Example 2
$str = "Hello world. It's a beautiful day."; 
print_r (explode(" ",$str));

// Example 3


$str = 'one,two,three,four'; 

// zero limit 
print_r(explode(',',$str,0)); 

// positive limit 
print_r(explode(',',$str,2)); 

// negative limit 
print_r(explode(',',$str,-1));

$array = array('lastname', 'email', 'phone');
$comma_separated = implode(",", $array);

print $comma_separated; // lastname,email,phone


    $a1 = array("1","2","3");
    $a2 = array("a");
    $a3 = array();
   
    echo "a1 is: '".implode("','",$a1)."'<br>";
    echo "a2 is: '".implode("','",$a2)."'<br>";
    echo "a3 is: '".implode("','",$a3)."'<br>";


// will produce:
// ===========
// a1 is: '1','2','3'
// a2 is: 'a'
// a3 is: ''

//Escreve no arquivo com a data atual
$dataAtual = 'test log' . date('Y-m-d H:i:s');
fwrite($file, $dataAtual);

//===================

function registerLog($nameFileLog, $log)
{
$text = $log . date('Y-m-d H:i:s');
$file = fopen($nameFileLog, 'a+');
fwrite($file, $text);
fclose($file);
}
// Para registrar o log, basta fazer assim:
registerLog('especializati.log', 'test log');

exercicios anki php

//Read all file with 
file_get_contents()

how to update an array with new values (needle and haystack)
 public function addRole(Role $role)
     {
         if (!in_array($role, $this->roles)) {
             array_push($this->roles, $role);
         }
         
         return $this;
     } 

     create an array from a string 
Explode

 create a string from an array....:
Implode

What does trim do?
remove white space at begining and end of string 