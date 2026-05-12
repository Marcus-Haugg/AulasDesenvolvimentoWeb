<?php

// Model: representa a entidade Paciente — só dados, sem lógica de banco
class Paciente
{
    private $id;
    private $nome;
    private $prontuario;
    private $tipoSanguinio;

    public function __construct($nome, $prontuario, $tipoSanguinio, $id = null)
    {
        $this->nome          = $nome;
        $this->prontuario    = $prontuario;
        $this->tipoSanguinio = $tipoSanguinio;
        $this->id            = $id;
    }

    public function getId()            { return $this->id; }
    public function getNome()          { return $this->nome; }
    public function getProntuario()    { return $this->prontuario; }
    public function getTipoSanguinio() { return $this->tipoSanguinio; }
}
