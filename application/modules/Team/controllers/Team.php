<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
        $data["module_name"] = "Team";
        $this->layout->content("index",$data);
    }
    
    function saveteam()
    {
        $nama_anggota = $_POST["nama_anggota"];
        $nama_divisi = $_POST["nama_divisi"];
        $nama_jabatan = $_POST["nama_jabatan"];

        // echo $nama_anggota.' '.$nama_divisi.' '.$nama_jabatan;

        $sql = "INSERT into team_info values ('','$nama_anggota','$nama_divisi','$nama_jabatan','')";
        $query = $this->db->query($sql);
        if($query)
        {
            echo "sukses";
        }
        else
        {
            echo "gagal";
        }
    }
}
