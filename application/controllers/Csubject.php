<?php

class Csubject extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('subject');
        $this->load->library('session');
        $this->load->library('form_validation','session');
        $this->lang->load('main',$this->session->userdata('language'));
        

    }

    function index(){
       
        $this->load->library('pagination');
        $offset=$this->uri->segment(3);
        $config['base_url']=base_url().'index.php/Caccount/listAccount';
        $config['total_rows']=$this->subject->count_subject();
        $config['per_page']=4;
        $config['uri_segment']=3;
        $this->pagination->initialize($config); 
        $data['subject'] = $this->subject->list_subject($config['per_page'],$offset);
        $this->load->view('subjects/subject',$data);
        $this->session->set_userdata('lastvisited',current_url()); 
    
    }

    function add_subject(){

        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('midterm', 'Midterm', 'trim|required');
        $this->form_validation->set_rules('final_exam', 'Final_exam', 'required');
        $this->form_validation->set_rules('presentage', 'Presentage', 'required');
        $this->form_validation->set_rules('class_activity', 'Class_activity', 'required');
        
         if($this->form_validation->run() == false){
           
              $this->load->view('subjects/subject');
               
        }else{

            
            $data=array();
            $data['sub_name']=$this->input->post("name");
            $data['midterm']=$this->input->post("midterm");
            $data['final_exam']=$this->input->post("final_exam");
            $data['presentage']=$this->input->post("presentage");
            $data['class_activity']=$this->input->post("class_activity");
            $this->load->model('subject');
            $this->subject->new_subject($data);
            // $this->load->view('login_new_account');
            $this->session->set_flashdata('success',"save was susses");
            redirect('Csubject/index');
       
        }
      
    }
    function edit($id){
        $this->load->model("subject");
        $data['subject']=$this->subject->get_subject($id);   
        $this->load->view('subjects/edit_subject',$data);
    }

    function edit_subject($id){
        $data['subject']=$this->subject->get_subject($id); 
        $this->form_validation->set_rules("name","Name","required");
        $this->form_validation->set_rules("midterm","Midterm","required");
        $this->form_validation->set_rules("final_exam","Final_exam","required");
        $this->form_validation->set_rules("presentage","Presentage","required");
        $this->form_validation->set_rules("class_activity","Class_activity","required");
        if($this->form_validation->run() == false){
            $this->load->view('subjects/edit_subject',$data);
            }else{
            $data=array();
            $data['sub_name']=$this->input->post("name");
            $data['midterm']=$this->input->post("midterm");
            $data['final_exam']=$this->input->post("final_exam");
            $data['presentage']=$this->input->post("presentage");
            $data['class_activity']=$this->input->post("class_activity");
            
          $this->subject->update_subject($id,$data);
            $this->session->set_flashdata('success',"record update successfully");
            redirect('Csubject/index');
            }

        }
    function drop_subject($id){
        $subject= $this->subject->get_subject($id);
        if(empty($subject)){
         $this->session->set_flashdata('failure',"record not found in the database");
         redirect('Csubject/drop_subject');
        } else{
           $this->subject->delete_subject($id);
           $this->session->set_flashdata('success',"record delete successfull");
           
         redirect('Csubject/index');
        
        
        }
    }  
   
}