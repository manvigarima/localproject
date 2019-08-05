<?php 
	
	for($i=1; $i<=7; $i++)
	{
		for($j=7; $j>=$i; $j--)
		{
			echo "*";
		}

		echo "<br>";

	}
	echo "<br>";
?>

<?php 
	for($i=1; $i<=7; $i++)
	{
		for($j=1; $j<=$i; $j++)
		{
			echo "*";
		}

		echo "<br>";

	}
	echo "<br>";
?>
<?php

for($i=1; $i<=7; $i++)
{
	for($j=1; $j<=7; $j++)
	{
		echo "*";
	}
	 echo "<br>";
}
echo "<br>";

 ?>

 <?php 
 for($row=1; $row<=7; $row++)
 {
 	for($column=1; $column<=7; $column++)
 	{
 		if($row%2==0)
 		{
 			echo "* *";
 		}
 		else
 		{
 			echo "*";
 		}
 	}
 	echo "<br>";
 }
 echo "<br>";

 ?>

 <?php

for($a=5; $a>=1; $a--)
{
if($a%2 != 0)
{
for($b=5; $b>=$a; $b--)
{
echo "* ";
}
echo "<br>";
}
}
for($a=2; $a<=5; $a++)
{
 if($a%2 != 0)
{
 for($b=5; $b>=$a; $b--)
{
echo "* ";
}
echo "<br>";
}
}
echo "<br>";

?>





<?php

for($a=7; $a>=1; $a--)
{
	if($a%2 != 0)
	{
		for($b=7; $b>=$a; $b--)
		{
			echo "* ";
		}
		echo "<br>";
	}
}
for($a=2; $a<=7; $a++)
{
 if($a%2 != 0)
{
 for($b=7; $b>=$a; $b--)
{
echo "* ";
}
echo "<br>";
}
}
echo "<br>";


?>

<?php
for ($row = 1; $row <= 5; $row++)
{
    for ($col = 1; $col <= ($row > 3 ? 6 - $row : $row); $col++)
    {
        echo '* ';
    }

     echo "</br>";
}

echo "<br>";


?>

<?php

for($i=0;$i<=6;$i++)
{
for($k=6;$k>=$i;$k--)
{
echo "  ";
}
for($j=1;$j<=$i;$j++)
{
echo "*  ";
}
echo "<br>";
}
for($i=5;$i>=1;$i--)
{
for($k=6;$k>=$i;$k--)
{
echo "  ";
}
for($j=1;$j<=$i;$j++)
{
echo "*  ";
}
echo "<br>";
}
echo "<br>";
?>

<?php
 
for($a=1; $a<=5; $a++)
{
 for($b=$a; $b>=1; $b--)
{
echo "$b";
}
echo "<br>";
}

?>

<?php

for($a=5; $a>=1; $a--)
{
for($b=1; $b<=$a; $b++)
{
echo $b;
}
 echo "</br>";
}

?>

<?php

for($a=5; $a>=1; $a--)
{
for($b=5; $b>=$a; $b--)
{
echo $b;
}
 echo "</br>";
}
echo "</br>";

?>

<?php

$ascii_val = ord("a");
for($i=$ascii_val;$i<$ascii_val+26;$i++)
{
echo chr($i)."  ";
}
echo "<br> <br>";
?>

<?php

$ascii_val = ord("a");
for($i=$ascii_val;$i<$ascii_val+26;$i++)
{
echo chr($i)."</br>";
}
echo "</br>";

?>

<?php

$alphas = range('A', 'Z');
foreach($alphas as $value)
{
    echo $value."<br>";
}
echo "<br>";
?>

<?php

$letters = range('A', 'Z');
for($i=0; $i<5; $i++)
{ 
  for($j=5; $j>$i; $j--)
{
    echo $letters[$i];
    }
    echo "<br>";
}
echo "<br>";
?>

<?php  echo "factorial <br>";?>

<?php

$num = 4;
$factorial = 1;
for ($x=$num; $x>=1; $x--) 
{
  $factorial = $factorial * $x;
}
echo "Factorial of $num is $factorial";

?>


<?php  

define('NUM', 3); 

for($i=1 ; $i<=10 ; $i++) 
{ 
  echo $i*NUM; 
  echo '<br>';   
}

?>


<?php

$num=153;
$sum=0;
$temp=$num;
while($temp!=0)
{
$rem=$temp%10;
$sum=$sum+$rem*$rem*$rem;
$temp=$temp/10;
}
if($num==$sum)
{
echo "Armstrong number";
}
else
{
echo "not an armstrong number";
}

?>


<?php

$num = 121;
$p=$num;
$revnum = 0;
while ($num != 0)
{
$revnum = $revnum * 10 + $num % 10;
//below cast is essential to round remainder towards zero
$num = (int)($num / 10); 
}
 
if($revnum==$p)
{
echo $p," is Palindrome number";
}
else
{
echo $p." is not Palindrome number";
}

?>


<?php

error_reporting(E_ALL);

$num =23;

for( $j = 2; $j <= $num; $j++ )
{
for( $k = 2; $k < $j; $k++ )
{
if( $j % $k == 0 )
{
break;
}

}
if( $k == $j )
echo "Prime Number : ". $j. "
";
}

?>


<?php

function printFibonacci($n)
 {
 
  $first = 0;
  $second = 1;
 
  echo "Fibonacci Series \n";
 
  echo $first.' '.$second.' ';
 
  for($i = 2; $i < $n; $i++){
 
    $third = $first + $second;
 
    echo $third.' ';
 
    $first = $second;
    $second = $third;
 
    }
}
  
/* Function call to print Fibonacci series upto 6 numbers. */
 
printFibonacci(6);

?>


<?php

define('NUM',11);
$a = 0;
$b = 1;

echo "$a $b "; // 0 1

for($i=1   ; $i<= NUM-2 ;  $a=$b, $b=$c, $i++ ) 
{
  echo $c = $a+$b;
  echo " ";
}

?>


<?php

$num = 2039;
$revnum = 0;
while ($num != 0)
{
$revnum = $revnum * 10 + $num % 10;
//below cast is essential to round remainder towards zero
$num = (int)($num / 10); 
}
 
echo "Reverse number: $revnum";

?>


<?php

$num=10;

if($num%2==0)
{
 echo "Even number"; 
}
else
{
 echo "Odd number";
} 

?>