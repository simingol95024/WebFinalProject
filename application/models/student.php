<?php

class Student extends CI_Model{

        function add_student($data){
        $DB1 = $this->load->database('test', TRUE);
        $DB1->query('LOCK TABLE student WRITE');
        sleep(5);
         $DB1->insert('student',$data);
        $DB1->query('UNLOCK TABLES');
        
        }
        function count_student(){   

            $DB1 = $this->load->database('test', TRUE);                         //for paganition
            //return $this->db->count_all('student');
            //return $this->db->count_all('student');
            return $DB1->count_all('student');
        }
    
        function list_student($limit=6, $offset=0){
        $DB1 = $this->load->database('test', TRUE);
        $DB1->query('LOCK TABLE student READ');
        sleep(5);
        return $student= $DB1->get('student',$limit,$offset)->result();
            $DB1->query('UNLOCK TABLES');
       }
      

       function search_student($name,$fathername,$ssn){
        $DB1 = $this->load->database('test', TRUE);
        // $this->db->where('s_name',$name,'s_fathername',$fathername,'ssn',$ssn);
        // return $student = $this->db->get('student')->row_array();

        $DB1->where('s_name',$name,'s_fathername',$fathername,'ssn',$ssn);
        return $student = $DB1->get('student')->row_array();


       }
       function get_student($id){
        $DB1 = $this->load->database('test', TRUE);
        // $this->db->where('s_id',$id);
        // return $student = $this->db->get('student')->row_array();

        $DB1->where('s_id',$id);
        return $student = $DB1->get('student')->row_array();
       }
       function update_student($sid,$data){
        // $this->db->where('s_id',$sid);
        // $this->db->update('student',$data);
        $DB1 = $this->load->database('test', TRUE);


        $DB1->where('s_id',$sid);
        $DB1->update('student',$data);
       }

       function delete_student($sid){
        $DB1 = $this->load->database('test', TRUE);
        // $this->db->where('s_id',$sid);
        // $this->db->delete('student');

        $DB1->where('s_id',$sid);
        $DB1->delete('student');

       }
       
       function file_upload($data){
        $query= $this->db->insert('student',$data);
        if($query){
            echo "success";
        }else{
            echo "error";
        }
     }


}