<?php

	
	include 'dao/AirDAO.php';
    
  	 $Firstname= $_POST['Firstname'];
    $Middlename= $_POST['Middlename'];
    $Lastname= $_POST['Lastname'];
    $Age= $_POST['Age'];
    $EmailOrNumber= $_POST['EmailOrNumber'];
    $CodeID= $_POST['CodeID'];
    $Contact= $_POST['Contact'];
   
         
    $action = new AirDAO();
    $action -> add_Customer($Firstname, $Middlename, $Lastname,$Age,$EmailOrNumber,$CodeID,$Contact);

 ?>
