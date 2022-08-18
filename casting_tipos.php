<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //gettype() = retorna o tipo da variável
    $valor = 10;
    //$valor2 = (float) $valor; //float, double
    $valor2 = (string) $valor;
    echo $valor . " " . gettype($valor);
    echo "<br />";
    echo $valor2 . " " .  gettype($valor2);
    echo "<br />";

    $valor3 = 15.35;
    $valor3 = (int) $valor3; //Pode ser usado o "integer" também

    echo $valor3 . " " . gettype($valor3);
    echo "<br />";

    $valor4 = "22.12";
    $valor4 = (integer) $valor4; //Se for float, o decimal continuará na variável
    echo $valor4. " " . gettype($valor4);
    echo "<br />";
    
    $valor5 = "21.21";
    $valor5 = (bool) $valor5; //Bool ou boolean, volta 1 pois 1 = verdadeiro
    echo $valor5 . " " . gettype($valor5);

    ?>
</body>
</html>