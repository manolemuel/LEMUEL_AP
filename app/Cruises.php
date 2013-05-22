<html>

	<head>
		<title>ICT-AIRLINES</title> 
		<link rel='stylesheet' href='css/jquery-ui-1.10.2.custom.min.css' style='text/css' />
		  <link rel='stylesheet' href='css/jquery-ui-1.10.2.custom.css' style='text/css' />
		   <link rel='stylesheet' href='css/bootstrapCSS/bootstrap.min.css' style='text/css' />	
		  <link rel='stylesheet' href='css/bootstrapCSS/bootstrap.css' style='text/css' />	 
		 <link rel='stylesheet' href='css/Homepage.css' style='text/css' />
		 <link rel='stylesheet' href='css/Cruise.css' style='text/css' />
		 
		 
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
	<li class="current"><a href="Cruises.php">Cruises</a></li>
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
                                <label for="email">Email Address</label>
                                <input type="text" name="email" id="email" />
                            </fieldset>
                            <fieldset>
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" />
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
	<div id="CruiseBody">
			 <form class="" id="" class="" method="post" action="">
  <input type="hidden" id="" value="" />

  
  <table cellspacing="0" class="" style="width:360px; margin:10px 0px 10px 10px;"><tr>
    <td>
		<label for="destination" class="">Destination</label>
		<select name="Destination" class="" tabindex="1" style="width:220px;" id="">
<option value="">-- Select destination --</option>
<option value="1">Africa</option>
<option value="2">Alaska</option>
<option value="3">Asia</option>
<option value="25">Australia / New Zealand</option>
<option value="4">Bahamas</option>
<option value="5">Bermuda</option>
<option value="6">Canada - New England</option>
<option value="7">Caribbean</option>
<option value="8">Caribbean - Eastern</option>
<option value="9">Caribbean - Southern</option>
<option value="10">Caribbean - Western</option>
<option value="11">Europe</option>
<option value="12">Hawaii</option>
<option value="13">Mediterranean</option>
<option value="14">Mediterranean - Eastern</option>
<option value="15">Mediterranean - Western</option>
<option value="16">Mexico</option>
<option value="17">Nowhere (no port stops)</option>
<option value="18">Panama Canal</option>
<option value="19">South America</option>
<option value="20">South Pacific</option>
<option value="21">Transatlantic</option>
<option value="22">United States Canada</option>
<option value="23">US Pacific Coast</option>
<option value="24">World</option>
</select>    
    </td>
    <td>
		<label for="length" class="">Length of Cruise</label>
		<select name="LOcruise" class="" tabindex="2" style="width:120px;" id="">
<option value="1">1-2 days</option>
<option value="2" selected="selected">3-5 days</option>
<option value="3">6-9 days</option>
<option value="4">10+ days</option>
<option value="5">Any length</option>
</select>    </td>
  </tr></table>

  <table cellspacing="0" class="" style="width:360px; margin:10px 0px 0px 10px;"><tr>
    <td>
        <label class="">Departure Date</label>
        <select name="Ddate" style="width:220px;" id="">
<option value="01">January</option>
<option value="02">February</option>
<option value="03">March</option>
<option value="04">April</option>
<option value="05" selected="selected">May</option>
<option value="06">June</option>
<option value="07">July</option>
<option value="08">August</option>
<option value="09">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
</select>    </td>
    <td>
        <label class="">Departure Date</label>
        <select name="Ydate" style="width:120px;" id="">
<option value="2013" selected="selected">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
</select>    </td>
  </tr></table>


</form>
<input type="button" id="Cruises_Btn" value="Search"/>
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
