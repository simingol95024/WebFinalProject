<?php

class Protection extends CI_Model{

    function create_user($username,$password){
    $this->db->query("CREATE USER '$username'@'localhost' IDENTIFIED WITH mysql_native_password AS '$password'");
    $this->db->query("REVOKE ALL PRIVILEGES ON *.* FROM '$username'@'localhost'");
    $this->db->query("REVOKE GRANT OPTION ON *.* FROM '$username'@'localhost';");
    $this->db->query("GRANT SELECT, INSERT,UPDATE ON *.* TO '$username'@'localhost' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0");

   
    }

    function revock($username){
        $this->db->query("REVOKE ALL PRIVILEGES ON *.* FROM '$username'@'localhost'");
        $this->db->query("REVOKE GRANT OPTION ON *.* FROM '$username'@'localhost';");    

    }
    function grant($username){
        $this->db->query("GRANT SELECT, INSERT,UPDATE ON *.* TO '$username'@'localhost' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0");
    }
}