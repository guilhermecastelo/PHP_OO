<?php
    require_once 'Pessoa.php';

    class Funcionario extends Pessoa{

        //atributos
        private $setor;
        private $trabalhando;

        //métodos personalizados
        public function mudarTrabalho(){
            $this->trabalhando = ! $this->trabalhando;
        }

        //métodos especiais
        public function getSetor(){
            return $this->setor;
        }
        public function setSetor($setor){
            $this->setor = $setor;
        }

        public function getTrabalhando(){
            return $this->trabalhando;
        }
        public function setTrabalhando($trabalhando){
            $this->trabalhando = $trabalhando;
        }
    }

?>