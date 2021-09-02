<?php
    require_once 'Pessoa.php';

    class Professor extends Pessoa{

        //atributos
        private $especialidade;
        private $salario;

        //métodos personalizados
        public function receberAumento($aumento){
            $this->salario += $aumento;
        }

        //métodos especiais
        public function getEspecialidade(){
            return $this->especialidade;
        }
        public function setEspecialidade($especialidade){
            $this->especialidade = $especialidade;
        }

        public function getSalario(){
            return $this->salario;
        }
        public function setSalario($salario){
            $this->salario = $salario;
        }
    }
?>