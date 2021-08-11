<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Sistema Escolar Digital</h2>

    <pre>
        <?php
            require_once 'Aluno.php';
            require_once 'Professor.php';
            require_once 'Funcionario.php';

            //programa principal
            $p1 = new Aluno("Maria", 25, "F");
            $p2 = new Professor("Cláudio", 35, "M");
            $p3 = new Funcionario("Fabiana", 48, "F");

            $p1->setIdade(15);
            $p1->setCurso("Informatica");
            $p2->setSalario(3500);
            $p3->setSetor("Estoque");
            $p1->cancelarMatricula();

            print_r($p1);
            print_r($p2);
            print_r($p3);

        ?>
    </pre>
</body>
</html>