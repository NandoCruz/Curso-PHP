<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Primeiro Exemplo PHP</title>
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
    <h1>Operações Aritméticas</h1>
    <?php
    $preco = $_GET["p"];

    echo "O preço do produto é R$ ". number_format($preco, 2, ",", ".");;
    $preco += ($preco*10/100);
    echo "<br/>E o novo preço com 10% de aumento será R$ ". number_format($preco, 2, ",", ".");
    ?>
</div>
</body>
</html>
