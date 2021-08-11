<?php
    require_once 'Pessoa.php';

    class Aluno extends Pessoa{

        //atributos
        private $matricula;
        private $curso;

        //métodos personalizados
        public function cancelarMatricula(){
            echo "<p>Matrícula cancelada!</p>";
        }

        //métodos especiais
        public function getMatricula(){
            return $this->matricula;
        }
        public function setMatricula($matricula){
            $this->matricula = $matricula;
        }

        public function getCurso(){
            return $this->curso;
        }
        public function setCurso($curso){
            $this->curso = $curso;
        }
    }
?>