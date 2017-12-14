<?php

class Model_Aboutus extends CI_Model{

    function getAboutus(){
        $sql    = "SELECT * FROM about_us";
        $query  = $this->db->query($sql);
        if($query->num_rows()>0){
            return $query->result();
        } else {
            return false;
        }
    } 
}

?>