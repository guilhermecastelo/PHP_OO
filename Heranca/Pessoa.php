<?php
    class Pessoa{

        //atributos
        private $nome;
        private $idade;
        private $sexo;

        //método construtor
        public function __construct($nome, $idade, $sexo)
        {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;
        }

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