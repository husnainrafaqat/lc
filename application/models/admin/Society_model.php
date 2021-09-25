<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Society_model extends CI_Model{

	public function get_society_detail($id){
		$query = $this->db->get_where('ci_society', array('scRecordId' => $id));
		return $result = $query->row_array();
	}
	//--------------------------------------------------------------------
	public function update_society($data,$id){
		$this->db->where('scRecordId', $id);
		$this->db->update('ci_society', $data);
		return true;
	}
	//-----------------------------------------------------
	function get_society_by_id($id)
	{
		$this->db->from('ci_society');
		$this->db->where('scRecordid',$id);
		$query=$this->db->get();
		return $query->row_array();
	}

	//-----------------------------------------------------
	function get_all()
	{

		$this->db->from('ci_society');
		//$this->db->where('ci_society.status',"A");

		$this->db->order_by('ci_society.scRecordId','desc');

		$query = $this->db->get();

		$module = array();

		if ($query->num_rows() > 0) 
		{
			$module = $query->result_array();
		}

		return $module;
	}

	//-----------------------------------------------------
public function add_society($data){
	$this->db->insert('ci_society', $data);
	return true;
}

	//---------------------------------------------------
	// Edit Admin Record
public function edit_society($data, $id){
	$this->db->where('scRecordId', $id);
	$this->db->update('ci_society', $data);
	return true;
}

	//-----------------------------------------------------
function change_status()
{		
	$this->db->set('status',$this->input->post('status'));
	$this->db->where('scRecordId',$this->input->post('id'));
	$this->db->update('ci_society');
} 

	//-----------------------------------------------------
function delete($id)
{		
	$this->db->where('scRecordId',$id);
	$this->db->delete('ci_society');
} 

}

?>