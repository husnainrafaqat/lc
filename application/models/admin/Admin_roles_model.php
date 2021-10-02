<?php
class Admin_roles_model extends CI_Model{
   
   	public function __construct()
	{
		parent::__construct();
	}

	//-----------------------------------------------------
	function get_role_by_id($id)
    {
		$this->db->from('ci_admin_roles');
		$this->db->where('admin_role_id',$id);
		$query=$this->db->get();
		return $query->row_array();
    }

	//-----------------------------------------------------
	function get_all()
    {
		$this->db->from('ci_admin_roles');
		$query = $this->db->get();
        return $query->result_array();
    }
	
	//-----------------------------------------------------
	function insert()
	{		
		$this->db->set('admin_role_title',$this->input->post('admin_role_title'));
		$this->db->set('admin_role_status',$this->input->post('admin_role_status'));
		$this->db->set('admin_role_created_on',date('Y-m-d h:i:sa'));
		$this->db->insert('ci_admin_roles');
	}
	 
	//-----------------------------------------------------
	function update()
	{		
		$this->db->set('admin_role_title',$this->input->post('admin_role_title'));
		$this->db->set('admin_role_status',$this->input->post('admin_role_status'));
		$this->db->set('admin_role_modified_on',date('Y-m-d h:i:sa'));
		$this->db->where('admin_role_id',$this->input->post('admin_role_id'));
		$this->db->update('ci_admin_roles');
	} 
	
	//-----------------------------------------------------
	function change_status()
	{		
		$this->db->set('admin_role_status',$this->input->post('status'));
		$this->db->where('admin_role_id',$this->input->post('id'));
		$this->db->update('ci_admin_roles');
	} 
	
	//-----------------------------------------------------
	function delete($id)
	{		
		$this->db->where('admin_role_id',$id);
		$this->db->delete('ci_admin_roles');
	} 
	
	//-----------------------------------------------------
	function get_modules()
    {
		$this->db->from('module');
		$this->db->where('status',"A");
		$this->db->order_by('sort_order','asc');
		$query=$this->db->get();
		return $query->result_array();
    }
    
	//-----------------------------------------------------
	function set_access()
	{
		if($this->input->post('status')==1)
		{
			$this->db->set('admin_role_id',$this->input->post('admin_role_id'));
			$this->db->set('module',$this->input->post('module'));
			$this->db->set('operation',$this->input->post('operation'));
			$this->db->insert('module_access');
		}
		else
		{
			$this->db->where('admin_role_id',$this->input->post('admin_role_id'));
			$this->db->where('module',$this->input->post('module'));
			$this->db->where('operation',$this->input->post('operation'));
			$this->db->delete('module_access');
		}
	} 
	//-----------------------------------------------------
	function get_access($admin_role_id)
	{
		$this->db->from('module_access');
		$this->db->where('admin_role_id',$admin_role_id);
		$query=$this->db->get();
		$data=array();
		foreach($query->result_array() as $v)
		{
			$data[]=$v['module'].'/'.$v['operation'];
		}
		return $data;
	} 	

	/* SIDE MENU & SUB MENU */

	//-----------------------------------------------------
	function get_all_module()
    {
		$this->db->select('*');
		$this->db->where('status',"A");
		$this->db->order_by('sort_order','asc');
		$query = $this->db->get('module');
        return $query->result_array();
    }

    //-----------------------------------------------------
	function add_module($data)
    {
		$this->db->insert('module', $data);
		return true;
    }

    //---------------------------------------------------
	// Edit Module
	public function edit_module($data, $id){
		$this->db->where('module_id', $id);
		$this->db->update('module', $data);
		return true;
	}

	//-----------------------------------------------------
	function delete_module($id)
	{		
		$this->db->where('module_id',$id);
		$this->db->delete('module');
	} 

	//-----------------------------------------------------
	function get_module_by_id($id)
    {
		$this->db->from('module');
		$this->db->where('module_id',$id);
		$query=$this->db->get();
		return $query->row_array();
    }

    /*------------------------------
		Sub Module / Sub Menu  
	------------------------------*/

	//-----------------------------------------------------
	function add_sub_module($data)
    {
		$this->db->insert('sub_module',$data);
		return $this->db->insert_id();
    }
	
	//---------------------------------------------------
	// Edit Module
	public function edit_sub_module($data, $id){
		$this->db->where('id', $id);
		$this->db->update('sub_module', $data);
		return true;
	}

	//-----------------------------------------------------
	function get_sub_module_by_id($id)
    {
		$this->db->from('sub_module');
		$this->db->where('id',$id);
		$query=$this->db->get();
		return $query->row_array();
    } 	

	//-----------------------------------------------------
	function get_sub_module_by_module($id)
    {
		$this->db->select('*');
		$this->db->where('parent',$id);
		$this->db->order_by('sort_order','asc');
		$query = $this->db->get('sub_module');
		return $query->result_array();
    }

	//-----------------------------------------------------
	
	function add_dropdown_val($data)
    {
		$this->db->insert('ci_dropdown_vals',$data);
		return $this->db->insert_id();
    } 


	//-----------------------------------------------------
	
	function add_form_field($data)
    {
		$this->db->insert('ci_module_form',$data);
		return $this->db->insert_id();
    } 

    //----------------------------------------------------
    function edit_form_field($data, $id)
    {
    	$this->db->where('id', $id);
		$this->db->update('ci_module_form', $data);
		return true;
    }

	//-----------------------------------------------------
	
	function edit_dropdown_val($data, $id)
    {
		$this->db->where('module_form_id', $id);
		$this->db->update('ci_dropdown_vals',$data);
		return true;
    } 

	//-----------------------------------------------------
	function delete_form_field($id)
	{		
		$this->db->where('id',$id);
		$this->db->delete('ci_module_form');
		$this->db->where('module_form_id',$id);
		$this->db->delete('ci_dropdown_vals');
		return true;
	} 
 	
	//----------------------------------------------------
	function get_module_form($id)
    {
		$this->db->select('*');
		$this->db->where('module_id',$id);
		$this->db->order_by('sort_order','asc');
		$query = $this->db->get('ci_module_form');		
		return $query->result_array();
    }    

	//-----------------------------------------------------
	function get_module_field_type()
    {
		$this->db->select('*');		
		$query = $this->db->get('ci_form_fields');
		return $query->result_array();
    }

	//-----------------------------------------------------
	function get_module_field_data($id)
    {
		$this->db->select('*');		
		$this->db->where('id',$id);		
		$query = $this->db->get('ci_module_form');
		return $query->row_array();
    }

	//-----------------------------------------------------
	function create_table($id)
    {
		$table_name = module_name($id);
		
		$this->load->dbforge();
		
		$fields = array();
		// define table fields
		$all_fields = get_form_fields($id);

		$fields['id'] = array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			);

		
			foreach($all_fields as $af){
				$af['name'] = make_slug_($af['name']);
				if($af['type']=='text' || $af['type']=='file' || $af['type']=='nubmer' || $af['type']=='email' || $af['type']=='select' || $af['type']=='phone' || $af['type']=='country' || $af['type']=='state' || $af['type']=='city'){
					$fields[$af['name']] = array(
							'type' => 'VARCHAR',
							'constraint' => 255
						);					
				}
				if($af['type']=='textarea'){
					$fields[$af['name']] = array(
						 	'type' => 'text'							
						);			
				}
				if($af['type']=='date'){
					$fields[$af['name']] = array(
						 	'type' => 'datetime'							
						);					
				}
				
			}	

		$fields['created_by'] = array(
				'type' => 'VARCHAR',
				'constraint' => 255
			);
		$fields['created_at'] = array(	
			'type' => 'datetime'			
			);
		$fields['updated_by'] = array(	
			 	'type' => 'VARCHAR',
				'constraint' => 255
			);
		$fields['updated_at'] = array(	
			 	'type' => 'datetime'			
			);

		
		$this->dbforge->add_field($fields);

		// define primary key
		$this->dbforge->add_key('id', TRUE);

		//$attributes = ['ENGINE' => 'InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci'];

		// create table
		if($this->dbforge->create_table($table_name,TRUE)){
			return true;
		}else{
			return false;
		}
	}

	//-----------------------------------------------------
	function show_on_datatable()
	{		
		$this->db->set('show_on_datatable',$this->input->post('status'));
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('ci_module_form');
	} 

}
?>