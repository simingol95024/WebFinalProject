<?php

class Ccourse extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('course');
        //$this->load->library('session');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->lang->load('main',$this->session->userdata('language'));
        $this->session->set_userdata('lastvisited',current_url());

    }

    function index(){
        $data['course'] = $this->course->list_course();
        //echo"<per>";print_r($data['course']);echo "</per>";
      $this->load->view('courses/course_view',$data);
      $this->session->set_userdata('lastvisited',current_url());
    
    }

    function add_course(){
        if($_POST){
            $name= $this->input->post('name',true);
            $data = array(
            'c_name'=>$name);
           
        $this->course->new_course($data);
        redirect('Ccourse/index');

        }else{
            $this->load->view('login_new_account');
        }
      
    }
    function edit($id){
        $this->load->model("course");
        $data['course']=$this->course->get_course($id);   
        $this->load->view('courses/edit_course',$data);
    }
    function edit_course($id){
        $data['course']=$this->course->get_course($id);
        $this->form_validation->set_rules("name","Name","required");
            if($this->form_validation->run() == false){
            $this->load->view('courses/course_view',$data);
            
            }else{
            $data=array();
            $data['c_name']=$this->input->post("name");
            
          $this->course->update_course($id,$data);
            $this->session->set_flashdata('success',"record update successfully");
            redirect('Ccourse/index');
            }

        }

    
    function drop_course($id){
        $course= $this->course->get_course($id);
        if(empty($course)){
         $this->session->set_flashdata('failure',"record not found in the database");
         redirect('Ccourse/drop_course');
        } else{
           $this->course->delete_course($id);
           $this->session->set_flashdata('success',"record delete successfull");
         redirect('Ccourse/index');
        
        
        }
       
    }
   
}