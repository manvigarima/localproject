<?php 
	session_start();
	include_once '../../../lib/class_ise_faqs.php';
	include_once '../../../lib/db.php';
	include_once"../../../lib/admin_check.php";
	admin_login_check('0','Others');
	$ise_faqs = new ise_faqs();
	$queries = new Queries();
	if(!empty($_POST))
	{
		$sql="SELECT faq_id from ise_faqs where faq_question='".$_POST['txttitle']."' and faq_id<> '".$_REQUEST['id']."'";
		//echo $sql;exit;
		$objSql = new SqlClass();
			$record1 = $objSql->executeSql($sql);
			$row=$objSql->fetchRow($record1);
		//echo $row['group_id'];
		//print_r($row);
		//exit;
		//echo $count;exit;
		if(empty($row['faq_id']))
		{//echo "hiiiiiiiiiiiiiiii";exit;
			//$date = now();
			$tab = array("faq_question =".addslashes($_POST['txttitle'])."", "faq_answer =".addslashes($_POST['answer'])."", "status=".$_POST['state']."");
			$where = "faq_id = ".$_GET['id']."";
			$val = $ise_faqs->ise_faqs_update($tab,$where);
			$_SESSION['msg'] = "<div class='success'>Faq Updated Successfully</div>";
			$page=$_POST['page'];
			print "<script>";
			print " self.location='index.php?pageNumber=".$_REQUEST['pageNumber']."&al=".$_REQUEST['al']."';";
			print "</script>"; 
			exit;
			
		}else
		{
			$_SESSION['msg'] = "<div class='wrong'>Question Already Existed</div>";
		}
	}
	$row = $ise_faqs->ise_faqs_selectall("faq_id",$_GET['id']);
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
<script language="javascript" src="../../../Scripts/check.js"></script>
<script language="javascript">
	function check(){
		
//alert("hii");return false;
		getForm("new_news");
		if(!IsEmpty("txttitle","Please Provide Faqs Title"))return false;
		if(!IsEmpty("answer","Please Provide Answer"))return false;
		if(!confirm('Are you sure you want to modify the Faqs?\n- to modify the Faqs, hit OK\n- otherwise, hit Cancel'))
		return false;
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
					<a href="<?php echo $admin_path;?>faqs/index.php" class="active1"> 
						Manage Faqs
					</a> 
				</li> 
				<li> 
					<a href="<?php echo $admin_path;?>faqs/faq_new.php" class="active" > 
						Add Faqs
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
												<td colspan="6"><?php echo $_SESSION['msg']; if(!empty($_SESSION['msg']))unset($_SESSION['msg']);?></td>
											</tr>
											<tr>
												<td colspan="6">
													<table width="100%" border="0" style="line-height:30px;" cellpadding="3" cellspacing="1" class="tborder">
                  									
									                  <tr>
										                  <td width="42%" height="24" align="right" ><label>
                                                        <font color="#FF0000" size="4"><b>
                                                          *</b></font>Question</label></td>
													    <td width="2%">:</td>
														  <td width="56%"><input type="text" value="<?php if(!empty($_POST)){echo $_POST['txttitle'];}else{echo $row['faq_question'];}?>" name="txttitle" id="txttitle" /></td>
										              </tr>
													  <tr>
										                  <td width="42%" height="24" align="right" ><label>
                                                        <font color="#FF0000" size="4"><b>
                                                          *</b></font>Answer</label></td>
													    <td width="2%">:</td>
														  <td width="56%"><textarea name="answer" id="answer"><?php if(!empty($_POST)){echo $_POST['answer'];}else{echo replace_p_tags($row['faq_answer']);}?></textarea></td>
										              </tr>
                                                        
									                  <tr>
									                    <td height="24" align="right" ><label>Status</label></td>
									                    <td>:</td>
									                    <td>
															<select name="state" id="state" style="width:150px;">
                        	<option value="active" <?php if($row['status']=='active'){echo "selected";}?> >Active</option>
                            <option value="inactive" <?php if($row['status']=='inactive'){echo "selected";}?> >Inactive</option>
                        </select>
														</td>
								                      </tr>
													  <tr>
													  	<td colspan="3" align="center" >
											            	<input type="submit" name="add_new" value="Edit Faq" class="button_light" id="add_new" style="cursor:pointer">
												            <input type="button" name="back" value="Back" onClick="history.go(-1)" class="button_light" id="back" style="cursor:pointer"></td>
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
