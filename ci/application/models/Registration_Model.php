<?php 

class Registration_Model extends CI_Model
{
	function saverecords($name,$uname,$password,$phone)
	{
		$query = "insert into registration values ('','$name','$uname','$password','$phone')";
		$this->db->query($query);
	}
}



