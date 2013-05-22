<?php

	
	include 'dao/AirDAO.php';
    
  	$Destination= $_POST['Destination'];
    $LOcruise= $_POST['LOcruise'];
    $Ddate= $_POST['Ddate'];
     $Ydate= $_POST['Ydate'];
   
   
    
      
    $action = new AirDAO();
    $action -> add_Cruises($Destination, $LOcruise, $Ddate, $Ydate);

 ?>
