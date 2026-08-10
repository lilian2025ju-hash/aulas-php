<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Manipulando dados na memória</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

<style>
        .destaque {color: red; }
    </style>
</head>
<body>
    <h1>Usando variáves de constantes</h1>
    <hr>

    <?php
    // :;variaves

    $curso ="Téc. Informática para Internet"; //string/texto
    $ano = 2026; //número inteiro
    $preco =2112.55; //número real/fracionado, decimal

    // cosntantes:
    define("PROPRIETARIO", "FULANO de TAL"); //antiga
    Const EMPRESA = "ABC Tecnologia"; //moderna
?>

<h2>Exemplos de saídas de dados</h2>
<?php

//usando concatenação: se usa o . (ponto final)
echo " <p> 
Estou Fazendo o curso ".$curso." no ano de ".$ano."</P>";
echo "<p>Trabalho na Empresa <span class= 'destaque'>".EMPRESA. "</span></p>"; //funciona como constantes


//Usando interpolação: se usa obrigatoriamente aspa dupla
echo "<p>Estou Fazendo o curso $curso no ano de $ano</p>"; 
echo "<p>trabalho na Empresa EMPRESA</p>";

//com aspas simples, a interpolação não funciona. Aparecem os nomes.
echo '<p>Estou Fazendo o curso $curso no ano de $ano</p>';

?>

<h2>Exemplos de saídas de dados</h2>
<h3>Usando a sintaxe abreviada/curta do PHP</h3>

<p>Estou fazendo o curso <?php echo $curso?> no ano de <?php   echo $ano?> </p>
<p>Trabalho na empresa <?php echo EMPRESA ?> </p>

// Saída abreviada usando o comando echo através do sinal de igual
<p>Estou fazendo o curso <?=$curso?> no ano de <?=$ano?> </p>
<p>Trabalho na empresa <span class= "destaque"><?=EMPRESA?></span> </p>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    
</body>
</html>