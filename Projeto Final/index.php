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
        require_once 'Video.php';
        require_once 'Gafanhoto.php';
        require_once 'Visualizacao.php';

        $v[0] = new Video("Aula 1 de PHP POO");
        $v[1] = new Video("Aula 10 de PHP para iniciantes");
        $v[2] = new Video("Aula 15 de HTML5");

        $g[0] = new Gafanhoto("João", 12, "M", "JJ");
        $g[1] = new Gafanhoto("Maria", 18, "MF", "Ma");

        $vis[0] = new Visualizazao($g[0], $v[2]); //João assiste HTML5
        $vis[1] = new Visualizazao($g[0], $v[1]); //João assiste PHP

        $vis[0]->avaliar();
        $vis[1]->avaliarPorcentagem(85);

        print_r($vis);

        ?>
    </pre>
</body>

</html>