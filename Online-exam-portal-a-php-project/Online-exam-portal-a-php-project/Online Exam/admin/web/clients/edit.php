<?php session_start();?>
<?php 
	include_once '../../../lib/db.php';
	include_once"../../../lib/admin_check.php";
	admin_login_check('0','admin');
	super_admin_login_check('0','superadmin');
	include_once '../../../lib/calss_qatar_clients.php';
	include_once '../../../lib/calss_qatar_settigs.php';
	include_once '../../../lib/db.php';
	include_once"../../../lib/admin_check.php";
	admin_login_check('0','admin');
	$qatar_groups = new qatar_groups();
	$qatar_settings = new qatar_settings();
	$queries = new Queries();
	if(!empty($_POST))
	{
		$count = $queries->makeselectquery('groups',"count(*) as count","group_name", $_POST['txttitle']);
		if(($count == '0')||($count == '1'))
		{
			$image=$_FILES['images']['name']; $error = '0';$upload='';$extension='';
			if($image!='')
			{			
				define ("MAX_SIZE","50"); 
				 function getExtension($str) 
				 {
					 $i = strrpos($str,".");
					 if (!$i) { return ""; }
					 $l = strlen($str) - $i;
					 $ext = substr($str,$i+1,$l);
					 return $ext;
				 }
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
					$newname="../../../uploads/clients/".$upload;
					$copied = copy($_FILES['images']['tmp_name'], $newname);
				}
			} 
			if($error=='0')
			{	
				$date = date('Y-m-d');
				if($image=="")
				{
				$tab = array("ad_link =".$_POST['txttitle']."", "page_displayed=".$_POST['grp_website']."","status = ".$_POST['state']."");
				}
				else
				{
				
				$tab = array("ad_link =".$_POST['txttitle']."", "page_displayed=".$_POST['grp_website']."","ad_path = ".$upload."","status = ".$_POST['state']."");

				
				}
				$where = "ad_id=".$_GET['id']."";
				$val = $qatar_groups->qatar_clients_update($tab,$where);
				$_SESSION['msg'] = "<font size='2' color='#FF0000'>Client details updated Successfully</font>";
				$page=$_REQUEST['page'];
				$al=$_REQUEST['al'];
				print "<script>";
				print " self.location='index.php?pageNumber=".$page."&al=".$al."'";
				print "</script>"; 
			}
		}else
		{
			$_SESSION['msg'] = "<font size='3' class = 'linkl'>Client Title Already Existed</font>";
		}
	}
	$row = $qatar_groups->qatar_groups_selectall("ad_id",$_GET['id']);
	/*echo"<pre>";
	print_r($row);*/
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
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
<script language="javascript" src="../../../script/check.js"></script>
<script language="javascript">
	function check()
	{
	
		getForm("group_new");
		if(!IsEmpty("txttitle","Provide Client Url"))return false;
		if(!IsEmpty("grp_website","Please Select the page "))return false;
		//if(!IsEmpty("images","Upload Client Image"))return false;
		if(!IsEmpty("state","Please enter Status"))return false;
		
	}
	var newwindow;
	function popup(url)
	{
		newwindow=window.open(url,'News Image','height=300,width=400');
		if (window.focus) {newwindow.focus()}
	}
</script>
</head>
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
					<a href="<?php echo $admin_path;?>clients/index.php" class="active"> 
						Manage Clients
					</a> 
				</li>
				<li> 
					<a href="<?php echo $admin_path;?>clients/new.php"> 
						 Add Clients
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
											
									    <tr><td colspan="3"><?php // echo $_SESSION['msg']; if(!empty($_SESSION['msg']))unset($_SESSION['msg']);?></td></tr>
											
                                            <tr>
												<td align="center" colspan="6"><h2>Modify clients</h2></td>
										  </tr>
											<tr>
												<td colspan="6">
													<form name="group_new" id="group_new" method="post" action="#"  enctype="multipart/form-data"  onsubmit="return check()">
                        <input type="hidden" name="page" value="<?php echo $_GET['page'];?>" />
													<table width="100%" border="0" style="line-height:30px;" cellpadding="3" cellspacing="1" class="tborder">
                  									
									                  <tr>
									                    <td height="24" align="right" ><label><font size="4" color="#ff0000"><b>
                                                          *</b></font>Client Url </label></td>
									                    <td>:</td>
									                    <td>
                                                         <input type="text" value="<?php if(!empty($row['ad_link'])){echo $row['ad_link'];}?>" name="txttitle" id="txttitle" /></td>
								                      </tr>
													  <tr>
										                  <td width="42%" height="24" align="right" ><label>Page Displayed</label></td>
														  <td width="2%">:</td>
														  <td width="56%"><select name="grp_website" id="grp_website" >
                                <option value="home" <?php if(!empty($_POST)){if($_POST['grp_website']=='home')echo 'selected';} else if($row['page_displayed']=='home') echo "selected";?> />Home</option>
                                <option value="video" <?php if(!empty($_POST)){if($_POST['grp_website']=='video')echo 'selected';}else if($row['page_displayed']=='video') echo "selected";?> />Video</option></select></td>
										              </tr>
                                                      <tr>
										                  <td width="42%" height="24" align="right" ><label>Image</label></td>
														  <td width="2%">:</td>
														  <td width="56%" valign="top"><input type="file" name="images" value="<?php if(!empty($_POST)){echo $_POST['images'];}?>" id="images" />
                                                           <?  $x="../../../uploads/clients/".$row['ad_path'];?>
                   					                      <img class="image_gap" src="<? echo $x; ?>"  width="100" height="60" alt="" border="0" style="valign:absmiddle"/></td>
										              </tr>
									                  
													  <tr>
										                  <td width="42%" height="24" align="right" ><label>Status</label></td>
														  <td width="2%">:</td>
														  <td width="56%"><select name="state" id="state" style="width:150px;">
                                        <option value="1" <?php if((!empty($row['status']))&&($row['status']=='1')){echo "selected";}?> >Active</option>
                                        <option value="0" <?php if((!empty($_POST))&&($row['status']=='0')){echo "selected";}?> >Inactive</option>
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
