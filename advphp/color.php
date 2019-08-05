<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
html, body{ margin:0px; padding:0px; color:#000; font-size:16px;}
.change{background-color:#f4424e;}
.red{ background-color:#093;}
</style>

</head>

<body>
<div class="question" id="division">
	<h1>this is question how are you </h1>
 <p class="change">Change my Background Color, Font-size OnClick</p>
 <p class="change">Change my Background Color, Font-size OnClick</p>
 <p class="change">Change my Background Color, Font-size OnClick</p>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- 
<script>

	$(document).ready(function(){
$(".change").click(function(){
   if($(this).css('background-color')=='#093')
         $(this).css('background-color', '#f4424e');
   else {
         $(this).css('background-color', '#093');
   }
});
</script>
 -->

 <script>

	$(document).ready(function(){
		$('p').click(function(){
		if($(this).css('background-color')=='#f4424e'){
		$(this).addClass("red");
		}
		else{
			$(this).addClass("change");
		}
       });
	});
</script>

<!-- 
<script>

	$(document).ready(function(){
		$('p').find(function(){
		$('this').removeClass('red');
		$(this).toggleClass('red');
       });
	});
</script> -->




<!-- <script>
	$(document).ready(function(){
		$('.change').click(function(){
			
		$('this').addClass('red');
		
		});
						
	});
</script> -->

</body>
</html>

