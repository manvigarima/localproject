
<!DOCTYPE html>
<html>
<head>
	<title>white space validation</title>
	<script type="text/javascript">
		$(document).ready(function(){
$("textarea").on("keydown", function (e) {
   var c = $("textarea").val().length;
   if(c == 0)
       return e.which !== 32;
});
});
	</script>
</head>
<body>
	<textarea cols="" rows="" placeholder="Enter Your Message" required="required"></textarea>
</body>
</html>



<!--validate textarea for filling space and send mail-->