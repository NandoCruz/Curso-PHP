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
    <h1>Resultado</h1>
    <?php
        $d = isset($_GET["ds"]) ? $_GET["ds"] : 0;

        switch ($d) {
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "Levanta e vai estudar! :)<br>";
                break;
            case 7:
            case 8:
                echo "Descanse, pequeno gafanhoto! ;)<br>";
                break;
            default:
                echo "Dia da semana invalido.<br>";
        }
    ?>
    <br><a href="javascript:history.go(-1)" class="botao" >Voltar</a>
</div>
</body>
</html>
