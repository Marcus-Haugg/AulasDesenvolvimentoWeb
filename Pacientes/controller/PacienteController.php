<?php

require_once __DIR__ . '/../dao/PacienteDao.php';

class PacienteController
{
    public function listar()
    {
        $dao = new PacienteDao();
        return $dao->listar();
    }

    public function salvar()
    {
        $paciente = new Paciente(
            $_POST['nome'],
            $_POST['prontuario'],
            $_POST['tiposanguinio']
        );

        $dao = new PacienteDao();
        $dao->salvar($paciente);

        header("Location: lista.php");
    }
}
