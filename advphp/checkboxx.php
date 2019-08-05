<!DOCTYPE html>
<html>
<body>
<form method="post" action="process.php">
<input type="checkbox" name="vehicle[]" value="Bike">I have a bike <br>
<input type="checkbox" name="vehicle[]" value="Cycle">I have a Cycle <br>
<input type="checkbox" name="vehicle[]" value="Car">I have a car <br><br>
<input type="submit" value="Submit">
</form> 
</body>
</html>


<!--Action Page-------------------------------------->

<?php
$host="localhost"; // Host name 
$username="username"; // Mysql username 
$password="password"; // Mysql password 
$db_name="dbname"; // Database name 
$tbl_name="tblname"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form 
$FullName=$_POST['FullName'];
$MobileNumber=$_POST['Number'];
$EmailAddress=$_POST['EmailAddress'];
$Address=$_POST['Address'];
$petathome=$_POST['petathome'];

// Insert data into mysql 
$sql="INSERT INTO $tbl_name(FullName,Number, EmailAddress, Address, petathome)VALUES('$FullName', '$Number', '$EmailAddress', '$Address', '$petathome')";
$result=mysql_query($sql); 
if($result){
echo "Successful";
echo "<BR>";
echo "<a href='testpage.html'>Back to main page</a>";
}

else {
echo "ERROR";
}
?> 

<?php 
mysql_close();
?>