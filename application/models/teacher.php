<?php

class Teacher extends CI_Model{
        function add_teacher($data){
        $this->db->insert('teacher',$data);
        }

        function list_teacher($limit=6, $offset=0){
        return $teacher= $this->db->get('teacher',$limit,$offset)->result();
       }
       function count_teacher(){                            
        return $this->db->count_all('teacher');
       }

       function get_teacher($id){
        $this->db->where('t_id',$id);
        return $teacher = $this->db->get('teacher')->row_array();

       }

       function update_teacher($id,$data){
        $this->db->where('t_id',$id);
        $this->db->update('teacher',$data);
       }

       function delete_teacher($id){
        $this->db->where('t_id',$id);
        $this->db->delete('teacher');
       }

}