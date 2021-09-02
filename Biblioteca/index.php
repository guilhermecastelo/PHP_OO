<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca.System</title>
</head>

<body>
    <pre>
        <?php
            require_once 'Livro.php';

            //LEITORES
            $p[0] = new Pessoa("Pedro", 22, "M");
            $p[1] = new Pessoa("Maria", 31, "F");

            //LIVROS
            $l[0] = new Livro("PHP Básico", "Gustavo Guanabara", 300, $p[0]);
            $l[1] = new Livro("PHP POO", "Gustavo Guanabara", 500, $p[0]);
            $l[2] = new Livro("PHP com MySQL", "Gustavo Guanabara e Gafanhotos", 850, $p[1]);

            $l[0]->abrir();
            $l[0]->folhear(150);
            $l[2]->folhear(150);
            $l[1]->folhear(1);
            $l[0]->detalhes();
            $l[1]->detalhes();
            $l[2]->detalhes();
        ?>
    </pre>
</body>

</html>