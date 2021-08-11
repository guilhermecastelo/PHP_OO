<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos.css">
    <title>Document</title>
</head>

<body>
   
    <h2>Sistema Escolar Digital</h2>

    <?php
    require_once 'Aluno.php';
    require_once 'Professor.php';
    require_once 'Funcionario.php';
    require_once 'Conexao.php';

    //programa principal
    $p1 = new Aluno;
    $p2 = new Professor;
    $p3 = new Funcionario;
    ?>

    <div class="container">
        <?php
            $p1->listarAlunos();
            $p2->listarProfessores();
            $p3->listarFuncionarios();
        ?>
    </div>

</body>
</html>