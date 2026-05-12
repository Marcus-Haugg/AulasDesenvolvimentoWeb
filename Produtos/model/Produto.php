<?php

// Model: representa a entidade Produto — só dados, sem lógica de banco
class Produto
{
    private $id;
    private $codigoBarras;
    private $descricao;
    private $preco;

    public function __construct($codigoBarras, $descricao, $preco, $id = null)
    {
        $this->codigoBarras = $codigoBarras;
        $this->descricao    = $descricao;
        $this->preco        = $preco;
        $this->id           = $id;
    }

    public function getId()           { return $this->id; }
    public function getCodigoBarras() { return $this->codigoBarras; }
    public function getDescricao()    { return $this->descricao; }
    public function getPreco()        { return $this->preco; }
}
