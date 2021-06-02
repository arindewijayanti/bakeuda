<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('model_login');
		$this->load->model('model_download');
		$this->load->library('session');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function tentangbakeuda()
	{
		$this->load->view('tentangbakeuda');
	}

	public function download()
	{
        $data['content'] = $this->model_download->Tampildownload();
		$this->load->view('download',$data);
	}

	function action_download($id_download)
	{
		$data = $this->db->get_where('tbl_download',['id_download'=>$id_download])->row();
		force_download('uploads/'.$data->nama_berkas,NULL);
	}
}
