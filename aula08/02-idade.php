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
    <h1>Idade e Sexo</h1>
    <?php
        $nome = isset($_GET["nome"])? $_GET["nome"] : "[não informado]";
        $ano = isset($_GET["ano"]) ? $_GET["ano"] : "[não informado]";
        $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[não informado]";
        $idade = date("Y") - $ano;
        echo "$nome é $sexo e tem $idade anos.";

    ?>
    <br>
    <a href="02-formularioidade.html">Voltar</a>
</div>
</body>
</html>
