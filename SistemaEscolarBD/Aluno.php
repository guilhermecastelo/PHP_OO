<?php
    require_once 'Pessoa.php';
    require_once 'Conexao.php';

    class Aluno extends Pessoa{

        //atributos
        private $matricula;
        private $curso;

        //métodos personalizados
        public function cancelarMatricula(){
            echo "<p>Matrícula cancelada!</p>";
        }

        public function listarAlunos(){
            $con = new Conexao;
            $conexao = $con->conectar();

            $sql = "SELECT matricula, nome, idade, sexo, curso FROM alunos";
            $dados = mysqli_query($conexao, $sql);

            while($registro = mysqli_fetch_assoc($dados)){
                ?>
                    <div class="cartao-a">
                        <h3><u>Aluno(a)</u></h3>
                        <p>
                            Matrícula: <?php echo $registro['matricula']; ?>
                        </p>

                        <p>
                            Nome: <?php echo $registro['nome']; ?>
                        </p>

                        <p>
                            Idade: <?php echo $registro['idade']; ?>
                        </p>

                        <p>
                            Sexo: <?php echo $registro['sexo']; ?>
                        </p>

                        <p>
                            Curso: <?php echo $registro['curso']; ?>
                        </p>
                    </div>
                <?php
            }
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