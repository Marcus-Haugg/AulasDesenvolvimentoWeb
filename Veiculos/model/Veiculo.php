<?php

// Model: representa a entidade Veiculo — só dados, sem lógica de banco
class Veiculo
{
    private $id;
    private $placa;
    private $modelo;
    private $marca;

    public function __construct($placa, $modelo, $marca, $id = null)
    {
        $this->placa  = $placa;
        $this->modelo = $modelo;
        $this->marca  = $marca;
        $this->id     = $id;
    }

    public function getId()     { return $this->id; }
    public function getPlaca()  { return $this->placa; }
    public function getModelo() { return $this->modelo; }
    public function getMarca()  { return $this->marca; }
}
