<?php

require_once "Cliente.php";
require_once "ClienteController.php";

$cliente = new ClienteController();

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$obj = $cliente->buscaCliente($id);

if (!$obj) {
    header("Location:index.php?action=cliente/inexistente");
}

require_once 'header.php';
?>

    <div class="page-header">
        <h1><?=$obj->getNome()?></h1>
    </div>

    <table class="table table-striped table-condensed">
        <tr>
            <td>CPF</td>
            <td><?=$obj->getCpf()?></td>
        </tr>
        <tr>
            <td>Endereço</td>
            <td><?=$obj->getEndereco()?></td>
        </tr>
    </table>

    <a href="index.php"><i class="glyphicon glyphicon-menu-left"></i> Voltar</a>

<?php
require_once 'footer.php';
