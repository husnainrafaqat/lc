<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Block_model extends CI_Model{

	public function get_block_detail($id){
		$query = $this->db->get_where('ci_block', array('blRecordId' => $id));
		return $result = $query->row_array();
	}
	//--------------------------------------------------------------------
	public function update_block($data,$id){
		$this->db->where('blRecordId', $id);
		$this->db->update('ci_block', $data);
		return true;
	}
	//-----------------------------------------------------
	function get_block_by_id($id)
	{
		$this->db->from('ci_block');
		$this->db->where('blRecordId',$id);
		$query=$this->db->get();
		return $query->row_array();
	}
	//-----------------------------------------------------
	function get_society_by_id($id)
	{
		$this->db->from('ci_society');
		$this->db->where('scRecordId',$id);
		$query=$this->db->get();
		return $query->row_array();
	}
	//-----------------------------------------------------
	function get_society()
	{
		$this->db->from('ci_society');
		$this->db->where('ci_society.status',"A");

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
	function get_all()
	{

		$this->db->from('ci_block');
		//$this->db->where('ci_block.status',"A");

		$this->db->order_by('ci_block.blRecordId','desc');

		$query = $this->db->get();

		$module = array();

		if ($query->num_rows() > 0) 
		{
			$module = $query->result_array();
		}

		return $module;
	}

	//-----------------------------------------------------
public function add_block($data){
	$this->db->insert('ci_block', $data);
	return true;
}

	//---------------------------------------------------
	// Edit Admin Record
public function edit_block($data, $id){
	$this->db->where('blRecordId', $id);
	$this->db->update('ci_block', $data);
	return true;
}

	//-----------------------------------------------------
function change_status()
{		
	$this->db->set('status',$this->input->post('status'));
	$this->db->where('blRecordId',$this->input->post('id'));
	$this->db->update('ci_block');
} 

	//-----------------------------------------------------
function delete($id)
{		
	$this->db->where('blRecordId',$id);
	$this->db->delete('ci_block');
} 

}

?>