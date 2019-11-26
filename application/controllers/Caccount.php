<?php

class Caccount extends CI_Controller{


    function __construct(){
        parent::__construct(); 
        $this->load->model('account');
        $this->load->library('form_validation','session');
        $this->lang->load('main',$this->session->userdata('language'));

        $this->load->library('encryption');

        $key = bin2hex($this->encryption->create_key(16));

      
        $config['encryption_key'] = hex2bin($key);
        $this->encryption->initialize(
            array(
                'cipher' => 'aes-256',
                'mode' => 'ctr',
                'key' => '<a 32-character random string>'
        )
      );
        $this->encryption->initialize(array('driver' => 'mcrypt'));
        $this->encryption->initialize(array('driver' => 'openssl'));
     
        
    }

    function index(){
        $this->load->view('connection');
        $data['account'] = $this->account->list_account();
      
      $this->session->set_userdata('lastvisited',current_url());
    
    }
    function listAccount(){
        $this->load->model('account');
        $this->load->library('pagination');
        $offset=$this->uri->segment(3);
        $config['base_url']=base_url().'index.php/Caccount/listAccount';
        $config['total_rows']=$this->account->count_account();
        
        $config['per_page']=4;
        $config['uri_segment']=3;
        $this->pagination->initialize($config); 
        $data['account']=$this->account->list_account($config['per_page'],$offset);
       
       $this->load->view('account/list_account',$data);
    }
    
    function get_account($id=1){
        $data['account'] = $this->account->get_account($id);
        // echo "get";
        //$this->load->view('get_account',$data);
    }

    function login(){
        $this->load->view('login_new_account');
        $this->session->set_userdata('lastvisited',current_url());
    }
    function login_user(){
        $this->load->view('login_user');
        $this->session->set_userdata('lastvisited',current_url());
    }

    function home(){
        $this->load->view('home'); 
    }

    function new_account(){
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('lastname', 'Lastname', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[account.username]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[account.acc_email]');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
       
       
       
        //|matches[account.password]
        
        
         if(!$this->form_validation->run()){
             //echo "could not validate";
            
            // $data['err'] = validation_errors();
              $this->load->view('login_new_account');
            
           
        }else{

            $data=array();
            $data['acc_name']=$this->input->post("name");
            $data['acc_lastname']=$this->input->post("lastname");
            $data['username']=$this->input->post("username");
            $data['acc_email']=$this->input->post("email");
            // $data['password']=$this->input->post("password");

            $password= $this->input->post("password");
            $epassword = $this->encryption->encrypt($password);
            
            $data['password'] = $epassword;
            $this->load->model('account');
            $this->account->insert_account($data);
            $this->session->set_flashdata('success',"save was susses");
            $this->load->view('login_user');
            redirect('Caccount/login');
           
       
        }
       
       
  
    }
    function edit($id){
        $this->load->model("account");
        $data['account']=$this->account->get_account($id);   
        $this->load->view('account/edit_account',$data);
    }
    function edit_account($id){
        $data['account']=$this->account->get_account($id); 

        $this->form_validation->set_rules("name","Name","required");
        $this->form_validation->set_rules("lastname","Lastname","required");
        $this->form_validation->set_rules("username","Username","required"|"is_unique");
        $this->form_validation->set_rules("email","Email","required|valid_email|is_unique");
        $this->form_validation->set_rules("password","Password","required|min_length[4]"|"is_unique");

            if(!$this->form_validation->run()){
            $this->load->view('account/edit_account',$data);
            }else{
            $data=array();
            $data['acc_name']=$this->input->post("name");
            $data['acc_lastname']=$this->input->post("lastname");
            $data['username']=$this->input->post("username");
            $data['acc_email']=$this->input->post("email");
            $data['password']=$this->input->post("password");
           $this->account->update_account($id,$data);
            $this->session->set_flashdata('success',"record update successfully");
            redirect('Caccount/listAccount/');
            }
    }



    function admin(){
        $data['admin'] = $this->account->list_admin();
        $this->load->view('account/admin_view.php',$data);
        //print_r($data);
        
    }
    function edit_admin($id){
        $this->load->model("account");
        $data['admin'] = $this->account->get_account_admin($id);
        $this->load->view('account/edit_account_admin_view',$data);
        // print_r($data);
    }


    function edit_account_admin($id){
        $data['admin'] = $this->account->get_account_admin($id);
        $this->form_validation->set_rules("name","Name","required");
        $this->form_validation->set_rules("lastname","Lastname","required");
        $this->form_validation->set_rules("username","Username","required"|"is_unique");
        $this->form_validation->set_rules("email","Email","required|valid_email");
        $this->form_validation->set_rules("password","Password","required|min_length[4]"|"is_unique");

            if(!$this->form_validation->run()){
            $this->load->view('account/edit_account_admin_view',$data);
            }else{
            $data=array();
            $data['acc_name']=$this->input->post("name");
            $data['acc_lastname']=$this->input->post("lastname");
            $data['username']=$this->input->post("username");
            $data['acc_email']=$this->input->post("email");
            $data['password']=$this->input->post("password");
           $this->account->update_account($id,$data);
            $this->session->set_flashdata('success',"record update successfully");
            redirect('Caccount/admin/');
            }
    }
    function drop_account($id){
        $account= $this->account->get_account($id);
        if(empty($account)){
        $this->session->set_flashdata('failure',"record not found in the database");
        redirect('Caccount/drop_account');
        } else{
        $this->account->delete_account($id);
        $this->session->set_flashdata('success',"record delete successfull");
        redirect('Caccount/listAccount');


        }
    }


    function login_validation( ){
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
    
        if( $this->form_validation->run()){
            $username=$this->input->post("username");
            $password=$this->input->post("password");
            
            $data=$this->account->can_login_user( $username,$password);

            $eusername= $this->encryption->encrypt($username);
            $epassword= $this->encryption->encrypt($password);

            $this->session->set_userdata('username',$eusername);
            $this->session->set_userdata('password',$epassword);

            // echo $eusername;
            // echo "<br>";
            //  echo $epassword;
            //  die();
       
            if (!$data) {
                echo "<h1>"."YOU CAN NOT LOGIN"."</h1>";
            }else{
                // redirect(base_url().'home/');
                $this->load->view('home');
            }
            
        
        }else{
            echo "validation error";
        }
    }
    function logout_user(){

        $username = $this->session->userdata('username');
        $password = $this->session->userdata('password');

        echo $this->encryption->decrypt($username);

        echo "<br>";
        echo $this->encryption->decrypt($password);
        
        // die();
         $this->session->unset_userdata('$username');
         $this->session->unset_userdata('$password');

        redirect('Caccount/user_logout');
        }
        
    function user_logout(){
            $this->load->view('index2');
        }

    function Admin_login_validation( ){


        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');

        if($this->form_validation->run()){
            $username=$this->input->post("username");
            $password=$this->input->post("password");
           
            $data=$this->account->can_login_admin( $username,$password);

            $eusername= $this->encryption->encrypt($username);
            $epassword= $this->encryption->encrypt($password);

            $this->session->set_userdata('username',$eusername);
            $this->session->set_userdata('password',$epassword);

            // echo $eusername;
            // echo "<br>";
            //  echo $epassword;
            //  die();
            if (!$data) {
                echo "<h1>"."YOU CAN NOT LOGIN"."</h1>";
            }else{
                 redirect('Ccourse/index');
               // $this->load->view('courses/course_view');
            }
            
        
        }else{
            echo "validation error";
        }
    }
    function logout_admin(){
        
        $username = $this->session->userdata('username');
        $password = $this->session->userdata('password');

        echo $this->encryption->decrypt($username);

        echo "<br>";
        echo $this->encryption->decrypt($password);
        
        // die();
         $this->session->unset_userdata('$username');
         $this->session->unset_userdata('$password');

        $this->session->unset_userdata('username');
        redirect('Caccount/Admin_logout');
        }
    function Admin_logout(){
            $this->load->view('index2');
        }



    function lang_load($lang){
        $this->session->set_userdata('language',$lang);
        redirect($this->session->userdata('lastvisited'));
    }

    

   
}