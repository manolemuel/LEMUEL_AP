<?php
	include 'dao/AirDAO.php';
	
	$galing_sa=$_POST['galing_sa'];

	$action=new AirDAO;
	$action->search_flight($galing_sa);

?>
