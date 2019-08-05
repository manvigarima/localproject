<?php 
/**
 * 
 */
class User extends MY_Controller
{
	// default controller  can change by changing in config/routes.php
	public function index()
	{
		// $this->load->helper('directory');
		// $dir = "assets/images"; // Your Path to folder
		// $map = directory_map($dir); /* This function reads the directory path specified in the first parameter and builds an array representation of it and all its contained files. */
		$this->load->helper('url');
		
		$this->load->view('public/index'); // on LOCALHOST/CI.
	}

	public function __construct()
		{
			parent::__construct();
			
			$this->load->model('Registration_Model');
		}
	public function registration()
	{
		$this->load->view('registration');
		if($this->input->post('save'))
		{
			$name = $this->input->post('fname');
			$uname = $this->input->post('username');
			$password = $this->input->post('password');
			$phone = $this->input->post('phone');

			$this->Registration_Model->saverecords($name,$uname,$password,$phone);

			echo "Records save";
		}

	}
	

	
}