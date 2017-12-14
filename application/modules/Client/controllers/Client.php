<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends MY_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->layout->content("index");
    }
    function saveclient()
    {
        $namaclient=$_POST["namaclient"];
        // echo $namaclient;
        $sql="INSERT INTO client values ('','$namaclient','') ";
        $query=$this->db->query($sql);
        if ($query)
        {
            echo "sukses";
        }
        else
        {
            echo "gagal";
        }
    }

}
