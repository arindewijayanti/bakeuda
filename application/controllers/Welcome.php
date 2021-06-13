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

		$data['videoutama'] = $this->db->get_where('tbl_video',['id_video'=>'1'])->row();
		$data['videopendukung1'] = $this->db->get_where('tbl_video',['id_video'=>'2'])->row();
		$data['videopendukung2'] = $this->db->get_where('tbl_video',['id_video'=>'3'])->row();

		
		$data['bangunanbakeuda1'] = $this->db->get_where('tbl_bangunanbakeuda',['id_bangunanbakeuda'=>'1'])->row();
		$data['bangunanbakeuda2'] = $this->db->get_where('tbl_bangunanbakeuda',['id_bangunanbakeuda'=>'2'])->row();
		$data['bangunanbakeuda3'] = $this->db->get_where('tbl_bangunanbakeuda',['id_bangunanbakeuda'=>'3'])->row();

		$this->load->view('welcome_message',$data);
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
