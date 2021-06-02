<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Tabuada em PHP</title>
    <link rel="stylesheet" href="../_css/estilo.css"/>
    <style>
        h1{
            color: #3c5ab4;
            text-shadow: 1px 1px 1px black;
            text-align: center;
        }
        .botao{
            margin: 10px;
        }
        .op{
            margin: 15px auto 10px auto;
        }
    </style>
</head>
<body>
<div>
    <h1>Tabuada de:</h1>
    <form method="get" action="01-tabuada.php">
        Número: <select name="num">
            <?php
            for ($c=1; $c<=10; $c++){
                echo "<option>$c</option>";
            }
            ?>
        </select>
        <input type="submit" class="botao" value="Tabuada">
    </form>
</div>
</body>
</html>
