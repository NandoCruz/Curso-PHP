<!DOCTYPE html>
<html>
<head>
    <?php
        $n1 = isset($_GET["n1"]) ? $_GET["n1"] : 0;
        $n2 = isset($_GET["n2"]) ? $_GET["n2"] : 1;
        $n3 = isset($_GET["n3"]) ? $_GET["n3"] : 0;
    ?>
    <meta charset="UTF-8"/>
    <title>Contar até... PHP</title>
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
            if ($n1 < $n2){
                echo "<h1>Contar de $n1 até $n2</h1>";
                echo "$n1 é menor que $n2 e vou pular $n3<br>";
                while ($n1 <= $n2){
                    echo "$n1 ";
                    $n1 += $n3;
                }

            } else {
                echo "<h1>Contar de $n1 até $n2</h1>";
                echo "$n1 é maior que $n2 e vou pular $n3<br>";
                while ($n1 >= $n2){
                    echo "$n1 ";
                    $n1 -= $n3;
                }
            }
    ?>
    <br><a href="javascript:history.go(-1)" class="botao" >Voltar</a>
</div>
</body>
</html>
