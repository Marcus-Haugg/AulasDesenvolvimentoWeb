<?php

require_once __DIR__ . '/../dao/VeiculoDao.php';

class VeiculoController
{
    public function listar()
    {
        $dao = new VeiculoDao();
        return $dao->listar();
    }

    public function salvar()
    {
        $veiculo = new Veiculo(
            $_POST['placa'],
            $_POST['modelo'],
            $_POST['marca']
        );

        $dao = new VeiculoDao();
        $dao->salvar($veiculo);

        header("Location: lista.php");
    }
}
