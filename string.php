<?php 

$nome = "Hcode";
$nome2 = 'Treinamentos';
$igor = "igor valerio";
strtoupper($igor);

echo "ABC $nome";
echo "<br>";
echo strtoupper($igor);

strtolower($igor);
echo "<br> $igor";

ucwords($igor);
echo "<br>" . ucfirst($igor); 
echo "<br>" . ucwords($igor);

$empresa = "HCode";

$empresa = str_replace("o", 0, $empresa);
$empresa = str_replace("e", 3, $empresa);

echo "<br> $empresa <br>";











$frase = "A repeticao e mae da retencao.";

$q = strpos($frase, "mae");

var_dump($q);

$texto = substr($frase, 0, $q);

echo "<br>" . $texto;


//Exemplo2 deixando o exemplo anterior dinamico
echo "<br>";

$frase2 = "A repeticao e mae da retencao.";

$palavra = "mae";

$q2 = strpos($frase, $palavra);

var_dump($q);

$texto2 = substr($frase2, $q2 + strlen($palavra), strlen($frase));

echo "<br>" . $texto2;




echo "<br>";

$name = 'Hcode Treinamentos';
$replace = 'Cursos';

$new_name = substr($name, 0, strpos($name, 'T')) . $replace;

echo $new_name;


                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     