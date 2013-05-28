<?php

	
	include 'dao/AirDAO.php';
    
  	 $Firstname= $_POST['Firstname'];
    $Middlename= $_POST['Middlename'];
    $Lastname= $_POST['Lastname'];
    $Age= $_POST['Age'];
    $EmailOrNumber= $_POST['EmailOrNumber'];
    $CodeID= $_POST['CodeID'];
    $Contact= $_POST['Contact'];
   $plane_choice= $_POST['plane_choice'];
    $galing_saHa= $_POST['galing_saHa'];
    $papuntangSa= $_POST['papuntangSa'];
    $depart= $_POST['depart'];
    $return= $_POST['return'];
    $travalers= $_POST['travalers'];
         
    $action = new AirDAO();
    $action -> add_Customer_flight($Firstname, $Middlename, $Lastname,$Age,$EmailOrNumber,$CodeID,$Contact,$plane_choice,
    	 $galing_saHa, $papuntangSa, $depart, $return, $travalers);

 ?>
