<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('model_login');
		$this->load->model('model_download');
		$this->load->model('model_informasi');
		$this->load->model('model_bangunanbakeuda');
		$this->load->model('model_profil');
		$this->load->model('model_galeri');
		$this->load->model('model_slidegambarutama');
		$this->load->model('model_tentangbakeuda');
		$this->load->model('model_video');
		$this->load->model('model_berita');
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
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|jpeg|png|pdf';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ( ! $this->upload->do_upload('berkas'))
		{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('administrator/downloadadd', $error);
		}
		else
		{
			$data['nama_berkas'] = $this->upload->data("file_name");
			$data['keterangan_berkas'] = $this->input->post('keterangan_berkas');
			$this->db->insert('tbl_download',$data);
			$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">File berhasil di Upload</div>');
			redirect('administrator/download');
		}
	}

	public function action_deletedownload($id_download = '')
	{
			$this->model_download->deletedownload($id_download);
			$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">File berhasil dihapus</div>');
			redirect('administrator/download','refresh');
	}


	public function berita()
	{
        $data['content'] = $this->model_berita->Tampilberita();
		$this->load->view('administrator/berita',$data);
	}

	public function beritaadd()
	{
        $this->load->view('administrator/beritaadd');
	}

	public function action_beritaadd()
	{
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|jpeg|png|pdf';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ( ! $this->upload->do_upload('berkas'))
		{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('administrator/beritaadd', $error);
		}
		else
		{
			$data['nama_berkas'] = $this->upload->data("file_name");
			$data['keterangan_berkas'] = $this->input->post('keterangan_berkas');
			$this->db->insert('tbl_berita',$data);
			$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">File berhasil di Upload</div>');
			redirect('administrator/berita');
		}
	}

	public function action_deleteberita($id_strukturorganisasi = '')
	{
			$this->model_berita->deleteberita($id_strukturorganisasi);
			$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">File berhasil dihapus</div>');
			redirect('administrator/berita','refresh');
	}

	public function slidegambarutama()
	{
        $data['content'] = $this->model_slidegambarutama->Tampilslidegambarutama();
		$this->load->view('administrator/slidegambarutama',$data);
	}

	public function slidegambarutamaedit($id_slidegambarutama = NULL)
	{
		$this->db->where('id_slidegambarutama', $id_slidegambarutama);
		$data['content'] = $this->db->get('tbl_slidegambarutama');
		$this->load->view('administrator/slidegambarutamaedit', $data);
	}

	public function action_slidegambarutamaupdate()
	{
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'jpg|jpeg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ( ! $this->upload->do_upload('berkas'))
		{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('administrator/slidegambarutama', $error);
		}
		else
		{
			
			$id_slidegambarutama = $this->input->post('id_slidegambarutama');
			$data['nama_berkas'] = $this->upload->data("file_name");
			$this->db->where('id_slidegambarutama', $id_slidegambarutama);
			$this->db->update('tbl_slidegambarutama',$data);
			$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">File berhasil di Upload</div>');
			redirect('administrator/slidegambarutama');
		}
	}

	public function video()
	{
        $data['content'] = $this->model_video->Tampilvideo();
		$this->load->view('administrator/video',$data);
	}

	public function videoadd()
	{
        $this->load->view('administrator/videoadd');
	}

	public function action_editvideo($id_video = '')
	{
		$this->db->where('id_video', $id_video);
		$data['content'] = $this->db->get('tbl_video');
		$this->load->view('administrator/videoedit', $data);
	}

	function action_videoadd()
    {
        $data = array(
			'judul'=>$this->input->post('judul'),
			'keterangan'=>$this->input->post('keterangan'),
			'link'=>$this->input->post('link')
        );
		$id_video = $this->input->post('id_video');
		$this->db->where('id_video', $id_video);
        $this->db->update('tbl_video',$data);

		
		$data['content'] = $this->db->get('tbl_video');
		redirect('administrator/video');
	}

	public function bangunanbakeuda()
	{
        $data['content'] = $this->model_bangunanbakeuda->Tampilbangunanbakeuda();
		$this->load->view('administrator/bangunanbakeuda',$data);
	}

	public function bangunanbakeudaedit($id_bangunanbakeuda = NULL)
	{
		$this->db->where('id_bangunanbakeuda', $id_bangunanbakeuda);
		$data['content'] = $this->db->get('tbl_bangunanbakeuda');
		$this->load->view('administrator/bangunanbakeudaedit', $data);
	}

	public function action_bangunanbakeudaupdate()
	{

		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'jpg|jpeg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ( ! $this->upload->do_upload('berkas'))
		{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('administrator/bangunanbakeuda', $error);
		}
		else
		{
			
			$id_bangunanbakeuda = $this->input->post('id_bangunanbakeuda');
			$data['nama_berkas'] = $this->upload->data("file_name");
			$data['keterangan'] = $this->input->post('keterangan');
			$data['judul'] = $this->input->post('judul');
			$this->db->where('id_bangunanbakeuda', $id_bangunanbakeuda);
			$this->db->update('tbl_bangunanbakeuda',$data);
			$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">File berhasil di Upload</div>');
			redirect('administrator/bangunanbakeuda');
		}


	}

	public function tentangbakeuda()
	{
        $data['content'] = $this->model_tentangbakeuda->Tampiltentangbakeuda();
        $data['struktur'] = $this->model_tentangbakeuda->Tampiltentangbakeudastruktur();
		$this->load->view('administrator/tentangbakeuda',$data);
	}

	public function tentangbakeudaadd()
	{
        $this->load->view('administrator/tentangbakeudaadd');
	}

	public function action_edittentangbakeuda($id_tentangbakeuda = '')
	{
		$this->db->where('id_tentangbakeuda', $id_tentangbakeuda);
		$data['content'] = $this->db->get('tbl_tentangbakeuda');
		$this->load->view('administrator/tentangbakeudaedit', $data);
	}

	function action_tentangbakeudaadd()
    {
        $data = array(
			'judul'=>$this->input->post('judul'),
			'keterangan'=>$this->input->post('keterangan')
        );
		$id_tentangbakeuda = $this->input->post('id_tentangbakeuda');
		$this->db->where('id_tentangbakeuda', $id_tentangbakeuda);
        $this->db->update('tbl_tentangbakeuda',$data);

		
		$data['content'] = $this->db->get('tbl_tentangbakeuda');
		redirect('administrator/tentangbakeuda');
	}

	public function strukturorganisasi()
	{
        $data['content'] = $this->model_tentangbakeuda->Tampiltentangbakeudastruktur();
		$this->load->view('administrator/strukturorganisasi',$data);
	}

	public function strukturorganisasiadd()
	{
        $this->load->view('administrator/strukturorganisasiadd');
	}

	public function action_strukturorganisasiadd()
	{
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'jpg|jpeg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ( ! $this->upload->do_upload('berkas'))
		{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('administrator/strukturorganisasiadd', $error);
		}
		else
		{
			$data['keterangan'] = $this->upload->data("file_name");
			$data['judul'] = "Struktur";
			$this->db->insert('tbl_tentangbakeuda',$data);
			$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">File berhasil di Upload</div>');
			redirect('administrator/strukturorganisasi');
		}
	}

	public function action_deletestrukturorganisasi($id_strukturorganisasi = '')
	{
			$this->model_tentangbakeuda->deletetentangbakeuda($id_strukturorganisasi);
			$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">File berhasil dihapus</div>');
			redirect('administrator/strukturorganisasi','refresh');
	}

	public function profil()
	{
        $data['content'] = $this->model_profil->Tampilprofil();
		$this->load->view('administrator/profil',$data);
	}

	public function profiledit($id_profil = NULL)
	{
		$this->db->where('id_profil', $id_profil);
		$data['content'] = $this->db->get('tbl_profil');
		$this->load->view('administrator/profiledit', $data);
	}

	public function action_profilupdate()
	{

		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'jpg|jpeg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ( ! $this->upload->do_upload('berkas'))
		{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('administrator/profil', $error);
		}
		else
		{
			
			$id_profil = $this->input->post('id_profil');
			$data['nama_berkas'] = $this->upload->data("file_name");
			$data['nama'] = $this->input->post('nama');
			$data['jabatan'] = $this->input->post('jabatan');
			$this->db->where('id_profil', $id_profil);
			$this->db->update('tbl_profil',$data);
			$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">File berhasil di Upload</div>');
			redirect('administrator/profil');
		}


	}

	public function galeri()
	{
        $data['contentutama'] = $this->model_galeri->Tampilgaleriutama();
        $data['contenttambahan'] = $this->model_galeri->Tampilgaleritambahan();
		$this->load->view('administrator/galeri',$data);
	}

	public function galeriedit($id_galeri = NULL)
	{
		$this->db->where('id_galeri', $id_galeri);
		$data['content'] = $this->db->get('tbl_galeri');
		$this->load->view('administrator/galeriedit', $data);
	}

	public function action_galeriupdate()
	{

		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'jpg|jpeg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ( ! $this->upload->do_upload('berkas'))
		{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('administrator/galeri', $error);
		}
		else
		{
			
			$id_galeri = $this->input->post('id_galeri');
			$data['nama_berkas'] = $this->upload->data("file_name");
			$data['judul'] = $this->input->post('judul');
			$this->db->where('id_galeri', $id_galeri);
			$this->db->update('tbl_galeri',$data);
			$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">File berhasil di Upload</div>');
			redirect('administrator/galeri');
		}


		

	}

	public function galeriadd()
	{
        $this->load->view('administrator/galeriadd');
	}

	public function action_galeriadd()
	{
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'jpg|jpeg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ( ! $this->upload->do_upload('berkas'))
		{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('administrator/galeriadd', $error);
		}
		else
		{
			$data['nama_berkas'] = $this->upload->data("file_name");
			$data['judul'] = $this->input->post('judul');
			$this->db->insert('tbl_galeri',$data);
			$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">File berhasil di Upload</div>');
			redirect('administrator/galeri');
		}
	}

	public function action_deletegaleri($id_galeri = '')
	{
			$this->model_galeri->deletegaleri($id_galeri);
			$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">File berhasil dihapus</div>');
			redirect('administrator/galeri','refresh');
	}

	public function informasi()
	{
        $data['content'] = $this->model_informasi->Tampilinformasi();
		$this->load->view('administrator/informasi',$data);
	}

	public function informasiadd()
	{
        $this->load->view('administrator/informasiadd');
	}

	public function action_informasiadd()
	{
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|jpeg|png|pdf';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ( ! $this->upload->do_upload('berkas'))
		{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('administrator/informasiadd', $error);
		}
		else
		{
			$data['nama_berkas'] = $this->upload->data("file_name");
			$data['keterangan_berkas'] = $this->input->post('keterangan_berkas');
			$this->db->insert('tbl_informasi',$data);
			$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">File berhasil di Upload</div>');
			redirect('administrator/informasi');
		}
	}

	public function action_deleteinformasi($id_informasi = '')
	{
			$this->model_informasi->deleteinformasi($id_informasi);
			$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">File berhasil dihapus</div>');
			redirect('administrator/informasi','refresh');
	}
	


}
