<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Operadores Lógicos</title>
</head>
<body>
    <h1>Trabalhando com operadores  lógicos</h1>
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
    
    <?php if($media >= 7 && $faltas <= 10): ?>
      <p>Aprovado</p>
      <?php else: ?>
        <p>Reprovado</p>
        <?php endif; ?>

        <hr>




</body>
</html>