<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		
		$this->load->model("model_login");
	}

	public function index()
	{
		$this->layout->content("index");
    }
    
}
