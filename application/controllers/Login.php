<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');

    }
	public function index()
	{
        $this->load->view('login');
	}

    public function primeiro_acesso()
    {
        $load['inc_css'] = ['form-advanced'];
        $load['inc_js'] = ['form-advanced'];
        $this->load->view('novo_usuario', $load);

    }

    public function recuperar_senha()
    {
        $load['inc_css'] = ['form-advanced'];
        $load['inc_js'] = ['form-advanced'];
        $this->load->view('recuperar_senha', $load);

    }
    public function validar_login()
    {
        $this->form_validation->set_rules('email', 'E-mail ou Login', 'trim|required');
        $this->form_validation->set_rules('senha', 'Senha', 'trim|required|min_length[6]');
        if ($this->form_validation->run() == FALSE) {
            if (validation_errors()) {
                $output['error'] = '1';
                $output['msg'] = validation_errors();
                return $this->output->set_content_type('application/json')->set_output(json_encode($output));
            }
        } else {

            $dados_form = $this->input->post();
            $email = $dados_form['email'];
            $senha = $dados_form['senha'];

             $result = $this->crud->Login($email,$senha);


            if ($result->susses == false) {
                $output = $this->response($result->susses,$result->message,$result->data);
                return $this->output->set_content_type('application/json')->set_output(json_encode($output));
            }
           
        }
        switch($result->data->tipo)
        {
            case 'cliente':
                $redirect = 'cliente/home';
					break;
            case 'admin':
                $redirect = 'admin/home';
					break;
        }
        //registros
        $this->global_model->historico([
				'tipo' => 'acesso',
                'nivel' => $result->data->tipo,
                'telefone'=>$result->data->telefone,
                'nome' => $result->data->nome,
                'id_usuario'=> $result->data->id, 
                'acao' => 'Acessou o sistema',
                'info' => 'Acessou o sistema em '.date('d/m/Y \à\s H:i:s'),
                'insert_data' => date('Y-m-d H:i:s')
        ]);

        $this->session->set_userdata([
            'logado' => true,
            'user_id' => $result->data->id,
            'tipo' => $result->data->tipo,
            'nome' => $result->data->nome,
            'foto' =>$result->data->foto,
         ]);
					
       $output = $this->response($result->susses,$result->message,$result->data,$redirect);
        return $this->output->set_content_type('application/json')->set_output(json_encode($output));

    }

private function response($succes,$mensag = "",$data = null,$redirect = null)
{
    $erro = $succes ? '0' : '1';

    $output = [
        "error" => $erro,
        "msg" => $mensag,
        "data" => $data,
        "redirencionar_pagina" => $redirect
        ,
    ];
    return $output;
}
public function logout()
{
    $this->session->sess_destroy();
    $this->output->set_header('Cache-Control: no-cache, must-revalidate');
    $this->output->set_header('Pragma: no-cache');
    redirect('login');
}


}