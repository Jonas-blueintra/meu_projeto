<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'entity/servico.php';
require_once APPPATH . 'entity/Result.php';
class Servicos_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function todos_servicos()
    {
        $sql = "SELECT * FROM servicos ORDER BY valor ASC";
        $query = $this->db->query($sql);
        $servicos = $query->result();

        if (!$servicos) {
            $mensag = " Erro nos Serviços ";
            Result::error($mensag);
        }
        if($servicos)
        {
            return Result::susses($servicos);

        }
        
    }
}