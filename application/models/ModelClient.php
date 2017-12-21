<?php

class ModelClient extends CI_Model{

    function getModelclient()
    {
        $sql= "SELECT * FROM client";
        $query=$this->db->query($sql);
        if ($query->num_rows()>0){
            return $query->result();
        }
        else {
            return false;
        }
    }
    function getModelById($idclient)
    {
        $sql= "SELECT * FROM client  WHERE id_client='$idclient'";
        $query= $this->db->query($sql);
        if ($query->num_rows()>0){
            return $query->result();
        }
        else {
            return false;
        }
    }
}
?>