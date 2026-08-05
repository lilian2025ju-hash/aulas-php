<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03</title>
    <style>
        section{
            padding: 4px;
            margin: auto;
            width: 50%;
            border:solid 1px;
        }
        .infantil{ background-color: pink;}
        .adulto {background-color: greenyellow;}
        .melhor-ingresso{ background-color: aqua;}


    </style>
</head>
<body>
    <h1>Ingresso do Show</h1>
    <hr>

    
    <?php 
    $idade = 30;
     
    if($idade < 12){
     $Categoria = "Infantil";
     $ValorIngresso = 25.00;
     $estilo = "Infantil";
} elseif ( $idade < 60) {
    $Categoria = "adulto";
    $ValorIngresso = 40.00; 
    $estilo = "adulto";
} else {
    $Categoria = "melhor-ingresso";
    $ValorIngresso = 20.00;
    $estilo = "melhor-ingresso";
}
?>
<section class="<?= $estilo ?>">
<h2>Idade da Pessoa</h2>
<p>Idade: <b><?= $idade ?></b></p>
<p>Categoria do Ingresso: <b><?= $Categoria ?></b></p>
<p>Valor do Ingresso: RS <b><?= number_format($ValorIngresso, 2, ",", ",")?></b></p>
</section>



</body>
</html>