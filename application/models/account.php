<?php

class Account extends CI_Model{

        function insert_account($data){
          $this->db->insert('account',$data);
        }

        function list_account($limit=6, $offset=0){
        $this->db->where('admin_id',0);
        return $account= $this->db->get('account',$limit,$offset)->result();
        
       }
    
       function count_account(){                            //for paganition
        return $this->db->count_all('account');
    }

       function get_account($id){
        $this->db->where('acc_id',$id);
        return $account = $this->db->get('account')->row_array();
       }

       function list_admin(){
        $this->db->where('admin_id',1);
        return $admin= $this->db->get('account')->result();
        
       }
       function get_account_admin($id){
        $this->db->where('acc_id',$id,'admin_id',1);
        return $admin = $this->db->get('account')->row_array();
        // $admin=$this->db->get('account');
        // return $admin->result();
       }


       function update_account($aid,$data){
        $this->db->where('acc_id',$aid);
        $this->db->update('account',$data);
       }

       function delete_account($aid){
        $this->db->where('acc_id',$aid);
        $this->db->delete('account');
       }

    function can_login_admin( $username,$password){
        $data=array(
            'username'=>$username,
            'password'=>$password,
            'admin_id'=>1
        );
        $this->db->select("*")->from('account')->where($data);
        $query=$this->db->get();
        return $query->first_row('array');
    }

    function can_login_user( $username,$password){
        $data=array(
            'username'=>$username,
            'password'=>$password
        );
        $this->db->select("*")->from('account')->where($data);
        $query=$this->db->get();
        return $query->first_row('array');
    }

}