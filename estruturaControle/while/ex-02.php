<?php 

$total = 150;
$desconto = 0.9;

do {

    $total *= $desconto;

}while($total > 100);

// echo $total;

$valorProduto = 14500.00;
$desconto2 = 5;

if ($valorProduto > 10000) {
    echo $valorProduto -= ($valorProduto * ($desconto2 / 100));
}