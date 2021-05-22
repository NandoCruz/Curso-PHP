<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Tipo de Voto PHP</title>
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
    <h1>Tipo de Voto</h1>
    <?php
        $ano = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
        $idade = date("Y") - $ano;
        echo "Você nasceu em $ano e tem $idade anos. <br/>";
        if ($idade < 16){
            $tipoVoto = "você não vota";
        } else {
            if (($idade >= 16 && $idade < 18) || ($idade>65)){
                $tipoVoto = "seu voto é opcional";
            } else {
                $tipoVoto = "seu voto é Obrigatório";
            }
        }
        echo "Com essa idade $tipoVoto";

    ?>
    <br/><a href="02-vota.html">Voltar</a>
</div>
</body>
</html>
