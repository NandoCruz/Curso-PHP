<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Formulário em PHP</title>
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
    <h1>Raiz Quadrada</h1>
    <?php
        $valor = $_GET["v"];
        $rq = sqrt($valor);
        echo "A raiz de $valor é = ".number_format($rq, 2);
    ?>
    <a href="01-formulario.html">Voltar</a>
</div>
</body>
</html>
