<?php

class Model_login extends CI_Model{

    function validationLogin($username,$password)
    {
        $password = md5($password);
        $sql = "select username from user_credential where username = '$username' and password = '$password'";
        $query = $this->db->query($sql);
        if ($query->num_rows()>0)
        {
            $row = $query->row();
            $data = array(
                "username"=>$row->username,
                "status"=>200
            );

        }
        else 
        {
            $data = array(
                "status"=>400
            );
        }
        return $data;
    }
}

?>