<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
 
<!-- Website Title --> 
 
<!-- Meta data for SEO --> 
<meta name="description" content=""/> 
<meta name="keywords" content=""/> 
 
<!-- Template stylesheet --> 
<link rel="stylesheet" href="../css/screen.css" type="text/css" media="all"/> 
<link href="../css/datepicker.css" rel="stylesheet" type="text/css" media="all"/> 
<link rel="stylesheet" href="../css/tipsy.css" type="text/css" media="all"/> 
<link rel="stylesheet" href="../js/jwysiwyg/jquery.wysiwyg.css" type="text/css" media="all"/> 
<link href="../js/visualize/visualize.css" rel="stylesheet" type="text/css" media="all"/> 
<link rel="stylesheet" type="text/css" href="../js/fancybox/jquery.fancybox-1.3.0.css" media="screen"/> 
 
<!--[if IE 7]>
	<link href="css/ie7.css" rel="stylesheet" type="text/css" media="all">
<![endif]--> 
 
<!--[if IE]>
	<script type="text/javascript" src="js/excanvas.js"></script>
<![endif]--> 
 
<!-- Jquery and plugins --> 
<script type="text/javascript" src="../js/jquery.js"></script> 
<script type="text/javascript" src="../js/jquery-ui.js"></script> 
<script type="text/javascript" src="../js/jquery.img.preload.js"></script> 
<script type="text/javascript" src="../js/fancybox/jquery.fancybox-1.3.0.js"></script> 
<script type="text/javascript" src="../js/jwysiwyg/jquery.wysiwyg.js"></script> 
<script type="text/javascript" src="../js/hint.js"></script> 
<script type="text/javascript" src="../js/visualize/jquery.visualize.js"></script> 
<script type="text/javascript" src="../js/jquery.tipsy.js"></script> 
<script type="text/javascript" src="../js/browser.js"></script> 
<script type="text/javascript" src="../js/custom.js"></script> 
 
</head> 
<body> 
<?php include_once '../header.php';?>
		<!-- End main menu --> 
		
		
		<!-- Begin shortcut menu --> 
		<?php include '../left.php'; ?> 
		<!-- End shortcut menu --> 
		
		<br class="clear"/> 
		
		<!-- Begin content --> 
		<div id="content_wrapper"> 
		
			<!-- Begin one column box --> 
			<div class="onecolumn"> 
				
				<div class="header"> 
				
					<h2>Graph</h2> 
					
					<!-- Begin 2nd level tab --> 
					<ul class="second_level_tab"> 
						<li> 
							<a href=""> 
								2008/2009
							</a> 
						</li> 
						<li> 
							<a href="" class="active"> 
								2009/2010
							</a> 
						</li> 
					</ul> 
					<!-- End 2nd level tab --> 
					
				</div> 
				
				<div class="content"> 
				
					<div id="graph_wrapper" class="graph_wrapper"></div> 
				
					<table id="graph_data" class="data" style="display:none" rel="bar" cellpadding="0" cellspacing="0" width="100%"> 
						<caption>2009/2010 Sales by industry (Million)</caption> 
						<thead> 
							<tr> 
								<td class="no_input">&nbsp;</td> 
								<th>Accounting</th> 
								<th>Banking</th> 
								<th>Beauty Care</th> 
								<th>Insurance</th> 
								<th>Internet</th> 
								<th>Media</th> 
								<th>Telecomm</th> 
								<th>Transportation</th> 
							</tr> 
						</thead> 
						
						<tbody> 
							<tr> 
								<th>2009</th> 
								<td>10</td> 
								<td>3</td> 
								<td>4</td> 
								<td>9</td> 
								<td>14</td> 
								<td>2</td> 
								<td>7</td> 
								<td>12</td> 
							</tr> 
							
							<tr> 
								<th>2010</th> 
								<td>12</td> 
								<td>5</td> 
								<td>5</td> 
								<td>6</td> 
								<td>11</td> 
								<td>7</td> 
								<td>9</td> 
								<td>16</td> 
							</tr> 
							
						</tbody> 
					</table> 
				
				</div> 
			</div> 
		
			<br class="clear"/><br/> 
			
			<!-- Begin 1st level tab --> 
			<ul class="first_level_tab"> 
				<li> 
					<a href="" class="active"> 
						Pages data
					</a> 
				</li> 
				<li> 
					<a href=""> 
						Graph
					</a> 
				</li> 
				<li> 
					<a href=""> 
						Form Elements
					</a> 
				</li> 
			</ul>	
			<!-- End 1st level tab --> 
			
			<br class="clear"/> 
			
			<!-- Begin one column box --> 
			<div class="onecolumn"> 
				
				<div class="header"> 
					<div class="description"> 
						Page data description goes here... sectetur adipiscing onsectetur adipiscing
					</div> 
					
					<!-- Begin 2nd level tab --> 
					<ul class="second_level_tab"> 
						<li> 
							<a href=""> 
								Normal Tab
							</a> 
						</li> 
						<li> 
							<a href="" class="active"> 
								Selected
							</a> 
						</li> 
					</ul> 
					<!-- End 2nd level tab --> 
					
				</div> 
				
				<div class="content nomargin"> 
					
					<!-- Begin example table data --> 
					<table class="global" width="100%" cellpadding="0" cellspacing="0"> 
						<thead> 
						    <tr> 
						    	<th style="width:10px"> 
						    		<input type="checkbox" id="check_all" name="check_all"/> 
						    	</th> 
						    	<th style="width:30%">Column 1</th> 
						    	<th style="width:20%">Column 2</th> 
						    	<th style="width:30%">Column 3</th> 
						    	<th style="width:15%">Column 4</th> 
						    </tr> 
						</thead> 
						<tbody> 
						    <tr> 
						    	<td> 
						    		<input type="checkbox"/> 
						    	</td> 
						    	<td>Maecenas lacinia orci at neque</td> 
						    	<td><a href="">Sit amet</a></td> 
						    	<td>Consectetur adipiscing</td> 
						    	<td> 
						    		<a href=""><img src="images/icon_edit.png" alt="edit" class="help" title="Edit"/></a> 
						    		<a href=""><img src="images/icon_delete.png" alt="delete" class="help" title="Delete"/></a> 
						    	</td> 
						    </tr> 
						    <tr> 
						    	<td> 
						    		<input type="checkbox"/> 
						    	</td> 
						    	<td>Maecenas lacinia orci at neque</td> 
						    	<td><a href="">Sit amet</a></td> 
						    	<td>Consectetur adipiscing</td> 
						    	<td> 
						    		<a href=""><img src="images/icon_edit.png" alt="edit" class="help" title="Edit"/></a> 
						    		<a href=""><img src="images/icon_delete.png" alt="delete" class="help" title="Delete"/></a> 
						    	</td> 
						    </tr> 
						    <tr> 
						    	<td> 
						    		<input type="checkbox"/> 
						    	</td> 
						    	<td>Maecenas lacinia orci at neque</td> 
						    	<td><a href="">Sit amet</a></td> 
						    	<td>Consectetur adipiscing</td> 
						    	<td> 
						    		<a href=""><img src="images/icon_edit.png" alt="edit" class="help" title="Edit"/></a> 
						    		<a href=""><img src="images/icon_delete.png" alt="delete" class="help" title="Delete"/></a> 
						    	</td> 
						    </tr> 
						    <tr> 
						    	<td> 
						    		<input type="checkbox"/> 
						    	</td> 
						    	<td>Maecenas lacinia orci at neque</td> 
						    	<td><a href="">Sit amet</a></td> 
						    	<td>Consectetur adipiscing</td> 
						    	<td> 
						    		<a href=""><img src="images/icon_edit.png" alt="edit" class="help" title="Edit"/></a> 
						    		<a href=""><img src="images/icon_delete.png" alt="delete" class="help" title="Delete"/></a> 
						    	</td> 
						    </tr> 
						</tbody> 
					</table> 
					<!-- End example table data --> 
					
					
					<!-- Begin pagination --> 
					<div class="pagination"> 
						<a href="#">«</a> 
						<a href="#" class="active">1</a> 
						<a href="#">2</a> 
						<a href="#">3</a> 
						<a href="#">4</a> 
						<a href="#">5</a> 
						<a href="#">6</a> 
						<a href="#">»</a> 
					</div> 
					<!-- End pagination --> 
					
					<br class="clear"/> 
				
				</div> 
				
			</div> 
			<!-- End one column box --> 
			
			<br class="clear"/><br/> 
			
			<!-- Begin two column box --> 
			<div class="twocolumn_wrapper"> 
			
			<!-- Begin 1st level tab --> 
			<ul class="first_level_tab"> 
				<li> 
					<a href=""> 
						Content
					</a> 
				</li> 
				<li> 
					<a href="" class="active"> 
						Images
					</a> 
				</li> 
			</ul>	
			<!-- End 1st level tab --> 
			
			<br class="clear"/> 
			
			<div class="twocolumn"> 
				
				<div class="header"> 
					
					<!-- Begin 2nd level tab --> 
					<ul class="second_level_tab"> 
						<li> 
							<a href=""> 
								Normal Tab
							</a> 
						</li> 
						<li> 
							<a href="" class="active"> 
								Selected
							</a> 
						</li> 
					</ul> 
					<!-- End 2nd level tab --> 
					
				</div> 
				
				<div class="content"> 
					
					<!-- Begin form elements --> 
					<p> 
						<label>Text input label:</label><br/> 
						<input type="text" id="text_input1" style="width:97%"/> 
					</p> 
					<br/> 
					<p> 
						<label>Textarea label:</label><br/> 
						<textarea rows="5" cols="35" style="width:97%"></textarea> 
					</p> 
					<br/> 
					<label>Datepicker label:</label><br/> 
					<div class="date"> 
						<div class="text"></div> 
						<input type="text" id="datepicker"/> 
            	    </div> 
            	    <br/> 
            	    <label>Select input:</label><br/> 
					<div class="option"> 
						<div class="text"></div> 
						<select id="sample_select"> 
            	      	    <optgroup label="Apple"> 
            	      	    	<option>iPad</option> 
            	      	    	<option>iPhone</option> 
            	      	    	<option>Macbook</option> 
            	      	    </optgroup> 
            	      	    <optgroup label="Microsoft"> 
            	      	    	<option>Window 7</option> 
            	      	    	<option>Zune</option> 
            	      	    	<option>XBox 360</option> 
            	      	    </optgroup> 
            	    	</select> 
            	    </div> 
            	    <br/> 
            	    <label>File input:</label><br/> 
					<div class="file"> 
						<div class="text"></div> 
						<input type="file"/> 
            	    </div> 
					<br/><br/> 
					<p> 
						<input type="checkbox" class="checkbox" checked="checked" id="cbdemo1"/> <label for="cbdemo1">Checkbox label</label> 
						<input type="radio" checked="checked" class="radio"/> <label>Radio button label</label> 
					</p> 
					<br/> 
					<div class="alert_warning" style="margin-top:0"> 
						<p> 
							<img src="images/icon_warning.png" alt="success" class="middle"/> 
							Warning Notification.
						</p> 
					</div> 
					<div class="alert_info"> 
						<p> 
							<img src="images/icon_info.png" alt="success" class="middle"/> 
							Information Notification.
						</p> 
					</div> 
					<div class="alert_success"> 
						<p> 
							<img src="images/icon_accept.png" alt="success" class="middle"/> 
							Success Notification.
						</p> 
					</div> 
					<div class="alert_error" style="margin-bottom:20px"> 
						<p> 
							<img src="images/icon_error.png" alt="delete" class="middle"/> 
							Error Notification.
						</p> 
					</div> 
					<!-- End form elements --> 
				
				</div> 
			</div> 
			
			</div> 
			<!-- End two column box --> 
			
			
			<!-- Begin two column box --> 
			<div class="twocolumn_wrapper right"> 
			
			<!-- Begin 1st level tab --> 
			<ul class="first_level_tab"> 
				<li> 
					<a href="" class="active"> 
						Content
					</a> 
				</li> 
				<li> 
					<a href=""> 
						Images
					</a> 
				</li> 
			</ul>	
			<!-- End 1st level tab --> 
			
			<br class="clear"/> 
			
			<div class="twocolumn"> 
				
				<div class="header"> 
					
					<!-- Begin 2nd level tab --> 
					<ul class="second_level_tab"> 
						<li> 
							<a href=""> 
								Normal Tab
							</a> 
						</li> 
						<li> 
							<a href="" class="active"> 
								Selected
							</a> 
						</li> 
					</ul> 
					<!-- End 2nd level tab --> 
					
				</div> 
				
				<div class="content"> 
					<h2>H2 tag header</h2> 
					<h3>H3 tag header</h3> 
					<h4>H4 tag header</h4> 
					<h5>H5 tag header</h5> 
					<br/><br/> 
					<h3>List</h3><br/> 
					<ul class="global"> 
					    <li>Curabitur eu sapien eget tortor blandit pretium auctor ac metus.</li> 
					    <li>Etiam quis est non velit facilisis auctor.</li> 
					    <li>Vivamus adipiscing auctor quam, at aliquet diam viverra sed.</li> 
					    <li>Integer a tortor quis purus consectetur luctus sit amet ac elit.</li> 
					    <li>Duis eget odio ut tellus pulvinar gravida in in purus.</li> 
					    <li>Cras interdum faucibus erat, sit amet pretium leo dignissim vel.</li> 
					</ul> 
					<br/><br/> 
					<ol class="global"> 
					    <li>Curabitur eu sapien eget tortor blandit pretium auctor ac metus.</li> 
					    <li>Etiam quis est non velit facilisis auctor.</li> 
					    <li>Vivamus adipiscing auctor quam, at aliquet diam viverra sed.</li> 
					    <li>Integer a tortor quis purus consectetur luctus sit amet ac elit.</li> 
					    <li>Duis eget odio ut tellus pulvinar gravida in in purus.</li> 
					    <li>Cras interdum faucibus erat, sit amet pretium leo dignissim vel.</li> 
					</ol> 
					<br/><br/> 
					<p> 
						<input type="button" class="button_dark" value="Dark Button"/> 
						<input type="button" class="button_light" value="Light Button"/> 
					</p> 
				</div> 
			</div> 
			
			</div> 
			<!-- End two column box --> 
			
			<br class="clear"/><br/><br/> 
			
			<!-- Begin one column box --> 
			<div class="onecolumn"> 
				
				<div class="header"> 
				
					<h2>WYSIYG textarea</h2> 
					
					<!-- Begin 2nd level tab --> 
					<ul class="second_level_tab"> 
						<li> 
							<a href="" class="active"> 
								WYSIWYG
							</a> 
						</li> 
						<li> 
							<a href=""> 
								Media
							</a> 
						</li> 
					</ul> 
					<!-- End 2nd level tab --> 
					
				</div> 
				
				<div class="content nomargin"> 
					
					<textarea id="wysiwyg" rows="10" cols="5" class="wysiwyg" style="width:100%"></textarea> 
					
				</div> 
				
			</div> 
			<!-- End one column box --> 
			
			<br class="clear"/><br/> 
			
			<!-- Begin one column box --> 
			<div class="onecolumn"> 
				
				<div class="header"> 
				
					<h2>Images</h2> 
					
					<!-- Begin 2nd level tab --> 
					<ul class="second_level_tab"> 
						<li> 
							<a href=""> 
								WYSIWYG
							</a> 
						</li> 
						<li> 
							<a href="" class="active"> 
								Media
							</a> 
						</li> 
					</ul> 
					<!-- End 2nd level tab --> 
					
				</div> 
				
				<div class="content"> 
					
					<!-- Begin media modal window --> 
					<ul class="media_photos"> 
	  		  		    <li> 
	  		  		    	  <a rel="slide" href="example/1.jpg" title="Kobe, Osaka and Kyoto JAPAN"> 
	  		  		    	  	<img src="example/1_t.jpg" alt="Kobe, Osaka and Kyoto JAPAN"/> 
	  		  		    	  </a> 
	  		  		    	  <span class="action"> 
	  		  		    	  	<a href=""><img src="images/icon_edit.png" alt="edit" class="help" title="Edit"/></a> 
						    	<a href=""><img src="images/icon_delete.png" alt="delete" class="help" title="Delete"/></a> 
	  		  		    	  </span> 
	  		  		    </li> 
	  		  		    
	  		  		    <li> 
	  		  		    	  <a rel="slide" href="example/2.jpg" title="Ji's wedding"> 
	  		  		    	  	<img src="example/2_t.jpg" alt="Ji's wedding"/> 
	  		  		    	  </a> 
	  		  		    	  <span class="action"> 
	  		  		    	  	<a href=""><img src="images/icon_edit.png" alt="edit" class="help" title="Edit"/></a> 
						    	<a href=""><img src="images/icon_delete.png" alt="delete" class="help" title="Delete"/></a> 
	  		  		    	  </span> 
	  		  		    </li> 
	  		  		    
	  		  		    <li> 
	  		  		    	  <a rel="slide" href="example/3.jpg" title="BANGKOK-CHIENGKARN"> 
	  		  		    	  	<img src="example/3_t.jpg" alt="BANGKOK-CHIENGKARN"/> 
	  		  		    	  </a> 
	  		  		    	  <span class="action"> 
	  		  		    	  	<a href=""><img src="images/icon_edit.png" alt="edit" class="help" title="Edit"/></a> 
						    	<a href=""><img src="images/icon_delete.png" alt="delete" class="help" title="Delete"/></a> 
	  		  		    	  </span> 
	  		  		    </li> 
	  		  		    <li> 
	  		  		    	  <a rel="slide" href="example/1.jpg" title="Kobe, Osaka and Kyoto JAPAN"> 
	  		  		    	  	<img src="example/1_t.jpg" alt="Kobe, Osaka and Kyoto JAPAN"/> 
	  		  		    	  </a> 
	  		  		    	  <span class="action"> 
	  		  		    	  	<a href=""><img src="images/icon_edit.png" alt="edit" class="help" title="Edit"/></a> 
						    	<a href=""><img src="images/icon_delete.png" alt="delete" class="help" title="Delete"/></a> 
	  		  		    	  </span> 
	  		  		    </li> 
	  		  		    
	  		  		    <li> 
	  		  		    	  <a rel="slide" href="example/2.jpg" title="Ji's wedding"> 
	  		  		    	  	<img src="example/2_t.jpg" alt="Ji's wedding"/> 
	  		  		    	  </a> 
	  		  		    	  <span class="action"> 
	  		  		    	  	<a href=""><img src="images/icon_edit.png" alt="edit" class="help" title="Edit"/></a> 
						    	<a href=""><img src="images/icon_delete.png" alt="delete" class="help" title="Delete"/></a> 
	  		  		    	  </span> 
	  		  		    </li> 
	  		  		    
	  		  		    <li> 
	  		  		    	  <a rel="slide" href="example/3.jpg" title="BANGKOK-CHIENGKARN"> 
	  		  		    	  	<img src="example/3_t.jpg" alt="BANGKOK-CHIENGKARN"/> 
	  		  		    	  </a> 
	  		  		    	  <span class="action"> 
	  		  		    	  	<a href=""><img src="images/icon_edit.png" alt="edit" class="help" title="Edit"/></a> 
						    	<a href=""><img src="images/icon_delete.png" alt="delete" class="help" title="Delete"/></a> 
	  		  		    	  </span> 
	  		  		    </li> 
	  		  		    
	  				</ul> 
	  				<br class="clear"/><br class="clear"/> 
	  				<!-- End media modal window --> 
					
				</div> 
				
			</div> 
			<!-- End one column box --> 
			
		</div> 
		<!-- End content --> 
		
		<br class="clear"/> 
			
		<div id="footer"> 
			&copy; Copyright 2010 by FULLADMIN template All Right Reserved.
		</div> 
	
	</div> 
	<!-- End control panel wrapper --> 

	
</body> 
</html>