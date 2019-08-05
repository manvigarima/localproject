<?php
echo "Print"."<br>";
for ($row=0; $row<7; $row++)
{
  for ($column=0; $column<=7; $column++)
    {
     if ($column == 1 or (($row == 0 or $row == 6) and ($column > 1 and $column < 6)) or ($row == 3 and $column > 1 and $column < 5))
            echo "*";    
        else  
            echo "&nbsp;";     
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
    echo "*";
  }
  echo "<br>";
}echo "<br>";echo "<br>";
 ?>


 <?php 
 	
 	$height=20;

 	for($row=1; $row<=$height; $row++)
 	{
 		for($col=0; $col<9; $col++)
 		{
 			if($col)
 			{
	 			if($row==1||$row==3||$row==4||$row==6||$row==7||$row==8||$row==10||$row==11||$row==12||$row==13||$row==15||$row==16||$row==17||$row==18||$row==19)

	 				echo "@";
	 		}

	 		if($col=6)
	 		{
	 			echo "*";
	 		}
	 		
 		}

 	}



 ?>