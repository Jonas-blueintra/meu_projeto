<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'entity/user_entity.php';
require_once APPPATH . 'entity/Result.php';

class Crud extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function Login($login, $senha)
    {
        $sql = "SELECT * FROM usuario_admin WHERE login = ?";
        $query = $this->db->query($sql, [$login]);
        $usuario = $query->row();
        

        if(!$usuario)
        {
            $sql = "SELECT * FROM usuarios WHERE login = ?";
            $query = $this->db->query($sql, [$login]);
            $usuario = $query->row();
        }

        if (!$usuario) {
            $mensag = 'Úsuario não encontrado!';
            return Result::error($mensag); // Usuário não encontrado
        }

        if ($usuario->senha != $senha) {
            $mensag = "Senha inválida";
            return Result::error($mensag); // senha incorreta
        }
        $mensag = 'Login autorizado';
        // Criar entity
        return Result::susses(new User_entity(
            $usuario->id,
            $usuario->nome,
            $usuario->email,
            $usuario->login,
            $usuario->foto,
            $usuario->sexo,
            $usuario->telefone,
            $usuario->endereco,
            $usuario->tipo,
            $usuario->status
        ),$mensag,
    );
    }
}
