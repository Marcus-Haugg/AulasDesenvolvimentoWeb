<?php

require_once __DIR__ . '/../Database.php';
require_once __DIR__ . '/../model/Produto.php';

class ProdutoDao
{
    private $tabela     = 'produtos';
    private $connection;

    public function __construct()
    {
        $db               = new Database();
        $this->connection = $db->connection;
    }

    public function salvar(Produto $produto)
    {
        $sql  = "INSERT INTO $this->tabela (codigoBarras, descricao, preco) VALUES (?, ?, ?)";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([$produto->getCodigoBarras(), $produto->getDescricao(), $produto->getPreco()]);
    }

    public function listar()
    {
        $sql  = "SELECT * FROM $this->tabela ORDER BY id";
        $stmt = $this->connection->query($sql);
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $produtos = [];
        foreach ($rows as $row) {
            $produtos[] = new Produto(
                $row['codigobarras'],
                $row['descricao'],
                $row['preco'],
                $row['id']
            );
        }

        return $produtos;
    }
}
