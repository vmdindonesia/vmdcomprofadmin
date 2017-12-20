<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends MY_Controller {

	function __construct()
	{
        parent::__construct();
        $this->load->model("ModelTeam");
		
	}

	public function index()
	{
        $data["Team_info"] = $this->ModelTeam->getModelTeam();
        $data["module_name"] = "Team_info";
        $this->layout->content("index",$data);
    }
    
    function saveteam()
    {
        $nama_anggota = $_POST["nama_anggota"];
        $nama_divisi = $_POST["nama_divisi"];
        $nama_jabatan = $_POST["nama_jabatan"];
        $config['upload_path'] = './appsources/image_team/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 5100;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('image_team')){
            echo "upload_failed";
        }else{
            $image=$this->upload->data();
            $nama_image=$image["file_name"];
            $url=base_url()."appsources/image_team/".$nama_image;

        $sql = "INSERT into team_info values ('','$nama_anggota','$nama_divisi','$nama_jabatan','$url')";
        $query = $this->db->query($sql);
        if($query)
        {
            echo "sukses";
            return;
        }
        else
        {
            echo "gagal";
            return;
        }


    }
}

    function deleteteam(){
        $team_id = $_POST['team_id'];
        $sql = "DELETE FROM team_info WHERE team_id='$team_id'";
        $query = $this->db->query($sql);
        if($query)
        {
            echo "sukses";
            return;
        }
        else
        {
            echo "gagal";
            return;
        }

    }

    function edit_team($team_id){
        $data["Team_info"] = $this->ModelTeam->getModelById($team_id);
        $data["module_name"] = "Edit_team_info";
        $this->layout->content("edit_team_info",$data);
    }

    function save_edit_team(){
        $nama_anggota = $_POST["nama_anggota"];
        $nama_divisi = $_POST["nama_divisi"];
        $nama_jabatan = $_POST["nama_jabatan"];
        $team_id = $_POST["team_id"];
        $sql = "UPDATE team_info SET team_name='$nama_anggota', team_divisi='$nama_divisi', team_jabatan='$nama_jabatan' WHERE team_id='$team_id'";
        $query = $this->db->query($sql);
        if($query)
        {
            echo "sukses";
            return;
        }
        else
        {
            echo "gagal";
            return;
        }


    }
}