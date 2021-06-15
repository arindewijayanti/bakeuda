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
		$this->load->model('model_informasi');
		$this->load->model('model_berita');
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
		$data['slidegambarutama1'] = $this->db->get_where('tbl_slidegambarutama',['id_slidegambarutama'=>'1'])->row();
		$data['slidegambarutama2'] = $this->db->get_where('tbl_slidegambarutama',['id_slidegambarutama'=>'2'])->row();
		$data['slidegambarutama3'] = $this->db->get_where('tbl_slidegambarutama',['id_slidegambarutama'=>'3'])->row();

		$data['bangunanbakeuda1'] = $this->db->get_where('tbl_bangunanbakeuda',['id_bangunanbakeuda'=>'1'])->row();
		$data['bangunanbakeuda2'] = $this->db->get_where('tbl_bangunanbakeuda',['id_bangunanbakeuda'=>'2'])->row();
		$data['bangunanbakeuda3'] = $this->db->get_where('tbl_bangunanbakeuda',['id_bangunanbakeuda'=>'3'])->row();

		
		$data['profil'] = $this->db->get_where('tbl_profil',['id_profil'=>'1'])->row();
		
		$data['videoutama'] = $this->db->get_where('tbl_video',['id_video'=>'1'])->row();
		$data['videopendukung1'] = $this->db->get_where('tbl_video',['id_video'=>'2'])->row();
		$data['videopendukung2'] = $this->db->get_where('tbl_video',['id_video'=>'3'])->row();

		$data['galeri1'] = $this->db->get_where('tbl_galeri',['id_galeri'=>'1'])->row();
		$data['galeri2'] = $this->db->get_where('tbl_galeri',['id_galeri'=>'2'])->row();
		$data['galeri3'] = $this->db->get_where('tbl_galeri',['id_galeri'=>'3'])->row();
		$data['galeri4'] = $this->db->get_where('tbl_galeri',['id_galeri'=>'4'])->row();
		$data['galeri5'] = $this->db->get_where('tbl_galeri',['id_galeri'=>'5'])->row();
		$data['galeri6'] = $this->db->get_where('tbl_galeri',['id_galeri'=>'6'])->row();
		$data['galeri7'] = $this->db->get_where('tbl_galeri',['id_galeri'=>'7'])->row();

		$data['sepuluhberita'] = $this->model_berita->Tampilsepuluhberita();

		$this->load->view('welcome_message',$data);
	}

	public function tentangbakeuda()
	{
		$data['visi'] = $this->db->get_where('tbl_tentangbakeuda',['judul'=>'Visi'])->row();
		$data['misi'] = $this->db->get_where('tbl_tentangbakeuda',['judul'=>'Misi'])->row();
		$data['struktur'] = $this->db->get_where('tbl_tentangbakeuda',['judul'=>'Struktur'])->row();
		$data['profil'] = $this->db->get_where('tbl_profil',['id_profil'=>'1'])->row();

		$this->load->view('tentangbakeuda',$data);
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

	public function informasi()
	{
        $data['content'] = $this->model_informasi->Tampilinformasi();
		$this->load->view('informasi',$data);
	}

	function action_informasi($id_informasi)
	{
		$data = $this->db->get_where('tbl_informasi',['id_informasi'=>$id_informasi])->row();
		force_download('uploads/'.$data->nama_berkas,NULL);
	}

	function baca($id_berita)
	{
		$data['content'] = $this->model_berita->Tampilberitaid($id_berita);
		$this->load->view('baca',$data);
	}
}
