<?php
    require_once 'Aluno.php';

    class Bolsista extends Aluno{

        private $bolsa;

        public function renovarBolsa(){
            echo "<p>Bolsa estudantil renovada</p>";
        }

        public function pagarMensalidade(){
            echo "<p>$this->nome paga com desconto por ser bolsista</p>";
        }

        public function getBolsa(){
            return $this->bolsa;
        }
        public function setBolsa($bolsa){
            $this->bolsa = $bolsa;
        }
    }
?>