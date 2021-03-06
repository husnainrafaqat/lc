<?php
class Admin_roles extends MY_Controller
{
    function __construct(){

        parent::__construct();
        auth_check(); // check login auth
        $this->rbac->check_module_access();

		$this->load->model('admin/admin_roles_model', 'admin_roles');
    }

	//-----------------------------------------------------		
	function index(){

		$data['title'] = trans('role_and_permissions');;
		$data['records'] = $this->admin_roles->get_all();

		$this->load->view('admin/includes/_header');
		$this->load->view('admin/admin_roles/index', $data);
		$this->load->view('admin/includes/_footer');
	}

	//-----------------------------------------------------------
	function change_status(){

		$this->rbac->check_operation_access(); // check opration permission

		$this->admin_roles->change_status();
	}

	//------------------------------------------------------------
	function delete($id=''){

		$this->rbac->check_operation_access(); // check opration permission

		$this->admin_roles->delete($id);
		$this->session->set_flashdata('msg','Role has been Deleted Successfully.');	
		redirect('admin/admin_roles');
	}
	
	//-----------------------------------------------------------------
	function add(){

		$this->rbac->check_operation_access(); // check opration permission

		if($this->input->post('submit'))
		{
			$this->admin_roles->insert();	
			$this->session->set_flashdata('success', 'Record Added Successfully');	
			redirect('admin/admin_roles');
		}

		$data['title'] = trans('add_new_role');

		$this->load->view('admin/includes/_header');
		$this->load->view('admin/admin_roles/add', $data);
		$this->load->view('admin/includes/_footer');
	}

	//--------------------------------------------------
	function edit($id=""){

		$this->rbac->check_operation_access(); // check opration permission

		if($this->input->post('submit'))
		{
			$this->admin_roles->update();
			$this->session->set_flashdata('success', 'Record updated Successfully');		
			redirect('admin/admin_roles');
		}
		if($id=="") 
			redirect('admin/admin_roles');

		$data['title'] = trans('edit_role');
		$data['record'] = $this->admin_roles->get_role_by_id($id);
		
		$this->load->view('admin/includes/_header');
		$this->load->view('admin/admin_roles/edit', $data);
		$this->load->view('admin/includes/_footer');
	}

	//--------------------------------------------------
	function access($id=""){

		$this->rbac->check_operation_access(); // check opration permission

		$data['title'] = trans('admin_permissions');
		$data['record']= $this->admin_roles->get_role_by_id($id);
		$data['access']= $this->admin_roles->get_access($id);
		$data['modules']= $this->admin_roles->get_modules();

		$this->load->view('admin/includes/_header');
		$this->load->view('admin/admin_roles/access', $data);
		$this->load->view('admin/includes/_footer');
	}

	//-----------------------------------------------------------
	function set_access(){   
		$this->admin_roles->set_access();
	}

	//--------------------------------------------------
	function check_admin_role($id=0){
		
		$this->db->from('admin_roles');
		$this->db->where('admin_role_title',$this->input->post('admin_role_title'));
		$this->db->where('admin_role_id !='.$id);
		$query=$this->db->get();
		if($query->num_rows() >0)
			echo 'false';
		else 
	    	echo 'true';
    }

    /* SIDE MENU & SUB MENU */

    //-----------------------------------------------------------
	public function module(){

		$data['title'] = trans('module_setting');
		$data['records'] = $this->admin_roles->get_all_module();

		$this->load->view('admin/includes/_header');
		$this->load->view('admin/admin_roles/module_list', $data);
		$this->load->view('admin/includes/_footer');
	}

	//-----------------------------------------------------------
	public function module_add(){

		$this->rbac->check_operation_access(); // check opration permission

		if($this->input->post('submit')){
			$this->form_validation->set_rules('module_name', 'Module Name', 'trim|required');
			$this->form_validation->set_rules('controller_name', 'Controller Name', 'trim|required');
			$this->form_validation->set_rules('fa_icon', 'fa_icon', 'trim');
			$this->form_validation->set_rules('operation', 'Operation', 'trim');
			$this->form_validation->set_rules('sort_order', 'Sort Order', 'trim');

			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'errors' => validation_errors()
				);
				$this->session->set_flashdata('errors', $data['errors']);
				redirect(base_url('admin/admin_roles/module_add'),'refresh');
			}
			else{
				$data = array(
					'module_name' => $this->input->post('module_name'),
					'controller_name' => $this->input->post('controller_name'),
					'fa_icon' => $this->input->post('fa_icon'),
					'operation' => $this->input->post('operation'),
					'sort_order' => $this->input->post('sort_order'),
				);
				$data = $this->security->xss_clean($data);
				$result = $this->admin_roles->add_module($data);
				if($result){
					$this->session->set_flashdata('success', 'Module has been added successfully!');
					redirect(base_url('admin/admin_roles/module'));
				}
			}
		}
		else{
			$data['title'] = trans('add_new_module');

			$this->load->view('admin/includes/_header');
			$this->load->view('admin/admin_roles/module_add', $data);
			$this->load->view('admin/includes/_footer');
		}
	}

	//-----------------------------------------------------------
	public function module_edit($id=0){

		$this->rbac->check_operation_access(); // check opration permission

		if($this->input->post('submit')){
			$this->form_validation->set_rules('module_name', 'Module Name', 'trim|required');
			$this->form_validation->set_rules('controller_name', 'Controller Name', 'trim|required');
			$this->form_validation->set_rules('fa_icon', 'fa_icon', 'trim');
			$this->form_validation->set_rules('operation', 'Operation', 'trim');
			$this->form_validation->set_rules('sort_order', 'Sort Order', 'trim');

			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'errors' => validation_errors()
				);
				$this->session->set_flashdata('errors', $data['errors']);
				redirect(base_url('admin/admin_roles/module_edit/'.$id),'refresh');
			}
			else{
				$data = array(
					'module_name' => $this->input->post('module_name'),
					'controller_name' => $this->input->post('controller_name'),
					'fa_icon' => $this->input->post('fa_icon'),
					'operation' => $this->input->post('operation'),
					'sort_order' => $this->input->post('sort_order'),
				);
				$data = $this->security->xss_clean($data);
				$result = $this->admin_roles->edit_module($data, $id);
				if($result){
					$this->session->set_flashdata('success', 'Module has been Updated successfully!');
					redirect(base_url('admin/admin_roles/module'));
				}
			}
		}
		else{
			$data['title'] = trans('update_module');
			$data['module'] = $this->admin_roles->get_module_by_id($id);

			$this->load->view('admin/includes/_header');
			$this->load->view('admin/admin_roles/module_edit', $data);
			$this->load->view('admin/includes/_footer');
		}
	}

	//------------------------------------------------------------
	public function module_delete($id=''){

		$this->rbac->check_operation_access(); // check opration permission

		$this->admin_roles->delete_module($id);

		$this->session->set_flashdata('msg','Module has been Deleted Successfully.');	
		redirect('admin/admin_roles/module');
	}

	/*-------------------------
		Sub Module / Sub Menu
	-------------------------*/

	//-----------------------------------------------------------
	public function sub_module($module_id = NULL){

		$data['title'] = '';
		$data['records'] = $this->admin_roles->get_sub_module_by_module($module_id);

		$this->load->view('admin/includes/_header');
		$this->load->view('admin/admin_roles/sub_module_list', $data);
		$this->load->view('admin/includes/_footer');
	}

	/*-------------------------
		Module Form / Sub Menu
	-------------------------*/

	//-----------------------------------------------------------
	public function module_form($module_id = NULL){

		$data['title'] = '';
		$data['records'] = $this->admin_roles->get_module_form($module_id);

		$this->load->view('admin/includes/_header');
		$this->load->view('admin/admin_roles/module_form_list', $data);
		$this->load->view('admin/includes/_footer');
	}

	//-----------------------------------------------------------
	public function sub_module_add(){

		$this->rbac->check_operation_access(); // check opration permission

		if($this->input->post('submit')){
			$this->form_validation->set_rules('module_name', 'sub_module Name', 'trim|required');
			$this->form_validation->set_rules('operation', 'Operation', 'trim');
			$this->form_validation->set_rules('sort_order', 'Sort Order', 'trim');
			$this->form_validation->set_rules('parent_module', 'Parent Module', 'trim|required');
			// Parent Module
			$parent = $this->input->post('parent_module');

			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'errors' => validation_errors()
				);
				$this->session->set_flashdata('errors', $data['errors']);
				redirect(base_url('admin/admin_roles/sub_module_add/'.$parent),'refresh');
			}
			else{
				$data = array(
					'parent' => $parent,
					'name' => $this->input->post('module_name'),
					'link' => $this->input->post('operation'),
					'sort_order' => $this->input->post('sort_order'),
				);
				$data = $this->security->xss_clean($data);
				$result = $this->admin_roles->add_sub_module($data);
				if($result){
					$this->session->set_flashdata('success', 'Sub Module has been added successfully!');
					redirect(base_url('admin/admin_roles/sub_module/'.$parent));
				}
			}
		}
		else{
			$data['title'] = '';

			$this->load->view('admin/includes/_header');
			$this->load->view('admin/admin_roles/sub_module_add', $data);
			$this->load->view('admin/includes/_footer');
		}
	}

	// -----------------------------------------------------------
	public function sub_module_edit($id = 0){

		$this->rbac->check_operation_access(); // check opration permission

		if($this->input->post('submit')){
			$this->form_validation->set_rules('module_name', 'module Name', 'trim|required');
			$this->form_validation->set_rules('sub_module_name', 'sub_module Name', 'trim|required');
			$this->form_validation->set_rules('operation', 'Operation', 'trim');
			$this->form_validation->set_rules('sort_order', 'Sort Order', 'trim');

			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'errors' => validation_errors()
				);
				$this->session->set_flashdata('errors', $data['errors']);
				redirect(base_url('admin/admin_roles/sub_module_edit/'.$id),'refresh');
			}
			else{
				$parent = $this->input->post('module_name');

				$data = array(
					'parent' => $parent,
					'name' => $this->input->post('sub_module_name'),
					'link' => $this->input->post('operation'),
					'sort_order' => $this->input->post('sort_order'),
				);
				$data = $this->security->xss_clean($data);
				$result = $this->admin_roles->edit_sub_module($data, $id);
				if($result){
					$this->session->set_flashdata('success', 'sub module has been Updated successfully!');
					redirect(base_url('admin/admin_roles/sub_module/'.$parent));
				}
			}
		}
		else{
			$data['title'] = '';
			$data['module'] = $this->admin_roles->get_sub_module_by_id($id);
			$this->load->view('admin/includes/_header');
			$this->load->view('admin/admin_roles/sub_module_edit', $data);
			$this->load->view('admin/includes/_footer');
		}
	}

	// ------------------------------------------------------------
	public function sub_module_delete($id = 0,$parent = 0){

		$this->rbac->check_operation_access(); // check opration permission

		$this->admin_roles->delete_sub_module($id);

		$this->session->set_flashdata('msg','Sub Menu has been Deleted Successfully.');	
		redirect('admin/admin_roles/sub_module/'.$parent);
	}


	//-----------------------------------------------------------
	public function module_form_field_add(){

		$this->rbac->check_operation_access(); // check opration permission

		if($this->input->post('submit')){
			$this->form_validation->set_rules('field_name', 'Field Name', 'trim|required');
			$this->form_validation->set_rules('field_type', 'Field Type', 'trim');
			$this->form_validation->set_rules('is_required', 'Required', 'trim');
			$this->form_validation->set_rules('sort_order', 'Sort Order', 'trim');
			$this->form_validation->set_rules('parent_module', 'Parent Module', 'trim|required');
			// Parent Module
			$parent = $this->input->post('parent_module');
			
			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'errors' => validation_errors()
				);
				$this->session->set_flashdata('errors', $data['errors']);
				redirect(base_url('admin/admin_roles/module_form_field_add/'.$parent),'refresh');
			}
			else{
				$data = array(
					'module_id' => $parent,
					'name' => $this->input->post('field_name'),
					'type' => $this->input->post('field_type'),
					'is_required' => $this->input->post('is_required'),
					'sort_order' => $this->input->post('sort_order'),
				);
				$data = $this->security->xss_clean($data);
				$result = $this->admin_roles->add_form_field($data);

				$dropdown_values = $this->input->post('dropdown_values');
				if(!empty($dropdown_values)){
					$dropdown_values = str_replace(' ', '', $dropdown_values);
					$data = array(
						'module_form_id' => $result,
						'value' => $dropdown_values,
					);
					$data['created_by'] = admin_id();
					$data['created_at'] = date('Y-m-d : h:m:s');
					$data = $this->security->xss_clean($data);
					$result = $this->admin_roles->add_dropdown_val($data);
				}

				$entity_list_select = $this->input->post('entity_list_select');
				if(!empty($entity_list_select)){
					$data = array(
						'module_form_id' => $result,
						'value' => $entity_list_select,
					);
					$data['created_by'] = admin_id();
					$data['created_at'] = date('Y-m-d : h:m:s');
					$data = $this->security->xss_clean($data);
					$result = $this->admin_roles->add_dropdown_val($data);
				}
				
				
				if($result){
					$this->session->set_flashdata('success', 'Field has been added successfully!');
					redirect(base_url('admin/admin_roles/module_form_field_add/'.$parent));
				}
			}
		}
		else{
			$data['title'] = 'Add New Field';
			$data['field_type'] = $this->admin_roles->get_module_field_type();
			$data['entity_list'] = $this->admin_roles->get_module_entity_list();
			$this->load->view('admin/includes/_header');
			$this->load->view('admin/admin_roles/module_form_field_add', $data);
			$this->load->view('admin/includes/_footer');
		}
	}

	// -----------------------------------------------------------
	public function module_form_field_edit($id = 0){

		$this->rbac->check_operation_access(); // check opration permission
		
		if($this->input->post('submit')){
			$this->form_validation->set_rules('field_name', 'Field Name', 'trim|required');
			$this->form_validation->set_rules('field_type', 'Field Type', 'trim');
			$this->form_validation->set_rules('is_required', 'Required', 'trim');
			$this->form_validation->set_rules('sort_order', 'Sort Order', 'trim');
			$this->form_validation->set_rules('parent_module', 'Parent Module', 'trim|required');
			// Parent Module
			$field_id = $this->input->post('parent_module');
			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'errors' => validation_errors()
				);
				$this->session->set_flashdata('errors', $data['errors']);
				redirect(base_url('admin/admin_roles/module_form_field_edit/'.$field_id),'refresh');
			}
			else{
				$data = array(
					'name' => $this->input->post('field_name'),
					'type' => $this->input->post('field_type'),
					'is_required' => $this->input->post('is_required'),
					'sort_order' => $this->input->post('sort_order'),
				);
				$data = $this->security->xss_clean($data);
				$result = $this->admin_roles->edit_form_field($data, $field_id);

				$dropdown_values = $this->input->post('dropdown_values');
				if(!empty($dropdown_values)){
					$dropdown_values = str_replace(' ', '', $dropdown_values);
					$data = array(					
						'value' => $dropdown_values,
					);
					$data['updated_by'] = admin_id();
					$data['updated_at'] = date('Y-m-d : h:m:s');
					$data = $this->security->xss_clean($data);
					$result = $this->admin_roles->edit_dropdown_val($data, $field_id);
				}

				$entity_list_select = $this->input->post('entity_list_select');
				if(!empty($entity_list_select)){
					$data = array(
						'module_form_id' => $result,
						'value' => $entity_list_select,
					);
					$data['created_by'] = admin_id();
					$data['created_at'] = date('Y-m-d : h:m:s');
					$data = $this->security->xss_clean($data);
					$result = $this->admin_roles->edit_dropdown_val($data, $field_id);
				}
				

				if($result){
					$this->session->set_flashdata('success', 'Field has been Updated successfully!');
					redirect(base_url('admin/admin_roles/module_form_field_edit/'.$field_id));
				}
			}
		}
		else{
			$field_id = $this->uri->segment(4);			
			$data['title'] = 'Edit Field';
			$data['field_type'] = $this->admin_roles->get_module_field_type();
			$data['field_date'] = $this->admin_roles->get_module_field_data($field_id);			
			$this->load->view('admin/includes/_header');
			$this->load->view('admin/admin_roles/module_form_field_edit', $data);
			$this->load->view('admin/includes/_footer');
		}
	}

	// ------------------------------------------------------------
	public function module_form_field_delete($id = 0,$parent = 0){

		$this->rbac->check_operation_access(); // check opration permission

		$this->admin_roles->delete_form_field($id);

		$this->session->set_flashdata('msg','Form Field has been Deleted Successfully.');	
		redirect('admin/admin_roles/module_form/'.$parent);
	}

	// ------------------------------------------------------------
	public function module_form_create_table($id = 0){
		$parent_menu = $this->uri->segment(4);
		if($this->admin_roles->create_table($parent_menu)){
			$this->session->set_flashdata('success','Table has been Created Successfully.');	
		}else{
			$this->session->set_flashdata('errors','Table not created try again.');	
		}		
		redirect('admin/admin_roles/module_form/'.$parent_menu);
	}


	//-----------------------------------------------------------
	function show_on_datatable(){

		$this->rbac->check_operation_access(); // check opration permission

		$this->admin_roles->show_on_datatable();
	}
	
}

?>