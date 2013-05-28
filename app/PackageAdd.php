<?php

	
	include 'dao/AirDAO.php';
    
  	$From= $_POST['From'];
    $To= $_POST['To'];
    $Depart= $_POST['Depart'];
     $Return= $_POST['Return'];
    $Travel= $_POST['Travel'];
   
   
    
      
    $action = new AirDAO();
    $action -> add_Pack($From, $To, $Depart, $Return, $Travel);

 ?>
