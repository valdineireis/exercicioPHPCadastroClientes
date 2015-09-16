<?php

require_once "Cliente.php";

class ClienteController
{
    private $listaDeClientes;

    public function __construct() {
        $this->listaDeClientes =
            array(
                new Cliente("Cliente 0", "00000000000", "Endereço 0"),
                new Cliente("Cliente 1", "11111111111", "Endereço 1"),
                new Cliente("Cliente 2", "22222222222", "Endereço 2"),
                new Cliente("Cliente 3", "33333333333", "Endereço 3"),
                new Cliente("Cliente 4", "44444444444", "Endereço 4"),
                new Cliente("Cliente 5", "55555555555", "Endereço 5"),
                new Cliente("Cliente 6", "66666666666", "Endereço 6"),
                new Cliente("Cliente 7", "77777777777", "Endereço 7"),
                new Cliente("Cliente 8", "88888888888", "Endereço 8"),
                new Cliente("Cliente 9", "99999999999", "Endereço 9")
            );
    }

    /**
     * Obter lista de Clientes cadastrados
     * @param string $ordem <b>asc</b> = crescente e <b>desc</b> = decrescente.
     * @return array
     */
    public function getListaDeClientes($ordem = 'asc') {
        if ($ordem == 'asc') {
            // ordena do menor para o maior
            ksort($this->listaDeClientes);
        } elseif ($ordem == 'desc') {
            // ordena do maior para o menor
            krsort($this->listaDeClientes);
        }

        return $this->listaDeClientes;
    }

    /**
     * Busca o Cliente cadastrado
     * @param $index = Index do objeto no array
     * @return object
     */
    public function buscaCliente($index) {
        return isset($this->listaDeClientes[$index]) ? $this->listaDeClientes[$index] : null;
    }
}