<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício04 - estruturas de repetição</title>
</head>
<style>
table {
width: 60%;
margin: auto;
border-collapse: collapse;
background-color: white;
}
 th, td{
boder: 1px solid #999;
padding:10px;

 }

 th{
    background-color:#333;
    color: white;
 }

 tr:hover{
    background-color: #f0f0f0;
 }
</style>

<body>

    <h1>Estruturas de repetição (loops) e estruturas de dados</h1>
    <hr>

    <?php

    $linguagens = [
        ["id" => 1, "nome" => "HTML", "descricao" => "Estruturacao"],
        ["id" => 2, "nome" => "CSS", "descricao" => "Estilos"],
        ["id" => 3, "nome" => "JavaScript", "descricao" => "Comportamentos"],
        ["id" => 4, "nome" => "PHP", "descricao" => "Back-End"],
        ["id" => 5, "nome" => "SQL", "descricao" => "Banco de dados"]
    ];

    ?>

    <table border="1">

        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
        </tr>

        <?php foreach ($linguagens as $linguagem) { ?>

            <tr>
                <td><?= $linguagem["id"] ?></td>
                <td><?= $linguagem["nome"] ?></td>
                <td><?= $linguagem["descricao"] ?></td>
            </tr>

        <?php } ?>

    </table>

</body>

</html>
