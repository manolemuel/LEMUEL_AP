<?php

	include 'dao/AirDAO.php';
	
	$galing_saHa=$_POST['galing_saHa'];
	$papuntangSa=$_POST['papuntangSa'];
	
	$action=new AirDAO();
	$action->searchKo($galing_saHa,$papuntangSa);
?>
