<?php 

for($i=9;$i>=1;$i--)
{
 
    for ($d=0; $d <= 18-$i; $d++) 

     {
        echo "&nbsp;&nbsp;";
    }
     
    for($j=$i;$j>=1;$j--){
        echo "&nbsp;"."*"."&nbsp;";
    }
     
    echo "<br>";
 
}
for($i=1;$i<=9;$i++){
    for ($d=10-$i; $d > 0; $d--)  {
        echo "&nbsp;&nbsp;";
    }
    for($j=1;$j<=$i;$j++){
        echo "&nbsp;"."*"."&nbsp;";
    }
    echo "<br>";
}//for first close


echo "<br>";echo "<br>";

?>


