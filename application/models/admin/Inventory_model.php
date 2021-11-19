<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory_model extends CI_Model{

	public function get_inventory_detail($id){
		$query = $this->db->get_where('ci_inventory', array('inRecordid' => $id));
		return $result = $query->row_array();
	}
	//--------------------------------------------------------------------
	public function update_inventory($data){
		$id = $this->session->userdata('admin_id');
		$this->db->where('admin_id', $id);
		$this->db->update('ci_admin', $data);
		return true;
	}
	//-----------------------------------------------------
	function get_inventory_by_id($id)
	{
		$this->db->from('ci_inventory');
		$this->db->where('inRecordid',$id);
		$query=$this->db->get();
		return $query->row_array();
	}
	//-----------------------------------------------------
	function get_agency_by_id($id)
	{
		/*$this->db->from('ci_agency');
		$this->db->where('agRecordId',$id);*/
		$this->db->from('ci_admin');
		$this->db->where('admin_id',$id);
		$query=$this->db->get();
		$module = array();

		if ($query->num_rows() > 0) 
		{
			$module = $query->row_array();
		}

		return $module;
	}
	//-----------------------------------------------------
	function get_block_by_id($id)
	{
		$this->db->from('ci_block');
		$this->db->where('societyId',$id);
		$query=$this->db->get();
		$module = array();

		if ($query->num_rows() > 0) 
		{
			$module = $query->row_array();
		}

		return $module;
	}
	//-----------------------------------------------------
	function get_blocks_by_id($id)
	{
		$this->db->from('ci_block');
		$this->db->where('societyId',$id);
		$query=$this->db->get();
		$module = array();

		if ($query->num_rows() > 0) 
		{
			$module = $query->result_array();
		}

		return $module;
	}
	//-----------------------------------------------------
	function get_society_by_id($id)
	{
		$this->db->from('ci_society');
		$this->db->where('scRecordId',$id);
		$query=$this->db->get();
		$module = array();

		if ($query->num_rows() > 0) 
		{
			$module = $query->row_array();
		}

		return $module;
	}
	//-----------------------------------------------------
	function get_property_by_id($id)
	{
		$this->db->from('ci_property');
		$this->db->where('pRecordId',$id);
		$query=$this->db->get();
		$module = array();

		if ($query->num_rows() > 0) 
		{
			$module = $query->row_array();
		}

		return $module;
	}
	//-----------------------------------------------------
	function get_property_type_by_id($id)
	{
		$this->db->from('ci_property_type');
		$this->db->where('ptRecordId',$id);
		$query=$this->db->get();
		$module = array();

		if ($query->num_rows() > 0) 
		{
			$module = $query->row_array();
		}

		return $module;
	}
	//-----------------------------------------------------
	function get_agency()
	{
		/*$this->db->from('ci_agency');
		$this->db->where('ci_agency.status',"A");*/

		$this->db->from('ci_admin');
		$this->db->where('ci_admin.admin_role_id',8);

		//$this->db->order_by('ci_agency.agRecordId','asc');

		$query = $this->db->get();

		$module = array();

		if ($query->num_rows() > 0) 
		{
			$module = $query->result_array();
		}

		return $module;

	}
	//-----------------------------------------------------
	function get_block()
	{
		$this->db->from('ci_block');
		$this->db->where('ci_block.status',"A");

		$this->db->order_by('ci_block.blRecordId','asc');

		$query = $this->db->get();

		$module = array();

		if ($query->num_rows() > 0) 
		{
			$module = $query->result_array();
		}

		return $module;

	}
	//-----------------------------------------------------
	function get_society()
	{
		$this->db->from('ci_society');
		$this->db->where('ci_society.status',"A");

		$this->db->order_by('ci_society.scRecordId','asc');

		$query = $this->db->get();

		$module = array();

		if ($query->num_rows() > 0) 
		{
			$module = $query->result_array();
		}

		return $module;

	}
	//-----------------------------------------------------
	function get_property()
	{
		$this->db->from('ci_property');
		$this->db->where('ci_property.status',"A");

		$this->db->order_by('ci_property.pRecordId','asc');

		$query = $this->db->get();

		$module = array();

		if ($query->num_rows() > 0) 
		{
			$module = $query->result_array();
		}

		return $module;

	}
	//-----------------------------------------------------
	function get_property_type()
	{
		$this->db->from('ci_property_type');
		$this->db->where('ci_property_type.status',"A");

		$this->db->order_by('ci_property_type.ptRecordId','asc');

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

		$this->db->from('ci_inventory');
		//$this->db->where('ci_inventory.status',"A");

		$this->db->order_by('ci_inventory.inRecordId','desc');

		$query = $this->db->get();

		$module = array();

		if ($query->num_rows() > 0) 
		{
			$module = $query->result_array();
		}

		return $module;
	}

	//-----------------------------------------------------
	function get_user_inventory($user_id)
	{
		$get_parent_id = parent_user_id($user_id);
		$this->db->from('ci_inventory');
		if($get_parent_id=="" || $get_parent_id==0){
			$where = "agency='$user_id' OR visibility='public' ";
		}else{
			$where = "agency='$user_id' OR usrParentId='$get_parent_id' OR `visibility` = 'public' ";	
		}
		
		$this->db->where($where);
		//$this->db->where('ci_inventory.status',"A");

		$this->db->order_by('ci_inventory.inRecordId','desc');

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
	function get_inventory($id)
	{
		$id=decrypt_data($id);
		$this->db->from('ci_inventory');
		$this->db->where('ci_inventory.inRecordId',$id);
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
		$this->db->from('ci_inventory');
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

		$this->db->order_by('ci_inventory.inRecordId','desc');
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
public function add_inventory($data){
	$this->db->insert('ci_inventory', $data);
	return true;
}

	//---------------------------------------------------
	// Edit Admin Record
public function edit_inventory($data, $id){
	$this->db->where('inRecordId', $id);
	$this->db->update('ci_inventory', $data);
	return true;
}

	//-----------------------------------------------------
function change_status()
{		
	$this->db->set('status',$this->input->post('status'));
	$this->db->where('inRecordId',$this->input->post('id'));
	$this->db->update('ci_inventory');
} 

	//-----------------------------------------------------
function delete($id)
{		
	$this->db->where('inRecordId',$id);
	$this->db->delete('ci_inventory');
} 

}

?>