<?php

require_once __DIR__ . '/../Database.php';
require_once __DIR__ . '/../model/Funcionario.php';

class FuncionarioDao
{
    private $tabela     = 'funcionarios';
    private $connection;

    public function __construct()
    {
        $db               = new Database();
        $this->connection = $db->connection;
    }

    public function salvar(Funcionario $funcionario)
    {
        $sql  = "INSERT INTO $this->tabela (nome, salario) VALUES (?, ?)";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([$funcionario->getNome(), $funcionario->getSalario()]);
    }

    public function listar()
    {
        $sql  = "SELECT * FROM $this->tabela ORDER BY id";
        $stmt = $this->connection->query($sql);
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $funcionarios = [];
        foreach ($rows as $row) {
            $funcionarios[] = new Funcionario(
                $row['nome'],
                $row['salario'],
                $row['id']
            );
        }

        return $funcionarios;
    }
}
