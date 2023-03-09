<?php

class Penawaran extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
        $this->load->model('Penawaran_model');
		$this->load->model('auth_model');
		if (!$this->auth_model->current_user()){
			redirect('backend/auth/login');
		}
	}

	public function index()
	{

        $data['activeUser'] =$this->auth_model->current_user();
        $data['Penawaran'] = $this->Penawaran_model->get_all();

		$this->load->view('backend/list_Penawaran', $data);
	}
}