<?php include "recursos.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inclusão de Recursos</title>
</head>
<body>
    <div class="container">
    <h1>Inclusão de Recursos</h1>
    <hr>
    <p>Utilizamos os comandos <code>include</code> e/ou <code>require</code>para importar arquivos com recursos externos de qualquer natureza, permitindo assim a reutilizaçao de código</p>
     

    <h2>Exemplos de uso/acesso</h2>
    <p>Estamos estudando no <?= Escola ?> fazendo o curso <?= $curso ?>.</p>
    <p>Para fazer este curso o aluno deve ser maior idade.</p>
    <p>Como você <?= Aluno ?> tem 20 anos, você é <?= verificaIdade(20) ?></p>

</div>
    
   



</body>
</html>