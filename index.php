<?php

require_once "Cliente.php";
require_once "ClienteController.php";

$cliente = new ClienteController();

$ordem = filter_input(INPUT_GET, 'ordem', FILTER_DEFAULT);

if (!isset($ordem)) {
    $ordem = 'asc';
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Cadastro de Clientes</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Exercício básico de PHP demonstrando um simples cadastro de clientes em memória">
    <meta name="author" content="Valdinei Reis">

    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/footer-navbar.css">

</head>
<body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Exercício PHP</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Clientes</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

    <!-- Begin page content -->
    <div class="container">
        <div class="page-header">
            <h1>Cadastro de Clientes</h1>
        </div>

        [<a href="index.php?ordem=<?=$ordem == 'asc' ? 'desc' : 'asc'?>">Adicionar ordem <?=$ordem == 'asc' ? 'Decrescente' : 'Crescente'?></a>]
        <table class="table table-striped table-condensed">
            <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Ednereço</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($cliente->getListaDeClientes($ordem) as $key => $obj) {
                echo "<tr>";
                echo "<td>" . $key . "</td>";
                echo "<td>" . $obj->getNome() . "</td>";
                echo "<td>" . $obj->getCpf() . "</td>";
                echo "<td>" . $obj->getEndereco() . "</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>

    </div>

    <footer class="footer">
        <div class="container">
            <p class="text-muted">Exercicio PHP</p>
        </div>
    </footer>

    <script type='text/javascript' src='assets/js/jquery.js'></script>
    <script type='text/javascript' src='assets/js/bootstrap.js'></script>
</body>
</html>