<?php

class ModelProduct extends CI_Model{
    function getProduct(){
        $sql    =  "SELECT * FROM product";
        $query  =  $this->db->query($sql);
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return false;
        }
    }

    function cek_data(){
        $sql    =  "SELECT * FROM product";
        $query  =  $this->db->query($sql);
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return false;
        }
    }
}

?>