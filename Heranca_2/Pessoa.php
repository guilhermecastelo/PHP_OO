<?php
    abstract class Pessoa{

        // ATRIBUTOS
        protected $nome; //Pode ser acessado pela classe Pessoa e pelas suas classes filhas
        protected $idade;
        protected $sexo;

    
        // MÉTODOS PERSONALIZADOS
        public final function fazerAniversario(){
            $this->setIdade($this->getIdade() + 1);
        }

        //abstract public function funcaoTeste();

        // MÉTODOS ESPECIAIS
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