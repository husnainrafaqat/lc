<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Lc_generation_model extends CI_Model{

	public function get_lc_generation_detail($id){
		$query = $this->db->get_where('lc_generation', array('id' => $id));
		return $result = $query->row_array();
	}
	//--------------------------------------------------------------------
	public function update_lc_generation($data,$id){
		$this->db->where('id', $id);
		$this->db->update('lc_generation', $data);
		return true;
	}
	//-----------------------------------------------------
	function get_lc_generation_by_id($id)
	{
		$this->db->from('lc_generation');
		$this->db->where('id',$id);
		$query=$this->db->get();
		return $query->row_array();
	}

	//-----------------------------------------------------
	function get_all()
	{

		$this->db->from('lc_generation');
		//$this->db->where('lc_generation.status',"A");

		$this->db->order_by('lc_generation.id','desc');

		$query = $this->db->get();

		$module = array();

		if ($query->num_rows() > 0) 
		{
			$module = $query->result_array();
		}

		return $module;
	}

	//-----------------------------------------------------
	function get_suppliers()
	{
		$this->db->select('id, supplier_name');
		$this->db->from('supplier');
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
	function get_shippers()
	{

		$this->db->select('id, shipper_name');
		$this->db->from('shipper');
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
	function get_insurance_companies()
	{

		$this->db->select('id, insurance_company_name');
		$this->db->from('insurance_company');
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
	function get_banks()
	{

		$this->db->select('id, bank_name');
		$this->db->from('bank');
		$this->db->order_by('bank.id','desc');

		$query = $this->db->get();

		$module = array();

		if ($query->num_rows() > 0) 
		{
			$module = $query->result_array();
		}

		return $module;
	}

	//-----------------------------------------------------
	public function add_lc_generation($data){
		$this->db->insert('lc_generation', $data);
		return true;
	}
	
	//-----------------------------------------------------
	public function add_lc_contract($data){
		$this->db->insert('lc_details', $data);
		return true;
	}
public function add_lc_insurance($data){
		$this->db->insert('lc_gen_insurance', $data);
		return true;
	
}

	public function add_lc_bank($data){
		$this->db->insert('lc_gen_bank', $data);
		return true;
	
}
	public function add_lc_supplier($data){
		$this->db->insert('lc_gen_supplier', $data);
		return true;
	
}
	public function add_lc_shipper($data){
		$this->db->insert('lc_gen_shipper', $data);
		return true;
	
}
	//---------------------------------------------------
	// Edit Admin Record
	public function edit_lc_generation($data, $id){
		$this->db->where('id', $id);
		$this->db->update('lc_generation', $data);
		return true;
	}

	//-----------------------------------------------------
	function change_status()
	{		
		$this->db->set('status',$this->input->post('status'));
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('lc_generation');
} 

	//-----------------------------------------------------
	function delete($id)
	{		
		$this->db->where('id',$id);
		$this->db->delete('lc_generation');
	} 
	
	//-----------------------------------------------------
	function get_contract($id)
	{
		$this->db->from('contract');
		$this->db->where('contract_number',$id);
		$this->db->order_by('contract.id','desc');

		$query = $this->db->get();

		$module = array();

		if ($query->num_rows() > 0) 
		{
			$module = $query->row_array();
		}

		return $module;
	}
	//-----------------------------------------------------
	function get_bank_details($id)
	{
		$this->db->from('bank');
		$this->db->where('id',$id);
		$this->db->order_by('bank.id','desc');

		$query = $this->db->get();

		$module = array();

		if ($query->num_rows() > 0) 
		{
			$module = $query->row_array();
		}

		return $module;
	}
	//-----------------------------------------------------
	function get_ic_details($id)
	{
		$this->db->from('insurance_company');
		$this->db->where('id',$id);
		$this->db->order_by('insurance_company.id','desc');

		$query = $this->db->get();

		$module = array();

		if ($query->num_rows() > 0) 
		{
			$module = $query->row_array();
		}

		return $module;
	}


}

?>