

<!DOCTYPE html>
     <html> 
     <head> 
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body> 
  <h3>Chess Board using Nested For Loop</h3>
   <table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
   <!-- cell 270px wide (8 columns x 60px) -->
      <?php
      for($row=1;$row<=8;$row++)
      {
          echo "<tr>";
          for($col=1;$col<=8;$col++)
          {
          $total=$row+$col;
          if($total%2==0)
          {
          echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
          }
          else
          {
          echo "<td height=30px width=30px bgcolor=#000000></td>";
          }
          }
          echo "</tr>";
    }
          ?>
  </table>
  </body>
  </html>

<?php
 for ($row=0; $row<=7; $row++)
{
  for ($column=0; $column<=7; $column++)
    {
        if ((($column == 1 or $column == 5) and $row != 0) or (($row == 0 or $row == 3) and ($column > 1 and $column < 5)))
            echo "*";    
        else  
            echo " &nbsp;";     
    }        
  echo "<br>";
}
echo "<br>";echo "<br>";
?>

 <?php
for ($row=0; $row<7; $row++)
{
  for ($column=0; $column<=7; $column++)
    {
      if ($column == 1 or (($row == 0 or $row == 3 or $row == 6) and ($column < 5 and $column > 1)) or ($column == 5 and ($row != 0 and $row != 3 and $row != 6)))
            echo "*";    
        else  
            echo "&nbsp;";     
    }        
  echo "<br>";
}echo "<br>";echo "<br>";
?>

 <?php
for ($row=0; $row<7; $row++)
{
  for ($column=0; $column<=7; $column++)
    {
     if (($column == 1 and ($row != 0 and $row != 6)) or (($row == 0 or $row == 6) and ($column > 1 and $column < 5)) or ($column == 5 and ($row == 1 or $row == 5)))
            echo "*";    
        else  
            echo "&nbsp;";     
    }        
  echo "<br>";
}echo "<br>";echo "<br>";
?>

<?php
echo "Print D"."<br>";
for ($row=0; $row<7; $row++)
{
  for ($column=0; $column<=7; $column++)
    {
     if ($column == 1 or (($row == 0 or $row == 6) and ($column > 1 and $column < 5)) or ($column == 5 and $row != 0 and $row != 6))
            echo "*";    
        else  
            echo "&nbsp;";     
    }        
  echo "<br>";
}echo "<br>";echo "<br>";
?>

<?php
echo "Print E"."<br>";
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
echo "Print F"."<br>";
for ($row=0; $row<7; $row++)
{
  for ($column=0; $column<=7; $column++)
    {
      if ($column == 1 or ($row == 0 and $column > 1 and $column < 6) or ($row == 3 and $column > 1 and $column < 5))
            echo "*";    
        else  
            echo "&nbsp;";     
    }        
  echo "<br>";
}echo "<br>";echo "<br>";
?>

<!DOCTYPE html>
<html>
<body>
<table align="left" border="1" cellpadding="3" cellspacing="0">
<?php
for($i=1;$i<=6;$i++)
{
echo "<tr>";
for ($j=1;$j<=5;$j++)
  {
  echo "<td>$i * $j = ".$i*$j."</td>";
  }
  echo "</tr>";
  }
?>
</table>
</body>
</html>

