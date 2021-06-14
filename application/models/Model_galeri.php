<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_galeri extends CI_Model {
  
 
    public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	function Tampilgaleri() 
    {
		$this->db->order_by('id_galeri');
        return $this->db->from('tbl_galeri')
			->get();
    }

	public function deletegaleri($id_galeri)
	{
		$this->db->where('id_galeri', $id_galeri);
		$this->db->delete('tbl_galeri');
	}

}