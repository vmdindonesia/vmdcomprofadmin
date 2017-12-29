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
}

    function delete_team(){
        $team_id = $_POST['team_id'];
        $logo_before = $_POST["logo_before"];
        $sql = "DELETE FROM team_info WHERE team_id='$team_id'";
        $query = $this->db->query($sql);
        $url_before = str_replace(base_url().'appsources/image_team/',"",$logo_before);
        // echo $url_before;
        // return;
        @unlink('./appsources/image_team/'.$url_before);
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
        $logo_before = $_POST["logo_before"];
        $team_id = $_POST["team_id"];
        $config['upload_path'] = './appsources/image_team/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 5100;

        $url_before = str_replace(base_url()."appsources/image_team/","",$logo_before);

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('image_team')){
            echo "upload_failed";
        }else{
            $image=$this->upload->data();
            $nama_image=$image["file_name"];
            $url=base_url()."appsources/image_team/".$nama_image;
            @unlink($config['upload_path'].$url_before);
            $sql = "UPDATE team_info SET team_name='$nama_anggota', team_divisi='$nama_divisi', team_jabatan='$nama_jabatan', team_img='$url' WHERE team_id='$team_id'";
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
}
    }
