<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

	public function __construct()
	{
		parent::__construct();
        $this->load->library('session');
	}

	public function action_login($username, $password)
		{
			$this->db->select('username,level,nama');
			$this->db->from('tbl_akun');
			$this->db->where('username', $username);
			$this->db->where('password', $password);
			$this->db->limit(1);

			$query = $this->db->get();
			if ($query->num_rows()==1) {
				return $query->result();
			} else{
				return false;
				
			}
		}
}

/* End of file model_login.php */
/* Location: ./application/models/model_login.php */