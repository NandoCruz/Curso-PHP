<!DOCTYPE html>
<html>
<head>
    <?php
        $txt = isset($_GET["t"])? $_GET["t"] : "Texto Genárico";
        $tam = isset($_GET["tam"])? $_GET["tam"] : "12pt";
        $cor = isset($_GET["cor"])? $_GET["cor"] : "#0000080";
    ?>
    <meta charset="UTF-8"/>
    <title>Primeiro Exemplo PHP</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <style>
        h1{
            color: #3c5ab4;
            text-shadow: 1px 1px 1px black;
            text-align: center;
        }
        span.texto{
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
<div>
    <h1>Mostrando o texte e cor no texto</h1>
    <?php

        echo "<span class='texto'>$txt</span>";
    ?>
</div>
</body>
</html>
