<?php

	
	include 'dao/AirDAO.php';
    
  	$HotelName= $_POST['hotel_choice'];
    $checkIn= $_POST['checkIn'];
    $checkOut= $_POST['checkOut'];
    $GuestsRooms= $_POST['GuestsRooms'];
    $GuestsRooms2= $_POST['GuestsRooms2'];
   
    
      
    $action = new AirDAO();
    $action -> add_guess($HotelName, $checkIn, $checkOut, $GuestsRooms, $GuestsRooms);

 ?>
