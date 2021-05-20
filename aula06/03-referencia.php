<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Referencia em PHP</title>
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
    <h1>Variáveis Referenciadas</h1>
    <?php
        $a = 3;
        $b = &$a; // Variáveis Referenciadas
        $b += 5;
        echo "O primeiro valor é $a";
        echo "<br/>O segundo valor é $b";
    ?>
</div>
</body>
</html>
