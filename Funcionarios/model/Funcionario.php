<?php

// Model: representa a entidade Funcionario — só dados, sem lógica de banco
class Funcionario
{
    private $id;
    private $nome;
    private $salario;

    public function __construct($nome, $salario, $id = null)
    {
        $this->nome    = $nome;
        $this->salario = $salario;
        $this->id      = $id;
    }

    public function getId()      { return $this->id; }
    public function getNome()    { return $this->nome; }
    public function getSalario() { return $this->salario; }
}
