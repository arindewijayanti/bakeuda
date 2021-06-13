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
		$this->load->model('model_slidegambarutama');
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
		$config['encrypt_name']			= TRUE;
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
		$config['encrypt_name']			= TRUE;
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
			$id = $this->input->post('nama_berkas');
			$_id = $this->db->get_where('tbl_slidegambarutama',['nama_berkas' => $id])->row();
            $query = $this->db->delete('tbl_slidegambarutama',['nama_berkas'=>$id]);
            if($query){
                unlink("./assets/img/".$_id->image);
            }

			/*
			$config['upload_path']          = './assets/img/';
			$config['allowed_types']        = 'jpg|jpeg|png';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ( ! $this->upload->do_upload('berkas'))
			{
					$error = array('error' => $this->upload->display_errors());
					$this->load->view('administrator/slidegambarutamaedit', $error);
			}
			else
			{
				$data['nama_berkas'] = $this->input->post('nama_berkas');
				$this->db->insert('tbl_slidegambarutama',$data);
				$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">File berhasil di Upload</div>');
				redirect('administrator/slidegambarutama');
			}
			*/
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

	


}
