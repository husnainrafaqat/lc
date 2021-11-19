<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends MY_Controller
{
    function __construct(){

        parent::__construct();
        auth_check(); // check login auth
        $this->rbac->check_module_access();

		$this->load->model('admin/admin_model', 'admin');
		$this->load->model('admin/inventory_model', 'inventory');
		$this->load->model('admin/Activity_model', 'activity_model');
    }

	//-----------------------------------------------------		
	function index($type=''){
		$this->session->set_userdata('filter_type',$type);
		$this->session->set_userdata('filter_keyword','');
		$this->session->set_userdata('filter_status','');

		$data['societies'] = $this->inventory->get_society();
		$data['property'] = $this->inventory->get_property();
		$data['agency'] = $this->inventory->get_agency();
		$data['property_type'] = $this->inventory->get_property_type();
		$data['title'] = 'Inventory List';
		
		$this->load->view('admin/includes/_header');
		$this->load->view('admin/inventory/index', $data);
		$this->load->view('admin/includes/_footer');
	}

	//---------------------------------------------------------
	function filterdata(){
		$this->session->set_userdata('filter_society',$this->input->post('society'));
		$this->session->set_userdata('filter_property',$this->input->post('property'));
		$this->session->set_userdata('filter_agency',$this->input->post('agency'));
		$this->session->set_userdata('filter_property_type',$this->input->post('property_type'));
		$this->session->set_userdata('filter_max_price',$this->input->post('max_price'));
		$this->session->set_userdata('filter_keyword',$this->input->post('keyword'));	
	}

	//--------------------------------------------------		
	function list_filterdata(){
		$society = $this->session->userdata('filter_society');
		$property = $this->session->userdata('filter_property');
		$agency = $this->session->userdata('filter_agency');
		$property_type = $this->session->userdata('filter_property_type');
		$max_price = $this->session->userdata('filter_max_price');
		$keyword = $this->session->userdata('filter_keyword');
		$data['info'] = $this->inventory->get_filterdata($society,$property,$agency,$property_type,$max_price);
		$this->load->view('admin/inventory/list',$data);
	}

	//--------------------------------------------------		
	function list_data(){
		$role_name = role_name();
		$user_id = admin_id();
		if($role_name=="Super Admin" || $role_name=="Admin"){
			$data['info'] = $this->inventory->get_all();
		}else{
			$data['info'] = $this->inventory->get_user_inventory($user_id);
		}
		$this->load->view('admin/inventory/list',$data);
	}

	//--------------------------------------------------		
	function get_inventory_data($id){
		$row = $this->inventory->get_inventory($id);
		
		$agency = $this->inventory->get_agency_by_id($row['agency']);
		$agency_name = $block_name = $society_name = $property_name = $pt_name =  "";
		if(isset($agency) && !empty($agency)){
			$agency_name = $agency['firstname'].' '.$agency['lastname'];  
		}                
		$block = $this->inventory->get_block_by_id($row['block']);
		if(isset($block) && !empty($block)){
			 $block_name = $block['name'];  
		}
		$society = $this->inventory->get_society_by_id($row['society']);
		if(isset($society) && !empty($society)){
			$society_name = $society['name'];  
		}
		$property = $this->inventory->get_property_by_id($row['property']);
		if(isset($property) && !empty($property)){
			$property_name = $property['name'];  
		}
		$pt = $this->inventory->get_property_type_by_id($row['property_type']);
		if(isset($pt) && !empty($pt)){
			$pt_name = $pt['name'];  
		}  


		$html =  "<div class='row'><span class='col-md-6'><strong>Name: </strong></span> <span class='col-md-6'>".$row['name']."</span></div>";
		$html .= "<div class='row'><span class='col-md-6'><strong>Agency: </strong></span> <span class='col-md-6'> ".$agency_name."</span></div>";
		$html .= "<div class='row'><span class='col-md-6'><strong>Society: </strong></span> <span class='col-md-6'> ".$society_name."</span></div>";
		$html .= "<div class='row'><span class='col-md-6'><strong>Block: </strong></span> <span class='col-md-6'> ".$block_name."</span></div>";
		$html .= "<div class='row'><span class='col-md-6'><strong>Property: </strong></span> <span class='col-md-6'> ".$property_name."</span></div>";
		$html .= "<div class='row'><span class='col-md-6'><strong>Property Type: </strong></span> <span class='col-md-6'> ".$pt_name."</span></div>";
		$html .= "<div class='row'><span class='col-md-6'><strong>Property Size: </strong></span> <span class='col-md-6'> ".$row['property_size']."</span></div>";
		$html .= "<div class='row'><span class='col-md-6'><strong>Property No: </strong></span> <span class='col-md-6'> ".$row['property_no']."</span></div>";
		$html .= "<div class='row'><span class='col-md-6'><strong>Email: </strong></span> <span class='col-md-6'> ".$row['email']."</span></div>";
		$html .= "<div class='row'><span class='col-md-6'><strong>Mobile No: </strong></span> <span class='col-md-6'> ".$row['mobile_no']."</span></div>";
		$html .= "<div class='row'><span class='col-md-6'><strong>Demand: </strong></span> <span class='col-md-6'> ".$row['demand']."</span></div>";
		echo $html;
		//dd($row);		
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
				$this->form_validation->set_rules('mobile_no', 'mobile_no', 'trim|required');
				$this->form_validation->set_rules('email', 'email', 'trim|required');
				$this->form_validation->set_rules('agency', 'agency', 'trim|required');
				$this->form_validation->set_rules('society', 'society', 'trim|required');				
				$this->form_validation->set_rules('block', 'block', 'trim|required');
				$this->form_validation->set_rules('property', 'property', 'trim|required');
				$this->form_validation->set_rules('property_type', 'property_type', 'trim|required');
				$this->form_validation->set_rules('property_size', 'property_size', 'trim|required');
				$this->form_validation->set_rules('property_no', 'property_no', 'trim|required');
				$this->form_validation->set_rules('demand', 'demand', 'trim|required');
				$this->form_validation->set_rules('min_price', 'min_price', 'trim|required');				
				$this->form_validation->set_rules('status', 'status', 'trim|required');
				$this->form_validation->set_rules('visibility', 'visibility', 'trim|required');
				
				if ($this->form_validation->run() == FALSE) {
					$data = array(
						'errors' => validation_errors()
					);
					$this->session->set_flashdata('errors', $data['errors']);
					redirect(base_url('admin/inventory/add'),'refresh');
				}
				else{
					$admin_id = admin_id();
					$role_name = role_name();
					if($role_name=="Agent"){
						$get_parent_id = parent_user_id($admin_id);
					}else{
						$get_parent_id = NULL;
					}
					$data = array(
						'name' => $this->input->post('name'),
						'mobile_no' => $this->input->post('mobile_no'),
						'email' => $this->input->post('email'),						
						'agency' => $this->input->post('agency'),
						'society' => $this->input->post('society'),
						'block' => $this->input->post('block'),
						'property' => $this->input->post('property'),
						'property_type' => $this->input->post('property_type'),
						'property_size' => $this->input->post('property_size'),						
						'property_no' => $this->input->post('property_no'),
						'demand' => $this->input->post('demand'),
						'min_price' => $this->input->post('min_price'),						
						'status' => $this->input->post('status'),
						'visibility' => $this->input->post('visibility'),
						'usrRecordId' => $admin_id,
						'usrParentId' => $get_parent_id,
						'created_at' => date('Y-m-d : h:m:s'),
						'updated_at' => date('Y-m-d : h:m:s'),
					);
					$data = $this->security->xss_clean($data);
					$result = $this->inventory->add_inventory($data);
					if($result){

						// Activity Log 
						$this->activity_model->add_log(4);

						$this->session->set_flashdata('success', 'Record has been added successfully!');
						redirect(base_url('admin/inventory'));
					}
				}
			}
			else
			{
				$this->load->view('admin/includes/_header', $data);
        		$this->load->view('admin/inventory/add');
        		$this->load->view('admin/includes/_footer');
			}
	}

	//--------------------------------------------------
	function edit($id=""){
		
		$id=decrypt_data($id);

		$this->rbac->check_operation_access(); // check opration permission

		$data['admin_roles'] = $this->admin->get_admin_roles();

		if($this->input->post('submit')){
			$this->form_validation->set_rules('name', 'name', 'trim|required');
			$this->form_validation->set_rules('mobile_no', 'mobile_no', 'trim|required');
			$this->form_validation->set_rules('email', 'email', 'trim|required');
			$this->form_validation->set_rules('agency', 'agency', 'trim|required');
			$this->form_validation->set_rules('society', 'society', 'trim|required');				
			$this->form_validation->set_rules('block', 'block', 'trim|required');
			$this->form_validation->set_rules('property', 'property', 'trim|required');
			$this->form_validation->set_rules('property_type', 'property_type', 'trim|required');
			$this->form_validation->set_rules('property_size', 'property_size', 'trim|required');
			$this->form_validation->set_rules('property_no', 'property_no', 'trim|required');
			$this->form_validation->set_rules('demand', 'demand', 'trim|required');
			$this->form_validation->set_rules('min_price', 'min_price', 'trim|required');			
			$this->form_validation->set_rules('status', 'status', 'trim|required');
			$this->form_validation->set_rules('visibility', 'visibility', 'trim|required');
			
			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'errors' => validation_errors()
				);
				$this->session->set_flashdata('errors', $data['errors']);
				redirect(base_url('admin/inventory/edit/'.$id),'refresh');
			}
			else{
				$admin_id = admin_id();
				$role_name = role_name();
				if($role_name=="Agent"){
					$get_parent_id = parent_user_id($admin_id);
				}else{
					$get_parent_id = NULL;
				}
				$data = array(					
					'name' => $this->input->post('name'),
						'mobile_no' => $this->input->post('mobile_no'),
						'email' => $this->input->post('email'),						
						'agency' => $this->input->post('agency'),
						'society' => $this->input->post('society'),
						'block' => $this->input->post('block'),
						'property' => $this->input->post('property'),
						'property_type' => $this->input->post('property_type'),
						'property_size' => $this->input->post('property_size'),
						'property_no' => $this->input->post('property_no'),
						'demand' => $this->input->post('demand'),
						'min_price' => $this->input->post('min_price'),						
						'status' => $this->input->post('status'),
						'visibility' => $this->input->post('visibility'),
						'usrRecordId' => $admin_id,
						'usrParentId' => $get_parent_id,
						'created_at' => date('Y-m-d : h:m:s'),
						'updated_at' => date('Y-m-d : h:m:s'),
				);

				$data = $this->security->xss_clean($data);
				$result = $this->inventory->edit_inventory($data, $id);

				if($result){
					// Activity Log 
					$this->activity_model->add_log(5);

					$this->session->set_flashdata('success', 'Record has been updated successfully!');
					redirect(base_url('admin/inventory'));
				}
			}
		}
		elseif($id==""){
			redirect('admin/inventory');
		}
		else{
			$data['inventory'] = $this->inventory->get_inventory_by_id($id);
			
			$this->load->view('admin/includes/_header');
			$this->load->view('admin/inventory/edit', $data);
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
		$id=decrypt_data($id);
		$this->rbac->check_operation_access(); // check opration permission

		$this->inventory->delete($id);

		// Activity Log 
		$this->activity_model->add_log(6);

		$this->session->set_flashdata('success','Record has been Deleted Successfully.');	
		redirect('admin/inventory');
	}

	public function get_blocks($socityId=null){
        if($socityId !=null){
            $all_blocks = $this->inventory->get_blocks_by_id($socityId);
			print_r($all_blocks);
            $html = '<option value="">Select</option>';
            foreach($all_blocks as $b){ 
                $html.= '<option value="'.$b['blRecordId'].'">'.$b['name'].'</option>';
            }
            echo $html;
        }
        echo "";
    }
	
}

?>