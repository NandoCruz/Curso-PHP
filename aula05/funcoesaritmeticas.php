<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Funcoes aritmeticas em PHP</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <style>
        h1{
            font: bold 30pt Arial;
            color: #0444f5;
            text-shadow: 1px 1px 1px black;
        }
        h2{
            font: 20pt Arial;
            color: red;
            text-shadow: 1px 1px 1px black;
        }
    </style>
</head>
<body>
<div>
    <h1>Funções Aritméticas</h1>
    <?php
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];
        echo "<h2>Valores recebidos: $v1 e $v2</h2>";
        echo "O valor absoluto de $v2 é ". abs($v2);
        echo "<br/>O valor de $v1 <sup>$v2</sup> é ". pow($v1, $v2);
        echo "<br/>A raiz de $v1 é ". sqrt($v1);
        echo "<br/>O valor de $v2 arredondamento é ". round($v2);
        echo "<br/>A parte inteira de $v2 e ". intval($v2);
        echo "<br/>O valor de $v1 em moeda é R$ ". number_format($v1, 2, ",",".");
    ?>
</div>
</body>
</html>
