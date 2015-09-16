<?php

require_once "Cliente.php";
require_once "ClienteController.php";

$cliente = new ClienteController();

$ordem = filter_input(INPUT_GET, 'ordem', FILTER_DEFAULT);

if (!isset($ordem)) {
    $ordem = 'asc';
}

require_once 'header.php';
?>

    <div class="page-header">
        <h1>Clientes</h1>
    </div>

    <?php
    $action = filter_input(INPUT_GET, 'action', FILTER_DEFAULT);
    if ($action) {
        switch ($action) {
            case 'cliente/inexistente':
                echo '<div class="alert alert-warning" role="alert">Cliente inexistente!</div>';
                break;
        }
    }
    ?>

    [<a href="index.php?ordem=<?=$ordem == 'asc' ? 'desc' : 'asc'?>">Adicionar ordem <?=$ordem == 'asc' ? 'Decrescente' : 'Crescente'?></a>]
    <table class="table table-striped table-condensed">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Ednereço</th>
                <th></th>
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
                echo "<td><a href='view.php?id=" . $key . "'><i class='glyphicon glyphicon-eye-open'></i> Visualizar</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

<?php
require_once 'footer.php';