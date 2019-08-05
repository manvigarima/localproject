<html>
	<head><title>Our-videos</title>
		<link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
		<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="navigation.css">
	</head>
	<body>
		<section>
			<?php include "navigation.php";?>
		</section>
		<section>
			<div class="container-fluid" style="width: 100%;">
				<div class="row">
					<div class="col-md-8 col-sm-12 col-lg-7 left">

						<div class="display">
							<span style="color: #fff; cursor: pointer;" class="glyphicon glyphicon-arrow-left"  id="left">Previous</span>
							<span style="float:right; color: #fff; cursor: pointer; right:0;" onclick="click()" id="right">Next</span>
							
							<video controls style="background-color: #ffffff; width: 100%; height:330px;" />
							 <source  type="video/mp4" id="videoName" src="admin/video/dil hai hamara khilauna nhi.mp4">
							</video>
							
							
						</div>
						<div class="video-details">
							<p>Oh Oh Jane Jaana | Cute Love Story | Pyaar Kiya Toh Darna Kya | Valentine’s Special Hindi Song</p>
							<br><br>
							<p id="text">hello</p>
						</div>
						<div class="like-dislike">
							<span class="glyphicon glyphicon-thumbs-up">222</span>
							<span class="glyphicon glyphicon-thumbs-down">2</span>
						</div>
						<div class="comment-section">
							<div class="image"><img src="Image/pic_icon.jpg" class="img-responsive img-circle"/></div><input type="text" placeholder="Add a comment">
						</div>
						<div class="display_comment" style="background-color:#39133d; height: 50px;">
							<div class="image"><img src="Image/pic_icon.jpg" class="img-responsive img-circle"/></div>
							hey hi hello whatsupp I am creative corner and this is your comment section
						</div>
					</div>
					<div class="col-md-3 col-sm-12 col-lg-3 list">
						<?php 
								include "include/db.php";

		$video = array();				//--new code 16-9-2018
		$sql12 ="select pvideo from video";
		
		$run=mysqli_query($conn,$sql12);
		while($c=mysqli_fetch_array($run))
		{
		$video[] = $c['pvideo'];
		}
		


							$sql1="select*from video";
							$run1=mysqli_query($conn,$sql1);
							while($c1=mysqli_fetch_array($run1))
							{
							?>
								<div class="col-md-12 list-item">
									<a href="galleryVideo.php?videoId=<?php echo $c1["uid"]; ?>">
									<video controls style="background-color: #ffffff; width: 100%; height:130px;""/>
							 			<source src="admin/video/<?php echo $c1["pvideo"];?>" type="video/mp4">
									</video>
									</a>
						</div>
						<?php }?>
					</div>
				</div>
			</div>
		</section>
<script type="text/javascript">
	function click(){
	
		console.log("a");}
		/*var message = <?php //echo json_encode($video) ?>,
        pel = document.getElementById("videoName"),
        idx = 0,
    	getNext = e => pel.src = e.target.id == "right" ? "admin/video/"+message[idx = ++idx%message.length]
                                                          : "admin/video/"+message[idx = (message.length - (message.length - --idx)%message.length)%message.length];
    document.getElementById("right").onclick = getNext;
document.getElementById("left").onclick = getNext;
var vdo = document.getElementsByTagName('video')[0];
		vdo.load();*/

//document.getElementById("right").onclick = getNext;
//document.getElementById("left").onclick = getNext;
	
	/*var message = <?php //echo json_encode($video) ?>,
        pel = document.getElementById("videoName"),
        idx = 0,
    getNext = e => pel.src = e.target.id == "right" ? "admin/video/"+message[idx = ++idx%message.length]
                                                          : "admin/video/"+message[idx = (message.length - (message.length - --idx)%message.length)%message.length];
document.getElementById("right").onclick = getNext;
document.getElementById("left").onclick = getNext;

 var vdo = document.getElementsByTagName('video');
vdo.load();*/

</script>
<p id="text">hello</p>
<!--<script type="text/javascript">
	function setvideo() {
		document.getElementById("videoName").src = "admin/video/";
	}

</script>-->



	</body>
</html>
<style type="text/css">
	.display{width: 100%; height:100%; height: 350px; margin-left:10px; background-color: #2c3647; margin-right: 10px;}
	.left{height: auto;}
	.list{width: 25%; height:auto; margin-left:15px; background-color: #2c3647; }
	.list-item{height:135px; background-color: #ffffff; margin-top: 8px;}
	.glyphicon-thumbs-up{ float: left; margin-top: 30px; font-size:25px;
    font-weight: 500;
    letter-spacing: .007px;
    text-transform: uppercase; }
    .glyphicon-thumbs-down{float: right; margin-top: 30px; font-size:25px;
    font-weight: 500;
    letter-spacing: .007px;
    text-transform: uppercase;}
    .like-dislike{float: right; width: 20%;}
    .video-details{float: left; font-style: TAHOMA; width: 80%; margin-top: 30px;}
    .video-details p{ font-family:tahoma; font-weight: bolder; text-transform: uppercase;  }
    .comment-section{margin-top:30px; float: left; width: 100%;}
    input[type=text]{width:80%; height: 30px; width: 92%; height: 50px;  float: right; left: 20;}
    .image{float: left; width: 50px; height:50px; border-radius: 50px;}
    .image img{float: left;}
    .glyphicon-arrow-left{position: absolute;}
</style>