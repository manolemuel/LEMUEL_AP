// Login Form

$(function() {
    var button = $('#loginButton');
    var box = $('#loginBox');
    var form = $('#loginForm');
    button.removeAttr('href');
    button.mouseup(function(login) {
        box.toggle();
        button.toggleClass('active');
    });
    form.mouseup(function() { 
        return false;
    });
    $(this).mouseup(function(login) {
        if(!($(login.target).parent('#loginButton').length > 0)) {
            button.removeClass('active');
            box.hide();
        }
    });
    
    $('.carousel').carousel({
  interval: 4000
})
    
    
});


$(function() {
    var button = $('#loginButton2');
    var box = $('#loginBox2');
    var form = $('#loginForm2');
    button.removeAttr('href');
    button.mouseup(function(login2) {
        box.toggle();
        button.toggleClass('active');
    });
    form.mouseup(function() { 
        return false;
    });
    $(this).mouseup(function(login2) {
        if(!($(login2.target).parent('#loginButton2').length > 0)) {
            button.removeClass('active');
            box.hide();
        }
    });
    
   $( ".from" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 3,
      onClose: function( selectedDate ) {
        $( ".to" ).datepicker( "option", "minDate", selectedDate );
      }
    });
    $( ".to" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 3,
      onClose: function( selectedDate ) {
        $( ".from" ).datepicker( "option", "maxDate", selectedDate );
      }
    }); 
    
    
      $('.error').hide();
  $('input.text-input').css({backgroundColor:"#FFFFFF"});
  $('input.text-input').focus(function(){
    $(this).css({backgroundColor:"#FFDDAA"});
  });
  $('input.text-input').blur(function(){
    $(this).css({backgroundColor:"#FFFFFF"});
  });
    	$("#pic").click(function(){
    	
    			
										 var checkIn = $("input#checkIn").val();
									if (checkIn == "") {
								  $("label#checkIn_error").show();
								  $("input#checkIn").focus();
								  return false;
								}
									var checkOut = $("input#checkOut").val();
									if (checkOut == "") {
								  $("label#checkOut_error").show();
								  $("input#checkOut").focus();
								  return false;
								}
		$(".photo").dialog({
						autoOpen:true,
						resizable: false,
						modal:true,
						show:"explode",
						hide:"explode",
						width: 800,
						height: 800,
						buttons:{
						"close":function(){
						
							$( this ).dialog("close");
						},
						
						 
		}
});
});
						  
		$(".sub").click(function(){
		$("#hotelDialog").dialog({
						autoOpen:true,
						resizable: false,
						modal:true,
						show:"explode",
						hide:"explode",
						width: 250,
						
						buttons:{
						"Book now !!":function(){
											var addObj={
																"Firstname":$("input[name='Firstname']").val(),
																"Middlename":$("input[name='Middlename']").val(),
																"Lastname":$("input[name='Lastname']").val(),
																"Age":$("input[name='Age']").val(),
																"EmailOrNumber":$("input[name='EmailOrNumber']").val(),
																"CodeID":$("input[name='CodeID']").val(),
																"Contact":$("input[name='Contact']").val()
																
															
																
													};
											 $.ajax({
															type:"POST",
															url:"add_custHotel.php",
														
															data:addObj,
															success:function(data){
																
																	alert('Successfully added..');
															},
															error:function(data){
																				alert(JSON.stringify(data));
			
															}
												});
			
											$( this ).dialog("close");
											},
																
							"Not Now. !!":function(){
									  
											$( this ).dialog("close");
							},
						
		}
});
$("#hahahhha").dialog({
						autoOpen:true,
						resizable: false,
						modal:true,
						show:"explode",
						hide:"explode",
						width: 100,
						
						buttons:{
						"Yes":function(){
										
			
												var addObj={
																"hotel_choice":$("input[name='hotel_choice']").val(),
																"checkIn":$("input[name='checkIn']").val(),
																"checkOut":$("input[name='checkOut']").val(),
																"GuestsRooms":$("select[name='GuestsRooms']").val(),
																"GuestsRooms2":$("select[name='GuestsRooms2']").val()
						
																/*,
																"tuition_fee":$("input[name='tuition_fee']").val(),
																"payment":$("input[name='payment']").val(),
																"date_pay":$("input[name='date_pay']").val()*/
													};
											 $.ajax({
															type:"POST",
															url:"add_cust.php",
															data:addObj,
															success:function(data){
																//$("#add_student_table").append(data);
																	//alert( $("input[name='firstname']"]).val(); + " " + $("input[name='lastname']").val(); 'Successfully added..');
																	//alert('Successfully added..');
															},
															error:function(data){
																	//				alert(JSON.stringify(data));
			
															}
												});
												 $( this ).dialog("close");
											},
																
							"No":function(){
									  $('#hotelDialog').dialog("close");
									  
											$( this ).dialog("close");
							},
						
		}
});
});

						

 
    
    
    $('.error').hide();
  $('input.text-input').css({backgroundColor:"#FFFFFF"});
  $('input.text-input').focus(function(){
    $(this).css({backgroundColor:"#FFDDAA"});
  });
  $('input.text-input').blur(function(){
    $(this).css({backgroundColor:"#FFFFFF"});
  }); 
    
    $('#Btn').click(function(){
	
			$('.error').hide();
		
	  var checkIn = $("input#checkIn").val();
		if (checkIn == "") {
      $("label#checkIn_error").show();
      $("input#checkIn").focus();
      return false;
    }
		var checkOut = $("input#checkOut").val();
		if (checkOut == "") {
      $("label#checkOut_error").show();
      $("input#checkOut").focus();
      return false;
    }
		var GuestsRooms = $("input#GuestsRooms").val();
		if (GuestsRooms == "") {
      $("label#GuestsRooms_error").show();
      $("input#GuestsRooms").focus();
      return false;
    }
       var GuestsRooms2 = $("input#GuestsRooms2").val();
		   if (GuestsRooms2 == "") {
         $("label#GuestsRooms2_error").show();
         $("input#GuestsRooms").focus();
         return false;
    }	
		var addObj={
						"checkIn":$("input[name='checkIn']").val(),
						"checkOut":$("input[name='checkOut']").val(),
						"GuestsRooms":$("select[name='GuestsRooms']").val(),
						"GuestsRooms2":$("select[name='GuestsRooms2']").val()
						
						/*,
						"tuition_fee":$("input[name='tuition_fee']").val(),
						"payment":$("input[name='payment']").val(),
						"date_pay":$("input[name='date_pay']").val()*/
			};
	 $.ajax({
					type:"POST",
					url:"add_cust.php",
					data:addObj,
					success:function(data){
						//$("#add_student_table").append(data);
							//alert( $("input[name='firstname']"]).val(); + " " + $("input[name='lastname']").val(); 'Successfully added..');
							alert('Successfully added..');
					},
					error:function(data){
							//				alert(JSON.stringify(data));
			
					}
		});
         
	});
	
	$('.error').hide();
  $('input.text-input').css({backgroundColor:"#FFFFFF"});
  $('input.text-input').focus(function(){
    $(this).css({backgroundColor:"#FFDDAA"});
  });
  $('input.text-input').blur(function(){
    $(this).css({backgroundColor:"#FFFFFF"});
  });    
    $('#Package_Btn').click(function(){
	
		
	$('.error').hide();
		
	  var From1 = $("input#From").val();
		if (From1 == "") {
      $("label#From_error").show();
      $("input#From").focus();
      return false;
    }
		var To1 = $("input#To").val();
		if (To1 == "") {
      $("label#To_error").show();
      $("input#To").focus();
      return false;
    }
		var Depart = $("input#Depart").val();
		if (Depart == "") {
      $("label#Depart_error").show();
      $("input#Depart").focus();
      return false;
    }
       var Return1 = $("input#Return").val();
		   if (Return1 == "") {
         $("label#Return_error").show();
         $("input#Return").focus();
         return false;
    }	
		var addObj={
						"From":$("input[name='From']").val(),
						"To":$("input[name='To']").val(),
						"Depart":$("input[name='Depart']").val(),
						"Return":$("input[name='Return']").val(),
						"Travel":$("select[name='Travel']").val()
						
						
						/*,
						"tuition_fee":$("input[name='tuition_fee']").val(),
						"payment":$("input[name='payment']").val(),
						"date_pay":$("input[name='date_pay']").val()*/
			};
	 $.ajax({
					type:"POST",
					url:"PackageAdd.php",
					data:addObj,
					success:function(data){
						//$("#add_student_table").append(data);
							//alert( $("input[name='firstname']"]).val(); + " " + $("input[name='lastname']").val(); 'Successfully added..');
							alert('Successfully added..');
					},
					error:function(data){
							//				alert(JSON.stringify(data));
			
					}
		});
         
	});
    
    
     $('#Cruises_Btn').click(function(){
	
			
		var addObj={
						"Destination":$("select[name='Destination']").val(),
						"LOcruise":$("select[name='LOcruise']").val(),
						"Ddate":$("select[name='Ddate']").val(),
						"Ydate":$("select[name='Ydate']").val()
						
						
						/*,
						"tuition_fee":$("input[name='tuition_fee']").val(),
						"payment":$("input[name='payment']").val(),
						"date_pay":$("input[name='date_pay']").val()*/
			};
	 $.ajax({
					type:"POST",
					url:"CruisesAdd.php",
					data:addObj,
					success:function(data){
						//$("#add_student_table").append(data);
							//alert( $("input[name='firstname']"]).val(); + " " + $("input[name='lastname']").val(); 'Successfully added..');
							alert('Successfully added..');
					},
					error:function(data){
							//				alert(JSON.stringify(data));
			
					}
		});
         
	});
   
   
   $('#Cars_Btn').click(function(){
	
			$('.error').hide();
		
	  var pickLocate = $("input#pickLocate").val();
		if (pickLocate == "") {
      $("label#pickLocate_error").show();
      $("input#pickLocate").focus();
      return false;
    }
		var dropLocate = $("input#dropLocate").val();
		if (dropLocate == "") {
      $("label#dropLocate_error").show();
      $("input#dropLocate").focus();
      return false;
    }
		var pickUp = $("input#pickUp").val();
		if (pickUp == "") {
      $("label#pickUp_error").show();
      $("input#pickUp").focus();
      return false;
    }
       var dropOff = $("input#dropOff").val();
		   if (dropOff == "") {
         $("label#dropOff_error").show();
         $("input#dropOff").focus();
         return false;
    }		
		var addObj={
						"pickLocate":$("input[name='pickLocate']").val(),
						"dropLocate":$("input[name='dropLocate']").val(),
						"pickUp":$("input[name='pickUp']").val(),
						"dropOff":$("input[name='dropOff']").val(),
						"pickup_time":$("select[name='pickup_time']").val(),
						"pickup_time_min1":$("select[name='pickup_time_min1']").val(),
						"pickup_time1":$("select[name='pickup_time1']").val(),
						"dropoff_time":$("select[name='dropoff_time']").val(),
						"dropoff_timemin2":$("select[name='dropoff_timemin2']").val(),
						"dropoff_time2":$("select[name='dropoff_time2']").val()
						
						
						/*,
						"tuition_fee":$("input[name='tuition_fee']").val(),
						"payment":$("input[name='payment']").val(),
						"date_pay":$("input[name='date_pay']").val()*/
			};
	 $.ajax({
					type:"POST",
					url:"CarsAdd.php",
					data:addObj,
					success:function(data){
						//$("#add_student_table").append(data);
							//alert( $("input[name='firstname']"]).val(); + " " + $("input[name='lastname']").val(); 'Successfully added..');
							alert('Successfully added..');
					},
					error:function(data){
							//				alert(JSON.stringify(data));
			
					}
		});
         
	});
     
    
});
function hotel_choiced(hotels){
	$("input[name='hotel_choice']").val(hotels);
}
