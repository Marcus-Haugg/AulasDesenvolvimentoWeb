<?php

require_once __DIR__ . '/../Database.php';
require_once __DIR__ . '/../model/Veiculo.php';

class VeiculoDao
{
    private $tabela     = 'veiculos';
    private $connection;

    public function __construct()
    {
        $db               = new Database();
        $this->connection = $db->connection;
    }

    public function salvar(Veiculo $veiculo)
    {
        $sql  = "INSERT INTO $this->tabela (placa, modelo, marca) VALUES (?, ?, ?)";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([$veiculo->getPlaca(), $veiculo->getModelo(), $veiculo->getMarca()]);
    }

    public function listar()
    {
        $sql  = "SELECT * FROM $this->tabela ORDER BY id";
        $stmt = $this->connection->query($sql);
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $veiculos = [];
        foreach ($rows as $row) {
            $veiculos[] = new Veiculo(
                $row['placa'],
                $row['modelo'],
                $row['marca'],
                $row['id']
            );
        }

        return $veiculos;
    }
}
