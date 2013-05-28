<html>

	<head>
		<title>ICT-AIRLINES</title> 
		<link rel='stylesheet' href='css/jquery-ui-1.10.2.custom.min.css' style='text/css' />
		  <link rel='stylesheet' href='css/jquery-ui-1.10.2.custom.css' style='text/css' />
		  <link rel='stylesheet' href='css/bootstrapCSS/bootstrap.min.css' style='text/css' />	
		  <link rel='stylesheet' href='css/bootstrapCSS/bootstrap.css' style='text/css' />	 
		 <link rel='stylesheet' href='css/Homepage.css' style='text/css' />
		 <link rel='stylesheet' href='css/Package.css' style='text/css' />
		 
		 
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
	<li class="current"><a href="Packages.php">Packages</a></li>
	<li><a href="Cruises.php">Cruises</a></li>
	<li><a href="Cars.php">Cars</a></li>
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
	<div id="PackageBody">
		<form>
				<div id="formbody">
            	<label for="">From:</label>
            		
            	<input name="From" type="text" value="" tabindex="1" autocomplete="off" class="" id="From" />  
            	<label class="error" for="From" id="From_error"><code>This field is required</code></label>          
            		<div class=""></div>
              		<input type="hidden" name="" id="" value="" />
     

	
        	<label for="">To:</label>
        	<label class="error" for="To" id="To_error"><code>This field is required</code></label>
        	<input name="To" type="text" value="" tabindex="2" autocomplete="off" class="" id="To" />        	
        		<div class=""></div>
          		<input type="hidden" name="]" id="" value="" />
     


				<label for="from">Depart:</label>
				<label class="error" for="Depart" id="Depart_error"><code>This field is required</code></label>
				<input type="text" class="from" name="Depart" id="Depart"/></br>
				
				<label for="to">Return:</label>
				<label class="error" for="Return" id="Return_error"><code>This field is required</code></label>
				<input type="text" class="to" name="Return" id="Return"/></br>




    		<label for="Travel">Travelers:</label>
    		<select name="Travel" tabindex="5" id="travelers">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6+</option>
			</select>
			</div>
		</form>
			<input type="button" id="Package_Btn" value="Search" class="btn btn-inverse"/>
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
