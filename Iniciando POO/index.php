<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2 - POO</title>
</head>

<body>
    <?php

        require_once 'Caneta.php';
        
        $c1 = new Caneta;
        $c1->cor = "Azul";
        $c1->ponta = 0.7;
        $c1->tampada = true;
        $c1->tampar();
        $c1->rabiscar();
        
       print_r($c1);

       $c2 = new Caneta;
       $c2->carga = 30;
       $c2->ponta = 0.5;
       $c2->destampar();
       $c2->rabiscar();

       echo "<br>";

       print_r($c2);

    ?>
</body>

</html>