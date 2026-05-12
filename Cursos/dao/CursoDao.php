<?php

require_once __DIR__ . '/../Database.php';        // carrega a classe de conexão com o banco
require_once __DIR__ . '/../model/Curso.php';     // carrega o Model

// DAO (Data Access Object): responsável por todas as operações no banco para Curso
class CursoDao
{
    private $tabela     = 'cursos'; // nome da tabela no banco
    private $connection;            // conexão PDO

    public function __construct()
    {
        $db                = new Database();     // cria a conexão com o banco
        $this->connection  = $db->connection;   // armazena a conexão para uso nos métodos
    }

    // Insere um novo curso na tabela
    public function salvar(Curso $curso)
    {
        // Usa ? como parâmetro para evitar SQL Injection
        $sql  = "INSERT INTO $this->tabela (nomecurso, cargahoraria, categoria) VALUES (?, ?, ?)";
        $stmt = $this->connection->prepare($sql); // prepara a query no banco

        // Executa usando os getters do modelo para acessar os atributos privados
        $stmt->execute([$curso->getNomeCurso(), $curso->getCargaHoraria(), $curso->getCategoria()]);
    }

    // Retorna todos os cursos cadastrados como array de objetos Curso
    public function listar()
    {
        $sql  = "SELECT * FROM $this->tabela ORDER BY id"; // busca todos os registros
        $stmt = $this->connection->query($sql);            // executa a query
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);         // resultado como array associativo

        $cursos = []; // vetor que receberá os objetos

        foreach ($rows as $row) {
            // Cria um objeto Curso para cada linha, passando o id do banco
            $cursos[] = new Curso(
                $row['nomecurso'],
                $row['cargahoraria'],
                $row['categoria'],
                $row['id']           // id gerado pelo banco, passado como último parâmetro
            );
        }

        return $cursos; // retorna vetor de objetos Curso
    }
}
