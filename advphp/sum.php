<?php 

class sum
{
	 $a=5;
	 $b=5;
	function add(){

	$add=$a+$b;
	}
}

$sum=new sum;
echo $sum->add(5,5);
?>

<!-- phppage.php-->
<html>
<head>
<title></title>
</head>
<body>
	<?php 
include_once 'interface.php';

$obj=new ABC;
echo $obj->add(20,30);
echo $obj->Message();

?>
</body>
</html>


<!--interface.php-->
<?php 
interface Test{
	public function add($a,$b);
	public function Message();

}
class ABC implements Test{
	public function add($a,$b)
	{
		return $a+$b;
	}
	public function Message()
	{
		echo "THIS IS THE LAST CLASS OF ADV PHP";
	}
}
?>

