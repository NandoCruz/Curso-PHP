<!DOCTYPE html>
<html>
<head>
    <?php
        $n1 = isset($_GET["n1"]) ? $_GET["n1"] : 0;
        $n2 = isset($_GET["n2"]) ? $_GET["n2"] : 0;
        $n3 = isset($_GET["i"]) ? $_GET["i"] : 0;
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
    </style>
</head>
<body>
<div>
    <?php
    echo "<h1>Tabuada de $n1</h1>";
            $n2 = 1;
            while ($n2 <= 10){
                $n3 = $n1 * $n2;
                echo "$n1 x $n2 = $n3<br>";
                 $n2 ++;
            }
    ?>
    <br><a href="javascript:history.go(-1)" class="botao" >Voltar</a>
</div>
</body>
</html>
