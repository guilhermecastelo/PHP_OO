<?php
class Microondas    //CRIEI UMA CLASSE
{
    public $marca;  //DEFINI OS ATRIBUTOS DELA
    public $modelo;
    public $cor;

    public function __construct($mc, $md, $c)   //CRIEI O MÉTODO CONSTRUTOR
    {
        $this->marca = $mc;
        $this->modelo = $md;
        $this->cor = $c;
    }

    public function getMarca()  //CRIEI OS MÉTODOS GET'S
    {
        return $this->marca;    //OS GET'S ME RETORNARÃO OS VALORES DOS ATRIBUTOS DA CLASSE
    }
    public function setMarca($mc)   //CRIEI OS MÉTODOS SET'S
    {
        $this->marca = $mc;         //OS SET'S ALTERARÃO OS VALORES DOS ATRIBUTOS DA CLASSE ATRAVÉS DA PASSAGEM DOS VALORES VIA PARÂMETROS                                
    }

    public function getModelo()
    {
        return $this->modelo;
    }
    public function setModelo($md)
    {
        $this->modelo = $md;
    }

    public function getCor()
    {
        return $this->cor;
    }
    public function setCor($c)
    {
        $this->cor = $c;
    }
}
?>
