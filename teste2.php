<?php 

//Abre o arquivo arquivo.php, caso não exista o arquivo ele será criado, por causa da opção "a+"
//O segundo parâmetro da função fopen(prm1, prm2) é muito importante, pois neste segundo parâmetro
//é definido o modo como o arquivo será aberto, existem diversas opções disponíveis. A opção “a+” 
//abre o arquivo para leitura e escrita, coloca o ponteiro no final do arquivo, e caso o arquivo 
//ainda não exista o cria.
$file = fopen('arquivo.log', 'a+');

//Escreve no arquivo com a data atual
$dataAtual = 'test log' . date('Y-m-d H:i:s');
fwrite($file, $dataAtual);

//FEcha o arquivo aberto
fclose($file);

function registerLog($nameFileLog, $log)
{
    $text = $log . date('Y-m-d H:i:s');
 
    $file = fopen($nameFileLog, 'a+');
    fwrite($file, $text);
    fclose($file);
}
// Para registrar o log, basta fazer assim:
registerLog('especializati.log', 'test log');

//A função fgets() lê uma certa quantidade de caracteres de um arquivo
//Normalmente usada assim
$file = fopen('especializati.log', 'a+');
echo fgets($file, 4096);
fclose($file);

//como fazer para ler todas as linhas, podemos combinar a função feof() que percorre todas as linhas do arquivo, até chegar no final.
//Se fizer isso, vai percorrer todas as linhas do arquivo:

$file = fopen('especializati.log', 'a+');
while (!feof($file)) {
    echo fgets($file) . '<br>';
}
fclose($file);

$str = 'one,two,three,four';

// zero limit
print_r(explode(',',$str,0));

 
// positive limit
print_r(explode(',',$str,2));

    // Abre o arquivo
$file = fopen('especializati.log', 'a+');
 
// Percorre todas as linhas do arquivo
while (!feof($file)) {
    // Pega o resultado da linha atual
    $result = fgets($file, 4096);
 
    // Separa as informações do usuário pelo ";"
    $details = explode(';', $result);
 
    // Cria variáveis com as informações
    $name   = $details[0];
    $email  = $details[1];
    $work   = $details[2];
 
    // Imprime as informações do usuário
    echo "O {$name} trabalha com {$work} e o contato é {$email} <br>";
}
 
// Fecha o arquivo aberto
fclose($file);
