<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de dados com Arrays e Objetos</title>
</head>

<body>
    <h1>Estrututas de Dados com Array e objetos</h1>
    <hr>

    <?php
    //Array associativo
    $pessoa1 = [
        "nome" => "Ana",
        "email" => "ana@email.com",
        "senha" => "abc123",
        "idade" => 25,
        "sexo" => "Feminino",
        "cidade" => "São paulo"
    ];

    //obj generico
    $pessoa2 = new stdClass();
    $pessoa2->nome = "Maria";
    $pessoa2->email = "maria@email.com";
    $pessoa2->senha = "abc123";
    $pessoa2->idade = 35;
    $pessoa2->sexo = "Feminino";
    $pessoa2->cidade = "Rio de janeiro"

    ?>

    <div class="container">
        <section class "bloco">
            <h2><?= $pessoa1["nome"]?></h2>
            <p><strong>Nome do usuario</strong></p>

            <h2><?= $pessoa1["email"] ?></h2>
            <p><strong>Email</strong></p>

            <h2><?= $pessoa1["senha"] ?></h2>
            <p><strong>Senha</strong></p>

            <h2><?= $pessoa1["idade"] ?></h2>
            <p><strong>Idade</strong></p>

            <h2></h2>

            



        </section>


    </div>

</body>

</html>