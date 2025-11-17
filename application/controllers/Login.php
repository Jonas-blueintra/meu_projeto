<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
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
        $this->form_validation->set_rules('email','E-mail','trim|required');
        $this->form_validation->set_rules('senha','Senha','trim|required');
        if($this->form_validation->run() == FALSE):
            if(validation_errors()):
            $output['error'] = '1';
				$output['msg'] = validation_errors();
				return $this->output->set_content_type('application/json')->set_output(json_encode($output));
			endif;
         else:
			$dados_form = $this->input->post();
         endif;
            
     }
}