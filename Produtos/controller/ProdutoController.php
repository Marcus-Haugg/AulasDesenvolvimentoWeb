<?php

require_once __DIR__ . '/../dao/ProdutoDao.php';

class ProdutoController
{
    public function listar()
    {
        $dao = new ProdutoDao();
        return $dao->listar();
    }

    public function salvar()
    {
        $produto = new Produto(
            $_POST['codigoBarras'],
            $_POST['descricao'],
            $_POST['preco']
        );

        $dao = new ProdutoDao();
        $dao->salvar($produto);

        header("Location: lista.php");
    }
}
