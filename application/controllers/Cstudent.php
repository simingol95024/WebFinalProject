<?php

class Cstudent extends CI_Controller{

   
    function __construct(){
        parent::__construct();
        $this->load->model('student');
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('pagination');
        $this->load->library('session');
        $this->load->library('form_validation','session');
        $this->lang->load('main',$this->session->userdata('language'));
      

    }
    function index(){
       
        $this->load->library('pagination');
        $offset=$this->uri->segment(3);
        $config['base_url']=base_url().'index.php/Cstudent/index';
        $config['total_rows']=$this->student->count_student();
        
        $config['per_page']=4;
        $config['uri_segment']=3;
        $this->pagination->initialize($config); 
        $data['student'] = $this->student->list_student($config['per_page'],$offset);       
        $this->load->view('students/all_student',$data); 
        $this->session->set_userdata('lastvisited',current_url()); 
    }

    function read_more($id){
    $data['student'] = $this->student->get_student($id);
    $this->load->view('students/readMore',$data); 

    }

    function searchstudent(){
        $name=$this->input->post("name");
        $fathername=$this->input->post("fathername");
        $ssn=$this->input->post("lastname");
        $data['student'] = $this->student->search_student($name,$fathername,$ssn);
        $this->load->view('students/search_student',$data);
    }

    function addStudent(){
        $this->load->view('students/insert_student');
    }


    function new_student(){
        $this->form_validation->set_rules("name","Name","required");
        $this->form_validation->set_rules("fathername","Fathername","required");
         $this->form_validation->set_rules("photo","Photo","required","is_unique");
         $this->form_validation->set_rules("ssn","Ssn","required" ,"is_unique");
        if($_POST){
            $config['upload_path']='./assets/upload';
            $config['allowed_types']='gif|jpg|png|jpeg';
            $config['max_size']=1000;
            $config['width']=20;
            $config['height']=30;
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            // $this->upload->do_upload('image');
            
            if( !$this->upload->do_upload('photo')){
                // if($this->form_validation->run() == false){
                    echo $this->upload->display_errors();
                    echo "<h1>not upload image</h1>";
                //$this->load->view('students/insert_student');
            }else{
                $u_data = $this->upload->data();
                // print_r($u_data);
                    $data=array(
                        's_name'=>$this->input->post("name"),
                        's_fathername'=>$this->input->post("fathername"),
                        's_lastname'=>$this->input->post("lastname"),
                        'phone'=>$this->input->post("phone"),
                        'photo'=>$u_data['file_name'],
                        // 'photo'=>$this->upload->data('photo'),
                        'email'=>$this->input->post("email"),
                        'birthday'=>$this->input->post("birthday"),
                        'ssn'=>$this->input->post("ssn"),
                        'time'=>$this->input->post("time"),
                        'startdate'=>$this->input->post("startdate"),
                        'finishdate'=>$this->input->post("finishdate"),
                        'location'=>$this->input->post("location"),
                        'gender'=>$this->input->post("gender")
                        );
                    $this->student->add_student($data);
                    //echo "<h1>you can not insert null value</h1>";
                    $this->session->set_flashdata('success',"save was susses");
                    redirect('Cstudent/addStudent');
            }
            }
            }

    function edit($id){
        $this->load->model("student");
        $data['student']=$this->student->get_student($id);   
        $this->load->view('students/edit_student',$data);
    }

    function edit_student($id){
        $data['student']=$this->student->get_student($id); 
        $this->form_validation->set_rules("name","Name","required");
        $this->form_validation->set_rules("fathername","Fathername","required");
        // $this->form_validation->set_rules("lastname","Lastname","required");
        $this->form_validation->set_rules("phone","Phone","required");
         $this->form_validation->set_rules("photo","Photo","required"|"is_unique");
        $this->form_validation->set_rules("email","Email","required");
        $this->form_validation->set_rules("birthday","Birthday","required");
         $this->form_validation->set_rules("ssn","Ssn","required" |"is_unique");
        // $this->form_validation->set_rules("time","Time","required");
        // $this->form_validation->set_rules("startdate","Startdate","required");
        // $this->form_validation->set_rules("finishdate","Finshdate","required");
        // $this->form_validation->set_rules("location","Location","required");
        // $this->form_validation->set_rules("gender","Gender","required");
  
        if(!$this->form_validation->run()){
            $this->load->view('students/edit_student',$data);
            }else{
                $data=array(
                    's_name'=>$this->input->post("name"),
                    's_fathername'=>$this->input->post("fathername"),
                    's_lastname'=>$this->input->post("lastname"),
                    'phone'=>$this->input->post("phone"),
                    'photo'=>$this->input->post("photo"),
                    // 'photo'=>$this->upload->data('photo'),
                    'email'=>$this->input->post("email"),
                    'birthday'=>$this->input->post("birthday"),
                    'ssn'=>$this->input->post("ssn"),
                    'time'=>$this->input->post("time"),
                    'startdate'=>$this->input->post("startdate"),
                    'finishdate'=>$this->input->post("finishdate"),
                    'location'=>$this->input->post("location"),
                    'gender'=>$this->input->post("gender")
                    );
            
          $this->student->update_student($id,$data);
            $this->session->set_flashdata('success',"record update successfully");
            redirect('Cstudent/index');
            }

        }
    function drop_student($id){
        $student= $this->student->get_student($id);
        if(empty($student)){
         $this->session->set_flashdata('failure',"record not found in the database");
         redirect('Cstudent/drop_student');
        } else{
           $this->student->delete_student($id);
           $this->session->set_flashdata('success',"record delete successfull");
           
         redirect('Cstudent/index');
        
        
        }
    } 

   
}