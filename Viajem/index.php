<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        include_once 'Viajem.php';

        $v = new Viajem;

        $v->destino = "New York";
        $v->qtPessoas = 15;
        $v->locomocao = "Navio";
        $v->inicio();

        print_r($v);
    ?>
</body>

</html>