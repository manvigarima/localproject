<?php 
	session_start();
	include_once '../../../../lib/db.php';
	include_once"../../../../lib/admin_check.php";
	admin_login_check('0','admin');
	$query= new queries();
	include_once '../../../../lib/class_qatar_feedback.php';
	//admin_login_check('0','RU');
	$qatar_groups = new Feedback();

	//User delet from adminn side
		
	if(!empty($_POST['delet']))
	{
		$val = explode(',', $_POST['delet']);
		$count = count($val);
		
		for($i=1;$i<$count;$i++)
		{
				$objSql1 = new SqlClass();
			 $sql = "DELETE FROM `school_feedback` WHERE `feedback_id` ='".$val[$i]."'";
			$objSql1->executeSql($sql);
			
			
			$_SESSION['msg'] = "<font size='3' color='#0099FF'>Deleted Successfully</font>";
		}
		echo "<script language='JavaScript'>
			location.href = 'index.php?pageNumber=".$_REQUEST['page']."&al=".$_REQUEST['al']."'
			</script>";
		exit;	
		}
	
	
	//User send message to user from admin side

	if((!empty($_GET['state'])) && (!empty($_GET['id'])))
	{
		if($_GET['state'] == 'active')
		$sta = 'inactive';
		if($_GET['state'] == 'inactive')
		$sta = 'active';
		$tab = array("status =".$sta."");
		$where = "feedback_id =".$_GET['id']."";
		
		
		$val = $query->makeupdatequery('school_feedback',$tab,$where);
		
		
		//$val = $qatar_groups->qatar_groups_set_function($tab,$where);
		
		$_SESSION['msg'] = "<font size='2' color='#0099FF'> Feedback ".$sta." Successfully</font>";
		
		echo "<script language='JavaScript'>
			location.href = 'index.php?pageNumber=".$_REQUEST['page']."&al=".$_REQUEST['al']."'
			</script>";
			exit;
	}
?>