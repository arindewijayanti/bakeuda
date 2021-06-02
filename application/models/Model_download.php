<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_download extends CI_Model {
  
 
    public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	function Tampildownload() 
    {
		$this->db->order_by('keterangan_berkas');
        return $this->db->from('tbl_download')
			->get();
    }

	public function deletedownload($id_download)
	{
		$this->db->where('id_download', $id_download);
		$this->db->delete('tbl_download');
	}

}