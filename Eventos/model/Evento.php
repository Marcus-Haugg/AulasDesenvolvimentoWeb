<?php

// Model: representa a entidade Evento — só dados, sem lógica de banco
class Evento
{
    private $id;
    private $nomeEvento;
    private $data;
    private $local;

    public function __construct($nomeEvento, $data, $local, $id = null)
    {
        $this->nomeEvento = $nomeEvento;
        $this->data       = $data;
        $this->local      = $local;
        $this->id         = $id;
    }

    public function getId()         { return $this->id; }
    public function getNomeEvento() { return $this->nomeEvento; }
    public function getData()       { return $this->data; }
    public function getLocal()      { return $this->local; }
}
