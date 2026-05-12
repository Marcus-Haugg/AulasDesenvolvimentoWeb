<?php

require_once __DIR__ . '/../dao/FuncionarioDao.php';

class FuncionarioController
{
    public function listar()
    {
        $dao = new FuncionarioDao();
        return $dao->listar();
    }

    public function salvar()
    {
        $funcionario = new Funcionario(
            $_POST['nome'],
            $_POST['salario']
        );

        $dao = new FuncionarioDao();
        $dao->salvar($funcionario);

        header("Location: lista.php");
    }
}
