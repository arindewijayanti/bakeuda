<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_galeri extends CI_Model {
  
 
    public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	function Tampilgaleriutama() 
    {
		$this->db->order_by('id_galeri');
		$this->db->where('id_galeri <=', '7');
        return $this->db->from('tbl_galeri')
			->get();
    }

	function Tampilgaleritambahan() 
    {
		$this->db->order_by('id_galeri');
		$this->db->where('id_galeri >=', '8');
        return $this->db->from('tbl_galeri')
			->get();
    }

	public function deletegaleri($id_galeri)
	{
		$this->db->where('id_galeri', $id_galeri);
		$this->db->delete('tbl_galeri');
	}

}