<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Lc_expanses extends MY_Controller
{
    function __construct(){

        parent::__construct();
        auth_check(); // check login auth
        $this->rbac->check_module_access();

		$this->load->model('admin/admin_model', 'admin');
		$this->load->model('admin/lc_expanses_model', 'lc_expanses');
		$this->load->model('admin/Activity_model', 'activity_model');
    }

	//-----------------------------------------------------		
	function index($type=''){

		$data['title'] = 'lc_expanses List';

		$this->load->view('admin/includes/_header');
		$this->load->view('admin/lc_expanses/index', $data);
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
		$data['info'] = $this->lc_expanses->get_all();
		$controller_name = $this->uri->segment(2);
		$module_id = module_id($controller_name);
		$data['form_fields'] = get_form_fields($module_id);
		$this->load->view('admin/lc_expanses/list',$data);
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

				$module_id = module_id($controller_name);
				$get_req_fields = get_req_fields($module_id);
				foreach($get_req_fields as $grf){
					$slug = make_slug_($grf['name']);
					$this->form_validation->set_rules($slug, $grf['name'], 'trim|required');
				}
				
				if ($this->form_validation->run() == FALSE) {
					$data = array(
						'errors' => validation_errors()
					);
					$this->session->set_flashdata('errors', $data['errors']);
					redirect(base_url('admin/lc_expanses/add'),'refresh');
				}
				else{
					$data = array();
					$form_fields = get_form_fields($module_id);
					foreach($form_fields as $key=>$ff){
						$name = make_slug_($ff['name']);
						$data[$name] = $this->input->post($name);
					}

					$data['created_by'] = admin_id();
					$data['created_at'] = date('Y-m-d : h:m:s');
					
					$data = $this->security->xss_clean($data);
					$result = $this->lc_expanses->add_lc_expanses($data);
					if($result){
						// Activity Log 
						$this->activity_model->add_log(10);

						$this->session->set_flashdata('success', 'Record has been added successfully!');
						redirect(base_url('admin/lc_expanses'));
					}
				}
			}
			else
			{				
				$module_id = module_id($controller_name);
				$data['form_fields'] = get_form_fields($module_id);				
				$this->load->view('admin/includes/_header', $data);
        		$this->load->view('admin/lc_expanses/add');
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
				redirect(base_url('admin/lc_expanses/edit/'.$eid),'refresh');
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
				$result = $this->lc_expanses->edit_lc_expanses($data, $field_id);

				if($result){
					// Activity Log 
					$this->activity_model->add_log(11);

					$this->session->set_flashdata('success', 'Record has been updated successfully!');
					redirect(base_url('admin/lc_expanses'));
				}
			}
		}
		elseif($id==""){
			redirect('admin/lc_expanses');
		}
		else{
			$module_id = module_id($controller_name);
			$data['form_fields'] = get_form_fields($module_id);
			$data['lc_expanses'] = $this->lc_expanses->get_lc_expanses_by_id($id);			
			$this->load->view('admin/includes/_header');
			$this->load->view('admin/lc_expanses/edit', $data);
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

		$this->lc_expanses->delete($id);

		// Activity Log 
		$this->activity_model->add_log(12);

		$this->session->set_flashdata('success','Record has been Deleted Successfully.');	
		redirect('admin/lc_expanses');
	}
	
}

?>