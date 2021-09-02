<?php
require_once 'Video.php';
require_once 'Gafanhoto.php';

class Visualizazao
{
    private $espectador;
    private $filme;

    public function __construct($espectador, $filme)
    {
        $this->espectador = $espectador;
        $this->filme = $filme;
        //Pegando o obejto Filme passado via parâmetro, chamando o método setViews() deste objeto e atribuino a este método a quantidade de views atual (que é trazida por getViews()) mais 1.
        $this->filme->setViews($this->filme->getViews() + 1);
        $this->espectador->setTotalAssistido($this->espectador->getTotalAssistido() + 1);
    }

    public function avaliar()
    {
        $this->filme->setAvaliacao(5);
    }

    public function avaliarNota($nota)
    {
        $this->filme->setAvaliacao($nota);
    }

    public function avaliarPorcentagem($porcentagem)
    {
        if ($porcentagem <= 20) {
            $nova = 3;
        } elseif ($porcentagem <= 50) {
            $nova = 5;
        } elseif ($porcentagem <= 90) {
            $nova = 8;
        } else {
            $nova = 10;
        }

        $this->filme->setAvaliacao($nova);
    }

    public function getEspectador()
    {
        return $this->espectador;
    }
    public function setEspectador($espectador)
    {
        $this->espectador = $espectador;
    }

    public function getFilme()
    {
        return $this->filme;
    }
    public function setFilme($filme)
    {
        $this->filme = $filme;
    }
}
