<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_situsterkait extends CI_Model {
  
 
    public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	function Tampilsitusterkait() 
    {
		$this->db->order_by('id_situsterkait');
        return $this->db->from('tbl_situsterkait')
			->get();
    }

	public function deletesitusterkait($id_situsterkait)
	{
		$this->db->where('id_situsterkait', $id_situsterkait);
		$this->db->delete('tbl_situsterkait');
	}

}