<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e.e</title>
</head>
<body>
    <?php
    // Para concatenar, usamos o ponto "." para somar as duas frases
    $nome = "Geoge";
    $cor = "Verde";
    $idade = 40;
    $atividade_preferida = "andar de bicicleta";
    //Frase com a concatenação
    echo "Olá " . $nome . " vi que sua cor preferida é " . $cor . ", sua idade é de " . $idade . " anos e gosta de " . $atividade_preferida;

    echo "<br/>";

    // Outra forma de fazer, mais fácil, na minha opinião
    echo "Olá $nome vi que sua cor preferida é $cor, sua idade é de $idade anos e gosta de $atividade_preferida"


    ?>
</body>
</html>