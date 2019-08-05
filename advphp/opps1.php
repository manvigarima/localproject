<?php 
	class abc{
		public $model;
		public $company;
		function first()
		{
			$model++;
		}
		function second()
		{
			$model--;
		}
		function __construct($m,$n)
		{
			$this->model=$m;
			$this->model=$n;
		}
	}
	class abc1 extends abc{
		public $volume=10;
		function __contsruct()
		{
			$this->model='Toshiba';
			$this->company="hero";
		}
	}

	$obj=new abc('xxx','hd');
	$obj1=new abc1('manvi','ojha');
	echo $obj1->model;
	echo $obj->model;
	echo "<br>";
	echo $obj->company;
	

?>

<?php 
	/**
	* 
	*/
	class abc 
	{
		private $model='toshiba';
		private $company='HCL';
		function getmodel()
		{
			return $this->model;
		}
		
		function __construct()
		{
			$this->model;
			$this->company;
		}
	}
	/**
	* 
	*/
	class abc1 extends abc
	{
		
		protected $model='abc';

	}
	$obj1=new abc1;
	echo $obj1->getmodel();
?>