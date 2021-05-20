<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Aula 06 Exercico 04 PHP</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <style>
        h1{
            color: #3c5ab4;
            text-shadow: 1px 1px 1px black;
            text-align: center;
        }
    </style>
</head>
<body>
<div>
    <h1>Variável de Variável</h1>
    <?php
        $x = "abc";
        $$x = "def";
        echo "O conteúdo da variável X é $x";
        echo "<br/>A variável ABC criada recebeu o valor $abc";

    ?>
</div>
</body>
</html>
