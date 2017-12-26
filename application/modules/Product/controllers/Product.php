<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MY_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data["module_name"]	= "Product";
		$this->layout->content("index",$data);
	}

	function save(){
		$test = "asdasdasd";

		$sql	= "INSERT INTO tst  VALUES ('',)";
		$query 	= $this->db->query($sql);
		if($query){
			echo "sukses";
		}else{
			echo "gagal";
		}
	}
}
