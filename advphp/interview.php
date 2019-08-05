 <?php 

 echo "<b>Answer:</b>";

$values = array("rose","lily","sunflower","kamal");

$newvalue = "rose";

if (in_array($newvalue,$values))

{

echo "$newvalue is already in the array!<br>";

}

?>

<?php

echo "<b>Answer :</b>";

$myarray = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);

for($i=0;$i<14;$i++)

{

echo $myarray[$i]." ";

}

?>


<?php

echo "<b>Answer :</b>";

$letters = range('a','z');

print_r ($letters);

echo "<br>";
?>

<?php

echo "<b>Answer :</b>";

$myarray = array();

$myarray[0] = array(1,2,3,4,5);

$myarray[1] = array(6,7,8,9,10);

foreach($myarray as $v) {

foreach($v as $myv) {

echo "$myv<br>";

}

}

echo "<br>";

?>


<?php

echo "<b>Answer :</b>";

$values = array("rose","lily","sunflower","kamal");

print_r($values);
echo "<br>";
?>

<?php

echo "<b>Answer :</b>";

$alphabet = range("A","Z");

foreach($alphabet as $letter)

{

echo "The letter $letter<br>";

}
echo "<br>";
?>


<?php

//Task 21 reverse array

$reverseArray = array(1, 2, 3, 4);
$tmpArray = array();
$arraySize = sizeof($reverseArray);

for($i<$arraySize; $i=0; $i--){
    echo $reverseArray($i);
}

?>


<?php
  $array = array(1, 2, 3, 4);
  $size = sizeof($array);

  for($i=$size-1; $i>=0; $i--){
      echo $array[$i];
  }
?>


<?php

echo "<b>Answer :</b>";

$values = range("A","Z");

shuffle($values);

print_r($values);
 echo "<br>";
?>

<?php

//ask to sir 

echo "<b>Answer :</b>";

$numbers = array("Item 2","Item 3","Item 4");

next($numbers);

$thisvalue = current($numbers); 
echo "We are now at $thisvalue\n\n";

$first = reset($numbers);

echo "Back to $first";
echo "<br>";
?>

<?php
$countup = range(1,5);
print_r($countup);
$countdown = array_reverse($countup);
print_r($countdown);
?>

