<?php
	include 'BaseDAO.php';
	class AirDAO extends BaseDAO{
	
		function add_guess($HotelName, $checkIn, $checkOut, $GuestsRooms, $GuestsRooms2){
		
				$this->openCon();
					 $stmt = $this->con->prepare("INSERT INTO Hotels(HotelName, checkIn, checkOut, R_F_A, R_F_C) values (?,?,?,?,?)");
						      $stmt->bindParam(1, $HotelName);
						      $stmt->bindParam(2, $checkIn);
						      $stmt->bindParam(3, $checkOut);
						      $stmt->bindParam(4, $GuestsRooms);
						      $stmt->bindParam(5, $GuestsRooms2);

						      $stmt->execute();
						      $hotel_ID = $this->con->lastInsertId();
						    
				$this->closeCon();
		}
		function add_Pack($From, $To, $Depart, $Return, $Travel){
		
				$this->openCon();
					 $stmt = $this->con->prepare("INSERT INTO Packages(Pfrom, Pto, Pdepart, Preturn, Ptravel) values (?,?,?,?,?)");
						      $stmt->bindParam(1, $From);
						      $stmt->bindParam(2, $To);
						      $stmt->bindParam(3, $Depart);
						      $stmt->bindParam(4, $Return);
						      $stmt->bindParam(5, $Travel);

						      $stmt->execute();
						      $package_ID = $this->con->lastInsertId();
						    
				$this->closeCon();
		}
		function add_Cruises($Destination, $LOcruise, $Ddate, $Ydate){
		
				$this->openCon();
					 $stmt = $this->con->prepare("INSERT INTO Cruises(Destination, LOcruises, Ddate, Ydate) values (?,?,?,?)");
						      $stmt->bindParam(1, $Destination);
						      $stmt->bindParam(2, $LOcruise);
						      $stmt->bindParam(3, $Ddate);
						      $stmt->bindParam(4, $Ydate);
						    

						      $stmt->execute();
						      $cruises_ID = $this->con->lastInsertId();
						    
				$this->closeCon();
		}
		
		function add_Cars($pickLocate, $dropLocate, $pickUp, $dropOff, $pickup_time, $pickup_time_min1, $pickup_time1, $dropoff_time, $dropoff_timemin2, $dropoff_time2){
		
				$this->openCon();
					 $stmt = $this->con->prepare("INSERT INTO Cars(Pick_up_l, Drop_off_l, Cpick_up, Cdrop_off, Phours, Pmin, Pam_pm, Dhours, Dmin, Dam_pm) values (?,?,?,?,?,?,?,?,?,?)");
						      $stmt->bindParam(1, $pickLocate);
						      $stmt->bindParam(2, $dropLocate);
						      $stmt->bindParam(3, $pickUp);
						      $stmt->bindParam(4, $dropOff);
						      $stmt->bindParam(5, $pickup_time);
						      $stmt->bindParam(6, $pickup_time_min1);
						      $stmt->bindParam(7, $pickup_time1);
						      $stmt->bindParam(8, $dropoff_time);
						      $stmt->bindParam(9, $dropoff_timemin2);
						      $stmt->bindParam(10, $dropoff_time2);
						    

						      $stmt->execute();
						      $cars_ID = $this->con->lastInsertId();
						    
				$this->closeCon();
		}
		/*	function add_flight($plane_choice, $galing_saHa, $papuntangSa, $choice, $depart, $return, $travalers){
		
				$this->openCon();
					 $stmt = $this->con->prepare("INSERT INTO paBook(plane_choice, Bfrom, Bto , choice_way, Bdepart, Breturn, Btravel) values (?,?,?,?,?,?,?)");
						      $stmt->bindParam(1, $plane_choice);
						      $stmt->bindParam(2, $galing_saHa);
						      $stmt->bindParam(3, $papuntangSa);
						       $stmt->bindParam(4, $choice);
						        $stmt->bindParam(5, $depart);
						         $stmt->bindParam(6, $return);
						          $stmt->bindParam(7, $travalers); 
						   	 
						   	  $stmt->execute();
						      $paBook_id = $this->dbh->lastInsertId();
						    
				$this->closeCon();
		}
		
		function add_Customer($Firstname, $Middlename, $Lastname, $Age, $EmailOrNumber, $CodeID, $Contact){
		
				$this->openCon();
					 $stmt = $this->con->prepare("INSERT INTO Customer(fname, mname, lname, age, E_O_N , code, C_number) values (?,?,?,?,?,?,?)");
						      $stmt->bindParam(1, $Firstname);
						      $stmt->bindParam(2, $Middlename);
						      $stmt->bindParam(3, $Lastname);
						      $stmt->bindParam(4, $Age);
						      $stmt->bindParam(5, $EmailOrNumber);
						      $stmt->bindParam(6, $CodeID);
						      $stmt->bindParam(7, $Contact); 
						   	 
						   	  $stmt->execute();
						      $Cust_id = $this->con->lastInsertId();
						      
					
						    
				$this->closeCon();
		}*/
		function add_Customer_flight($Firstname, $Middlename, $Lastname, $Age, $EmailOrNumber, $CodeID, $Contact, 
										$plane_choice, $galing_saHa, $papuntangSa,  $depart, $return, $travalers){
		
				$this->openCon();
				//echo $plane_choice;
				
				
				$plane_check2 = $this->con->prepare("SELECT COUNT(*) FROM Passengers_Plane where Plane = ?");
				$plane_check2 ->bindParam(1, $plane_choice);
				$plane_check2->execute();
				$pass_pop= $plane_check2->fetch();
				
				//echo $pass_pop[0];
				$max_pass = 15;
				if($pass_pop[0] >=$max_pass){
					echo "NO VACANCY";
				}else{
				 $stmt = $this->con->prepare("INSERT INTO Customer(fname, mname, lname, age, E_O_N , code, C_number) values (?,?,?,?,?,?,?)");
						      $stmt->bindParam(1, $Firstname);
						      $stmt->bindParam(2, $Middlename);
						      $stmt->bindParam(3, $Lastname);
						      $stmt->bindParam(4, $Age);
						      $stmt->bindParam(5, $EmailOrNumber);
						      $stmt->bindParam(6, $CodeID);
						      $stmt->bindParam(7, $Contact); 
						   	 
						   	  $stmt->execute();
						      $Cust_id = $this->con->lastInsertId();
					
					$stmt2 = $this->con->prepare("INSERT INTO paBook(plane_choice, Bfrom, Bto , choice_way, Bdepart, Breturn, Btravel) values (?,?,?,?,?,?,?)");
						      $stmt2->bindParam(1, $plane_choice);
						      $stmt2->bindParam(2, $galing_saHa);
						      $stmt2->bindParam(3, $papuntangSa);
						       $stmt2->bindParam(4, $choice);
						        $stmt2->bindParam(5, $depart);
						         $stmt2->bindParam(6, $return);
						          $stmt2->bindParam(7, $travalers); 
						   	 
						   	  $stmt2->execute();
						      $paBook_id = $this->con->lastInsertId();
						      
					$stmt3 = $this->con->prepare("INSERT INTO Passengers_Plane (customer_id, Plane) VALUES (?,?)");
					$stmt3 ->bindParam(1, $Cust_id);
					$stmt3->bindParam(2, $plane_choice);
					$stmt3->execute();
					
					echo "Successfully Booked!!";
				}
				
				$this->closeCon();
		}
		
			function add_custHotel($Firstname, $Middlename, $Lastname, $Age, $EmailOrNumber, $CodeID, $Contact){
		
				$this->openCon();
					 $stmt = $this->con->prepare("INSERT INTO CustHotel(fnameH, mnameH, lnameH, ageH, E_O_N_H, codeH, C_numberH) values (?,?,?,?,?,?,?)");
						      $stmt->bindParam(1, $Firstname);
						      $stmt->bindParam(2, $Middlename);
						      $stmt->bindParam(3, $Lastname);
						      $stmt->bindParam(4, $Age);
						      $stmt->bindParam(5, $EmailOrNumber);
						      $stmt->bindParam(6, $CodeID);
						      $stmt->bindParam(7, $Contact); 
						   	 
						   	  $stmt->execute();
						      $Cust_id = $this->con->lastInsertId();
						    
				$this->closeCon();
		}
		
		function view_plane(){
			$this->openCon();
			$stmt=$this->con->prepare("select plane_name,galing_sa,papuntang,price from planes as a,places as b, planes_to_places as c where a.plane_id=c.plane_id and b.place_id=c.place_id;");		
			$stmt->execute();
			$this->closeCon();
			
			while($content=$stmt->fetch()){
				echo"<tr>";
					echo"<td>".$content[0]."</td>";
					echo"<td>".$content[1]."</td>";
					echo"<td>".$content[2]."</td>";
					echo"<td>".$content[3]."</td>";
				echo"</tr>";
			}			
		}
		
		/*function search_flight($galing_sa){
			$this->openConn();
			$stmt = $this->dbh->prepare("SELECT plane_name,galing_sa,papuntang,price 
										FROM planes as a,places as b, planes_to_places as c 
										WHERE a.plane_id=c.plane_id and b.place_id=c.place_id 
										AND galing_sa  like '".$galing_sa."%'");
			$stmt->execute();
			$found = false;
							
			while ($content =$stmt->fetch()){
				echo"<tr>";
						echo"<td>".$content[0]."</td>";
						echo"<td>".$content[1]."</td>";
						echo"<td>".$content[2]."</td>";
						echo"<td>".$content[3]."</td>";
						echo"<td><button id='select' onclick='select'>SELECT</button></td>";
				echo"</tr>";
				$found=true;
			}
			if(!$found){
				echo "<tr><td colspan='3'>NOt FOUND!!</td></tr>";
			}	
	   }*/
	   
	  function searchKo($galing_saHa,$papuntangSa){
	  	$this->openCon();
	  	$stmt=$this->con->prepare("SELECT galing_sa , papuntang, price from places where galing_sa=? and papuntang=? ");
	  	$stmt->bindParam(1,$galing_saHa);
	  	$stmt->bindParam(2,$papuntangSa);
	  	$stmt->execute();
	  	
	  	$found=false;
							
			while ($content =$stmt->fetch()){
				echo"<tr>";
						echo"<td>".$content[0]."</td>";
						echo"<td>".$content[1]."</td>";
						echo"<td>".$content[2]."</td>";
						//echo"<td><button onlick='showSearch(".$content[0].")' class='button Search'>Search</button></td>";
				echo"</tr>";
				$found=true;
			}
			if(!$found){
				echo "<tr><td colspan='3'>NOt FOUND!!</td></tr>";
			}	
			
			/*$found=false;			
			while($rows = $stmt->fetch()){
			   if($rows[0]==$admin_username && $rows[1]==$admin_password){
			      $found= true;
			   }
			}
			$this->closeConn();
			return $found;*/
		$this->closeCon();
	  }
	  	function searchFlight($galing_saHa,$papuntangSa){
			$this->openCon();
				
			$stmt= $this->con->prepare("SELECT galing_sa , papuntang, price from places where galing_sa=? and papuntang=? ");
			$stmt->bindParam(1,$galing_saHa);
	  		$stmt->bindParam(2,$papuntangSa);
			$stmt->execute();
			$found = false;
			while($content =$stmt->fetch()){
				
					echo "<tr>";
					echo "<td>".$content[5]."</td>";
					echo"<td>".$content[0]."</td>";	
					echo "<td>".$content[1]."</td>";
					echo "<td>".$content[2]."</td>";
					echo "<td>".$content[3]."</td>";
					echo "<td>".$content[4]."</td>";
					
					
					 	
					echo "</tr>";	
					$found = true;
			}
			if(!$found){
				echo "<tr>";
				echo "<td colspan='7'>NO DATA FOUND</td>";
				echo "</tr>";	
			}					
			 $this->closeCon();
		}
	  	
	  	function check_flight($plane_choice){
	  	$this->openCon();
	  		$stmt= $this->con->prepare("SELECT COUNT(*) FROM Passengers_Plane WHERE Plane =?");
	  		$stmt->bindParam(1, $plane_choice);
	  		$stmt->execute();
			$pass_pop= $stmt->fetch();
				
				//echo $pass_pop[0];
				$max_pass = 3;
				if($pass_pop[0] >=$max_pass){
					echo "NO VACANCY";
				}
				else{
					echo "<tr><td><button onclick = 'opendialog()'>Continue</button><td></tr>";
				}

	  	$this->closeCon();
	  	}
	  	
	  

		
	}
?>
		
