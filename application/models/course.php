<?php

class Course extends CI_Model{
        function new_course($data){
        $this->db->insert('course',$data);
        }

        function list_course(){
      
      $this->db->query('LOCK TABLE course WRITE');
      $course= $this->db->get('course')->result();
      //sleep(10);
      return $course;
      $this->db->query('UNLOCK TABLES');

       
        
       }

       function get_course($id){
        $this->db->where('c_id',$id);
        return $account = $this->db->get('course')->row_array();
       }

       function update_course($id,$data){
        $this->db->where('c_id',$id);
        $this->db->update('course',$data);
       }

       function delete_course($id){
        $this->db->where('c_id',$id);
        $this->db->delete('course');
       }

}