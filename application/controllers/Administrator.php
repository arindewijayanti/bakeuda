<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('model_login');
		$this->load->model('model_download');
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

	public function download()
	{
        $data['content'] = $this->model_download->Tampildownload();
		$this->load->view('administrator/download',$data);
	}

	public function downloadadd()
	{
        $this->load->view('administrator/downloadadd');
	}

	public function action_downloadadd()
	{
		$config['upload_path'] = './upload_download/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2000;
 
 
        $this->load->library('upload', $config);
 
        if (!$this->upload->do_upload('profile_pic')) 
        {
            $error = array('error' => $this->upload->display_errors());
 
            $this->load->view('imageupload_form', $error);
        } 
        else 
        {
            $data = array('image_metadata' => $this->upload->data());
 
            $this->load->view('imageupload_success', $data);
        }
	}

	


}
