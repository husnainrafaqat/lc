<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
    
    // -----------------------------------------------------------------------------
    //check auth
    if (!function_exists('auth_check')) {
        function auth_check()
        {
            // Get a reference to the controller object
            $ci =& get_instance();
            if(!$ci->session->has_userdata('is_admin_login'))
            {
                redirect('admin/auth/login', 'refresh');
            }
        }
    }

    // -----------------------------------------------------------------------------
    //get module id name
    if (!function_exists('module_id')) {
        function module_id($c_name)
        {
            // Get a reference to the controller object
            $ci =& get_instance();
            $ci->db->select('*');
            $ci->db->where('controller_name',$c_name);
            $result = $ci->db->get('module')->row_array();      
            return $result['module_id'];            
        }
    }

    // -----------------------------------------------------------------------------
    //get module id name
    if (!function_exists('module_name')) {
        function module_name($id)
        {
            // Get a reference to the controller object
            $ci =& get_instance();
            $ci->db->select('*');
            $ci->db->where('module_id',$id);
            $result = $ci->db->get('module')->row_array();      
            return $result['controller_name'];            
        }
    }

    // -----------------------------------------------------------------------------
    //get role id
    if (!function_exists('role_id')) {
        function role_id()
        {
            // Get a reference to the controller object
            $ci =& get_instance();
            return $ci->session->userdata('admin_role_id');            
        }
    }

    // -----------------------------------------------------------------------------
    //get role name
    if (!function_exists('role_name')) {
        function role_name()
        {
            // Get a reference to the controller object
            $ci =& get_instance();
            return $ci->session->userdata('admin_role');            
        }
    }

    // -----------------------------------------------------------------------------
    //get admin  id
    if (!function_exists('admin_id')) {
        function admin_id()
        {
            // Get a reference to the controller object
            $ci =& get_instance();
            return $ci->session->userdata('admin_id');            
        }
    }

    // -----------------------------------------------------------------------------
    //get parent user id
    if (!function_exists('parent_user_id')) {
        function parent_user_id($user_id)
        {
            // Get a reference to the controller object
            $ci =& get_instance();
            $ci->db->select('*');
            $ci->db->where('admin_id',$user_id);
            $result = $ci->db->get('ci_admin')->row_array();      
            return $result['parentId'];
        }
    }

    // -----------------------------------------------------------------------------
    // Get General Setting
    if (!function_exists('get_general_settings')) {
        function get_general_settings()
        {
            $ci =& get_instance();
            $ci->load->model('admin/setting_model');
            return $ci->setting_model->get_general_settings();
        }
    }

     // -----------------------------------------------------------------------------
    // Generate Admin Sidebar Sub Menu
    if (!function_exists('get_sidebar_sub_menu')) {
        function get_sidebar_sub_menu($parent_id)
        {
            $ci =& get_instance();
            $ci->db->select('*');
            $ci->db->where('parent',$parent_id);
            $ci->db->where(array('status'=>'active'));
            $ci->db->order_by('sort_order','asc');
            return $ci->db->get('sub_module')->result_array();
        }
    }


    // -----------------------------------------------------------------------------
    // Generate Admin Sidebar Menu
    if (!function_exists('get_sidebar_menu')) {
        function get_sidebar_menu()
        {
            $ci =& get_instance();
            $ci->db->select('*');
            $ci->db->where('status',"A");
            $ci->db->order_by('sort_order','asc');
            return $ci->db->get('module')->result_array();
        }
    }

    // -----------------------------------------------------------------------------
    // Make Slug Function    
    if (!function_exists('make_slug'))
    {
        function make_slug($string)
        {
            $lower_case_string = strtolower($string);
            $string1 = preg_replace('/[^a-zA-Z0-9 ]/s', '', $lower_case_string);
            return strtolower(preg_replace('/\s+/', '-', $string1));        
        }
    }

    // -----------------------------------------------------------------------------
    // Make Slug Function    
    if (!function_exists('make_slug_'))
    {
        function make_slug_($string)
        {
            $lower_case_string = strtolower($string);
            $string1 = preg_replace('/[^a-zA-Z0-9 ]/s', '', $lower_case_string);
            return strtolower(preg_replace('/\s+/', '_', $string1));        
        }
    }

    // -----------------------------------------------------------------------------
    //get recaptcha
    if (!function_exists('generate_recaptcha')) {
        function generate_recaptcha()
        {
            $ci =& get_instance();
            if ($ci->recaptcha_status) {
                $ci->load->library('recaptcha');
                echo '<div class="form-group mt-2">';
                echo $ci->recaptcha->getWidget();
                echo $ci->recaptcha->getScriptTag();
                echo ' </div>';
            }
        }
    }

    // ----------------------------------------------------------------------------
    //print old form data
    if (!function_exists('old')) {
        function old($field)
        {
            $ci =& get_instance();
            return html_escape($ci->session->flashdata('form_data')[$field]);
        }
    }

    // --------------------------------------------------------------------------------
    if (!function_exists('date_time')) {
        function date_time($datetime) 
        {
           return date('F j, Y',strtotime($datetime));
        }
    }

    // --------------------------------------------------------------------------------
    // limit the no of characters
    if (!function_exists('text_limit')) {
        function text_limit($x, $length)
        {
          if(strlen($x)<=$length)
          {
            echo $x;
          }
          else
          {
            $y=substr($x,0,$length) . '...';
            echo $y;
          }
        }
    }
    
    // --------------------------------------------------------------------------------
    // encrypt data funciton
    function encrypt_data($data){
        $secret_key = 'bcb04b7e103a0cd8b54763051cef08bc55abe029fdebae5e1d417e2ffb2a00a3';
        $secret_iv = '543214'; 
        $output = false;
        $encrypt_method = "AES-256-CBC";
        $key = hash( 'sha256', $secret_key );
        $iv = substr( hash( 'sha256', $secret_iv ), 0, 16);
        return base64_encode( openssl_encrypt( $data, $encrypt_method, $key, 0, $iv ) );	
    }

    // --------------------------------------------------------------------------------
    // decrypt data funciton
    function decrypt_data($data){
        $secret_key = 'bcb04b7e103a0cd8b54763051cef08bc55abe029fdebae5e1d417e2ffb2a00a3';
        $secret_iv = '543214'; 
        $output = false;
        $encrypt_method = "AES-256-CBC";
        $key = hash( 'sha256', $secret_key );
        $iv = substr( hash( 'sha256', $secret_iv ), 0, 16);
        return openssl_decrypt( base64_decode( $data ), $encrypt_method, $key, 0, $iv );	
    }

    //-----------------------------------------------------
	function get_form_fields($id)
	{		
        $ci =& get_instance();
		$ci->db->from('ci_module_form');
		$ci->db->order_by('sort_order','asc');
		$ci->db->where('module_id',$id);
		$query = $ci->db->get();
		$module = array();
		if ($query->num_rows() > 0) 
		{
			$module = $query->result_array();
		}
		return $module;
	}
    //-----------------------------------------------------
	function get_form_fields_for_datatable($id)
	{		
        $ci =& get_instance();
		$ci->db->from('ci_module_form');
		$ci->db->order_by('sort_order','asc');
        $ci->db->where('show_on_datatable',"Yes");
		$ci->db->where('module_id',$id);
		$query = $ci->db->get();
		$module = array();
		if ($query->num_rows() > 0) 
		{
			$module = $query->result_array();
		}
		return $module;
	}
	//-----------------------------------------------------
	function get_req_fields($id)
	{		
        $ci =& get_instance();
		$ci->db->from('ci_module_form');
		$ci->db->where('module_id',$id);
		$ci->db->where('is_required','1');
		$query = $ci->db->get();
		$module = array();
		if ($query->num_rows() > 0) 
		{
			$module = $query->result_array();
		}
		return $module;
	}

    //-----------------------------------------------------
	function get_countries()
	{		
        $ci =& get_instance();
		$ci->db->from('ci_countries');
		$query = $ci->db->get();
		$module = array();
		if ($query->num_rows() > 0) 
		{
			$module = $query->result_array();
		}
		return $module;
	}

    //-----------------------------------------------------
	function get_states()
	{		
        $ci =& get_instance();
		$ci->db->from('ci_states');
		$query = $ci->db->get();
		$module = array();
		if ($query->num_rows() > 0) 
		{
			$module = $query->result_array();
		}
		return $module;
	}

    //-----------------------------------------------------
	function get_cities()
	{		
        $ci =& get_instance();
		$ci->db->from('ci_cities');
		$query = $ci->db->get();
		$module = array();
		if ($query->num_rows() > 0) 
		{
			$module = $query->result_array();
		}
		return $module;
	}

    //-----------------------------------------------------
	function get_options($id)
	{		
        $ci =& get_instance();
		$ci->db->from('ci_dropdown_vals');
        $ci->db->where('module_form_id',$id);
		$query = $ci->db->get();
		$module = array();
		if ($query->num_rows() > 0) 
		{
			$module = $query->row_array();
		}
		return $module;
	}

?>