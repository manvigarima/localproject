<!DOCTYPE html>
<html>
<head>
	<title>form validation</title>
</head>
<body>

	<form name="f1" method="get" action="">
		<input type="text" name="name">
		<input type="password" name="password">
		<input type="submit" name="submit" onclick="validate();">
		
	</form>

</body>
<script type="text/javascript">
	 function validate(){

	 	 var x = document.forms["f1"]["name"].value;
	 	 var y= document.forms["f1"]["password"].value;
    if (x == ""||y=="") {
        alert("Name must be filled out");
        return false;
    }


	}

</script>

</html>