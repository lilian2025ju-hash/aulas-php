Há menu de contexto
Chat




Não lido
Chats
Chats de reunião
Mensagem não lidaÚltima mensagemChats em grupoChat de reuniãoChatFuncionários mencionadosMencionar todosImportanteUrgenteRascunhoRascunhoMudo ativadoReunião em andamentoReunião agora em andamentoVocê não pode enviar mensagens porque não é membro do chat.Não é possível enviar mensagens a este botPrivadoCompartilhadoTem um menu de contextoCanal mencionadoEquipe mencionadaFuncionários mencionadosNão lidoNão lidoReunião em andamentoNão lidoCanalEquipeTem mensagens fixadasVer maisComunidadeMostrar temporariamenteTem um menu de contextoChat com emblemaChats com emblema
Tem um menu de contexto
ADELA MICHELE ESQUIVEL TOLA

Chat



Lista de Mensagens
oi por ADELA MICHELE ESQUIVEL TOLA
ADELA MICHELE ESQUIVEL TOLA
28/07 08:44

oi

Tema: Ataque hacker ao sistema de alertas ... por ADELA MICHELE ESQUIVEL TOLA
ADELA MICHELE ESQUIVEL TOLA
28/07 08:45

Tema: Ataque hacker ao sistema de alertas da Defesa Civil ("Misantropia")

Resumo da notícia
Em junho de 2026, milhões de brasileiros receberam um alerta falso da Defesa Civil com a palavra "misantropia" e, em alguns casos, mensagens sobre um suposto "ataque alienígena". A investigação apontou que o sistema oficial de envio de alertas foi comprometido, permitindo o disparo de mensagens indevidas para celulares em diversos estados. A Polícia Federal iniciou uma investigação para identificar os responsáveis. AAgência Brasil+1

Relação com a Tecnologia da Informação (TI)
Esse caso demonstra a importância da Segurança da Informação e da Cibersegurança em sistemas governamentais.

Conceitos envolvidos
Ataque hacker: invasão de um sistema para obter acesso não autorizado.
Credenciais comprometidas: indícios apontam que contas de usuários autorizados foram utilizadas de forma indevida. FFolha de S.Paulo
Engenharia social: possibilidade de senhas terem sido obtidas por golpes ou vazamentos.
Controle de acesso: sistemas críticos precisam limitar quem pode executar funções importantes.
Resposta a incidentes: após o ataque, o sistema foi retirado temporariamente do ar para análise e investigação. AAgência Brasil+1
Dados interessantes
Cerca de 30 milhões de celulares foram afetados. VVEJA+1
O ataque atingiu 7 estados e o Distrito Federal. Agência Brasil
Foram identificados aproximadamente 10 alertas falsos diferentes. CNN Brasil+1
O sistema utiliza a tecnologia Cell Broadcast, que envia mensagens para todos os celulares em uma área específica, sem necessidade de cadastro. Serviços e Informações do Brasil+1
O termo "misantropia" significa aversão ou desprezo pela humanidade e não tem relação com desastres naturais, o que chamou a atenção do público. Agência Brasil+1
Lições para a área de TI
Utilizar autenticação multifator (MFA).
Criar senhas fortes e realizar trocas periódicas.
Monitorar acessos em tempo real.
Registrar logs de auditoria para rastrear ações.
Treinar usuários contra golpes de phishing e engenharia social.
Elaborar planos de resposta a incidentes cibernéticos.
Conclusão
O caso mostra que a segurança digital é essencial em sistemas públicos. Uma falha em um sistema de alertas pode gerar pânico, perda de confiança da população e riscos à segurança pública. Para profissionais de TI, esse incidente reforça a necessidade de investir em boas práticas de cibersegurança, monitoramento constante e proteção de credenciais para evitar que ataques semelhantes ocorram novamente.



Última lida
<!DOCTYPE html>
<html lang="pt-br">

<head> ... por ADELA MICHELE ESQUIVEL TOLA
    ADELA MICHELE ESQUIVEL TOLA
    09:48

    <!DOCTYPE html>

    <html lang="pt-br">

    <head>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Condicionais</title>

        <style>
            .comprar {
                color: red;
            }

            .normal {
                color: blue;
            }
        </style>

    </head>

<body>

    <h1>Trabalhando com estruturas condicionais</h1>

    <hr>

    <!-- Lembrete: ao usar condicionais , muitas vezes também usaremos operadores relacionais:

     <,<=,>,>=,==,!=,===,!== -->



    <h2>Condicional SIMPLES: <code>if</code></h2>

    <?php

    $numero = 50;

    if ($numero > 10) {

        echo "<p>$numero é maior que 10.</p>";
    }



    //Estrutura abreviada (sem chaves)

    if ($numero > 10) echo "<p>$numero é maior que 10.</p>";



    //Estrutura alternativa (sem chaves com : e endif)

    if ($numero > 10):

        echo "<p>$numero é maior que 10.</p>";

    endif;

    ?>

    <hr>

    <h2>Condicional COMPOSTA: <code>if/else</code></h2>



    <?php

    $produto = "Ultrabook";

    $qtdEmEstoque = 0;

    $qtdCritica = 5;

    ?>

    <h3><?= $produto ?></h3>

    <p><b>Quantidade em estoque: </b><?= $qtdEmEstoque ?></p>



    <?php

    if ($qtdEmEstoque < $qtdCritica) {

        echo "<p class=\"comprar\"> É necessario comprar/repor</p>";



        //condicional ANINHADA

        if ($qtdEmEstoque === 0) {

            echo "<p><mark class=\"comprar\">🚨URGENTE!</mark></p>";
        }
    } else {

        echo "<p class=\"normal\"> Estoque normal.</p>";
    }

    ?>

    <hr>

    <h2>Condicional ENCADEADA: <code> if, elseif, else</code></h2>

    <?php

    $idade = 20;

    $situacao = ""; //opcional (nem é obrigatorio declarar previamente)



    if ($idade <= 12) {

        $situacao = "criança";
    } elseif ($idade <= 17) {

        $situacao = "adolecente";
    } elseif ($idade <= 59) {

        $situacao = "adulto";
    } else {

        $situacao = "idoso";
    }

    ?>



    <p>O usuário tem <?= $idade ?> anos e é <?= $situacao ?>.</p>



    <h3>Usando os comandos <code>switch/case/default/break</code></h3>

    <?php

    /* Prototipo de chatbot

opções: 1 (informações),2(reclamação), 3(elogio), X (inálida)*/

    $opcao = 2; //entrada simulada



    switch ($opcao) {

        case 1:
            echo "<p>Legal, o que quer saber?</p>";
            break;

        case 2:
            echo "<p>Que pena, o que houve?</p>";
            break;

        case 3:
            echo "<p>Que bacana, pode fala!</p>";
            break;

        default:
            echo "<p>Não entendi... vou chamar alguém</p>";
            break;
    }



    ?>



</body>

</html>

tem menu de contexto