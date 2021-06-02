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
        $n = isset($_GET["num"]) ? $_GET["num"] : 1;
        echo "<h1>Tabuada de $n</h1>";
            for ($c=1; $c <= 10; $c++){
                $r = $n * $c;
                echo "$n x $c = $r<br>";
            }
    ?>
    <br><a href="javascript:history.go(-1)" class="botao" >Voltar</a>
</div>
</body>
</html>
