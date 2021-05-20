<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Primeiro Exemplo PHP</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <style>
        h1{
            color: #80a2ff;
            text-shadow: 1px 1px 1px black;
        }
    </style>
</head>
<body>
<div>
    <h1>Operações Aritméticas</h1>
    <?php
    $n1 = 2;
    $n2 = 3;
    $s= $n1 + $n2;
    echo "A soma de $n1 e $n2 vale $s";
    ?>
</div>
</body>
</html>