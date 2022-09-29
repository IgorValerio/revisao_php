<h3>Operador de atribuição e concatenação String</h3>
<?php 

$nome = "Igor";
$nome .= " Mais alguma coisa";
echo $nome;

?>

<h3>Operadores de atribuição utilizando desconto.</h3>

<?php 

$valorTotal = 0;

$valorTotal += 100; 

$valorTotal += 25;

// $valorTotal -= 10; tbm da 10% de desconto.

$valorTotal *= .9; //10% de desconto.

echo $valorTotal;

?>

<h3>Operadores aritmeticos</h3>

<?php 

$a = 2;
$b = 10;
 
echo $b / $a;

echo "<br>";

echo $b % $a;

echo "<br>";

echo $b ** $a;

?>

<h3>Operadores de comparação</h3>

<?php 

$a = 38;
$b = 55;

var_dump($a > $b);

echo "<br>";

var_dump($a < $b);

echo "<br>";

var_dump($a == $b);

echo "<br>";

$c = 55.0;
$d = 55;

//Comparando se os valores sao iguais
var_dump($c == $d);

echo "<br>";

//Comparando agora valor e tipo, ou seja, se são idênticos: 
var_dump($c === $d);

echo "<br>";

//Validando o tipo de dado tbm
var_dump($c !== $d);

echo "<br>";

//Operador spaceship serve para verificar se dois valores sao uma maior ou menor que o outro ou iguais, se for maior retorna 1, iguais retorna 0 e menor retorna -1 no var_dump();

$d = 58;
$e = 35;

var_dump($d <=> $e);

echo "<br>";

//Operador de nullos

$x = null;

$y = null;

$z = 10;

echo $x ?? $y ?? $z;

echo "<br>";

//Operadores incrementais

$w = 10;

echo $w++;

echo "<br>";

echo $w;

echo "<br>";

//Operador decremento

$t = 10;

echo ++$t;

echo "<br>";

echo $t;

echo "<br>";

//Operador &&, o operador precisa que as sentenças tanto da direita quanto da esquerda sejam verdadeiras pra ele retornar um valor positivo.

// $resultado = (10 + 3) / 2 > 5 && 10 + 5 < 20;
//Operador OR apenas uma das condições precisam ser verdadeiras
$resultado = (10 + 3) / 2 > 5 || 10 + 5 < 20;

var_dump($resultado);
?>