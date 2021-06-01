<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('model_login');
		$this->load->library('session');
	}

	public function index()
	{
		if ($this->session->userdata('level') == "admin") {
			redirect('administrator/home','refresh');
        } else {
			$this->load->view('administrator/login');
		}
	}

	public function action_login()
	{
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$ceklogin = $this->model_login->action_login($username, $password);

		if ($ceklogin) {
			foreach ($ceklogin as $row) {
				$this->session->set_userdata('username', $row->username);
				$this->session->set_userdata('level', $row->level);			
				$this->session->set_userdata('nama', $row->nama);
				if ($this->session->userdata('level') == "admin") {
					redirect('administrator/home','refresh');
				}
			}
		}
				 else {
					$this->load->view('administrator/login');	
				}

	}

	public function logout()
	{
		$this->session->sess_destroy();
		$this->load->view('administrator/login');
	}
	
	public function home()
	{
		$this->load->view('administrator/home');
	}

}
