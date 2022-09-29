<?php 
touch("arquivo.php");

if (file_exists('arquivo.php'))
    echo 'O Arquivo existe';
else
    echo "O arquivo não existe<br>";

//Se o arquivo estiver em um diretório, precisa especificar o caminho:
  //file_exists('path/filename.txt');
//Se tiver em um nível acima do diretório atual, precisa navegar até este diretório:    
  //file_exists('../filename.txt')

rename('arquivo.php', 'test.log');
touch("arquivo.php");
copy('test.log', 'test/arquivo.php');

if (file_exists('arquivo.php'))
    unlink('arquivo.php');

file_put_contents('test/arquivo.php', '<h1>Vida que segue </h1> <?php echo "Olá de novo PHP" ?>'); 
$psr2 = file_get_contents('test/arquivo.php');
echo "<br>" . $psr2;
?>