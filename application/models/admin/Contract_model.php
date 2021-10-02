<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Contract_model extends CI_Model{

	public function get_contract_detail($id){
		$query = $this->db->get_where('contract', array('id' => $id));
		return $result = $query->row_array();
	}
	//--------------------------------------------------------------------
	public function update_contract($data,$id){
		$this->db->where('id', $id);
		$this->db->update('contract', $data);
		return true;
	}
	//-----------------------------------------------------
	function get_contract_by_id($id)
	{
		$this->db->from('contract');
		$this->db->where('id',$id);
		$query=$this->db->get();
		return $query->row_array();
	}

	//-----------------------------------------------------
	function get_all()
	{

		$this->db->from('contract');
		//$this->db->where('contract.status',"A");

		$this->db->order_by('contract.id','desc');

		$query = $this->db->get();

		$module = array();

		if ($query->num_rows() > 0) 
		{
			$module = $query->result_array();
		}

		return $module;
	}

	//-----------------------------------------------------
	public function add_contract($data){
		$this->db->insert('contract', $data);
		return true;
	}

	//---------------------------------------------------
	// Edit Admin Record
	public function edit_contract($data, $id){
		$this->db->where('id', $id);
		$this->db->update('contract', $data);
		return true;
	}

	//-----------------------------------------------------
	function change_status()
	{		
		$this->db->set('status',$this->input->post('status'));
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('contract');
} 

	//-----------------------------------------------------
	function delete($id)
	{		
		$this->db->where('id',$id);
		$this->db->delete('contract');
	} 
	

}

?>