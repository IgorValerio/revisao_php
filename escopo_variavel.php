<?php 

$nome = "Igor";

function Teste() {

    global $nome;
    echo $nome;
}

function Teste2 () {

    $nome = "Igor";
    echo $nome."Agora no teste 2.";

}

Teste();
Teste2();