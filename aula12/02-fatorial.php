<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Primeiro Exemplo PHP</title>
    <link rel="stylesheet" href="../_css/estilo.css"/>
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
    <?php
        $n1 = isset($_GET["n1"]) ? $_GET["n1"] : 0;
        echo "<h1>Fatorial de $n1</h1>";
        $cont = $n1;
        $fat = 1;
        do {
            $fat = $fat * $cont;
            echo "$cont! x ";
            $cont --;
        } while($cont >= 1);
        echo "<br>O fatorial de $n1! = $fat";
    ?>
    <br><a href="javascript:history.go(-1)" class="botao" >Voltar</a>
</div>
</body>
</html>
