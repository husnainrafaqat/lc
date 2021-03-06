<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier_model extends CI_Model{

	public function get_supplier_detail($id){
		$query = $this->db->get_where('supplier', array('id' => $id));
		return $result = $query->row_array();
	}
	//--------------------------------------------------------------------
	public function update_supplier($data,$id){
		$this->db->where('id', $id);
		$this->db->update('supplier', $data);
		return true;
	}
	//-----------------------------------------------------
	function get_supplier_by_id($id)
	{
		$this->db->from('supplier');
		$this->db->where('id',$id);
		$query=$this->db->get();
		return $query->row_array();
	}

	//-----------------------------------------------------
	function get_all()
	{

		$this->db->from('supplier');
		//$this->db->where('supplier.status',"A");

		$this->db->order_by('supplier.id','desc');

		$query = $this->db->get();

		$module = array();

		if ($query->num_rows() > 0) 
		{
			$module = $query->result_array();
		}

		return $module;
	}

	//-----------------------------------------------------
	public function add_supplier($data){
		$this->db->insert('supplier', $data);
		return true;
	}

	//---------------------------------------------------
	// Edit Admin Record
	public function edit_supplier($data, $id){
		$this->db->where('id', $id);
		$this->db->update('supplier', $data);
		return true;
	}

	//-----------------------------------------------------
	function change_status()
	{		
		$this->db->set('status',$this->input->post('status'));
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('supplier');
} 

	//-----------------------------------------------------
	function delete($id)
	{		
		$this->db->where('id',$id);
		$this->db->delete('supplier');
	} 
	

}

?>