<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Operador Unario PHP</title>
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
    <h1>Operador Unário</h1>
    <?php
        $a = 3;
        $b = "3";
        $r = ($a === $b)? "Sim" : "Não";
        echo "<br/>As variáveis A e B são iguais? <br/> $r ";

    ?>
</div>
</body>
</html>
