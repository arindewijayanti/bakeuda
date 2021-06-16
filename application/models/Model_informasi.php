<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_informasi extends CI_Model {
  
 
    public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	function Tampilinformasi() 
    {
		$this->db->order_by('keterangan_berkas');
        return $this->db->from('tbl_informasi')
			->get();
    }

	public function deleteinformasi($id_informasi)
	{
		$this->db->where('id_informasi', $id_informasi);
		$this->db->delete('tbl_informasi');
	}

}