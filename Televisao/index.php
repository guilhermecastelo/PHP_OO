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
        require_once 'Tv.php';

        $televisao1 = new Tv;
        
        //Atribuindo valores aos atributos criados no arquivo da classe Tv
        $televisao1->botoes = 5;
        $televisao1->tela = "FULL HD";
        $televisao1->cabo = "HDMI";

        $televisao1->desligar();

        $televisao1->MudarCanal();
    ?>

</body>

</html>