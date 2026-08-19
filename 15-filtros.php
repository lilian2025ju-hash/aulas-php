<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h1>Filtros para validação e sanitização</h1>
    <hr>

    <p>Filtros são recursos de análise de dados aplicados através de funçoes especiais, normalmente as Funções <code>filter_var()</code> e <code>filter_inout()</code> e também com o uso de <b>constantes</b> de validação/sanitização.
    </p>
   
    <h2>Validação</h2>
    <h3>Filter_validate_Email</h3>

    <?php
    $email = "email@provedor.com";
    $emailvalido = filter_var($email, FILTER_VALIDATE_EMAIL);
    ?>

    <pre><?php var_dump($emailvalido)?></pre>

    <?php if ($emailvalido): ?>
        <p class="texte-sucess">E -mail correto</p>
        <?php else: ?>
            <p class="text-danger">E-mail incorreto!</p>
            <?php endif; ?>

            <h3>Filter_Validade</h3>
            <?php 
            $redeSocial = "htttps://linkedin.com/in/tiagobsantos";
            $redeSocialValida = filter_var($redeSocial , FILTER_VALIDATE_URL);
            ?>

            <pre><?php var_dump($redeSocialValida) ?></pre>

            <?php if($redeSocialValida): ?>
                <a href="<?= $redeSocial ?>" class="btn btn-info">Me siga no Linkedin</a>
                <?php endif; ?>

                <hr>

                <h2>Sanitização</h2>
                <h3>Filter_Sanitize_Email</h3>

                <?php 
                $contato = "lilian2025ju@@gmail.com.";
                $contatoSanitizado = filter_var($contato, FILTER_SANITIZE_EMAIL);
                ?>

                <p>Contato <b>sem</b>sanitização: <?= $contato ?>></p>
                <p>Contato <b>com</b >sanitização: <?= $contatoSanitizado ?></p>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    
</body>
</html>