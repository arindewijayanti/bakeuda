<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_profil extends CI_Model {
  
 
    public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	function Tampilprofil() 
    {
		$this->db->order_by('id_profil');
        return $this->db->from('tbl_profil')
			->get();
    }

	public function deleteprofil($id_profil)
	{
		$this->db->where('id_profil', $id_profil);
		$this->db->delete('tbl_profil');
	}

}