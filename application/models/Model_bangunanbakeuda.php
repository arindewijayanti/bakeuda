<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_bangunanbakeuda extends CI_Model {
  
 
    public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	function Tampilbangunanbakeuda() 
    {
		$this->db->order_by('nama_berkas');
        return $this->db->from('tbl_bangunanbakeuda')
			->get();
    }

	public function deletebangunanbakeuda($id_bangunanbakeuda)
	{
		$this->db->where('id_bangunanbakeuda', $id_bangunanbakeuda);
		$this->db->delete('tbl_bangunanbakeuda');
	}

}