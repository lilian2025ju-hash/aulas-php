<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Operadores Lógicos</title>
</head>

<body>
    <h1>Trabalhando com operadores lógicos</h1>
    <hr>

    <h2>&& (E/AND)</h2>
    <p>Retorna <b>verdadeiro/true</b> se <b>todas as condiçoes forem verdadeiras.</b></p>

    <?php
    $nota1 = 10;
    $nota2 = 7;
    $media = ($nota1 + $nota2) / 2;
    $faltas = 1;
    ?>

    <p><b>Média;</b><?= $media ?></p>
    <p><b>Faltas:</b><?= $faltas ?></p>

    <!-- O aluno só estara aprovado se tiver média de pelo menos 7 e falatas de no maximo 10 -->

    <?php if ($media >= 7 && $faltas <= 10): ?>
        <p>Aprovado</p>
    <?php else: ?>
        <p>Reprovado</p>
    <?php endif; ?>

    <hr>

    <!-- duplo pipe -->
    <h2>|| (ou/or)</h2>
    <p>Retorna <b>verdadeiro/true</b> se pelo menos <b>uma</b> das condições for verdadeiras.</p>

    <?php
    /*dar desconto a um cliente desde que ele(A) seja VIP ou que tenha cupom de <desconto */
    $valor = 1000;
    $clienteVip = true; //valor/tipo lógico (ou booleano)
    $temCupom = false; //valor/tipo lógico (ou booleano)
    $percentualDesconto = 0.10; //10%

    if ($clienteVip || $temCupom):
    ?>

        <p>Desconto aplicado com sucesso!</p>
        <p>Valor: R$<?= $valor - $valor * $percentualDesconto ?></p>
    <?php
    else:
    ?>
        <p>Sem desconto</p>
        <p>Valor: R$<?= $valor ?></p>

    <?php
    endif;
    ?>


    <hr>
    <h2>! (não/negação/not)</h2>
    <p>Inverte a lógica, ou seja,<b>verdadeiro/true</b> vira</p>
    <b>falso/false</b>

    <?php 
    /* Se o usuário NAO estiver logado, mostre o link de login.
    caso contrario , exibir uma saudação. */
    $usuarioLogado = false;

    if($usuarioLogado): // se usuario Não está logado(se usuarioLogado é False)
    ?>

    <p><a href="">Login (entre com seus dados)</a></p>
<?php 
else:
 ?>
 <p>Bem-vindo(a) ao sistema</p>
 <?php
endif;
 ?>



</body>

</html>