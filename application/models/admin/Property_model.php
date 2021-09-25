<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Property_model extends CI_Model{

	public function get_property_detail($id){
		$query = $this->db->get_where('ci_property', array('pRecordId' => $id));
		return $result = $query->row_array();
	}
	//--------------------------------------------------------------------
	public function update_property($data,$id){
		$this->db->where('pRecordId', $id);
		$this->db->update('ci_property', $data);
		return true;
	}
	//-----------------------------------------------------
	function get_property_by_id($id)
	{
		$this->db->from('ci_property');
		$this->db->where('pRecordId',$id);
		$query=$this->db->get();
		return $query->row_array();
	}

	//-----------------------------------------------------
	function get_all()
	{

		$this->db->from('ci_property');
		//$this->db->where('ci_property.status',"A");

		$this->db->order_by('ci_property.pRecordId','desc');

		$query = $this->db->get();

		$module = array();

		if ($query->num_rows() > 0) 
		{
			$module = $query->result_array();
		}

		return $module;
	}

	//-----------------------------------------------------
public function add_property($data){
	$this->db->insert('ci_property', $data);
	return true;
}

	//---------------------------------------------------
	// Edit Admin Record
public function edit_property($data, $id){
	$this->db->where('pRecordId', $id);
	$this->db->update('ci_property', $data);
	return true;
}

	//-----------------------------------------------------
function change_status()
{		
	$this->db->set('status',$this->input->post('status'));
	$this->db->where('pRecordId',$this->input->post('id'));
	$this->db->update('ci_property');
} 

	//-----------------------------------------------------
function delete($id)
{		
	$this->db->where('pRecordId',$id);
	$this->db->delete('ci_property');
} 

}

?>