<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>
        <?php
            //require_once 'Aluno.php';
            //require_once 'Bolsista.php';
            require_once 'Tecnico.php';

            //$p1 = new Pessoa;
            /*$v1 = new Visitante;
            $v1->setNome("Roberval");
            $v1->setIdade(55);
            $v1->setSexo("M");
            print_r($v1);*/

            /*$a1 = new Aluno;
            $a1->setNome("Giovanna");
            $a1->setMatricula(151515);
            $a1->setIdade(17);
            $a1->setSexo("F");
            $a1->setCurso("Enfermagem");
            $a1->pagarMensalidade();   
            print_r($a1);

            $b1 = new Bolsista;
            $b1->setMatricula(141414);
            $b1->setNome("Joaquim");
            $b1->setBolsa(12.5);
            $b1->setCurso("Administração");
            $b1->setIdade(17);
            $b1->pagarMensalidade();
            print_r($b1);*/

            /*$p1 = new Professor;
            $p1->setNome("Luíz");
            $p1->receberAumento(50);
            $p1->setEspecialidade("Matemática");
            print_r($p1);*/

            $t1 = new Tecnico;
            $t1->setNome("Gustavo");
            $t1->praticar();

            print_r($t1);

        ?>
    </pre>
</body>

</html>