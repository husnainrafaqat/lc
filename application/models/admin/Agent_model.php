<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Agent_model extends CI_Model{

	public function get_agent_detail($id){
		$query = $this->db->get_where('agent', array('id' => $id));
		return $result = $query->row_array();
	}
	//--------------------------------------------------------------------
	public function update_agent($data,$id){
		$this->db->where('id', $id);
		$this->db->update('agent', $data);
		return true;
	}
	//-----------------------------------------------------
	function get_agent_by_id($id)
	{
		$this->db->from('agent');
		$this->db->where('id',$id);
		$query=$this->db->get();
		return $query->row_array();
	}

	//-----------------------------------------------------
	function get_all()
	{

		$this->db->from('agent');
		//$this->db->where('agent.status',"A");

		$this->db->order_by('agent.id','desc');

		$query = $this->db->get();

		$module = array();

		if ($query->num_rows() > 0) 
		{
			$module = $query->result_array();
		}

		return $module;
	}

	//-----------------------------------------------------
	public function add_agent($data){
		$this->db->insert('agent', $data);
		return true;
	}

	//---------------------------------------------------
	// Edit Admin Record
	public function edit_agent($data, $id){
		$this->db->where('id', $id);
		$this->db->update('agent', $data);
		return true;
	}

	//-----------------------------------------------------
	function change_status()
	{		
		$this->db->set('status',$this->input->post('status'));
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('agent');
} 

	//-----------------------------------------------------
	function delete($id)
	{		
		$this->db->where('id',$id);
		$this->db->delete('agent');
	} 
	

}

?>