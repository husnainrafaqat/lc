<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Property extends MY_Controller
{
    function __construct(){

        parent::__construct();
        auth_check(); // check login auth
        $this->rbac->check_module_access();

		$this->load->model('admin/admin_model', 'admin');
		$this->load->model('admin/property_model', 'property');
		$this->load->model('admin/Activity_model', 'activity_model');
    }

	//-----------------------------------------------------		
	function index($type=''){

		$data['title'] = 'Property List';

		$this->load->view('admin/includes/_header');
		$this->load->view('admin/property/index', $data);
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

		$data['info'] = $this->property->get_all();
		$this->load->view('admin/property/list',$data);
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

		if($this->input->post('submit')){
				$this->form_validation->set_rules('name', 'name', 'trim|required');
				$this->form_validation->set_rules('status', 'status', 'trim|required');
				
				if ($this->form_validation->run() == FALSE) {
					$data = array(
						'errors' => validation_errors()
					);
					$this->session->set_flashdata('errors', $data['errors']);
					redirect(base_url('admin/property/add'),'refresh');
				}
				else{
					$slug = preg_replace('/[^a-zA-Z0-9_.]/', '', $this->input->post('name'));
					$data = array(
						'name' => $this->input->post('name'),
						'slug' => $slug,
						'status' => $this->input->post('status'),
						'created_at' => date('Y-m-d : h:m:s'),
						'updated_at' => date('Y-m-d : h:m:s'),
					);
					$data = $this->security->xss_clean($data);
					$result = $this->property->add_property($data);
					if($result){

						// Activity Log 
						$this->activity_model->add_log(4);

						$this->session->set_flashdata('success', 'Record has been added successfully!');
						redirect(base_url('admin/property'));
					}
				}
			}
			else
			{
				$this->load->view('admin/includes/_header', $data);
        		$this->load->view('admin/property/add');
        		$this->load->view('admin/includes/_footer');
			}
	}

	//--------------------------------------------------
	function edit($id=""){

		$this->rbac->check_operation_access(); // check opration permission

		$data['admin_roles'] = $this->admin->get_admin_roles();

		if($this->input->post('submit')){
			$this->form_validation->set_rules('name', 'name', 'trim|required');
			$this->form_validation->set_rules('status', 'status', 'trim|required');
			
			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'errors' => validation_errors()
				);
				$this->session->set_flashdata('errors', $data['errors']);
				redirect(base_url('admin/property/edit/'.$id),'refresh');
			}
			else{
				$slug = preg_replace('/[^a-zA-Z0-9_.]/', '', $this->input->post('name'));
				$data = array(					
					'name' => $this->input->post('name'),
					'slug' => $slug,
					'status' => $this->input->post('status'),
					'created_at' => date('Y-m-d : h:m:s'),
					'updated_at' => date('Y-m-d : h:m:s'),
				);

				$data = $this->security->xss_clean($data);
				$result = $this->property->edit_property($data, $id);

				if($result){
					// Activity Log 
					$this->activity_model->add_log(5);

					$this->session->set_flashdata('success', 'Record has been updated successfully!');
					redirect(base_url('admin/property'));
				}
			}
		}
		elseif($id==""){
			redirect('admin/property');
		}
		else{
			$data['property'] = $this->property->get_property_by_id($id);
			
			$this->load->view('admin/includes/_header');
			$this->load->view('admin/property/edit', $data);
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
	   
		$this->rbac->check_operation_access(); // check opration permission

		$this->property->delete($id);

		// Activity Log 
		$this->activity_model->add_log(6);

		$this->session->set_flashdata('success','Record has been Deleted Successfully.');	
		redirect('admin/property');
	}
	
}

?>