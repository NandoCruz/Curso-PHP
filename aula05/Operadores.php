<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Aula05</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <style>
        h1{
            color: #0172d7;
            text-shadow: 1px 1px 1px black;
        }
    </style>
</head>
<body>
<div>
    <h1>Operações Aritméticas</h1>
    <?php
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    echo "<h2>Valores recebidos: $n1 e $n2</h2>";
    $soma = $n1 + $n2;
    $sub = $n1 - $n2;
    $mult = $n1 * $n2;
    $div = $n1 / $n2;
    $res = $n1 % $n2;
    $med = ($n1 + $n2)/2;
    echo "A soma entre $n1 e $n2 vale $soma <br>";
    echo "A subtração entre $n1 e $n2 vale $sub <br>";
    echo "A multiplicação entre $n1 e $n2 vale $mult<br>";
    echo "A divisão entre $n1 e $n2 vale $div <br>";
    echo "O módulo (resto) da divisão entre $n1 e $n2 vale $res<br>";
    echo "A média entre $n1 e $n2 vale $med";
    ?>
</div>
</body>
</html>