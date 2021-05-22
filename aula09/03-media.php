<!DOCTYPE html>
<html>
<head>
    <?php
        $n1 = isset($_GET["nota01"]) ? $_GET["nota01"] : 00;
        $n2 = isset($_GET["nota02"]) ? $_GET["nota02"] : 00;
        $media = ($n1 + $n2) / 2;
        $n3 = 10 - $media;
    ?>
    <meta charset="UTF-8"/>
    <title>Tipo de Voto PHP</title>
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
    <h1>Média do Aluno</h1>
    <?php
        echo "A média entre $n1 e $n2 é igual a $media. <br/>";
        if ($media < 5){
            $situacao = "REPROVADO";
        } else {
            if ($media >= 5 && $media < 7){
                $situacao = "RECUPERAÇÃO";
                echo "Vai fazer a final precisando de $n3 pontos. <br/>";
            } else {
                $situacao = "APROVADO";
            }
        }
        echo "Situação do aluno: $situacao";
    ?>
    <br/>
    <a href="03-media.html">Voltar</a>
</div>
</body>
</html>
