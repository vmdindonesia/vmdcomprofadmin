<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vnm extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		
		$this->load->model("model_login");
	}

	public function index()
	{
        $this->layout->content("index");
    }
    
    public function vission()
    {
        $isi_vission = $_POST ['isi_vission'];
        //echo $isi_vission;

        $sql = "INSERT INTO vission_mission VALUES ('$isi_vission','')";
        $query = $this->db->query($sql);
        if ($query)
        {
            echo "sukses";
        }
            else {
                echo "gagal";
            }
        
    }

    public function mission()
    {
        $isi_mission = $_POST ['isi_mission'];
        //echo $isi_mission;

        $sql = "INSERT INTO vission_mission VALUES ('','$isi_mission')";
        $query = $this->db->query($sql);
        if ($query)
        {
            echo "sukses";
        }   
         else {
                echo "gagal";
            }
        
    }
}