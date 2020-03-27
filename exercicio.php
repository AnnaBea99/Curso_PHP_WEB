<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/exercicio.css">
    <title>Exercício</title>
</head>

<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Vizualização do Exercício</h2>
    </header>

    <nav class="navegacao">
        <a href=<?= "{$_GET['file']}/{$_GET['file']}.php" ?> class="rosa">Sem Formatação</a>
        <a href="index.php" class="rosa">Voltar</a>
    </nav>

    <main class="principal">
        <div class="conteudo">
        <?php
        /*include("teste/teste.php")*/  /*Lê o arquivo e coloca ele lá na página*/
        /*Utilazando um parametro para chamar a página*/
        // include($_GET['dir'] . "/" . $_GET ['file'] . ".php");
       include(__DIR__ . "/{$_GET['file']}/{$_GET['file']}.php");
        ?>
        </div>
    </main>

    <footer class="rodape">
        COD3R & ALUNOS © <?= date('Y'); ?>
    </footer>

</body>

</html>