<?php
class Demo_Model extends CI_Model
{

	public function insert_data()
	{
		$data = array('email'=>$this->input->post('email'),
                      'name'=>$this->input->post('uname'),
                        'message'=>$this->input->post('mess'));

		$this->db->insert('contact',$data);


	}
}

?>