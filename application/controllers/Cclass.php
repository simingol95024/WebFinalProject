<?php

class Cclass extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('classes');
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('pagination');
        $this->lang->load('main',$this->session->userdata('language'));
       
    }

    function index(){
        //$data['class'] = $this->classes->list_class();
        $this->session->set_userdata('lastvisited',current_url()); 
        $offset=$this->uri->segment(3);
        $config['base_url']=base_url().'index.php/Cclass/index';
        $config['total_rows']=$this->classes->count_class();
        $config['per_page']=4;
        $config['uri_segment']=3;
        $this->pagination->initialize($config); 
        $data['class']=$this->classes->list_class($config['per_page'],$offset);
        $this->load->view('classes/class',$data);
    }

    function add_class(){
        if($_POST){
            $data = array(
            'class_name'=>$_POST['name'],
            'c_id'=>$_POST['course']
            );

        $this->classes->new_class($data);
        redirect('Cclass/index');

        }else{
           // $this->load->view('new_class');
            echo "not insert";
        }
      
    }
    function edit($id){
        $this->load->model("classes");
        $data['class']=$this->classes->get_class($id);   
        $this->load->view('classes/edit_class',$data);
    }

    function edit_class($id){
        $data['class']=$this->classes->get_class($id);
        $this->form_validation->set_rules("name","Name","required");
        $this->form_validation->set_rules("course","Course","required");
        if($this->form_validation->run() == false){
            $this->load->view('classes/edit_class',$data);
            }else{
            $data=array();
            $data['class_name']=$this->input->post("name");
            $data['c_id']=$this->input->post("course");
            
          $this->classes->update_class($id,$data);
            $this->session->set_flashdata('success',"record update successfully");
            redirect('Cclass');
            }

        }
    function drop_class($id){
        $class= $this->classes->get_class($id);
        if(empty($class)){
            echo "ss";
         $this->session->set_flashdata('failure',"record not found in the database");
         redirect('Cclass/drop_class');
        } else{
           $this->classes->delete_class($id);
           $this->session->set_flashdata('success',"record delete successfull");
           
         redirect('Cclass/index');
        
        
        }
       
    }
   
}