<?php
    require_once 'Aluno.php';

    class Tecnico extends Aluno{
        private $registroProfissional;

        public function getRegistroProfissional(){
            return $this->registroProfissional;
        }
        public function setRegistroProfissional($regPro){
            $this->registroProfissional = $regPro;
        }

        public function praticar(){
            echo "<p>Estou praticando!</p>";
        }
    }
?>