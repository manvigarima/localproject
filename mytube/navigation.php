<!-- <div class="hed">hello</div> -->
<nav class="navbar navbar-inverse">
<div class="container-fluid">
	<div class="navbar-header">
	    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span> 
	    </button>
        <a class="navbar-brand" href="#">Creative Corner</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
     <ul class="nav navbar-nav navbar-right">
      	<li class="dropdown sell"><a href="#" class="dropdown-toggle"data-toggle="dropdown">Sell on CreativeCorner</a>
			<ul class="dropdown-menu">
				<li><a href="vendor.php">Your Seller Account</a></li>
				<li><a href="vendor.php">Create New Account</a></li>
			</ul>
		
		</li>
		<li><a href="contactUs.php">Contact Us</a></li>
		<li class="dropdown listHeading">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<?php 
				if(isset($_SESSION["cname"]))
				{
					echo "<span style='text-transform:Capitalize;'>".$_SESSION['cname']."</span>";
				}
				else{
						echo "Customer";
					}?>
				
			</a>
		
			<ul class="dropdown-menu">
				<?php 
				if(isset($_SESSION["cname"]))
				{ ?>
				<li><a href="logout.php">LogOut</a></li>
				<?php }
				else{ ?>
					<li><a href="login.php">LOGIN</a></li>
				<li><a href="signup.php">SIGN Up</a></li>
				<?php }
				?>
				<li><a href="#">Track order</a></li>
			</ul>
		
		</li>
		<li><a href="cart.php">Cart</a></li>
	</ul>
	</div>
</div>
</nav>
 <nav class="navbar navbar-inverse">
<div class="container-fluid">
    <div class="navbar-header">
	    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavvar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span> 
	     </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavvar">
		<ul class="navbar-nav nav second_header">
			<li style="color:#FF0000;"><a href="index.php" style="color: #FF0000;">Home</a></li>
			<li><a href="gallery.php" style="color: #FF0000;">Gallery</a></li>
			<li><a href="Artist.php" style="color: #FF0000;">Artist/Designer</a></li>
			<li><a href="galleryVideo.php" style="color: #FF0000;">Videos</a></li>
			<li><a href="aboutUs.php" style="color: #FF0000;">About us</a></li>
			</ul>
	</div>
</div>
</nav>