<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ee</title>
</head>
<body>
    <?php
    
    //Se for usuário da Loja e a compra for superior a 100 reais

    $usuário_possui_cartao_loja = true;
    $valor_da_compra = 250;

    $valor_frete = 50;
    $recebeu_desconto_frete = true;
    if($usuário_possui_cartao_loja && $valor_da_compra >= 400){
        $valor_frete = 0;
    } elseif($usuário_possui_cartao_loja && $valor_da_compra >= 300) {
        $valor_frete = 10;
    } elseif($usuário_possui_cartao_loja && $valor_da_compra >= 100) {
        $valor_frete = 25;    
    } else {
        $recebeu_desconto_frete = false;
    }
    ?>

    <h1>Detalhes do pedido</h1>
    <p>Possui cartão da loja?
        <?php
        if($usuário_possui_cartao_loja) {
            echo "Sim";
            } else {
            echo "Não";
        }
        ?>
    </p>
    <p>Valor da compra: <?= $valor_da_compra ?></p>


<p>Recebeu desconto do frete?
        <?php
             if($recebeu_desconto_frete) {
            echo "Sim";
            } else {
            echo "Não";
            }
        ?>
        <p>Valor do frete: <?= $valor_frete ?></p>
</body>
</html>