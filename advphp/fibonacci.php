<?php
// fibonacci series

$f=0;
$s=1;
$count=0;
 echo $f.' '.$s.' ';
while($count<10)
{
$temp=$f+$s;

	$f=$s;
	$s=$temp;
	
	echo $temp.' ';
	$count=$count+1;
}



 ?>

 <?php 

 echo "program no 2" ."<br>"; 
$num = 0;  
$n1 = 0;  
$n2 = 1;  
echo "<h3>Fibonacci series for first 12 numbers: </h3>";  
echo "\n";  
echo $n1.' '.$n2.' ';  
while ($num < 10 )  
{  
    $n3 = $n2 + $n1;  
    echo $n3.' ';  
    $n1 = $n2;  
    $n2 = $n3;  
    $num = $num + 1;  

}
echo "<br>";
?>  
<?php
echo "program no 3" ."<br>";  
$a=1;
 for($i=0; $i<=5;$i++)
 {
 	for($j=0; $j<=$i; $j++)
 	{
 		echo $a;
 		echo "\n";

 	}
 	echo "<br>";

 $a++;
 }

echo "<br>";
?>  
<?php 
echo "program no 4" ."<br>"; 

 for($i=0; $i<=5;$i++)
 {
 	for($j=0; $j<=$i; $j++)
 	{
 		echo $j+1;
 		echo "\n";
 			
 	}
 	echo "<br>";

 
 }
echo "<br>";
?>

<?php
echo "program no 5"."<br>"; 
$n=5;

for($i=1; $i<=5; $i++)
{
	for($j=1; $j<=$n; $j++)
	{
		echo " &nbsp;";

	}
	$n--;
	
	for($k=1; $k<=$i; $k++)
	{
		echo "$i"." &nbsp; ";
	}
	echo "<br>";

}
echo "<br>";

 ?>

 <?php 
 echo "program no 6"."<br>"; 
 $alp="A";
 for($i=1; $i<=6; $i++)
 {
 	for($j=1; $j<=$i; $j++)
 	{
 		echo "$alp "." &nbsp; ";
 	}
 	echo "<br>";

 	$alp++;
 }
 echo "<br>";
?>
 

 <?php 

 echo "program no 7"."<br>"; 
 $alp="A";
 for($i=1; $i<=6; $i++)
 {
 	for($j=1; $j<=$i; $j++)
 	{
 		echo "$alp "." &nbsp; ";
 		$alp++;
 	}
 	echo "<br>";

 	
 }
 echo "<br>";
?>



 <?php 

 echo "program no 8"."<br>"; 
 $alp="A";
 for($i=1; $i<=6; $i++)
 {
 	for($j=1; $j<=$i; $j++)
 	{
 		echo "$alp "." &nbsp; ";
 		
 	}
 	echo "<br>";

 	
 }
 $alp++;
 echo "<br>";
?>
 
 <?php 

$rows_length = 10; 
for ($rows=1; $rows <= $rows_length ; $rows++) 
{
  // this loop is for spaces
  for($columns1 = 0; $columns1 < $rows_length-$rows; $columns1++ )
  {
    echo "&nbsp; ";
  }
  // this loop is for stars
  for($columns2 = 0; $columns2 < $rows; $columns2++ ) 
  {
    echo "*";
  }
  echo "<br>";
}echo "<br>";echo "<br>";
 ?>

 <?php 

$rows_length = 10; 
for ($rows=1; $rows <= $rows_length ; $rows++) 
{
  // this loop is for spaces
  for($columns1 = 0; $columns1 < $rows_length-$rows; $columns1++ )
  {
    echo "&nbsp; ";
  }
  // this loop is for stars
  for($columns2 = 0; $columns2 < $rows; $columns2++ ) 
  {
    echo "$columns2";
  }
  echo "<br>";
}echo "<br>";echo "<br>";
 ?>

 <?php 

$rows_length = 10; 
for ($rows=1; $rows <= $rows_length ; $rows++) 
{
  // this loop is for spaces
  for($columns1 = 0; $columns1 < $rows_length-$rows; $columns1++ )
  {
    echo "&nbsp; ";
  }
  // this loop is for stars
  for($columns2 = 0; $columns2 < $rows; $columns2++ ) 
  {
    echo "$columns1";
  }
  echo "<br>";
}echo "<br>";echo "<br>";
 ?>

 <?php 
 echo "program 1"."<br>";



for($i=0;$i<=9;$i++){
    for ($d=10-$i; $d > 0; $d--)  {
        echo "&nbsp;&nbsp;";
    }
    for($j=1;$j<=$i;$j++){
        echo "&nbsp;"."*"."&nbsp;";
    }
    echo "<br>";
}//for first close

?>

<?php  
echo "program 2"."<br>";
  
for($i=0;$i<=5;$i++){  
for($k=5;$k>=$i;$k--){  
echo "  ";  
}  
for($j=1;$j<=$i;$j++){  
echo "*  ";  
}  
echo "<br>";  
}  
for($i=4;$i>=1;$i--){  
for($k=5;$k>=$i;$k--){  
echo "  ";  
}  
for($j=1;$j<=$i;$j++){  
echo "*  ";  
}  
echo "<br>";  
}  

echo "<br>";

?>  

<?php  
echo "Program 3"."<br>";
for($i=1; $i<=5; $i++){   
for($j=1; $j<=$i; $j++){   
echo ' * ';   
}  
echo '<br>';   
}  
for($i=5; $i>=1; $i--){   
for($j=1; $j<=$i; $j++){  
echo ' * ';   
}   
echo '<br>';   
}   echo "<br>";echo "<br>";
?>  



<?php 
echo "Program 4"."<br>";
for($i=9;$i>=1;$i--){
 
    for ($d=0; $d <= 9-$i; $d++)  {
        echo "&nbsp;&nbsp;";
    }
     
    for($j=$i;$j>=1;$j--){
        echo "&nbsp;".$i."&nbsp;";
    }
     
    echo "<br>";
 
}echo "<br>";echo "<br>";

?>
<?php 
echo "Program 5"."<br>";
for($i=9;$i>=1;$i--){
 
    for ($d=0; $d <= 9-$i; $d++)  {
        echo "&nbsp;&nbsp;";
    }
     
    for($j=$i;$j>=1;$j--){
        echo "&nbsp;"."*"."&nbsp;";
    }
     
    echo "<br>";
 
}echo "<br>";echo "<br>";

?>

<?php
echo "Program 6"."<br>";
for($i=0;$i<=9;$i++){
    for ($d=10-$i; $d > 0; $d--)  {
        echo "&nbsp;&nbsp;";
    }
    for($j=1;$j<=$i;$j++){
        echo "&nbsp;".$i."&nbsp;";
    }
    echo "<br>";
}
for($i=8;$i>=1;$i--){
    for ($d=0; $d <= 9-$i; $d++)  {
        echo  "&nbsp;&nbsp;";
    }
    for($j=$i;$j>=1;$j--){
        echo "&nbsp;".$i."&nbsp;";
    }
    echo "<br>";
}
echo "<br>";echo "<br>";
 ?>

<?php
echo "Program 7"."<br>";
for($i=0;$i<=9;$i++)
  {
    for ($d=10-$i; $d > 0; $d--)  {
        echo "&nbsp;&nbsp;";
    }
    for($j=1;$j<=$i;$j++){
        echo "&nbsp;"."*"."&nbsp;";
    }
    echo "<br>";
}
for($i=8;$i>=1;$i--){
    for ($d=0; $d <= 9-$i; $d++)  {
        echo  "&nbsp;&nbsp;";
    }
    for($j=$i;$j>=1;$j--){
        echo "&nbsp;"."*"."&nbsp;";
    }
    echo "<br>";
}
echo "<br>";
echo "<br>";
 ?>

 <?php
for($i=5;$i>=1;$i--)
{
echo  str_repeat('@',$i);
echo "<br />";
}echo "<br />";
echo "<br />";

?>

<?php
/*
$star=1;
for($i=6;$i<=10;$i++)
{
	$diamond_f=$i-$star;
	echo  str_repeat('s',$diamond_f). str_repeat('*',$star)."<br>";
	$star=$star +2;
}

$star=9;
for($i=10;$i>=6;$i--)
{
	$diamond_f=$i-$star;
	echo  str_repeat('s',$diamond_f). str_repeat('*',$star)."<br>";
	
	$star=$star -2;
}
*/
?>