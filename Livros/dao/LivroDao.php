<?php

require_once __DIR__ . '/../Database.php';
require_once __DIR__ . '/../model/Livro.php';

class LivroDao
{
    private $tabela     = 'livros';
    private $connection;

    public function __construct()
    {
        $db               = new Database();
        $this->connection = $db->connection;
    }

    public function salvar(Livro $livro)
    {
        $sql  = "INSERT INTO $this->tabela (titulo, autor, isbn) VALUES (?, ?, ?)";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([$livro->getTitulo(), $livro->getAutor(), $livro->getIsbn()]);
    }

    public function listar()
    {
        $sql  = "SELECT * FROM $this->tabela ORDER BY id";
        $stmt = $this->connection->query($sql);
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $livros = [];
        foreach ($rows as $row) {
            $livros[] = new Livro(
                $row['titulo'],
                $row['autor'],
                $row['isbn'],
                $row['id']
            );
        }

        return $livros;
    }
}
