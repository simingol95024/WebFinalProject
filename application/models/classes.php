<?php

class Classes extends CI_Model{
        function new_class($data){
        $this->db->insert('class',$data);
        }

        function list_class($limit=6, $offset=0){
         $q=$this->db->query("SELECT * FROM course as c, class as cl where c.c_id = cl.c_id ");
        return $q->result();

       }
   
       function count_class(){                            //for paganition
        return $this->db->count_all('class');
    }

       function get_class($id){
        $this->db->where('class_id',$id);
        return $class = $this->db->get('class')->row_array();
       }

       function update_class($id,$data){
        $this->db->where('class_id',$id);
        $this->db->update('class',$data);
       }

       function delete_class($id){
        $this->db->where('class_id',$id);
        $this->db->delete('class');
       }

}