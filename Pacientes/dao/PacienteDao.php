<?php

require_once __DIR__ . '/../Database.php';
require_once __DIR__ . '/../model/Paciente.php';

class PacienteDao
{
    private $tabela     = 'pacientes';
    private $connection;

    public function __construct()
    {
        $db               = new Database();
        $this->connection = $db->connection;
    }

    public function salvar(Paciente $paciente)
    {
        $sql  = "INSERT INTO $this->tabela (nome, prontuario, tiposanguinio) VALUES (?, ?, ?)";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([$paciente->getNome(), $paciente->getProntuario(), $paciente->getTipoSanguinio()]);
    }

    public function listar()
    {
        $sql  = "SELECT * FROM $this->tabela ORDER BY id";
        $stmt = $this->connection->query($sql);
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pacientes = [];
        foreach ($rows as $row) {
            $pacientes[] = new Paciente(
                $row['nome'],
                $row['prontuario'],
                $row['tiposanguinio'],
                $row['id']
            );
        }

        return $pacientes;
    }
}
