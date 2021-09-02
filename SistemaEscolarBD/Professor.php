<?php
    require_once 'Pessoa.php';

    class Professor extends Pessoa{

        //atributos
        private $especialidade;
        private $salario;

        //métodos personalizados
        public function receberAumento($aumento){
            $this->salario += $aumento;
        }

        public function listarProfessores(){
            $con = new Conexao;
            $conexao = $con->conectar();

            $sql = "SELECT nome, idade, sexo, especialidade, salario FROM professores";
            $dados = mysqli_query($conexao, $sql);

            while($registro = mysqli_fetch_assoc($dados)){
                ?>
                    <div class="cartao-p">
                        <h3><u>Professor(a)</u></h3>
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
                            Especialidade: <?php echo $registro['especialidade']; ?>
                        </p>

                        <p>
                            Salário: <?php echo $registro['salario']; ?>
                        </p>
                    </div>
                <?php
            }
        }

        //métodos especiais
        public function getEspecialidade(){
            return $this->especialidade;
        }
        public function setEspecialidade($especialidade){
            $this->especialidade = $especialidade;
        }

        public function getSalario(){
            return $this->salario;
        }
        public function setSalario($salario){
            $this->salario = $salario;
        }
    }
?>