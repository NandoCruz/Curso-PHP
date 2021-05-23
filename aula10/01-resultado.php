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
        $n = isset($_GET["num"]) ? $_GET["num"] : 0;
        $op = isset($_GET["oper"]) ? $_GET["oper"] : 1;
        switch ($op) {
            case 1:
                $r = $n * 2;
                break;
            case 2:
                $r = pow($n,3);
                break;
            case 3:
                $r = sqrt($n);
        }
        echo "Resultado da operação foi <span class='foco'>$r</span><br>";
    ?>
    <br><a href="01-condicionalSwitch.html" class="botao" >Voltar</a>
</div>
</body>
</html>
