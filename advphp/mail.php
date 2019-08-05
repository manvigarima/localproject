<?php

$to="ojhamanvi@gmail.com";
$subject="This is test mail";
$msg="Hey you are succefully completed this task";
$header="from:Gyan Hunt<garimalkce1@gmail.com>";
if(mail($to,$subject,$msg,$header))
{
	echo "mail succefully send";
}

else
{
	echo "message not send";
}

 ?>