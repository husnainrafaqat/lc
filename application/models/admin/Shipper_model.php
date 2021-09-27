<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Shipper_model extends CI_Model{

	public function get_shipper_detail($id){
		$query = $this->db->get_where('shipper', array('id' => $id));
		return $result = $query->row_array();
	}
	//--------------------------------------------------------------------
	public function update_shipper($data,$id){
		$this->db->where('id', $id);
		$this->db->update('shipper', $data);
		return true;
	}
	//-----------------------------------------------------
	function get_shipper_by_id($id)
	{
		$this->db->from('shipper');
		$this->db->where('id',$id);
		$query=$this->db->get();
		return $query->row_array();
	}

	//-----------------------------------------------------
	function get_all()
	{

		$this->db->from('shipper');
		//$this->db->where('shipper.status',"A");

		$this->db->order_by('shipper.id','desc');

		$query = $this->db->get();

		$module = array();

		if ($query->num_rows() > 0) 
		{
			$module = $query->result_array();
		}

		return $module;
	}

	//-----------------------------------------------------
	public function add_shipper($data){
		$this->db->insert('shipper', $data);
		return true;
	}

	//---------------------------------------------------
	// Edit Admin Record
	public function edit_shipper($data, $id){
		$this->db->where('id', $id);
		$this->db->update('shipper', $data);
		return true;
	}

	//-----------------------------------------------------
	function change_status()
	{		
		$this->db->set('status',$this->input->post('status'));
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('shipper');
} 

	//-----------------------------------------------------
	function delete($id)
	{		
		$this->db->where('id',$id);
		$this->db->delete('shipper');
	} 
	

}

?>