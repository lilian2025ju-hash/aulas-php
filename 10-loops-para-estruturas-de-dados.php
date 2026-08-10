<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Loops para estrutura</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">



</head>

<body>
    <div class="conatiner">
        <h1>Loops para estruturas de dados</h1>
        <hr>
        <?php
        $meses = ["janeiro", "fevereiro", "março", "Abril", "maio", "junho"];

        ?>

        <h2>Usando o loop for para acessar o Array</h2>

        <ol>
            <?php for ($i = 0; $i < count($meses); $i++) { ?>
                <li><?= $meses[$i] ?></li>
            <?php } ?>
        </ol>
        <hr>

        <h2>Usando o loop for para acessar uma matrix (array de arrays)</h2>
        <?php
        $planosDeEstudos = [
            ["JS Avançado", "Node.js", "Nest.js"],
            ["PHP", "Orientação a Objetos"],
            ["Teorias das Cores", "photoshop com IA", "Ux/UI"]
        ];

        $linhas = count($planosDeEstudos);
        for ($i = 0; $i < $linhas; $i++): // acessa cada linha
            $colunas = count($planosDeEstudos[$i]);
            for ($j = 0; $j < $colunas; $j++): //acessa cada coluna

        ?>
                <p><?php $planosDeEstudos[$i][$j] ?></p>

        <?php
            endfor; //fim do acesso a cada coluna
        endfor; //fimm de acesso a cada linha

        ?>

        <hr>

        <h2>Usando o Loop para cada arrays</h2>

        <?php 
        $alunos =[ "thiago", "Adela", "Renan", "Pérola"];
        foreach($alunos as $aluno):
        ?>

        <p><?= $aluno ?></p>
        <?php 
        endforeach;
        ?>

        <hr>
        <h2>Usando foreach para Array associativo</h2>

    <?php 
    $curso = [
      "titulo" => "Gastronomia",
      "carga-horaria" => 200,
      "descricao" => "Aprender o básico sobre a área"
 ];

 //Extraindo chave com valor
 foreach($curso as $chave => $valor):
?>
  <p><b><?= $chave ?></b>: <?= $valor ?></p>

  <?php 
  endforeach;

  //Extraindo somente o valor
  foreach($curso as $valor):
  ?>
  <p><i><?= $valor ?></i></p>
  <?php 
  endforeach;
  ?>
  <hr>

  <h2>Usando foreach em uma matriz</h2>

  <?php 
  $clientes = [
    [  "nome" => "juliene",
      "email" => "ju@senac.br",
  ],
  [
    "nome" => "luiz",
    "email" =>"luiz@senac.br"

  ]

  ];

  foreach($clientes as $cliente):

  ?>
  <p><b>nome:</b><span class="bg-primary-subtle"><?= $cliente["nome"] ?>
</span></p>
<p><b>email</b><span class="bg-dark-subtle p-1"><?= $cliente["email"] ?></span></p>

<?php
endforeach;
?>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>

</html>