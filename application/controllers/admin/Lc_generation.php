<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Lc_generation extends MY_Controller
{
    function __construct(){

        parent::__construct();
        auth_check(); // check login auth
        $this->rbac->check_module_access();

		$this->load->model('admin/admin_model', 'admin');
		$this->load->model('admin/lc_generation_model', 'lc_generation');
		$this->load->model('admin/Activity_model', 'activity_model');
    }

	//-----------------------------------------------------		
	function index($type=''){

		$data['title'] = 'lc_generation List';
		
		$this->load->view('admin/includes/_header');
		$this->load->view('admin/lc_generation/index', $data);
		$this->load->view('admin/includes/_footer');
	}

	//---------------------------------------------------------
	function filterdata(){

		$this->session->set_userdata('filter_type',$this->input->post('type'));
		$this->session->set_userdata('filter_status',$this->input->post('status'));
		$this->session->set_userdata('filter_keyword',$this->input->post('keyword'));
	}

	//--------------------------------------------------		
	function list_data(){
		$data['info'] = $this->lc_generation->get_all();
		$controller_name = $this->uri->segment(2);
		$module_id = module_id($controller_name);
		$data['form_fields'] = get_form_fields($module_id);
		$this->load->view('admin/lc_generation/list',$data);
	}

	//-----------------------------------------------------------
	function change_status(){

		$this->rbac->check_operation_access(); // check opration permission

		$this->admin->change_status();
	}
	
	//--------------------------------------------------
	function add(){

		$this->rbac->check_operation_access(); // check opration permission

		$data['admin_roles'] = $this->admin->get_admin_roles();

		$controller_name = $this->uri->segment(2);
		
		if($this->input->post('submit')){

				foreach($_POST as $key => $value){
					$fields[$key] = $this->input->post($key);
				} 
				unset($fields['submit']);
				$this->form_validation->set_rules('contract_no', 'Contract No', 'trim|required');				
				
				if ($this->form_validation->run() == FALSE) {
					$data = array(
						'errors' => validation_errors()
					);
					$this->session->set_flashdata('errors', $data['errors']);
					redirect(base_url('admin/lc_generation/add'),'refresh');
				}
				else{
					$data = array();
					
					$data['created_by'] = admin_id();
					$data['created_at'] = date('Y-m-d : h:m:s');
					$data['current_step'] = 1;
					$data['status'] = 1;
					
					$data = $this->security->xss_clean($data);
					$result = $this->lc_generation->add_lc_generation($data);
					$lc_id = $this->db->insert_id();

					$fields['lc_id'] = $lc_id;
					$fields['created_by'] = admin_id();
					$fields['created_at'] = date('Y-m-d : h:m:s');
					
					$fields = $this->security->xss_clean($fields);
					$result = $this->lc_generation->add_lc_contract($fields);
					
					if($result){
						// Activity Log 
						$this->activity_model->add_log(10);

						$this->session->set_flashdata('success', 'Record has been added successfully!');
						redirect(base_url('admin/lc_generation/add/'.$lc_id));
					}
				}
			}
			else
			{		
		$lc_obj=array('current_step'=>1) ;		
		if($this->uri->segment('4')){
			$lc_obj = $this->lc_generation->get_lc_generation_by_id($this->uri->segment('4'));
		}
				$module_id = module_id($controller_name);
				$data['form_fields'] = get_form_fields($module_id);	
				$data_page['lc_obj'] = $lc_obj;				
				$data_page['insurance_companies'] = $this->lc_generation->get_insurance_companies();
				$data_page['banks'] = $this->lc_generation->get_banks();
				$data_page['suppliers'] = $this->lc_generation->get_suppliers();
				$data_page['shippers'] = $this->lc_generation->get_shippers();
				$this->load->view('admin/includes/_header', $data);
        		$this->load->view('admin/lc_generation/add',$data_page);
        		$this->load->view('admin/includes/_footer');
			}
	}

	//--------------------------------------------------
	function add_insurance(){

		$this->rbac->check_operation_access(); // check opration permission

		$data['admin_roles'] = $this->admin->get_admin_roles();

		$controller_name = $this->uri->segment(2);
		
		if($this->input->post('submit')){

				foreach($_POST as $key => $value){
					$fields[$key] = $this->input->post($key);
				}
				
				
				unset($fields['submit']);
				$this->form_validation->set_rules('insurance_company', 'Insurance Company', 'trim|required');				
				
				if ($this->form_validation->run() == FALSE) {
					$data = array(
						'errors' => validation_errors()
					);
					$this->session->set_flashdata('errors', $data['errors']);
					redirect(base_url('admin/lc_generation/add/'.$fields['lc_id']),'refresh');
				}
				else{
					$data = array();
					$lc_id = trim($fields['lc_id']);
					$data['id']=$lc_id;
					$data['created_by'] = admin_id();
					$data['created_at'] = date('Y-m-d : h:m:s');
					$data['current_step'] = 2;
					$data['status'] = 1;
					
					$data = $this->security->xss_clean($data);
					$result = $this->lc_generation->update_lc_generation($data,$lc_id );
					
//var_dump($fields);
				//exit;
					$fields['lc_id'] = $lc_id;
					$fields['created_by'] = admin_id();
					$fields['created_at'] = date('Y-m-d : h:m:s');
					
					$fields = $this->security->xss_clean($fields);
					$result = $this->lc_generation->add_lc_insurance($fields);
					
					if($result){
						// Activity Log 
						$this->activity_model->add_log(10);

						$this->session->set_flashdata('success', 'Record has been added successfully!');
						redirect(base_url('admin/lc_generation/add/'.$lc_id));
					}
				}
			}
			else
			{				
				$module_id = module_id($controller_name);
				$data['form_fields'] = get_form_fields($module_id);		
				$data_page['insurance_companies'] = $this->lc_generation->get_insurance_companies();
				$data_page['banks'] = $this->lc_generation->get_banks();
				$data_page['suppliers'] = $this->lc_generation->get_suppliers();
				$data_page['shippers'] = $this->lc_generation->get_shippers();
				$this->load->view('admin/includes/_header', $data);
        		$this->load->view('admin/lc_generation/i_add',$data_page);
        		$this->load->view('admin/includes/_footer');
			}
	}

function add_bank(){

		$this->rbac->check_operation_access(); // check opration permission

		$data['admin_roles'] = $this->admin->get_admin_roles();

		$controller_name = $this->uri->segment(2);
		
		if($this->input->post('submit')){

				foreach($_POST as $key => $value){
					$fields[$key] = $this->input->post($key);
				}
				
				
				unset($fields['submit']);
				$this->form_validation->set_rules('bank', 'Bank', 'trim|required');				
				
				if ($this->form_validation->run() == FALSE) {
					$data = array(
						'errors' => validation_errors()
					);
					$this->session->set_flashdata('errors', $data['errors']);
					redirect(base_url('admin/lc_generation/add/'.$fields['lc_id']),'refresh');
				}
				else{
					$data = array();
					$lc_id = trim($fields['lc_id']);
					$data['created_by'] = admin_id();
					$data['created_at'] = date('Y-m-d : h:m:s');
					$data['current_step'] = 3;
					$data['status'] = 1;
					
					$data = $this->security->xss_clean($data);
					$result = $this->lc_generation->update_lc_generation($data,$lc_id );
					
//var_dump($fields);
				//exit;
					$fields['lc_id'] = $lc_id;
					$fields['created_by'] = admin_id();
					$fields['created_at'] = date('Y-m-d : h:m:s');
					
					$fields = $this->security->xss_clean($fields);
					$result = $this->lc_generation->add_lc_bank($fields);
					
					if($result){
						// Activity Log 
						$this->activity_model->add_log(10);

						$this->session->set_flashdata('success', 'Record has been added successfully!');
						redirect(base_url('admin/lc_generation/add/'.$lc_id));
					}
				}
			}
			else
			{				
				$module_id = module_id($controller_name);
				$data['form_fields'] = get_form_fields($module_id);		
				$data_page['insurance_companies'] = $this->lc_generation->get_insurance_companies();
				$data_page['banks'] = $this->lc_generation->get_banks();
				$data_page['suppliers'] = $this->lc_generation->get_suppliers();
				$data_page['shippers'] = $this->lc_generation->get_shippers();
				$this->load->view('admin/includes/_header', $data);
        		$this->load->view('admin/lc_generation/add',$data_page);
        		$this->load->view('admin/includes/_footer');
			}
	}
	
	
function add_supplier(){

		$this->rbac->check_operation_access(); // check opration permission

		$data['admin_roles'] = $this->admin->get_admin_roles();

		$controller_name = $this->uri->segment(2);
		
		if($this->input->post('submit')){

				foreach($_POST as $key => $value){
					$fields[$key] = $this->input->post($key);
				}
				
				
				unset($fields['submit']);
				$this->form_validation->set_rules('supplier_company', 'Supplier Company', 'trim|required');				
				
				if ($this->form_validation->run() == FALSE) {
					$data = array(
						'errors' => validation_errors()
					);
					$this->session->set_flashdata('errors', $data['errors']);
					redirect(base_url('admin/lc_generation/add/'.$fields['lc_id']),'refresh');
				}
				else{
					$data = array();
					$lc_id = trim($fields['lc_id']);
					$data['created_by'] = admin_id();
					$data['created_at'] = date('Y-m-d : h:m:s');
					$data['current_step'] = 4;
					$data['status'] = 1;
					
					$data = $this->security->xss_clean($data);
					$result = $this->lc_generation->update_lc_generation($data,$lc_id );
					
//var_dump($fields);
				//exit;
					$fields['lc_id'] = $lc_id;
					$fields['created_by'] = admin_id();
					$fields['created_at'] = date('Y-m-d : h:m:s');
					
					$fields = $this->security->xss_clean($fields);
					$result = $this->lc_generation->add_lc_supplier($fields);
					
					if($result){
						// Activity Log 
						$this->activity_model->add_log(10);

						$this->session->set_flashdata('success', 'Record has been added successfully!');
						redirect(base_url('admin/lc_generation/add/'.$lc_id));
					}
				}
			}
			else
			{				
				$module_id = module_id($controller_name);
				$data['form_fields'] = get_form_fields($module_id);		
				$data_page['insurance_companies'] = $this->lc_generation->get_insurance_companies();
				$data_page['banks'] = $this->lc_generation->get_banks();
				$data_page['suppliers'] = $this->lc_generation->get_suppliers();
				$data_page['shippers'] = $this->lc_generation->get_shippers();
				$this->load->view('admin/includes/_header', $data);
        		$this->load->view('admin/lc_generation/add',$data_page);
        		$this->load->view('admin/includes/_footer');
			}
	}
	
	
function add_shipper(){

		$this->rbac->check_operation_access(); // check opration permission

		$data['admin_roles'] = $this->admin->get_admin_roles();

		$controller_name = $this->uri->segment(2);
		
		if($this->input->post('submit')){

				foreach($_POST as $key => $value){
					$fields[$key] = $this->input->post($key);
				}
				
				
				unset($fields['submit']);
				$this->form_validation->set_rules('shipper_information', 'Shipper Information', 'trim|required');				
				
				if ($this->form_validation->run() == FALSE) {
					$data = array(
						'errors' => validation_errors()
					);
					$this->session->set_flashdata('errors', $data['errors']);
					redirect(base_url('admin/lc_generation/add/'.$fields['lc_id']),'refresh');
				}
				else{
					$data = array();
					$lc_id = trim($fields['lc_id']);
					$data['created_by'] = admin_id();
					$data['created_at'] = date('Y-m-d : h:m:s');
					$data['current_step'] = 5;
					$data['status'] = 1;
					
					$data = $this->security->xss_clean($data);
					$result = $this->lc_generation->update_lc_generation($data,$lc_id );
					
//var_dump($fields);
				//exit;
					$fields['lc_id'] = $lc_id;
					$fields['created_by'] = admin_id();
					$fields['created_at'] = date('Y-m-d : h:m:s');
					
					$fields = $this->security->xss_clean($fields);
					$result = $this->lc_generation->add_lc_shipper($fields);
					
					if($result){
						// Activity Log 
						$this->activity_model->add_log(10);

						$this->session->set_flashdata('success', 'Record has been added successfully!');
						redirect(base_url('admin/lc_generation/add/'.$lc_id));
					}
				}
			}
			else
			{				
				$module_id = module_id($controller_name);
				$data['form_fields'] = get_form_fields($module_id);		
				$data_page['insurance_companies'] = $this->lc_generation->get_insurance_companies();
				$data_page['banks'] = $this->lc_generation->get_banks();
				$data_page['suppliers'] = $this->lc_generation->get_suppliers();
				$data_page['shippers'] = $this->lc_generation->get_shippers();
				$this->load->view('admin/includes/_header', $data);
        		$this->load->view('admin/lc_generation/add',$data_page);
        		$this->load->view('admin/includes/_footer');
			}
	}
	//--------------------------------------------------
	function edit($id=""){
		$eid = $id;
		$id = decrypt_data($id);
		$this->rbac->check_operation_access(); // check opration permission

		$data['admin_roles'] = $this->admin->get_admin_roles();

		$controller_name = $this->uri->segment(2);
	
		if($this->input->post('submit')){
			
			$module_id = module_id($controller_name);
			$get_req_fields = get_req_fields($module_id);
			foreach($get_req_fields as $grf){
				$slug = make_slug_($grf['name']);
				$this->form_validation->set_rules($slug, $grf['name'], 'trim|required');
			}
			
			// Parent Module
			$field_id = decrypt_data($this->input->post('parent_module'));

			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'errors' => validation_errors()
				);
				$this->session->set_flashdata('errors', $data['errors']);
				redirect(base_url('admin/lc_generation/edit/'.$eid),'refresh');
			}
			else{
				$data = array();
				$form_fields = get_form_fields($module_id);
				foreach($form_fields as $key=>$ff){
					$name = make_slug_($ff['name']);
					$data[$name] = $this->input->post($name);
				}
				$data['updated_by'] = admin_id();
				$data['updated_at'] = date('Y-m-d : h:m:s');

				$data = $this->security->xss_clean($data);
				$result = $this->lc_generation->edit_lc_generation($data, $field_id);

				if($result){
					// Activity Log 
					$this->activity_model->add_log(11);

					$this->session->set_flashdata('success', 'Record has been updated successfully!');
					redirect(base_url('admin/lc_generation'));
				}
			}
		}
		elseif($id==""){
			redirect('admin/lc_generation');
		}
		else{
			$module_id = module_id($controller_name);
			$data['form_fields'] = get_form_fields($module_id);
			$data['lc_generation'] = $this->lc_generation->get_lc_generation_by_id($id);			
			$this->load->view('admin/includes/_header');
			$this->load->view('admin/lc_generation/edit', $data);
			$this->load->view('admin/includes/_footer');
		}		
	}

	//--------------------------------------------------
	function check_username($id=0){

		$this->db->from('admin');
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('admin_id !='.$id);
		$query=$this->db->get();
		if($query->num_rows() >0)
			echo 'false';
		else 
	    	echo 'true';
    }

    //------------------------------------------------------------
	function delete($id=''){
		$id = decrypt_data($id);
		$this->rbac->check_operation_access(); // check opration permission

		$this->lc_generation->delete($id);

		// Activity Log 
		$this->activity_model->add_log(12);

		$this->session->set_flashdata('success','Record has been Deleted Successfully.');	
		redirect('admin/lc_generation');
	}

	// get contract details
	function get_contract(){
		$cno = $this->input->post('cno');
		echo json_encode($this->lc_generation->get_contract($cno));
	}
	// get bank details
	function get_bank_details(){
		$bid = decrypt_data($this->input->post('bid'));
		echo json_encode($this->lc_generation->get_bank_details($bid));
	}
	// get bank details
	function get_ic_details(){
		$ic_id = decrypt_data($this->input->post('ic_id'));
		echo json_encode($this->lc_generation->get_ic_details($ic_id));
	}
	
}

?>