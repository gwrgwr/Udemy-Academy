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
    //Variáveis
    $atende_ao_requisito;
    $doa_sangue = true;
    $idade = 16;
    $peso = 75;

    //Condições
    if(($idade >=16 && $idade <=69) && $peso >=50){
        $atende_ao_requisito = true;
     } else {
        $atende_ao_requisito = false;
     }
    

     ?>
     <!--Imprimir a resposta-->

     <p>Atende aos requisitos para doar sangue?</p>
     <?php
     if($atende_ao_requisito){
         echo "Atende sim ao requisito";
     } else {
         echo "Não atende ao requisito";
     }
     

     /* Jeito certo de se fazer:
     <?php

     $idade = 19;
     $peso = 72;

     if(($idade >=16 && <=69) && >= 50){
         echo "Atende aos requisitos";
     } else {
         echo "Não atende aos requisitos";
     }
     */
     ?>






     






</body>
</html>