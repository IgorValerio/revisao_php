<?php
$pessoas = array();

array_push($pessoas, array(
  'nome' => 'Igor',
  'idade' => 30
));

array_push($pessoas, array(
  'nome' => 'Jordino',
  'Idade' => 30
));

echo json_encode($pessoas);