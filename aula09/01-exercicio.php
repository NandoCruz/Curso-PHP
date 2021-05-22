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
    <h1>Ano de Nascimento</h1>
    <?php
        $ano = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
        $idade = date("Y") - $ano;
        echo "Você nasceu em $ano e tem $idade anos. <br/>";
        if ($idade >= 18){
            $v = "Já pode votar";
            $d = "Já pode dirigir";
        } else {
            $v = "Não pode votar";
            $d = "Não pode dirigir";
        }
        echo "Com essa idade você $v e também $d";

    ?>
</div>
</body>
</html>
