<?php
    class Pessoa{
        //ATRIBUTOS
        private $nome;
        private $idade;
        private $sexo;

        //MÉTODO CONSTRUTOR
        function __construct($nome, $idade, $sexo){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;
        }

        //MÉTODOS ESPECIAIS
        function getNome(){
            return $this->nome;
        }
        function setNome($nome){
            $this->nome = $nome;
        }

        function getIdade(){
            return $this->idade;
        }
        function setIdade($idade){
            $this->idade = $idade;
        }

        function getSexo(){
            return $this->sexo;
        }
        function setSexo($sexo){
            $this->sexo = $sexo;
        }

        //MÉTODOS PERSONALIZADOS
        public function fazerAniversario(){
            $this->setIdade($this->getIdade() + 1);
        }
    }
?>