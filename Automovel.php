<?php 

class Automovel 
{
    public function Acelerar($velocidade)
    {
        echo "O veiculo acelerou ate" . $velocidade . " km/h";
    }

    public function frenar($velocidade)
    {
        echo "O veiculo frenou ate" . $velocidade . " km/h";
    }

    public function trocarMarcha($marcha)
    {
        echo "O veiculo engatou a marcha" . $marcha . " km/h";
    }
    
}