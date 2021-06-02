<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_slidegambarutama extends CI_Model {
  
 
    public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	function Tampilslidegambarutama() 
    {
		$this->db->order_by('nama_berkas');
        return $this->db->from('tbl_slidegambarutama')
			->get();
    }

	public function deleteslidegambarutama($id_slidegambarutama)
	{
		$this->db->where('id_slidegambarutama', $id_slidegambarutama);
		$this->db->delete('tbl_slidegambarutama');
	}

}