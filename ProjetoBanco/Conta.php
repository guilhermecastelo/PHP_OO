<?php

class ContaBanco
{
    /* ATRIBUTOS */
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;



    function __construct()
    {
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p>Conta criada com sucesso!</p>";
    }

    /* MÉTODOS ESPECIAIS */

    function getNumConta()
    {
        return $this->numConta;
    }

    function setNumConta($nc)
    {
        $this->numConta = $nc;
    }



    function getTipo()
    {
        return $this->tipo;
    }

    function setTipo($tp)
    {
        $this->tipo = $tp;
    }



    function getDono()
    {
        return $this->dono;
    }

    function setDono($dn)
    {
        $this->dono = $dn;
    }



    function getSaldo()
    {
        return $this->saldo;
    }

    function setSaldo($sl)
    {
        $this->saldo = $sl;
    }



    function getStatus()
    {
        return $this->status;
    }

    function setStatus($st)
    {
        $this->status = $st;
    }

    /* MÉTODOS PERSONALIZADOS */

    public function abrirConta($tp)
    {
        $this->setTipo($tp);
        $this->setStatus(true);

        if ($tp == "CC") {
            $this->setSaldo(50);
        } elseif ($tp == "CP") {
            $this->setSaldo(150);
        }
    }

    public function fecharConta()
    {
        if ($this->getSaldo() > 0) {
            echo "<p>Sua conta não pode ser fechada, ela ainda possui saldo</p>";
        } elseif ($this->getSaldo() < 0) {
            echo "<p>Sua conta não pode ser fechada, ela está em débito.</p>";
        } else {
            $this->setStatus(false);
            echo "<p>Conta de " . $this->getDono() . " fechada</p>";
        }
    }

    public function depositar($vlr)
    {
        if ($this->getStatus() == true) {
            $this->setSaldo($this->getSaldo() + $vlr);
            echo "<p>Depósito de R$$vlr autorizado na conta de: " . $this->getDono() . "</p>";
        } else {
            echo "<p>Não é possível depositar, você não tem uma conta aberta.</p>";
        }
    }

    public function sacar($vlr)
    {
        if ($this->getStatus() == true) {
            if ($this->getSaldo() >= $vlr) {
                $this->setSaldo($this->getSaldo() - $vlr);
                echo "<p>Saque de R$$vlr autorizado na conta de: " . $this->getDono() . "</p>";
            } else {
                echo "<p>Não é possível sacar, a conta não possui saldo suficiente.</p>";
            }
        } else {
            echo "<p>Não é possível sacar, a conta não está aberta.</p>";
        }
    }

    public function pagarMensalidade()
    {
        if ($this->getTipo() == "CC") {
            $mns = 12;
        } else if($this->getTipo() == "CP") {
            $mns = 20;
        }
        if ($this->getStatus() == true) {
            if ($this->getSaldo() > $mns) {
                $this->setSaldo($this->getSaldo() - $mns);
                echo "<p>Mensalidade de R$$mns autorizado na conta de: " . $this->getDono() . "</p>";
            } else {
                echo "<p>Não é possível pagar mensalidade, sua conta não tem saldo suficiente.</p>";
            }
        } else {
            echo "<p>Não é possível pagar mensalidade, a conta está fechada</p>.";
        }
    }
}
?>