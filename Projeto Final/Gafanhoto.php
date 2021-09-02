<?php
    require_once 'Pessoa.php';

    class Gafanhoto extends Pessoa{
        private $login;
        private $totalAssistido;

        public function __construct($nome, $idade, $sexo, $login){
            parent::__construct($nome, $idade, $sexo); //faz com que o construtor da classe mãe (Pessoa) seja executado antes
            $this->login = $login;
            $this->totalAssistido = 0;
        }
        
        public function assistirMaisUm(){
            $this->totalAssistido++;
        }

        public function getLogin()
        {
            return $this->login;
        }
        public function setLogin($login)
        {
            $this->login = $login;
        }

        public function getTotalAssistido()
        {
            return $this->totalAssistido;
        }
        public function setTotalAssistido($totalAssistido)
        {
            $this->totalAssistido = $totalAssistido;
        }
    }
?>