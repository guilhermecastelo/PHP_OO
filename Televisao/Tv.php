<?php
//Criação da classe
class Tv
{

    //Criação dos atributos desta classe
    var $botoes;
    var $tela;
    var $cabo;
    var $ligada;

    //Criação dos métodos desta classe
    function ligar()
    {
        $this->ligada = true;
    }

    function desligar()
    {
        $this->ligada = false;
    }

    function mudarCanal()
    {
        //Alterando o valor de um atribuito através do método
        if ($this->ligada == true) {
            echo "A TV ESTÁ LIGADA";
        } else {
            echo "A TV ESTÁ DESLIGADA";
        }
    }
}
