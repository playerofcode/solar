<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

	public function addEnquiry($data)
	{
		return $this->db->insert('contact',$data);
	}
	public function whatsNewList($id='')
	{
		if($id):
		return $this->db->get_where('whats_app',array('id'=>$id))->result();
		else:
		$this->db->order_by('id','desc');
		return $this->db->get('whats_app')->result();
		endif;
	}
	//25 May, 2022
	public function finder($tbl_name,$id)
	{
		return $this->db->get_where($tbl_name,array('id'=>$id))->result();
	}

}

/* End of file Home_model.php */
/* Location: ./application/models/Home_model.php */