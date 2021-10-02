<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Bank_model extends CI_Model{

	public function get_bank_detail($id){
		$query = $this->db->get_where('bank', array('id' => $id));
		return $result = $query->row_array();
	}
	//--------------------------------------------------------------------
	public function update_bank($data,$id){
		$this->db->where('id', $id);
		$this->db->update('bank', $data);
		return true;
	}
	//-----------------------------------------------------
	function get_bank_by_id($id)
	{
		$this->db->from('bank');
		$this->db->where('id',$id);
		$query=$this->db->get();
		return $query->row_array();
	}

	//-----------------------------------------------------
	function get_all()
	{

		$this->db->from('bank');
		//$this->db->where('bank.status',"A");

		$this->db->order_by('bank.id','desc');

		$query = $this->db->get();

		$module = array();

		if ($query->num_rows() > 0) 
		{
			$module = $query->result_array();
		}

		return $module;
	}

	//-----------------------------------------------------
	public function add_bank($data){
		$this->db->insert('bank', $data);
		return true;
	}

	//---------------------------------------------------
	// Edit Admin Record
	public function edit_bank($data, $id){
		$this->db->where('id', $id);
		$this->db->update('bank', $data);
		return true;
	}

	//-----------------------------------------------------
	function change_status()
	{		
		$this->db->set('status',$this->input->post('status'));
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('bank');
} 

	//-----------------------------------------------------
	function delete($id)
	{		
		$this->db->where('id',$id);
		$this->db->delete('bank');
	} 
	

}

?>