<?php

	
	include 'dao/AirDAO.php';
    
  	$plane_choice= $_POST['plane_choice'];
   
         
    $action = new AirDAO();
    $action -> check_flight($plane_choice);

 ?>
