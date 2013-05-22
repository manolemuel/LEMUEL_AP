<?php

	
	include 'dao/AirDAO.php';
    
  	$pickLocate= $_POST['pickLocate'];
    $dropLocate= $_POST['dropLocate'];
    $pickUp= $_POST['pickUp'];
    $dropOff= $_POST['dropOff'];
    $pickup_time= $_POST['pickup_time'];
    $pickup_time_min1= $_POST['pickup_time_min1'];
    $pickup_time1= $_POST['pickup_time1'];
    $dropoff_time= $_POST['dropoff_time'];
    $dropoff_timemin2= $_POST['dropoff_timemin2'];
    $dropoff_time2= $_POST['dropoff_time2'];
           
   
   
    
      
    $action = new AirDAO();
    $action -> add_Cars($pickLocate, 
    					$dropLocate, 
    					$pickUp, 
    					$dropOff,
    				    $pickup_time, 
    				    $pickup_time_min1, 
    				    $pickup_time1, 
    				    $dropoff_time, 
    				    $dropoff_timemin2, 
    				    $dropoff_time2);

 ?>
