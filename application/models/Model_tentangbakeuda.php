<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_tentangbakeuda extends CI_Model {
  
 
    public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	function Tampiltentangbakeuda() 
    {
		$this->db->order_by('id_tentangbakeuda');
		$this->db->where('id_tentangbakeuda !=','3');
        return $this->db->from('tbl_tentangbakeuda')
			->get();
    }
	public function deletetentangbakeuda($id_tentangbakeuda)
	{
		$this->db->where('id_tentangbakeuda', $id_tentangbakeuda);
		$this->db->delete('tbl_tentangbakeuda');
	}

	function Tampiltentangbakeudastruktur() 
    {
		$this->db->order_by('id_tentangbakeuda');
		$this->db->where('judul','Struktur');
        return $this->db->from('tbl_tentangbakeuda')
			->get();
    }

}