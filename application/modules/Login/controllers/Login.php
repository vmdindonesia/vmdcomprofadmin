<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		
		$this->load->model("model_login");
	}

	public function auth()
	{
		$this->load->view('auth');
    }
    
    function validation()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $data=$this->model_login->validationLogin($username,$password);
        if ($data['status']==400)
        {
            echo 'gagal';
        }
        elseif ($data['status']==200)
        {
            $this->session->set_userdata('sesusername',$data["username"]);
            echo 'sukses';        
        }
        
    }
}
