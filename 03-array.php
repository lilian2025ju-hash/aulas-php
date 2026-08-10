<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Arrays (vetores e matrizes)</title>
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
```


</head>
<body>
    <h1>Trabalhando com arrays</h1>
    <hr>
    <h2>Array numérico/indexador</h2>
    
    
    <?php 
    //sintaxe 2: usando a função array()
    $bandas = ["Savatage", "Iron maiden", "slayer", "Nightwish"];

    //sinatxe 2: usando a função array()
    $cursos = array( "excel", "JavaScript", "Games 2D", "PHP");

    //Array heterogêneo (tipos de dados mistos/variados)
    $coisas = ["Ozzy", 2112, "<b>Senac</b>", 253.487,true];

    //Array como  constante
    const Frutas = [ "morango", "abacaxi"];
    define( "FILIAIS", ["São Paulo", "Rio de janeiro"]);
?>

<h3>Acessando dados de arrays indexados/numéricos</h3>
<ul>
    <li>Banda que mais gosto <?$bandas[3] ?></li>
    <li>Gostaria de estudar mais sobre o <?= $cursos[0] ?> ?></li>
    <li>Estamos estudando no <?$coisas [2] ?></li>
    <li>Estamos na unidade da cidade de <?FILIAIS [0] ?></li>
</ul>

<h2>Array associativo</h2>
<p>Lista de dados baseada em uma chave associativa ( na prática,é um nome/identificação que vocé dá), e um valor para ela (o dado em si).</p>
  

<?php 
$curso = [
    //chave associativa => valor
    "titilo" => "Gastronomia",
    "carga_horaria" => 800,
    "descricao" => "Aprender a esquebtar água pra fazer miojo"

];

const EMPRESA =[
    "nome" => " Birribinha soluções em TI",
    "ramo" => "Tecnologia",
    "fundaçao" => "31/02/2026"
];

?>

<h3>Acessando dados de array associativos</h3>
<p>Nome do curso: <b><?= $curso["titulo"] ?> ?></b></p>
<p>CH: <b><?= $curso[ "carga_horaria"] ?> ?></b></p>
<p>Descrição: <b><?= $curso["descricao"] ?> ?></b></p>
<p>Prestadora de serviços: <i><?=  EMPRESA["nome"] ?> ?></i></p>

<h2>Arrays  de arrays (Matrizes)</h2>
<?php 
$planoDeEstudos =[
    ["JS avançado", "Node.js", "Nest.js"],
    ["PHP Avançado", "Orientaçoes a Objetos"],
    ["Teoria das Cores", "photoshop", "Canva", "UX/UI"]
];
//Matriz de arrays associativos
$clientes =[
[
    "nome" => "Gabriel",
    "me_devendo" => 1000
],
[
    "nome" =>"Messias",
    "me_devendo" => 500
]
];
?>

<h3>Acessando dados das matrizes</h3>
<p>Meu foco é no <?= $planoDeEstudos[1] [0] ?> ?></p>
<p>0 <?= $clientes [0] ["nome"]?> me deve <?= $clientes[0] ["me_devendo"] ?></p>

<h2>Funções de análise/debug de estruturas de dados ( arrays, objetos)</h2>
<?php 
//echo $bandas; //Não funciona , pois o echo nao consegue exibir arrays
?>

<h3><code>print_r()</code</h3>
<pre><?php print_r($bandas)?></pre>

<h3><code>var_dump</code></h3>
<pre><?php var_dump($bandas) ?></pre>

pre><?php var_dump($curso) ?></pre>

pre><?php var_dump(EMPRESA) ?></pre>

pre><?php var_dump($coisas) ?></pre>

pre><?php var_dump($clientes) ?></pre>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>