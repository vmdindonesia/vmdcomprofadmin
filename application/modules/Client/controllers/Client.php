<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends MY_Controller {

	function __construct()
	{
        parent::__construct();
        $this->load->model("ModelClient");
	}

	public function index()
	{
        $data["Client"]    =$this->ModelClient->getModelClient();
        $data["module_name"] ="Client";
        $this->layout->content("index",$data);
    }
    function saveclient()
    {
        $namaclient=$_POST["namaclient"];
        // echo $namaclient;
        $config['upload_path']          = './appsources/logo/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 5100;
 
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload('logo')){
			echo "upload_failed";
		}else{
            $logo=$this->upload->data();
            $nama_logo=$logo["file_name"];
            $url=base_url()."appsources/logo/".$nama_logo;

            $sql="INSERT INTO client values ('','$namaclient','$url') ";
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
        function delete_client()
        {
            $id_client=$_POST['id_client'];
            $sql="DELETE FROM client WHERE id_client='$id_client' ";
            $query=$this->db->query($sql);
            if ($query)
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
        function edit_client()
        {
            $id_client=$_POST['id_client'];
            $sql="UPDATE FROM client WHERE id_client='$id_client' ";
            $query=$this->db->query($sql);
            if ($query)
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
