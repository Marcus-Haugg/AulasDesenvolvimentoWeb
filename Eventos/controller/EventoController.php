<?php

require_once __DIR__ . '/../dao/EventoDao.php';

class EventoController
{
    public function listar()
    {
        $dao = new EventoDao();
        return $dao->listar();
    }

    public function salvar()
    {
        $evento = new Evento(
            $_POST['nomeevento'],
            $_POST['data'],
            $_POST['local']
        );

        $dao = new EventoDao();
        $dao->salvar($evento);

        header("Location: lista.php");
    }
}
