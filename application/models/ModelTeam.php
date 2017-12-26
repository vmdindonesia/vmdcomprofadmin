<?php

class ModelTeam extends CI_Model{

    function getModelTeam()
    {
        $sql= "SELECT * FROM team_info";
        $query=$this->db->query($sql);
        if ($query->num_rows()>0){
            return $query->result();
        }
        else {
            return false;
        }
    }

    function getModelById($team_id)
    {
        $sql= "SELECT * FROM team_info WHERE team_id='$team_id'";
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