<?php

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
		$this->load->model('lelang_model');
		if(!$this->auth_model->current_user()){
			redirect('backend/auth/login');
		}
	}
	public function index()
	{
		$data['activeUser'] = $this->auth_model->current_user(); //menampilkan level
		$data['berlangsung'] = $this->lelang_model->get_lelang_berlangsung(); //menampilkan data
		// $data['dashboard'] = $this->lelang_model->get_pemenangLelang(); //menampilkan data
		$data['pemenang'] = $this->lelang_model->get_pemenangLelangDash(); //menampilkan data

		$this->load->view('backend/dashboard', $data);
	}
}