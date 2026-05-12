<?php

require_once __DIR__ . '/../dao/LivroDao.php';

class LivroController
{
    public function listar()
    {
        $dao = new LivroDao();
        return $dao->listar();
    }

    public function salvar()
    {
        $livro = new Livro(
            $_POST['titulo'],
            $_POST['autor'],
            $_POST['isbn']
        );

        $dao = new LivroDao();
        $dao->salvar($livro);

        header("Location: lista.php");
    }
}
