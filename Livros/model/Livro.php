<?php

// Model: representa a entidade Livro — só dados, sem lógica de banco
class Livro
{
    private $id;
    private $titulo;
    private $autor;
    private $isbn;

    public function __construct($titulo, $autor, $isbn, $id = null)
    {
        $this->titulo = $titulo;
        $this->autor  = $autor;
        $this->isbn   = $isbn;
        $this->id     = $id;
    }

    public function getId()     { return $this->id; }
    public function getTitulo() { return $this->titulo; }
    public function getAutor()  { return $this->autor; }
    public function getIsbn()   { return $this->isbn; }
}
