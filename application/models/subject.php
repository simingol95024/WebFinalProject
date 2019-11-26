<?php

class Subject extends CI_Model{
        function new_subject($data){
        $this->db->insert('subject',$data);
        
        }

        function list_subject($limit=6, $offset=0){
        return $subject= $this->db->get('subject',$limit,$offset)->result();
        
       }
    
       function count_subject(){                            //for paganition
        return $this->db->count_all('subject');
    }

       function get_subject($id){
        $this->db->where('sub_id',$id);
        return $subject = $this->db->get('subject')->row_array();
       }

       function update_subject($id,$data){
        $this->db->where('sub_id',$id);
        $this->db->update('subject',$data);
       }

       function delete_subject($id){
        $this->db->where('sub_id',$id);
        $this->db->delete('subject');
       }

}