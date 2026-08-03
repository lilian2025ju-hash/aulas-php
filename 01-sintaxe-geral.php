<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - sintaxe Geral</title> 
<!--  css interno -->
    <style>
        .exemplo {
            border: solid 4px;
            padding: 4px;
            color: <?php echo "orange" ; ?>;
        }
            
    </style>
</head>
<body>
    <h1 class="exemplo">Trabalhando com PHP</h1>
    <hr>

    <?php
    //geração de testo/string
    echo "Estou estudadando a linguagem PHP para Back-End";
    echo 'Este também é um texto/string';

    //geração de tags/atributos HTML
    echo "<p> Este é um parágravo gerado via PHP</p>";

    //Geração de tag com atributo
    //Aspa dupla fora, aspa simples dentro
    echo ' <p><abbr title="HyperText Preprocessor">PHP</abrr> é uma linguagem popular </p>';

  //Aspa dupla fora, aspa simples dentro
  echo "<p><abbr title= 'HyperText preprocessor'>PHP</abbr> é uma linguagem popular</p>";
 
  //Aspa dupla fora, aspa dupla com escape "\" dentro
  echo "<p><abrr title= \"HyperText preprocessor \">PHP</abbr> é uma linguagem popular </p>";

  ?>

  <script>
    const tituloH1 = document.querySelector('h1');
    tituloH1.addEventListener("click", function(){
        alert("<?php echo "Ola PHP e JavaScript!"; ?>");
    });
  
  </script>


    
</body>
</html>