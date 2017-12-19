<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends MY_Controller {
	function __construct()
	{
		parent::__construct();
		
		$this->load->model("Model_Aboutus");
	}

	public function index()
	{
		$data["aboutus"]		= $this->Model_Aboutus->getAboutus();
		$data["module_name"]	= "About Us";
		$this->layout->content('index', $data);
	}

	public function saveaboutus()
	{
		$isi_aboutus = $_POST["isi_aboutus"];
		// echo $isi_aboutus;
		
		$cek_data	= $this->Model_Aboutus->getAboutus();
		if($cek_data){
			$sql = "UPDATE about_us set about_us = '$isi_aboutus'";
			$query = $this->db->query($sql);
			if ($query){
				echo "sukses";
			} else {
				echo "gagal";
			}
		} else {
			$sql = "INSERT INTO about_us VALUES ('$isi_aboutus')";
			$query = $this->db->query($sql);
			if ($query){
				echo "sukses";
			} else {
				echo "gagal";
			}
		} 
	}
}
