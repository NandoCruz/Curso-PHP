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
        $ano = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
        echo "Você nasceu em $ano";

    ?>
</div>
</body>
</html>
