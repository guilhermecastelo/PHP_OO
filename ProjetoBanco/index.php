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
        require_once 'Conta.php';

        $p1 = new ContaBanco;   //JUBILEU
        $p2 = new ContaBanco;   //CREUZA

        $p1->abrirConta("CC");
        $p1->setNumConta(1111);
        $p1->setDono("Jubileu");

        $p2->abrirConta("CP");
        $p2->setNumConta(2222);
        $p2->setDono("Creuza");

        $p1->depositar(300);
        $p2->depositar(500);

        $p2->sacar(1000);

        $p1->pagarMensalidade();
        $p2->pagarMensalidade();

        $p1->sacar(338);
        $p2->sacar(630);

        $p1->fecharConta();
        $p2->fecharConta();

        print_r($p1);
        echo "<br>";
        print_r($p2);
    ?>
</body>
</pre>

</html>