<html>

	<head>
		<title>ICT-AIRLINES</title> 
		 <link rel='stylesheet' href='css/jquery-ui-1.10.2.custom.min.css' style='text/css' />
		  <link rel='stylesheet' href='css/jquery-ui-1.10.2.custom.css' style='text/css' />
		   <link rel='stylesheet' href='css/bootstrapCSS/bootstrap.min.css' style='text/css' />	
		  <link rel='stylesheet' href='css/bootstrapCSS/bootstrap.css' style='text/css' />	 
		  <link rel='stylesheet' href='css/Homepage.css' style='text/css' />
		 <link rel='stylesheet' href='css/Car.css' style='text/css' />
		 
		 <script src="./js/jquery-1.9.1.js"></script>
		 <script src="./js/bootstrapJS/bootstrap.js"></script>
		 <script src="./js/bootstrapJS/bootstrap.min.js"></script>
		 <script src="./js/jquery-ui-1.10.2.custom.js"></script>	
		 <script src="./js/jquery-ui-1.10.2.custom.min.js"></script>		
		 <script src="./js/MyScript.js"></script>		 

		 <link rel="shortcut icon" href="image/airplane-icon.png"> 
	</head>
 
 <body>
 
 	<div class="topB">
 	<div class="imgKo"></div>
 	<div class="paragh">ICO</div><div class="parag">-P Airlines</div>
 	</div>
 <div id="divNAV">
 
 
 	<ul id="nav">
	<li><a href="Homepage.php">Home</a></li>
	<li><a href="">My Projects</a>
		<ul>
			<li><a href="">Flower Shop</a>-</li>
			<li><a href="">PhoneBook</a>-</li>
			<li><a href="">IconDock</a></li>
			<li><a href="">Best Web Gallery</a></li>
		</ul>
	</li>
	<li><a href="Flights.php">Flights</a></li>
	<li><a href="Hotel.php">Hotels</a></li>	
	<li><a href="Packages.php">Packages</a></li>
	<li><a href="Cruises.php">Cruises</a></li>
	<li class="current"><a href="Cars.php">Cars</a></li>
	<li><a href="#">Contact Us</a></li>
	
	
	<!--xxxxxxxxxxxxxxxxxxxxxxxxlog-inxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
	<div id="bar">
        <div id="container">
            <!-- Login Starts Here -->
            <div id="loginContainer">
                <a href="#" id="loginButton"><span>Login</span><em></em></a>
                <div style="clear:both"></div>
                <div id="loginBox">                
                    <form id="loginForm">
                        <fieldset id="body">
                            <fieldset>
                                <label for="email">Email Address</label>
                                <input type="text" name="email" id="email" />
                            </fieldset>
                            <fieldset>
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" />
                            </fieldset>
                            <input type="submit" id="login" value="Sign in" />
                            
     <!--xxxxxxxxxxxxxxxxxxxxxxxxsign-upxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->                       
                            <div id="bar">
        <div id="container2">
            <!-- Login Starts Here -->
            <div id="loginContainer2">
                <a href="#" id="loginButton2"><span>Sign-Up</span><em></em></a>
                <div style="clear:both"></div>
                <div id="loginBox2">                
                    <form id="loginForm2">
                         <fieldset id="body2">
                        	 <fieldset>
                                <label for="firstnametext">firstname</label>
                                <input type="text" name="firstnamefirstname" id="firstname" />
                            </fieldset>
                             <fieldset>
                                <label for="lastname">lastname</label>
                                <input type="text" name="lastname" id="lastname" />
                            </fieldset>
                             <fieldset>
                                <label for="middlename">middlename</label>
                                <input type="text" name="middlename" id="middlename" />
                            </fieldset>
                            <fieldset>
                                <label for="email">Email Address</label>
                                <input type="text" name="email" id="email" />
                            </fieldset>
                            <fieldset>
                                <label for="Age">Age</label>
                                <input type="text" name="Age" id="Age" />
                            </fieldset>
                             <fieldset>
                                <label for="birthday">birthday</label>
                                <input type="text" name="birthday" id="birthday" />
                            </fieldset>
                             <fieldset>
                                <label for="Address">Address</label>
                                <input type="text" name="Address" id="Address" />
                            </fieldset>
                             <fieldset>
                                <label for="Code-Id">Code-Id</label>
                                <input type="text" name="Code-Id" id="Code-Id" />
                            </fieldset>
                             <fieldset>
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" />
                            </fieldset>
                             <fieldset>
                                <label for="password2">Re-Password</label>
                                <input type="password" name="password2" id="password2" />
                            </fieldset>
                            <button type="submit" class="login2" >Register..!!</button>
                          
                        </fieldset>
                    </form>
                </div>
            </div>
            <!-- Login Ends Here -->
        </div>
    </div>
                            
                            <label for="checkbox"><input type="checkbox" id="checkbox" />Remember me</label>
                        </fieldset>
                        <span><a href="#">Forgot your password?</a></span>
                    </form>
                </div>
            </div>
            <!-- Login Ends Here -->
        </div>
    </div>

</ul>
</div><!DIVNAV>

		<div id="CarsBody">
			<form class="" id="" method="post" action="/travel_search/cars">
  <input type="hidden" id="t" value="" />

  
	<div id="">
		<label for="to_code">Pick-up Location:</label>
		<label class="error" for="pickLocate" id="pickLocate_error"><code>This field is required</code></label>
		<input name="pickLocate" type="text" value="" tabindex="1" autocomplete="off" class="" id="pickLocate" />
		<input type="hidden" name="Pickup" id="" value="" />
	</div>
	<div id="">
		<label for="to_code">Drop-Off Location:</label>
		<label class="error" for="dropLocate" id="dropLocate_error"><code>This field is required</code></label>
		<input name="dropLocate" type="text" value="" tabindex="1" autocomplete="off" class="" id="dropLocate" />
		<input type="hidden" name="DropOff" id="" value="" />
	</div>

	<div class="carDates">
		<label for="pickup_date" class="">Pick-up:</label>
		<label class="error" for="pickUp" id="pickUp_error"><code>This field is required</code></label>
		<input name="pickUp" type="text" size="13" class="from" tabindex="3" id="pickUp" />	    

		<select name="pickup_time" tabindex="4" class="pickup_timeHour">
		<option value="01">1</option>
		<option value="02">2</option>
		<option value="03">3</option>
		<option value="04">4</option>
		<option value="05">5</option>
		<option value="06">6</option>
		<option value="07">7</option>
		<option value="08">8</option>
		<option value="09">9</option>
		<option value="10">10</option>
		<option value="11" selected="selected">11</option>
		<option value="12">12</option>
		</select>
		
		:<select name="pickup_time_min1" tabindex="4" class="pickup_timeMin">
		<option value="00">00</option>
		<option value="15">15</option>
		<option value="30">30</option>
		<option value="45" selected="selected">45</option>
		</select> 
		
		<select name="pickup_time1" tabindex="4" class="pickup_timeMeridian">
		<option value="am">am</option>
		<option value="pm" selected="selected">pm</option>
		</select>	    <input type="hidden" name="" id="" value="" />
			</div>



			<div class="">
				<label for="dropoff_date" class="">Drop-off:</label>
				<label class="error" for="dropOff" id="dropOff_error"><code>This field is required</code></label>
				<input name="dropOff" type="text" size="13" class="to" tabindex="5"  id="dropOff" />	    
		
		
		<select name="dropoff_time" tabindex="6" class="pickup_timeHour">
		<option value="01">1</option>
		<option value="02">2</option>
		<option value="03">3</option>
		<option value="04">4</option>
		<option value="05">5</option>
		<option value="06">6</option>
		<option value="07">7</option>
		<option value="08">8</option>
		<option value="09">9</option>
		<option value="10">10</option>
		<option value="11" selected="selected">11</option>
		<option value="12">12</option>
		</select>
		
		:<select name="dropoff_timemin2" tabindex="6" class="pickup_timeMin">
		<option value="00">00</option>
		<option value="15">15</option>
		<option value="30">30</option>
		<option value="45" selected="selected">45</option>
		</select> 
		
		<select name="dropoff_time2" tabindex="6" class="pickup_timeMeridian">
		<option value="am">am</option>
		<option value="pm" selected="selected">pm</option>
		</select>	   
		
		 <input type="hidden" name="data[dropoff_time]" id="dropoff_time" value="" />
			</div>

    
	
    

</form>
<input type="button" id="Cars_Btn" value="Search" class="btn btn-inverse"/>
		</div>
		<div id="frmFooter">
					<p><a href="">Advertise</a>
						|
						<a href="">About Us</a>
						|
						<a href="">Terms of Use</a>
						|
						<a href="">Privacy Policy</a>
						|
						<a href="">Copyright Agent</a>
						|
						<a href="">Parents' Guide</a>
						|
						<a href="">Contact Smile.com</a></p>
					<p class="copyright">Copyright 2013 SmileLibrary.com. All rights reserved.</p>
				</div><!-- end frmFooter-->
 </body>
 
</html>
