<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_polling extends CI_Model {
  
 
    public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	function Tampilpolling() 
    {
		$this->db->order_by('id');
        return $this->db->from('polling')
			->get();
    }
}