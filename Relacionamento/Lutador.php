<?php
class Lutador
{
    //ATRIBUTOS
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias, $derrotas, $empates;

    //MÉTODOS ESPECIAIS
    public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em)
    {
        $this->nome = $no;
        $this->setNacionalidade($na);
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($no)
    {
        $this->nome = $no;
    }

    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }
    public function setNacionalidade($na)
    {
        $this->nacionalidade = $na;
    }

    public function getIdade()
    {
        return $this->idade;
    }
    public function setIdade($id)
    {
        $this->idade = $id;
    }

    public function getAltura()
    {
        return $this->altura;
    }
    public function setAltura($al)
    {
        $this->altura = $al;
    }

    public function getPeso()
    {
        return $this->peso;
    }
    public function setPeso($pe)
    {
        $this->peso = $pe;
        $this->setCategoria();
    }

    public function getCategoria()
    {
        return $this->categoria;
    }
    private function setCategoria()
    {
        if ($this->peso < 52.2) {
            $this->categoria = "Inválido";
        } elseif ($this->peso <= 70.3) {
            $this->categoria = "Leve";
        } elseif ($this->peso <= 83.9) {
            $this->categoria = "Médio";
        } elseif ($this->peso <= 120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválido";
        }
    }

    public function getVitorias()
    {
        return $this->vitorias;
    }
    public function setVitorias($vi)
    {
        $this->vitorias = $vi;
    }

    public function getDerrotas()
    {
        return $this->derrotas;
    }
    public function setDerrotas($de)
    {
        $this->derrotas = $de;
    }

    public function getEmpates()
    {
        return $this->empates;
    }
    public function setEmpates($em)
    {
        $this->empates = $em;
    }

    //MÉTODOS PERSONALIZADOS
    public function apresentar()
    {
        echo "<p>----------U.E.C orgulhosamente apresenta----------</p>";
        echo "<p>O(a) lutador(a) " . $this->getNome() . " vindo diretamente de " .
            $this->getNacionalidade() . " com " . $this->getIdade() . " anos com " .
            $this->getAltura() . " metros de altura e " . $this->getPeso() . " KG " .
            "Reconhecido por ter " . $this->getVitorias() . " vitóras, " .
            $this->getDerrotas() . " derrotas e exatamente " . $this->getEmpates() .
            " empates! Seja bem-vindo(a) ao ringue";
        echo "<p>--------------------------------------------------</p>";
    }

    public function status()
    {
        echo "<p>------------U.E.C conta com a presença------------</p>";
        echo $this->getNome() . " é um peso " . $this->getCategoria() .
            " compondo " . $this->getVitorias() . " vitórias, " . $this->getDerrotas() .
            " derrotas e " . $this->getEmpates() . " empates";
        echo "<p>--------------------------------------------------</p>";
    }

    public function ganharLuta()
    {
        $this->setVitorias($this->getVitorias() + 1);
    }

    public function perderLuta()
    {
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    public function empatarLuta()
    {
        $this->setEmpates($this->getEmpates() + 1);
    }
}
