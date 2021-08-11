<?php
    require_once 'Pessoa.php';
    require_once 'Conexao.php';

    class Funcionario extends Pessoa{

        //atributos
        private $setor;
        private $trabalhando;

        //métodos personalizados
        public function mudarTrabalho(){
            $this->trabalhando = ! $this->trabalhando;
        }

        public function listarFuncionarios(){
            $con = new Conexao;
            $conexao = $con->conectar();

            $sql = "SELECT nome, idade, sexo, setor FROM funcionarios";
            $dados = mysqli_query($conexao, $sql);

            while($registro = mysqli_fetch_assoc($dados)){
                ?>
                    <div class="cartao-f">
                        <h3><u>Funcionário(a)</u></h3>
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
                            Setor: <?php echo $registro['setor']; ?>
                        </p>
                    </div>
                <?php
            }
        }

        //métodos especiais
        public function getSetor(){
            return $this->setor;
        }
        public function setSetor($setor){
            $this->setor = $setor;
        }

        public function getTrabalhando(){
            return $this->trabalhando;
        }
        public function setTrabalhando($trabalhando){
            $this->trabalhando = $trabalhando;
        }
    }

?>