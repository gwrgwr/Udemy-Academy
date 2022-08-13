<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>weasd</title>
</head>
<body>
    <?php
    
    
    //String
    $nome = "Maria Antônia";

    //int
    $idade = 29;

    //float
    $peso = 82.5;

    //boolean
    $fumante_sn = true; //true or false //true = 1, false = vazio

    //Podemos mudar as variáveis a qualquer momento, por isso se chamam variáveis. Ex:
    $idade = 30;

    ?>
    <h1>Ficha cadastral</h1>
    <br/>
    <p>Nome: <?= $nome ?></p>
    <p>Idade: <?= $idade ?></p>
    <p>Peso: <?= $peso ?></p>
    <p>Fumante: <?= $fumante_sn ?></p>
</body>
</html>