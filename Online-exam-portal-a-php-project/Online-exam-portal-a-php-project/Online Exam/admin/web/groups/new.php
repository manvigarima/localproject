<?php 
	session_start();
	include_once '../../../lib/class_ise_groups.php';
	include_once '../../../lib/ise_settings.class.php';
	include_once '../../../lib/db.php';
	//include_once"../../../lib/admin_check.php";
	//admin_login_check('0','admin');
	$ise_groups = new ise_groups();
	$ise_settings = new ise_Settings();
	$queries = new Queries();
	if(!empty($_POST))
	{
		$count = $queries->makeselectquery('ise_groups',"count(*) as count","group_name", $_POST['txttitle']);
		if($count == '0')
		{
			$image=$_FILES['images']['name']; $error = '0';$upload='';$extension='';
			if($image!='')
			{			
				define ("MAX_SIZE","50"); 
				 
				$filename = stripslashes($_FILES['images']['name']);
				$extension = getExtension($filename);
				$extension = strtolower($extension);
				// Image Size
				$size=filesize($_FILES['images']['tmp_name']);
				if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) 
				{
					$_SESSION['msg'] = "<font size='2' color='#FF0000'>Upload Unknown File extension! Please Upload Onely png,gif,jpg,jpeg File</font>";
					$error='1';
				}else
				{
					$upload=time().".".$extension;
					$newname="../../../uploads/groups/".$upload;
					$copied = copy($_FILES['images']['tmp_name'], $newname);
				}
			} 
			if($error=='0')
			{	
				$date = date('Y-m-d');
				$tab = array("group_name =".$_POST['txttitle']."", "group_desc=".addslashes($_POST['desc'])."", "school_id =".$_POST['selschool']."", "group_pic = ".$upload."", "create_date=$date","status=".$_POST['state']."");
				
				$val = $ise_groups->ise_groups_insert($tab);
				$_SESSION['msg'] = "<div class='success'>Group Added Successfully</div>";
				print "<script>";
				print " self.location='index.php';";
				print "</script>"; 
			}
		}else
		{
			$_SESSION['errmsg'] = "<div class = 'wrong'>Group Title Already Existed</div>";
		}
	}
?>
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
 
 
<script language="javascript" src="../../../script/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" language="javascript">
tinyMCE.init({
	mode : "textareas",
	theme : "advanced",
	elements : "elm1",
    theme_advanced_toolbar_location : "top",
	theme_advanced_buttons1 : "bold,italic,underline,separator,strikethrough,justifyleft,justifycenter,justifyright,justifyfull,forecolorpicker,backcolorpicker,charmap,visualaid,bullist,numlist,undo,redo,code",
	theme_advanced_buttons2 : "fontselect,fontsizeselect,formatselect,styleselect,forecolor,cleanup,visualaid",
	theme_advanced_buttons3 : "",
});
</script>
<script language="javascript" src="../../../Scripts/check.js"></script>
<script language="javascript">
	function check(){
	//alert("hii");
	
		getForm("group_new");
		if(!IsEmpty("txttitle","Provide Group Title"))return false;
		if(!IsEmpty("desc","Provide Group Description"))return false;
		//if(!IsEmpty("seluser","Select Group Owner"))return false;
		if(!IsEmpty("selschool","Select School"))return false;
		if(!IsEmpty("images","Upload Group Image"))return false;
		
	}
</script>
<title>IsmartExams :: Admin</title></head>
<body>
      <?php include"../header_one.php";?>
    <?php  include '../left.php'; ?>
    <br class="clear"/> 
		
		<!-- Begin content --> 
		<div id="content_wrapper" style="margin-right:30px;"> 
		
			<!-- Begin one column box --> 
		
			
			<!-- Begin 1st level tab --> 
			<ul class="first_level_tab"> 
				<li> 
					<a href="<?php echo $admin_path;?>groups/index.php" > 
						Manage Groups
					</a> 
				</li>
				<li> 
					<a href="<?php echo $admin_path;?>groups/new.php" class="active"> 
						 Add Groups
					</a> 
				</li> 
				
			</ul>	
			<!-- End 1st level tab --> 
			
			<br class="clear"/> <div style="text-align:right"><?php breadcrum();?>&nbsp;&nbsp;</div>
			
			<!-- Begin one column box --> 
			<div style="border:1px solid #ccc;"  > 
				
			
			
				
				<div class="content nomargin"  > 
			<table width="100%" align="left" border="0" cellpadding="0" cellspacing="0" class="global">
										<tbody>
											
											<tr><td colspan="3"><?php  echo $_SESSION['errmsg']; if(!empty($_SESSION['errmsg']))unset($_SESSION['errmsg']);?></td></tr>
											
                                           
											<tr>
												<td colspan="6">
												<form name="group_new" id="group_new" method="post" action="#"  enctype="multipart/form-data"  onsubmit="return check()">
													<table width="100%" border="0" style="line-height:30px;" cellpadding="3" cellspacing="1" class="tborder">
                  									
									                  <tr>
									                    <td height="24" align="right" ><label><font size="4" color="#ff0000"><b>
                                                          *</b></font>Group Title</label></td>
									                    <td>:</td>
									                    <td><input type="text" value="<?php if(!empty($_POST)){echo $_POST['txttitle'];}?>" name="txttitle" id="txttitle" /></td>
								                      </tr>
													  <tr>
										                  <td width="42%" height="24" align="right" ><label><font size="4" color="#ff0000"><b>
                                                          *</b></font>Group Description</label></td>
														  <td width="2%">:</td>
														  <td width="56%"><textarea name="desc" id="desc"><?php if(!empty($_POST)){echo $_POST['desc'];}?></textarea></td>
										              </tr>
                                                    <!--  <tr>
										                  <td width="42%" height="24" align="right" ><label><font size="4" color="#ff0000"><b>
                                                          *</b></font>Website</label></td>
														  <td width="2%">:</td>
														  <td width="56%"><input type="text" value="<?php if(!empty($_POST)){echo $_POST['grp_website'];}?>" name="grp_website" id="grp_website" /></td>
										              </tr>-->
                                                      <!-- <tr>
										                  <td width="42%" height="24" align="right" ><label><font size="4" color="#ff0000"><b>
                                                          *</b></font>Email id</label></td>
														  <td width="2%">:</td>
														  <td width="56%"><input type="text" value="<?php if(!empty($_POST)){echo $_POST['grp_emailid'];}?>" name="grp_emailid" id="grp_emailid" /></td>
										              </tr>-->
                                                      <tr>
										                  <td width="42%" height="24" align="right" ><label><font size="4" color="#ff0000"><b>
                                                          *</b></font>School</label></td>
														  <td width="2%">:</td>
														  <td width="56%"><?php if(!empty($_POST)){echo $ise_settings->get_sel_schools($_POST['selschool']);}else{echo $ise_settings->get_schools();}?></td>
										              </tr>
									                  <tr>
										                  <td width="42%" height="24" align="right" ><label><font size="4" color="#ff0000"><b>
                                                          *</b></font>Group  Image</label></td>
														  <td width="2%">:</td>
														  <td width="56%"><input type="file" name="images" value="<?php if(!empty($_POST)){echo $_POST['images'];}?>" id="images" /></td>
										              </tr>
                                                      <tr>
										                  <td width="42%" height="24" align="right" ><label>Status</label></td>
														  <td width="2%">:</td>
														  <td width="56%"><select name="state" id="state" style="width:150px;">
                                        <option value="active" <?php if((!empty($_POST))&&($_POST['state']=='active')){echo "selected";}?> >Active</option>
                                        <option value="inactive" <?php if((!empty($_POST))&&($_POST['state']=='inactive')){echo "selected";}?> >Inactive</option>
                                    </select></td>
										              </tr>
									                 
									                 			  <tr>
													  	<td colspan="3" align="center" >
                                                  
											            	<input type="submit" name="button" id="button" value="Submit" class="button_light"/>
												            <input type="button" name="back" value="Back" onClick="history.go(-1)" class="button_light" id="back">            </td>
													  </tr>
													</table>
													</form>
												</td>
											</tr>
										</tbody>
									</table>
				    <?php //include '../pageNation.php';?>	
				<br class="clear"/>
				</div> 
				</div></div>
			
			<!-- End one column box --> 
			<br class="clear"/>
			
			<!-- Begin one column box -->
<!-- End one column box --> 
</div> 
</div> 
<!-- End content --> 
<br class="clear"/> 
	
	<?php include '../footer.php';?>
</body>
</html>
