<?php

// Model: representa a entidade Curso — só dados, sem lógica de banco
class Curso
{
    private $id;           // identificador gerado pelo banco
    private $nomeCurso;    // nome do curso
    private $cargaHoraria; // carga horária em horas
    private $categoria;    // categoria do curso

    // $id é opcional: não existe ao criar, só após buscar do banco
    public function __construct($nomeCurso, $cargaHoraria, $categoria, $id = null)
    {
        $this->nomeCurso    = $nomeCurso;    // atribui o nome ao objeto
        $this->cargaHoraria = $cargaHoraria; // atribui a carga horária
        $this->categoria    = $categoria;    // atribui a categoria
        $this->id           = $id;           // atribui o id vindo do banco (ou null)
    }

    // Getters: permitem leitura dos atributos privados sem expor a escrita
    public function getId()           { return $this->id; }
    public function getNomeCurso()    { return $this->nomeCurso; }
    public function getCargaHoraria() { return $this->cargaHoraria; }
    public function getCategoria()    { return $this->categoria; }
}
