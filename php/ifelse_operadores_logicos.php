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

        /*Operadores Condicionais:
        ==
        ===
        != ou <>
        !==
        <
        >
        <=
        >=
        */
        /*Operadores Lógicos
        AND ou &&
        OR ou ||
        XOR
        !
        */


        //AND ou &&

        if(5 == 5 AND 10 > 3) {
            echo "Verdadeiro";
        } else {
            echo "Falso";
        }
        echo "<br/>";

        //OR ou ||

        if(5 == 3 OR 10 > 3){
            echo "Verdadeiro";

        } else {
            echo "Falso";
        }
        echo "<br/>";

        //XOR

        if(7 == 7 XOR 21 > 23){
            echo "Verdadeiro";
        } else {
            echo "Falso";
        }
        echo "<br/>";

        //!

        if(! ("a" == "b") ){
            echo "Verdadeiro";
        } else {
            echo "Falso";
        }
        echo "<br/>";
        
        //!
        if(!22 == 22 AND 3 == 3 OR 5 != 5){
            echo "Verdadeiro";
        } else {
            echo "Falso";
        }
        echo "<br/>";

        //() Sempre bom por parênteses para os processos de mais importância
        if((22 == 22 AND 3 == 3) OR 5 != 5){
            echo "Verdadeiro";
        } else {
            echo "Falso";
        }











    ?>
</body>
</html>