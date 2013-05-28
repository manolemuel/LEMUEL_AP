<?php
	include 'dao/AirDAO.php';
	
	$galing_saHa=$_POST['galing_saHa'];
	$papuntangSa=$_POST['papuntangSa'];

	$action=new AirDAO;
	$action->searchFlight($galing_saHa, $papuntangSa);

?>
