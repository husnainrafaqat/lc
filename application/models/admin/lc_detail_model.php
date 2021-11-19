<?php
	class lc_detail_model extends CI_Model{

		//---------------------------------------------------
	

		//---------------------------------------------------
		// Insert New Invoice
		public function add_lc_detail($data){
			return $this->db->insert('lc_details', $data);
		}

		//---------------------------------------------------
		


		//---------------------------------------------------
		// Get Invoice Detil by ID
		public function get_lc_detail_by_id($id){

			$this->db->select('
					*
					'
	    	);
	    	$this->db->from('lc_details');
	    	$this->db->where('lc_id' , $id);
	    	$query = $this->db->get();					 
			return $query->row_array();

		}



		//---------------------------------------------------
		// Get Invoice Detil by ID
		public function update_lc_detail($data, $id){
			$this->db->where('lc_id', $id);
			return $this->db->update('lc_details', $data);
		}

		
		
	}

?>