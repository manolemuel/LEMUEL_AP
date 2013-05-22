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
    
    	$("#pic").click(function(){
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
		$("#hahahhha").dialog({
						autoOpen:true,
						resizable: false,
						modal:true,
						show:"explode",
						hide:"explode",
						width: 100,
						
						buttons:{
						"add":function(){
	
			
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
																
							"close":function(){
									  
											$( this ).dialog("close");
							},
						
		}
});
});

						

    
    
    

    
    
    
    
    
    
    $('#Btn').click(function(){
	
			
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
	
	    
    $('#Package_Btn').click(function(){
	
			
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
