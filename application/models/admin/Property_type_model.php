<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Property_type_model extends CI_Model{

	public function get_property_type_detail($id){
		$query = $this->db->get_where('ci_property_type', array('ptRecordId' => $id));
		return $result = $query->row_array();
	}
	//--------------------------------------------------------------------
	public function update_property_type($data,$id){
		$this->db->where('ptRecordId', $id);
		$this->db->update('ci_property_type', $data);
		return true;
	}
	//-----------------------------------------------------
	function get_property_type_by_id($id)
	{
		$this->db->from('ci_property_type');
		$this->db->where('ptRecordId',$id);
		$query=$this->db->get();
		return $query->row_array();
	}

	//-----------------------------------------------------
	function get_all()
	{

		$this->db->from('ci_property_type');
		//$this->db->where('ci_property_type.status',"A");

		$this->db->order_by('ci_property_type.ptRecordId','desc');

		$query = $this->db->get();

		$module = array();

		if ($query->num_rows() > 0) 
		{
			$module = $query->result_array();
		}

		return $module;
	}

	//-----------------------------------------------------
public function add_property_type($data){
	$this->db->insert('ci_property_type', $data);
	return true;
}

	//---------------------------------------------------
	// Edit Admin Record
public function edit_property_type($data, $id){
	$this->db->where('ptRecordId', $id);
	$this->db->update('ci_property_type', $data);
	return true;
}

	//-----------------------------------------------------
function change_status()
{		
	$this->db->set('status',$this->input->post('status'));
	$this->db->where('ptRecordId',$this->input->post('id'));
	$this->db->update('ci_property_type');
} 

	//-----------------------------------------------------
function delete($id)
{		
	$this->db->where('ptRecordId',$id);
	$this->db->delete('ci_property_type');
} 

}

?>