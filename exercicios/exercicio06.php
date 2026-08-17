<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funçoes-datas-e-horario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>


<body>
    <h1> funções datas e hora</h1>
    <h2>Time()</h2>
    <?=
    $tempo = time();
    ?>

    <p>TimeStamp atual: <?= $tempo ?></p>
    <hr>

    <h2>getdate()</h2>
    <p> A função getdate() retorna informações sobre uma data e hora, como dia, mês , ano, hora, munuto e segundo.</p>
    <?php $data = getdate(); ?>

    <p>Dia: <?= $data["mday"] ?></p>
    <p>mês: <?= $data["mon"] ?></p>
    <p>Ano: <?= $data["year"] ?></p>

    <p>Hora: <?= $data["hours"] ?></p>
    <p>Minutos: <?= $data["Minutes"] ?></p>
    <P>Segundos <?= $data["seconds"] ?></p>


    <h2>Função Mktime()</h2>
    <p>A função mktime converte uma data e hora locais em um valor de tempo de calendário</p>

    <?php
$data = mktime(10, 30, 0, 12, 25, 2026);
?>
<p>Timestamp: <?= $data ?></p>
<hr>

<h2>checkdate()</h2>
<p> é uma função nativa usada para validar uma data do calendário gregoriano. Ela retorna true se a data for real e correta, ou false se ela não existi</p>
<hr>

<?php
$valida = checkdate(8, 17, 2026);
?>

<p>Data válida: <?= $valida ? "Sim" : "Não" ?></p>


<h2>Desafio</h2>
<?php
$data = mktime(10, 30, 0, 10, 15, 2026);
$informacoes = getdate($data);
?>

<p>
    <?= $informacoes["mday"] ?>/<?= $informacoes["mon"] ?>/<?= $informacoes["year"] ?>
</p>
    
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>