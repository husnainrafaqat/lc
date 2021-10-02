<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Transporter_model extends CI_Model{

	public function get_transporter_detail($id){
		$query = $this->db->get_where('transporter', array('id' => $id));
		return $result = $query->row_array();
	}
	//--------------------------------------------------------------------
	public function update_transporter($data,$id){
		$this->db->where('id', $id);
		$this->db->update('transporter', $data);
		return true;
	}
	//-----------------------------------------------------
	function get_transporter_by_id($id)
	{
		$this->db->from('transporter');
		$this->db->where('id',$id);
		$query=$this->db->get();
		return $query->row_array();
	}

	//-----------------------------------------------------
	function get_all()
	{

		$this->db->from('transporter');
		//$this->db->where('transporter.status',"A");

		$this->db->order_by('transporter.id','desc');

		$query = $this->db->get();

		$module = array();

		if ($query->num_rows() > 0) 
		{
			$module = $query->result_array();
		}

		return $module;
	}

	//-----------------------------------------------------
	public function add_transporter($data){
		$this->db->insert('transporter', $data);
		return true;
	}

	//---------------------------------------------------
	// Edit Admin Record
	public function edit_transporter($data, $id){
		$this->db->where('id', $id);
		$this->db->update('transporter', $data);
		return true;
	}

	//-----------------------------------------------------
	function change_status()
	{		
		$this->db->set('status',$this->input->post('status'));
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('transporter');
} 

	//-----------------------------------------------------
	function delete($id)
	{		
		$this->db->where('id',$id);
		$this->db->delete('transporter');
	} 
	

}

?>