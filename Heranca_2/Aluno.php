<?php
    require_once 'Pessoa.php';

    //Aluno herda de Pessoa e implementa mais coisas (herança para diferença)
    /*final*/class Aluno extends Pessoa{
        private $matricula;
        private $curso;

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

        public /*final*/ function pagarMensalidade(){
            echo "<p>Pagando a mensalidade do aluno $this->nome</p>";
        }
    }
?>