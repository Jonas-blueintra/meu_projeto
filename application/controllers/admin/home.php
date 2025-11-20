<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->autori->admin();
    }

    public function index()
    {
        $this->load->view('admin\pages\home');
    }
}
