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
    <h1>Região do seu Estado</h1>
    <?php
        $estado = isset($_GET["tEst"]) ? $_GET["tEst"] : 0;

        switch ($estado) {
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
            case 7:
                echo "Região Norte :)<br>";
                break;
            case 8:
            case 9:
            case 10:
            case 11:
            case 12:
            case 13:
            case 14:
            case 15:
            case 16:
                echo "Região Nordeste<br>";
                break;
            case 17:
            case 18:
            case 19:
            case 20:
                echo "Região Centro-Oeste<br>";
                break;
            case 21:
            case 22:
            case 23:
            case 24:
                echo "Região Suldeste<br>";
                break;
            case 25:
            case 26:
            case 27:
                echo "Região Sul<br>";
                break;
            default:
                echo "Estado invalido.<br>";
        }
    ?>
    <br><a href="javascript:history.go(-1)" class="botao" >Voltar</a>
</div>
</body>
</html>
