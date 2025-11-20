<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Global_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function historico($dados)
    {
     $this->global_model->insert('historico',$dados);
    }
    public function insert($tabela,$dados)
    {
        $this->db->insert($tabela,$dados);
        return $this->db->insert_id();
    }
    
}