<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio01.PHP</title>
</head>
<body>
    <h1>Exercicio01-PHP</h1>

    <?php

    $dataHoje = "29 de julho de 2026";
    $nome = "Juliene Araujo"; 
    $curso = "Técnico de Informatica"; 
    $cargaHoraria = 200;

    $limitesFaltas = $cargaHoraria * 0.25;

?>

<h2>Informações do Aluno</h2>

<p>Data: <span class="Destaque"><?php
echo $dataHoje; ?></span></p>

<p>Nome: <span class="Destaque"><?php
echo $nome; ?></span></p>

<p>Nome: <?=$nome?></p>

    
</body>
</html>