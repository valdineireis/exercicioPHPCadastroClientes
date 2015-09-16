<?php

require_once "Cliente.php";
require_once "ClienteController.php";

$cliente = new ClienteController();
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
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Ednereço</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach($cliente->getListaDeClientes() as $obj) {
                echo "<tr>";
                echo "<td>" . $obj->getNome() . "</td>";
                echo "<td>" . $obj->getCpf() . "</td>";
                echo "<td>" . $obj->getEndereco() . "</td>";
                echo "</tr>";
            }
        ?>
        </tbody>
    </table>
</body>
</html>