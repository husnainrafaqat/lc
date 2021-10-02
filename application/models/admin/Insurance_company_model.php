<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Insurance_company_model extends CI_Model{

	public function get_insurance_company_detail($id){
		$query = $this->db->get_where('insurance_company', array('id' => $id));
		return $result = $query->row_array();
	}
	//--------------------------------------------------------------------
	public function update_insurance_company($data,$id){
		$this->db->where('id', $id);
		$this->db->update('insurance_company', $data);
		return true;
	}
	//-----------------------------------------------------
	function get_insurance_company_by_id($id)
	{
		$this->db->from('insurance_company');
		$this->db->where('id',$id);
		$query=$this->db->get();
		return $query->row_array();
	}

	//-----------------------------------------------------
	function get_all()
	{

		$this->db->from('insurance_company');
		//$this->db->where('insurance_company.status',"A");

		$this->db->order_by('insurance_company.id','desc');

		$query = $this->db->get();

		$module = array();

		if ($query->num_rows() > 0) 
		{
			$module = $query->result_array();
		}

		return $module;
	}

	//-----------------------------------------------------
	public function add_insurance_company($data){
		$this->db->insert('insurance_company', $data);
		return true;
	}

	//---------------------------------------------------
	// Edit Admin Record
	public function edit_insurance_company($data, $id){
		$this->db->where('id', $id);
		$this->db->update('insurance_company', $data);
		return true;
	}

	//-----------------------------------------------------
	function change_status()
	{		
		$this->db->set('status',$this->input->post('status'));
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('insurance_company');
} 

	//-----------------------------------------------------
	function delete($id)
	{		
		$this->db->where('id',$id);
		$this->db->delete('insurance_company');
	} 
	

}

?>