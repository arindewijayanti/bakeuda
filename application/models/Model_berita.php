<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_berita extends CI_Model {
  
 
    public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	function Tampilberita() 
    {
		$this->db->order_by('tanggal');
        return $this->db->from('tbl_berita')
			->get();
    }

	public function deleteberita($id_berita)
	{
		$this->db->where('id_berita', $id_berita);
		$this->db->delete('tbl_berita');
	}

	function Tampilsepuluhberita() 
    {
		$this->db->order_by('tanggal');
        return $this->db->from('tbl_berita')
			->get();
    }

	
	function Tampilberitaid($id_berita) 
    {
		$this->db->where('id_berita' ,$id_berita);
        return $this->db->from('tbl_berita')
			->get()
			->row();
    }
	

}