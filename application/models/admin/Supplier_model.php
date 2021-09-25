<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier_model extends CI_Model{

	public function get_supplier_detail($id){
		$query = $this->db->get_where('ci_supplier', array('spRecordid' => $id));
		return $result = $query->row_array();
	}
	//--------------------------------------------------------------------
	public function update_supplier($data){
		$id = $this->session->userdata('admin_id');
		$this->db->where('admin_id', $id);
		$this->db->update('ci_admin', $data);
		return true;
	}
	//-----------------------------------------------------
	function get_supplier_by_id($id)
	{
		$this->db->from('ci_supplier');
		$this->db->where('inRecordid',$id);
		$query=$this->db->get();
		return $query->row_array();
	}
	
	//-----------------------------------------------------
	function get_all()
	{

		$this->db->from('ci_supplier');
		//$this->db->where('ci_supplier.status',"A");

		$this->db->order_by('ci_supplier.inRecordId','desc');

		$query = $this->db->get();

		$module = array();

		if ($query->num_rows() > 0) 
		{
			$module = $query->result_array();
		}

		return $module;
	}

	//-----------------------------------------------------
	function get_user_supplier($user_id)
	{
		$get_parent_id = parent_user_id($user_id);
		$this->db->from('ci_supplier');
		if($get_parent_id=="" || $get_parent_id==0){
			$where = "agency='$user_id' OR visibility='public' ";
		}else{
			$where = "agency='$user_id' OR usrParentId='$get_parent_id' OR `visibility` = 'public' ";	
		}
		
		$this->db->where($where);
		//$this->db->where('ci_supplier.status',"A");

		$this->db->order_by('ci_supplier.inRecordId','desc');

		$query = $this->db->get();
		//dd($this->db->last_query());
		$module = array();

		if ($query->num_rows() > 0) 
		{
			$module = $query->result_array();
		}
		return $module;
	}

	//-----------------------------------------------------
	function get_supplier($id)
	{
		$id=decrypt_data($id);
		$this->db->from('ci_supplier');
		$this->db->where('ci_supplier.inRecordId',$id);
		$query = $this->db->get();		
		$module = array();
		if ($query->num_rows() > 0) 
		{
			$module = $query->row_array();
		}
		return $module;
	}

	//-----------------------------------------------------
	function get_filterdata($society=null,$property=null,$agency=null,$property_type=null,$max_price=null)
	{
		$this->db->from('ci_supplier');
		if(isset($society) && !empty($society)){
			$this->db->where('society',$society);
		}
		if(isset($property) && !empty($property)){
			$this->db->where('property',$property);
		}
		if(isset($agency) && !empty($agency)){
			$this->db->where('agency',$agency);
		}
		if(isset($property_type) && !empty($property_type)){
			$this->db->where('property_type',$property_type);
		}
		if(isset($max_price) && !empty($max_price)){
			$this->db->where('demand <=',$max_price);
		}
		
		/*if(isset($keyword) && !empty($keyword)){
			$this->db->like('name', $keyword, 'both'); 
		}*/	

		$this->db->order_by('ci_supplier.inRecordId','desc');
		$query = $this->db->get();
		//echo $this->db->last_query(); exit;
		$module = array();

		if ($query->num_rows() > 0) 
		{
			$module = $query->result_array();
		}

		return $module;
	}

	//-----------------------------------------------------
public function add_supplier($data){
	$this->db->insert('ci_supplier', $data);
	return true;
}

	//---------------------------------------------------
	// Edit Admin Record
public function edit_supplier($data, $id){
	$this->db->where('inRecordId', $id);
	$this->db->update('ci_supplier', $data);
	return true;
}

	//-----------------------------------------------------
function change_status()
{		
	$this->db->set('status',$this->input->post('status'));
	$this->db->where('inRecordId',$this->input->post('id'));
	$this->db->update('ci_supplier');
} 

	//-----------------------------------------------------
function delete($id)
{		
	$this->db->where('inRecordId',$id);
	$this->db->delete('ci_supplier');
} 

}

?>