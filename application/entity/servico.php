<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servico
{
    public $id;
    public $nome;
    public $valor;
    public $foto;

    public function __construct($Id,$Nome,$Valor,$Foto)
    {
        $this->id = $Id;
        $this->nome = $Nome;
        $this->valor = $Valor;
        $this->foto = $Foto;
    }
}