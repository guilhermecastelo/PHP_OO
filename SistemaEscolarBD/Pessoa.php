<?php
    class Pessoa{

        //atributos
        private $nome;
        private $idade;
        private $sexo;

        
        //métodos personalizados
        public function fazerAniversario(){
            $this->idade++;
            //$this->idade = $this->idade + 1;
            //$this->setIdade($this->idade++);
        }

        //métodos especiais
        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getIdade(){
            return $this->idade;
        }
        public function setIdade($idade){
            $this->idade = $idade;
        }

        public function getSexo(){
            return $this->sexo;
        }
        public function setSexo($sexo){
            $this->sexo = $sexo;
        }
    }
?>