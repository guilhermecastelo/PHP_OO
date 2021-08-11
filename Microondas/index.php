<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Microondas</title>
</head>

<body>
    <?php
        require_once 'Microondas.php';

        $mic1 = new Microondas("ELETROMUX", "TK5500", "Branco");    //INSTANCIEI A CLASSE, CRIANDO O 1º OBJETO E PASSANDO OS PARÂMETROS PARA O MÉTODO CONSTRUTOR DA CLASSE

        echo "O seu microondas é da marca: {$mic1->getMarca()} modelo: {$mic1->getModelo()} e de cor: {$mic1->getCor()}";   //MOSTREI OS VALORES DEFINIDOS NA CLASSE
    
        echo "<br>";
    
        $mic2 = new Microondas("FILCO", "RG7080", "Inox");  //INSTANCIEI A MESMA CLASSE, CRIANDO O 2º OBJETO E PASSANDO OS PARÂMETROS PARA O MÉTODO CONSTRUTOR DA CLASSE

        $mic2->cor = "AZUL";    //ANTES DE MOSTRAR, ALTEREI UM DOS VALORES DO 2º OBJETO

        echo "O seu outro microondas é da marca: {$mic2->getMarca()} modelo: {$mic2->getModelo()} e de cor: {$mic2->getCor()}";   //MOSTREI OS VALORES DEFINIDOS NA CLASSE
        //OBRIGADO POR LER ATÉ AQUI :) ESPERO QUE TENHA ENTENDIDO.
    ?>

</body>

</html>