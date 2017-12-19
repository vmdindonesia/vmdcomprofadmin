<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vnm extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		
		$this->load->model("Model_Vnm");
	}

	public function index()
	{
        $data["vissionmission"] = $this->Model_Vnm->getVnm();
		$data["module_name"]	= "vission mission";
        $this->layout->content("index");
    }
    
    public function vission()
    {
        $isi_vission = $_POST ['isi_vission'];
        //echo $isi_vission;
        $cek_data	= $this->Model_Vnm->getVnm();
		if($cek_data){
			$sql = "UPDATE vission_mission set vission = '$isi_vission'";
			$query = $this->db->query($sql);
			if ($query){
				echo "sukses";
			} else {
				echo "gagal";
			}
		} else {
            $sql = "INSERT INTO vission_mission VALUES ('$isi_vission','')";
            $query = $this->db->query($sql);
            if ($query) {
                echo "sukses";
            } else {
                echo "gagal";
            }
        }
    }

    public function mission()
    {
        $isi_mission = $_POST ['isi_mission'];
        //echo $isi_mission;
        $cek_data	= $this->Model_Vnm->getVnm();
		if($cek_data){
			$sql = "UPDATE vission_mission set mission = '$isi_mission'";
			$query = $this->db->query($sql);
			if ($query){
				echo "sukses";
			} else {
				echo "gagal";
			}
		} else {
            $sql = "INSERT INTO vission_mission VALUES ('','$isi_mission')";
            $query = $this->db->query($sql);
            if ($query) {
                echo "sukses";
            } else {
                echo "gagal";
            }
        }
    }
}