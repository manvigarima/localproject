<?php 
abstract class base{
	protected $firstname;
	protected $lastname;
	public function getfullname()
	{
	return $this->firstname." ".$this->lastname;	
	}
	public function __construct($f, $l)
	{
	 $this->firstname=$f;
	 $this->lastname=$l;	
	}
  }

class fulltimeemployee extends base{
	public $annualsallery;
	public function getmonthlysallary()
	{
	 return $this->annualsallery/12;
	}

  }

class contractemployee extends base{

	public $hourlyrate;
	public $totalhour;

	public function getmonthlysallary()
	{
	 return $this->totalhour*$this->hourlyrate;
	}
	
 }

$fullname= new fulltimeemployee('abc','xyz');
$fullname->annualsallery="10000";
echo $fullname->getfullname();
echo "<br>";
echo $fullname->getmonthlysallary();
echo "<br>";
echo "<br>";
echo "<br>";
$fullname1= new contractemployee('abc','xyz');
$fullname1->hourlyrate="200";
$fullname1->totalhour="20";
echo $fullname1->getfullname();
echo "<br>";
echo $fullname1->getmonthlysallary();

?>