<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_video extends CI_Model {
  
 
    public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	function Tampilvideo() 
    {
		$this->db->order_by('id_video');
        return $this->db->from('tbl_video')
			->get();
    }

	public function deletevideo($id_video)
	{
		$this->db->where('id_video', $id_video);
		$this->db->delete('tbl_video');
	}

}