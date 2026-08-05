<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops no PHP</title>
</head>
<body>
    <h1>Trabalhando com comandos de repetição</h1>
    <hr>

    <h2>While (enquanto)</h2>
    <p>Executa ações repetidas vezes <b>enquanto a condição for <b>verdadeira</b>.</b></p>
    
    <?php 
    $i = 1;
    while($i <= 5): //ou vc usa {
    ?>    
    <p>Parágrafo: <?= $i ?></p>
    <?php 
    $i++;
 endwhile; //ou }
    ?>
 <hr>

 <h2>do/While (Faça/enquanto)</h2>
 <p>Executa ações pelo menos <b>uma vez</b> e, se a condição for veradeira, continua executando outras vezes.</p>

 <?php 
 $j = 1;
 do{
?>
<div>
<h3>Título qualquer...</h3>
<p>Bloco <?= $j ?></p>
</div>

<?php
 $j++;
} while($j <= 3)
 
 ?>
 <hr>

 <h2>for(para)</h2>
 <p>Executa ações de acordo com uma <b>quantidade determinada vezes</b>.</p>

 
 <section>
 <h3>Conteúdo da seção</h3>
 <?php for($i = 1; $i <= 5; $i++){ ?>
 <details>
    <summary>Pergunta <?= $i ?></summary>
    <p>Resposta <?= $i ?></p>
 </details>
 <?php }// ou endfor; ?>
</section>


    

    
</body>
</html>