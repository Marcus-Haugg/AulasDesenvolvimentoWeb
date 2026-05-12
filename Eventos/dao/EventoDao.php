<?php

require_once __DIR__ . '/../Database.php';
require_once __DIR__ . '/../model/Evento.php';

class EventoDao
{
    private $tabela     = 'eventos';
    private $connection;

    public function __construct()
    {
        $db               = new Database();
        $this->connection = $db->connection;
    }

    public function salvar(Evento $evento)
    {
        $sql  = "INSERT INTO $this->tabela (nomeevento, data, local) VALUES (?, ?, ?)";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([$evento->getNomeEvento(), $evento->getData(), $evento->getLocal()]);
    }

    public function listar()
    {
        $sql  = "SELECT * FROM $this->tabela ORDER BY data ASC";
        $stmt = $this->connection->query($sql);
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $eventos = [];
        foreach ($rows as $row) {
            $eventos[] = new Evento(
                $row['nomeevento'],
                $row['data'],
                $row['local'],
                $row['id']
            );
        }

        return $eventos;
    }
}
