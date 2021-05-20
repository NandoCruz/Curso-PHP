<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Operadores de Incremento em PHP</title>
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
    <h1>Operadores de Incremento</h1>
    <?php
    /* Esse exercício pretende demonstrar o uso de
       operadores de incremento e decremento */
        $atual = $_GET["aa"]; // Essa linha pega o ano atual na URL
        echo "O ano atual é $atual";
        echo "<br/>O ano anterior é ". --$atual; # Decremento
        echo "<br/>O ano posterior é ". ++$atual; # Incremento


    ?>
</div>
</body>
</html>
