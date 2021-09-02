<?php
    require_once 'Animal.php';

    class Reptil extends Animal{
        private $corEscama;

        public function getCorEscama(){
            return $this->corEscama;
        }
        public function setCorEscama($corEscama){
            $this->corEscama = $corEscama;
        }

        public function locomover()
        {
            echo "<p>Restejando</p>";
        }
        public function alimentar()
        {
            echo "<p>Comendo vegetais</p>";
        }
        public function emitirSom()
        {
            echo "<p>Som de réptil</p>";
        }
    }
?>