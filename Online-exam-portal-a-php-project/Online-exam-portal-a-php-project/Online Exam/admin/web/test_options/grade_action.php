<?php 
	session_start();
	include_once '../../../lib/db.php';
	include_once"../../../lib/admin_check.php";
	admin_login_check('0','admin');
	include_once '../../../lib/calss_qatar_groups.php';
	$query= new Queries();
	//admin_login_check('0','RU');
	
	

	if((isset($_GET['state'])) && (!empty($_GET['id'])))
	{
		
		if($_GET['state'] == 'active')
		$sta='inactive';
		if($_GET['state'] == 'inactive'){
		$sta='active';
		}
		$tab = array("status =".$sta."");
		$where = "grade_id=".$_GET['id']."";
		
		
		$query->makeupdatequery(test_grades,$tab,$where);
		
			

		$_SESSION['msg'] = "<font size='2' color='#FF0000'>Grade ".$sta." Successfully</font>";
	
		echo "<script language='JavaScript'>
			location.href = 'manage_grade.php?pageNumber=".$_REQUEST['page']."&al=".$_REQUEST['al']."'
			</script>";
			exit;
	
	}
?>