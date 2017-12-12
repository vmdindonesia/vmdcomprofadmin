<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends MY_Controller {

	public function index()
	{
		$data["module_name"]  = "About Us";
		$this->layout->content('index', $data);
	}

	public function saveaboutus()
	{
		$isi_aboutus = $_POST["isi_aboutus"];
		// echo $isi_aboutus;

		$sql = "INSERT INTO about_us VALUES ('$isi_aboutus')";
		$query = $this->db->query($sql);
		if ($query){
			echo "sukses";
		} else {
			echo "gagal";
		}
	}
}
