<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Lc_expanses_model extends CI_Model{

	public function get_lc_expanses_detail($id){
		$query = $this->db->get_where('lc_expanses', array('id' => $id));
		return $result = $query->row_array();
	}
	//--------------------------------------------------------------------
	public function update_lc_expanses($data,$id){
		$this->db->where('id', $id);
		$this->db->update('lc_expanses', $data);
		return true;
	}
	//-----------------------------------------------------
	function get_lc_expanses_by_id($id)
	{
		$this->db->from('lc_expanses');
		$this->db->where('id',$id);
		$query=$this->db->get();
		return $query->row_array();
	}

	//-----------------------------------------------------
	function get_all()
	{

		$this->db->from('lc_expanses');
		//$this->db->where('lc_expanses.status',"A");

		$this->db->order_by('lc_expanses.id','desc');

		$query = $this->db->get();

		$module = array();

		if ($query->num_rows() > 0) 
		{
			$module = $query->result_array();
		}

		return $module;
	}

	//-----------------------------------------------------
	public function add_lc_expanses($data){
		$this->db->insert('lc_expanses', $data);
		return true;
	}

	//---------------------------------------------------
	// Edit Admin Record
	public function edit_lc_expanses($data, $id){
		$this->db->where('id', $id);
		$this->db->update('lc_expanses', $data);
		return true;
	}

	//-----------------------------------------------------
	function change_status()
	{		
		$this->db->set('status',$this->input->post('status'));
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('lc_expanses');
} 

	//-----------------------------------------------------
	function delete($id)
	{		
		$this->db->where('id',$id);
		$this->db->delete('lc_expanses');
	} 
	

}

?>