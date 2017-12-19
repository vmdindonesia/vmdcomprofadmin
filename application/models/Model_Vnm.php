<?php

class Model_Vnm extends CI_Model{

    function getVnm(){
        $sql    = "SELECT * FROM vission_mission";
        $query  = $this->db->query($sql);
        if($query->num_rows()>0){
            return $query->result();
        } else {
            return false;
        }
    } 
}

?>