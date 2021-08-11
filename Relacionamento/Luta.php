<?php
require_once 'Lutador.php';

class Luta
{
    //ATRIBUTOS
    private $desafiado; //tipo abstrato de dados
    private $desafiante; //tipo abstrato de dados
    private $rounds;
    private $aprovada;

    //MÉTODOS PÚBLICOS
    public function MarcarLuta($l1, $l2)
    {
        //  $l1->getCategoria() : Chama a categoria do objeto L1
        if ($l1->getCategoria() == $l2->getCategoria() && ($l1 != $l2)) {
            $this->aprovada = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        } else {
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }

    public function lutar()
    {
        if ($this->aprovada == true) {
            $this->getDesafiado()->apresentar();
            $this->desafiante->apresentar();

            $vencedor = rand(0, 2);
            switch ($vencedor) {
                case 0: //Empate
                    echo "<p>Empate!</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1: //Desafiado vence
                    echo "<p>" . $this->desafiado->getNome() . " venceu!</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;

                case 2: //Desafiante vence
                    echo "<p>" . $this->desafiante->getNome() . " venceu!</p>";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;
            }
        } else {
            echo "<p>A luta não pode acontecer!</p>";
        }
    }

    //MÉTODOS ESPECIAIS
    function getDesafiado()
    {
        return $this->desafiado;
    }
    function setDesafiado($desafiado)
    {
        $this->desafiado = $desafiado;
    }

    function getDesafiante()
    {
        return $this->desafiante;
    }
    function setDesafiante($desafiante)
    {
        $this->desafiante = $desafiante;
    }

    function getRounds()
    {
        return $this->rounds;
    }
    function setRounds($rounds)
    {
        $this->rounds = $rounds;
    }

    function getAprovada()
    {
        return $this->aprovada;
    }
    function setAprovada($aprovada)
    {
        $this->aprovada = $aprovada;
    }
}
