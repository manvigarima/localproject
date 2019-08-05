<?php 
	session_start();
	include_once '../../../lib/calss_qatar_career.php';
	include_once '../../../lib/db.php';
	include_once"../../../lib/admin_check.php";
	admin_login_check('0','Others');
	$qatar_career = new qatar_career();
	$queries = new Queries();
	$objSql = new SqlClass();
	$objSql123 = new SqlClass();
	if(!empty($_POST))
	{
		$count = $queries->makeselectquery('career',"count(*) as count","career_name", $_POST['txttitle']);
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
				if (($extension != "pdf")) 
				{
					$_SESSION['msg'] = "<font size='2' color='#0099FF'>Upload Unknown File extension! Please Upload Onely pdf File</font>";
					$error='1';
				}else
				{
					$upload=time().".".$extension;
					$newname="../../../uploads/careers/".$upload;
					$copied = copy($_FILES['images']['tmp_name'], $newname);
				}
			} 
			if($error=='0')
			{	
				$date = date('Y-m-d');
				$val = $objSql->executeSql($sql);
				if($image != '')
				{
				$sql = "UPDATE career SET career_name = '".$_POST['txttitle']."', career_desc = '".addslashes($_POST['desc'])."', pdf = '".$upload."', status = '".$_POST['state']."' WHERE career_id = ".$_GET['id'];
				}
				else
				{
				$sql = "UPDATE career SET career_name = '".$_POST['txttitle']."', career_desc = '".addslashes($_POST['desc'])."', status = '".$_POST['state']."' WHERE career_id = ".$_GET['id'];
				}
				
				$val = $objSql123->executeSql($sql);
				$_SESSION['msg'] = "<font size='2' color='#0099FF'>Career Updated Successfully</font>";
				$page=$_REQUEST['page'];
				print "<script>";
				print " self.location='index.php?pageNumber=".$_REQUEST['pageNumber']."&al=".$_REQUEST['al']."';";
				print "</script>";
				exit; 
			}
		}else
		{
			$_SESSION['msg'] = "<font size='3' class = 'linkl'>careers Title Already Existed</font>";
		}
	}
	$row = $qatar_career->qatar_career_selectall("career_id",$_GET['id']);
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
<link href="../../../images/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../../../script/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" language="javascript">
tinyMCE.init({
	mode : "textareas",
	theme : "advanced",
	elements : "elm1",
    theme_advanced_toolbar_location : "top",
	theme_advanced_buttons1 : "bold,italic,underline,separator,strikethrough,justifyleft,justifycenter,justifyright,justifyfull,forecolorpicker,backcolorpicker,bullist,numlist,link,unlink,blockquote,code",
	theme_advanced_buttons2 : "fontselect,fontsizeselect,formatselect,removeformat,forecolor,cleanup,backcolor",
	theme_advanced_buttons3 : "",
});
</script>
<script language="javascript">
	var newwindow;
	function popup(url)
	{
		newwindow=window.open(url,'News Image','height=500,width=700');
		if (window.focus) {newwindow.focus()}
	}
 function redirect() {
 		alert();
		window.location="index.php";
    }
</script>
<script language="javascript" src="../../../script/check.js"></script>
<script language="javascript">
	function check(){
		if(!confirm('Are you sure you want to modify the Careers?\n- to modify the Careers, hit OK\n- otherwise, hit Cancel'))
		return false;

		getForm("new_news");
		if(!IsEmpty("txtnews_title","Please Provide News Title"))return false;
		//if(!IsEmpty("desc","Please Provide News Description"))return false;
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
					<a href="<?php echo $admin_path;?>careers/index.php"  class="active"> 
						Manage Careers
					</a> 
				</li> 
				<li> 
					<a href="<?php echo $admin_path;?>careers/career_new.php"> 
						Add Careers
					</a> 
				</li> 
			</ul>	
			<!-- End 1st level tab --> 
			
			<br class="clear"/> <div style="text-align:right"><?php breadcrum();?>&nbsp;&nbsp;</div>
			
			<!-- Begin one column box --> 
			<div style="border:1px solid #ccc;"  > 
				
			
			
				
				<div class="content nomargin"  > 
		<form action="#" method="post" name="new_news" onsubmit="return check()" enctype="multipart/form-data">
        <input type="hidden" name="pageNumber" id="pageNumber" value="<?php echo $_REQUEST['pageNumber'];?>" />
        <input type="hidden" name="al" id="al" value="<?php echo $_REQUEST['al'];?>" />
									<table width="100%" align="left" border="0" cellpadding="0" cellspacing="0" class="global">
										<tbody>
											
									
                                            <tr>
												<td align="center" colspan="6"><h2>Modify Careers</h2></td>
										  </tr>
											<tr>
												<td colspan="6"><?php echo $_SESSION['msg']; if(!empty($_SESSION['msg']))unset($_SESSION['msg']);?></td>
											</tr>
											<tr>
												<td colspan="6">
													<table width="100%" border="0" style="line-height:30px;" cellpadding="3" cellspacing="1" class="tborder">
                  									
									                  <tr>
										                  <td width="42%" height="24" align="right" >Career Title</td>
													    <td width="2%">:</td>
														  <td width="56%">
                                                          <input type="text" value="<?php if(!empty($_POST)){echo $_POST['txttitle'];}else{echo $row['career_name'];}?>" name="txttitle" id="txttitle" /></td>
										              </tr>
													  <tr>
										                  <td width="42%" height="24" align="right" >Description</td>
														  <td width="2%">:</td>
														  <td width="56%"><textarea name="desc" id="desc"><?php if(!empty($_POST)){echo $_POST['desc'];}else{echo $row['career_desc'];}?></textarea></td>
										              </tr>
                                                        <tr>
										                  <td width="42%" height="24" align="right" >Upload Image</td>
														  <td width="2%">:</td>
														  <td width="56%">
                                                          <input type="file" name="images" value="<?php if(!empty($_POST)){echo $_POST['images'];}?>" id="images" />
                                                           <a href="" onclick="popup('../../../uploads/careers/<?=$row['pdf'];?>')"><? echo $row['pdf'];?></a></td>
										              </tr>
									                  <tr>
									                    <td height="24" align="right" >Status</td>
									                    <td>:</td>
									                    <td>
                                                        
															<select name="state" id="state" style="width:150px;">
                                                                <option value="active" <?php if((!empty($_POST))&&($_POST['state']=='active')){echo "selected";}?> >Active</option>
                                                                <option value="inactive" <?php if((!empty($_POST))&&($_POST['state']=='inactive')){echo "selected";}?> >Inactive</option>
                                                            </select>
														</td>
								                      </tr>
													  <tr>
													  	<td colspan="3" align="center" bgcolor="#D8D8F3">
											            	<input type="submit" name="add_new" value="Edit Career" class="button" id="add_new">
												            <input type="button" name="back" value="Back" onClick="history.go(-1)" class="button" id="back"></td>
													  </tr>
													</table>
											  </td>
											</tr>
										</tbody>
									</table>
									</form>
									
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
