<?php 
class fulltimeemployee{
	protected $firstname;
	protected $lastname;
	protected $annualsallery = 120000;
	public function getfullname()
	{
	return $this->firstname." ".$this->lastname;	
	}
	public function getmonthlysallary()
	{
	 return $this->annualsallery/12;
	}
	public function __construct($f, $l)
	{
	 $this->firstname=$f;
	 $this->lastname=$l;	
	}
  }

class contractemployee{
	protected $firstname;
	protected $lastname ;
	protected $hourlyrate;
	protected $totalhour;
	public function getfullname()
	{
	return $this->firstname;
	return $this->lastname;	
	}
	public function getmonthlysallary()
	{
	 return $this->totalhour*$this->hourlyrate;
	}
	
	public function __construct($f, $l)
	{
	 $this->firstname=$f;
	 $this->lastname=$l;	
	}
  }

$fullname= new fulltimeemployee('abc','xyz');
echo $fullname->getfullname();
echo $fullname->getmonthlysallary();


?>