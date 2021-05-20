<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Operador Unario PHP</title>
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
    <h1>Operador Unário</h1>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo = $_GET["op"];
        echo "Os valores passados foram $n1 e $n2";
        $r = ($tipo == "s")? $n1 + $n2 : $n1 * $n2;
        echo "<br/>O valor é $r ";

    ?>
</div>
</body>
</html>
