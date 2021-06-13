<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_berita extends CI_Model {
  
 
    public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	function Tampilberita() 
    {
		$this->db->order_by('keterangan_berkas');
        return $this->db->from('tbl_berita')
			->get();
    }

	public function deleteberita($id_strukturorganisasi)
	{
		$this->db->where('id_strukturorganisasi', $id_strukturorganisasi);
		$this->db->delete('tbl_berita');
	}

}