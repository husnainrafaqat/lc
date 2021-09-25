<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Agency_model extends CI_Model{

	public function get_agency_detail($id){
		$query = $this->db->get_where('ci_agency', array('agRecordId' => $id));
		return $result = $query->row_array();
	}
	//--------------------------------------------------------------------
	public function update_agency($data,$id){
		$this->db->where('agRecordId', $id);
		$this->db->update('ci_agency', $data);
		return true;
	}
	//-----------------------------------------------------
	function get_agency_by_id($id)
	{
		$this->db->from('ci_agency');
		$this->db->where('agRecordid',$id);
		$query=$this->db->get();
		return $query->row_array();
	}

	//-----------------------------------------------------
	function get_all()
	{

		$this->db->from('ci_agency');
		//$this->db->where('ci_agency.status',"A");

		$this->db->order_by('ci_agency.agRecordId','desc');

		$query = $this->db->get();

		$module = array();

		if ($query->num_rows() > 0) 
		{
			$module = $query->result_array();
		}

		return $module;
	}

	//-----------------------------------------------------
public function add_agency($data){
	$this->db->insert('ci_agency', $data);
	return true;
}

	//---------------------------------------------------
	// Edit Admin Record
public function edit_agency($data, $id){
	$this->db->where('agRecordId', $id);
	$this->db->update('ci_agency', $data);
	return true;
}

	//-----------------------------------------------------
function change_status()
{		
	$this->db->set('status',$this->input->post('status'));
	$this->db->where('agRecordId',$this->input->post('id'));
	$this->db->update('ci_agency');
} 

	//-----------------------------------------------------
function delete($id)
{		
	$this->db->where('agRecordId',$id);
	$this->db->delete('ci_agency');
} 

}

?>