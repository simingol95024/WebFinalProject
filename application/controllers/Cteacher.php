<?php

class Cteacher extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('teacher');
        $this->load->library('form_validation','session');
        $this->lang->load('main',$this->session->userdata('language'));
       
    }

    function index(){
        
        $this->load->library('pagination');
        $offset=$this->uri->segment(3);
        $config['base_url']=base_url().'index.php/Cteacher/index';
        $config['total_rows']=$this->teacher->count_teacher();
        $config['per_page']=4;
        $config['uri_segment']=3;
        $this->pagination->initialize($config);
        $data['teacher'] = $this->teacher->list_teacher($config['per_page'],$offset); 
        $this->load->view('teachers/teacher',$data);
        $this->session->set_userdata('lastvisited',current_url()); 
    }

    function new_teacher(){
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('lastname', 'Lastname', 'trim|required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        
         if($this->form_validation->run() == false){
           
              $this->load->view('teachers/teacher');
               
           
        }else{

            
            $data=array();
            $data['t_name']=$this->input->post("name");
            $data['t_lastname']=$this->input->post("lastname");
            $data['t_phone']=$this->input->post("phone");
            $data['t_email']=$this->input->post("email");
            $this->load->model('teacher');
            $this->teacher->add_teacher($data);
            // $this->load->view('login_new_account');
            $this->session->set_flashdata('success',"save was susses");
            redirect('Cteacher/index');
       
        }
        
      
    }
    
    function edit($id){
        $this->load->model("teacher");
        $data['teacher']=$this->teacher->get_teacher($id);   
        $this->load->view('teachers/edit_teacher',$data);
    }

    function edit_teacher($id){
        $data['teacher']=$this->teacher->get_teacher($id); 
        $this->form_validation->set_rules("name","Name","required");
        $this->form_validation->set_rules("lastname","Lastname","required");
        $this->form_validation->set_rules("email","Email","required");
        $this->form_validation->set_rules("phone","Phone","required");
        if($this->form_validation->run() == false){
            $this->load->view('teachers/edit_teacher',$data);
            }else{
            $data=array();
            $data['t_name']=$this->input->post("name");
            $data['t_lastname']=$this->input->post("lastname");
            $data['t_email']=$this->input->post("email");
            $data['t_phone']=$this->input->post("phone");
            
          $this->teacher->update_teacher($id,$data);
            $this->session->set_flashdata('success',"record update successfully");
            redirect('Cteacher/index');
            }

        }
    function drop_teacher($id){
        $teacher= $this->teacher->get_teacher($id);
        if(empty($teacher)){
         $this->session->set_flashdata('failure',"record not found in the database");
         redirect('Cteacher/drop_teacher');
        } else{
           $this->teacher->delete_teacher($id);
           $this->session->set_flashdata('success',"record delete successfull");
         redirect('Cteacher/index');
        
        
        }
    }
   
}