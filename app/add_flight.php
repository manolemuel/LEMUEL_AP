<?php

	
	include 'dao/AirDAO.php';
    
  	$plane_choice= $_POST['plane_choice'];
    $galing_saHa= $_POST['galing_saHa'];
    $papuntangSa= $_POST['papuntangSa'];
    $choice= $_POST['choice'];
    $depart= $_POST['depart'];
    $return= $_POST['return'];
    $travalers= $_POST['travalers'];
   
         
    $action = new AirDAO();
    $action -> add_flight($plane_choice, $galing_saHa, $papuntangSa, $choice, $depart, $return, $travalers);

 ?>
