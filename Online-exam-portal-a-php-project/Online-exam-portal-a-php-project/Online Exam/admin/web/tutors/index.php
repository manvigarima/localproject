<?php 
	session_start();
	include_once '../../../lib/db.php';
	include_once"../../../lib/admin_check.php";
		include_once '../../../lib/functions_admin.php';
		include_once '../../../lib/functions.php';

	admin_login_check('0','admin');
	include_once '../../../lib/calss_qatar_users.php';
	$objSql = new SqlClass();
	$objSql = new SqlClass();
	$user = new Tutors();
	
	
$al=".";
	if(!empty($_REQUEST['al']))
	{
		$al = $_REQUEST['al'];
	}
	$totalEntries=$user->totalNoOfTutors($al);
	$maxPages=ceil($totalEntries/perPage());
	$page=1;
	if(!empty($_REQUEST['pageNumber'])){
		$page=$_REQUEST['pageNumber'];
	}
	$order=0;
	if(!empty($_REQUEST['order'])){
		$order=$_REQUEST['order'];
	}
	$rec = $user->display_tutors($page,$al,$order);	
/*	echo"<pre>";
	print_r($rec);
*/	
	
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
 
</head> 
<body>

<link href="../images/style.css" rel="stylesheet" type="text/css">
<script language="javascript">
	function showPage(pageNumber)
	{
		document.getElementById("pageNumber").value=pageNumber;
		document.getElementById("pageSelectionForm").submit();
		return true;
	}
	function CheckAll(chk)
	{
	   //alert("hi");
	   var num=document.users.elements.length;
	   for(i=0;i<num;i++)
	   {
			tmp=document.users.elements[i];
			//alert(document.packages.elements[i].name);
			if(tmp.type=="checkbox" && !(tmp.name=="allChk"))
			{
				tmp.checked=chk.checked;
			}
		}
	}
	function addUser()
	{
	if(!confirm('Are you sure you want to add the professor?\n- to Add the professor, hit OK\n- otherwise, hit Cancel'))
	return false;
	javascript:location.href=('tutor_new_bulk.php');
	}
	function send_select()
	{
		//alert("hi send");
		dml1=document.users;
		len1 = dml1.elements.length;
		var j=0;
		var value12='send';
		select_status=0;
		for( j=0 ; j<len1 ; j++)
		 {
			if (dml1.elements[j].name=='Mid[]')
			 {
				if((dml1.elements[j].checked))
				{
					select_status=1;
					value12=value12+","+dml1.elements[j].id;
				}
			}
		}
		if(select_status==0)
		{
			alert("Select atleast one record");
			return false;
		}
		//alert("alert");
		document.users.send.value=value12;
		document.users.submit();
		return true;
	}
	/*function export1()
	{
	 self.location('export_users.php');
	}*/
	function doselect1()
	{
		dml1=document.users;
		len1 = dml1.elements.length;
		var j=0;
		var val12='delet';
		select_status=0;
		for( j=0 ; j<len1 ; j++)
		 {
			if (dml1.elements[j].name=='Mid[]')
			 {
					if((dml1.elements[j].checked))
					{
					select_status=1;
					val12=val12+","+dml1.elements[j].id;
					}
			}
		}
		if(select_status==0)
		{
			alert("Select atleast one record");
			return false;
		}
		if(!confirm('Are you sure you want to delete the records?\n- to Delete the records, hit OK\n- otherwise, hit Cancel'))
			return false;
			
		document.users.delet.value=val12;
		document.users.submit();
		return true;
	}
			function hidediv(){
		document.getElementById('span_div').style.display='none';
		return true;
	}
	function export1()
	{
	//alert("asaedsd");
		dml1=document.users;
		len1 = dml1.elements.length;
		var j=0;
		var val12='';
		select_status=0;
		for( j=0 ; j<len1 ; j++)
		 {
			if (dml1.elements[j].name=='Mid[]')
			 {
					if((dml1.elements[j].checked))
					{
						if(select_status!=0)
							val12=val12+",";
						select_status=1;
						val12=val12+dml1.elements[j].id;
					}
			}
		}
		//alert(val12);
		if(select_status==0)
		{
			//alert("Select atleast one record");
			//return false;
			 if(!confirm('You are not selected any record, you want to export the all records?\n- to Export All Records, hit OK\n- otherwise, hit Cancel'))
				return false;

		}
		else
		{
		    if(!confirm('Are you sure you want to Export the Selected Records?\n- to Export the Records, hit OK\n- otherwise, hit Cancel'))
			 return false;
		}
		
		location.href='export_tutors.php?exprt='+val12;
		return true;
		// document.getElementById('info_msg').innerHTML='Download Completed Successfully';
	}
</script>
</head>
<body>
	<form name="pageSelectionForm" id="pageSelectionForm" method="post" action="index.php">
		<input type="hidden" id="pageNumber" name="pageNumber"/>
        <input type="hidden" id="al" name="al" value="<?php echo $al;?>"/>
		<input type="hidden" id="order" name="order" value="<?php echo $order;?>"/>
	</form>
	<?php include"../header_one.php";?>
    <?php  include '../left.php'; ?>
    
		<br class="clear"/> 
		
		<!-- Begin content --> 
		<div id="content_wrapper" style="margin-right:30px;"> 
		
			<!-- Begin one column box --> 
		
			
			<!-- Begin 1st level tab --> 
			<ul class="first_level_tab"> 
				<li> 
					<a href="<?php echo $admin_path;?>tutors/index.php" class="active"> 
						Manage Tutors
					</a> 
				</li> 
				<!--<li> 
					<a href=""> 
						Graph
					</a> 
				</li> 
				<li> 
					<a href=""> 
						Form Elements
					</a> 
				</li> -->
			</ul>	
			<!-- End 1st level tab --> 
			
			<br class="clear"/>  <div style="text-align:right"><?php breadcrum();?>&nbsp;&nbsp;</div>
			
			<!-- Begin one column box --> 
			<div style="border:1px solid #ccc;"  > 
				
			
			
				
				<div class="content nomargin"  > 
					
					<!-- Begin example table data --> 
                    <form name="users" method="post" action="action.php?al=<? echo $_REQUEST['al'];?>&page=<? echo $page; ?>">
					<table class="global" width="100%"  cellpadding="0" cellspacing="0"> 
						<thead>
                 
						 <tr><td width="100%" colspan="5"><?php echo $_SESSION['msg']; if(!empty($_SESSION['msg']))unset($_SESSION['msg']);?></td></tr>
											<tr>
												<td colspan="4" align="right">
                                                   <?php
													if(isset($_REQUEST['filename']))
													{
												?>
                                                	 <span style="padding-left:20px; color:#0000FF; font-weight:bold; padding-bottom:10px;" id="span_div">Your Export Completed Successfully, click here <a href="../exports/<?php echo $_REQUEST['filename']; ?>"><img src="../../images/download.gif" alt="" width="30" height="24" border="0" align="absmiddle" onclick="return hidediv();"/></a> to Download</span>
                                                <?php
													}
												?>
                                                <input type="submit" name="sub3" value="Add Tutor(s)" class="button_light" onclick="addUser(); return false;" />
                                                <input type="submit" name="sub3" value="Delete Tutor(s)" class="button_light" onclick="doselect1(); return false;" />
                                                  <input type="button" name="sub" value="Export" class="button_light"  onclick="export1(); return false;" />
                                                   
                                                 </td><!--<td  align="right"><?php breadcrum();?></td>-->
                                                    
											</tr>
                                           
											<tr>
												<td colspan="5">
													<table width="100%" border="0" cellpadding="0" cellspacing="0" class="tborder">
												
                  									  <tr class="row_1">
										                    <th width="10%" align="left" >
                                                            <input type="checkbox" name="allChk" value="ON" onclick="CheckAll(this);"  class="input2" /></th>
										                    <th width="30%" align="left" ><a href="index.php?al=<?php echo $al;?>&order=<?php if($order==0){?>1<?php }else{?>0<?php }?>" class="tablehead"><span class="vote">First  Name</span></a>&nbsp;</th>
                                                            
                                                            <th width="30%" align="left" >Username</th>
									                    <th width="30%" align="left" ><a href="index.php?al=<?php echo $al;?>&order=<?php if($order==2){?>3<?php }else{?>2<?php }?>" class="tablehead"> Email</a>&nbsp;<?php if($order=='2') {?><img src="../images/up1.GIF" width="13" height="13" /><?php }else if($order == '3'){?><img src="../images/down1.GIF" width="13" height="13" /><?php }?></th>	
									                    <th width="20%" align="left" ><a href="index.php?al=<?php echo $al;?>&order=<?php if($order==4){?>5<?php }else{?>4<?php }?>" class="tablehead"><strong>Create Date </strong></a>&nbsp;<?php if($order == '4') {?><img src="../images/up1.GIF" width="13" height="13" /><?php }else if($order == '5'){?><img src="../images/down1.GIF" width="13" height="13" /><?php }?></th> 
									                    <th width="10%" align="left" ><a href="index.php?al=<?php echo $al;?>&order=<?php if($order==6){?>7<?php }else{?>6<?php }?>" class="tablehead">Status</a>&nbsp;<?php if($order == '6') {?><img src="../images/up1.GIF" width="13" height="13" /><?php }else if($order == '7'){?><img src="../images/down1.GIF" width="13" height="13" /><?php }?></th>
										              </tr>
													  <?php 
														if($rec !='1')
														{
													  ?>
									                  <?php 
															$val=0;
															$objSql1 = new SqlClass();
															while($row = $objSql1->fetchRow($rec))
															{
																$user=new qatar_users();
																$arr=$user->get_email_one($row['emp_id']);
																															
																if($val == '0')
																{
																	$val = 1;
													  ?>
													  <tr class="row_white">
										                  <td height="24" align="left" ><input  type="checkbox" name="Mid[]" id="<?php echo $row['emp_id'];?>" value="642" class="input2" /></td>
														  <td align="left"><a href="user_modify.php?id=<?php echo $row['emp_id'];?>&<?php if(!empty($_REQUEST['al'])){echo "al=".$_REQUEST['al']."&";}if(!empty($_REQUEST['or'])){echo "or=".$_REQUEST['or']."&";}?>id_1=<?=$row['emp_id']?>&state=<?php echo $row['status'];?>&page=<?php echo $page; ?>">
														  <?php echo ucfirst($row['firstname'])." ".ucfirst($row['lastname']);?></a></td>
                                                          <td align="left"><?php echo $row['username'];?></td>
										                  <td align="left"><?php echo $arr[0]['Email'];?></td>
										                  <td align="left"><?php echo  $row['doj'];?></td>
										                  <td align="left">
                                                         
                                                          <a href="action.php?<?php if(!empty($_REQUEST['al'])){echo "al=".$_REQUEST['al']."&";}if(!empty($_REQUEST['or'])){echo "or=".$_REQUEST['or']."&";}?>id_1=<?=$row['emp_id']?>&id=<?=$_GET['id']?>&state=<?php echo $row['status'];?>&page=<?php echo $page; ?>&order=<?php echo $order;?>">
														  <?php 
														  if($row['status']==1)
														  echo"Active";
														  else
														  echo"Inactive";
														  ?></a>
                                                          <a href="user_action.php?<?php if(!empty($_REQUEST['al'])){echo "al=".$_REQUEST['al']."&";}if(!empty($_REQUEST['or'])){echo "or=".$_REQUEST['or']."&";}?>id=<?php echo $row['id']?>&state=<?php echo $row['status'];?>&page=<?php echo $page; ?>&order=<?php echo $order;?>"></a></td> 
									                  </tr>
													  <?php }
													  		else if($val == '1')
															{
																$val = 0;
													  ?>
													  <tr class="row_color">
										                  <td height="24" align="left" ><input  type="checkbox" name="Mid[]" id="<?php echo $row['emp_id'];?>" value="642" class="input2" /></td>
														  <td align="left"><a href="user_modify.php?id=<?php echo $row['emp_id'];?>&<?php if(!empty($_REQUEST['al'])){echo "al=".$_REQUEST['al']."&";}if(!empty($_REQUEST['or'])){echo "or=".$_REQUEST['or']."&";}?>id_1=<?=$row['emp_id']?>&state=<?php echo $row['status'];?>&page=<?php echo $page; ?>">
														  <?php echo ucfirst($row['firstname'])." ".ucfirst($row['lastname']);?></a></td>
                                                          <td align="left"><?php echo $row['username'];?></td>
										                  <td align="left"><?php echo $arr[0]['Email'];?></td>
										                  <td align="left"><?php echo  $row['doj'];?></td>
										                  <td align="left">
                                     <a href="action.php?<?php if(!empty($_REQUEST['al'])){echo "al=".$_REQUEST['al']."&";}if(!empty($_REQUEST['or'])){echo "or=".$_REQUEST['or']."&";}?>id_1=<?=$row['emp_id']?>&id=<?=$_GET['id']?>&state=<?php echo $row['status'];?>&page=<?php echo $page; ?>&order=<?php echo $order;?>"><?php 
														  if($row['status']==1)
														  echo"Active";
														  else
														  echo"Inactive";
														  ?></a></td> 
									                  </tr>
													 <?php } 
													 }
													 ?>
													 <?php
													}else{?>
													 <tr class="row_white"><td align="center" colspan="7" style="color:#FF0000;">No records Found.</td></tr>
													 <?php } ?>
													</table>
											  </td>
											</tr>
                                            	<tr>
														<td colspan="5"  class="row_white" align="right">
															<?php include_once"../paging.php";
															display_pag("index.php");
															?>                                                      </td>
														</tr>
                                                     
                                                        
						</tbody> 
					</table> <input type="hidden" name="send" /><input type="hidden" name="delet"><input type="hidden" name="send_status" />
									</form>
				    <?php include '../pageNation.php';?>	
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