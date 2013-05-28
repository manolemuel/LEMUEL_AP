$(function(){

	$.ajax({
		type: "POST",
		url: "view_plane.php",
		success: function(data){
			$("#INFO").append(data);
		},
		error: function(data){
			alert(data);
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
$(".pic").click(function(){

			$('.error').hide();
		
								  var depart = $("input#depart").val();
									if (depart == "") {
								  $("label#depart_error").show();
								  $("input#depart").focus();
								  return false;
								}
								
		$(".photo").dialog({
						autoOpen:true,
						resizable: false,
						modal:true,
						show:{effect:"slide", direction:"left"},
						hide:{effect:"slide", direction:"right"},
						width: 800,
						height: 800,
						buttons:{
						"close":function(){
							

							$( this ).dialog("close");
						},
						
						 
		}
});
});
		
	/*	$('.error').hide();
		
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
    }	*/				    
		$("#formDialog").dialog({
		
									autoOpen:false,
									resizable: false,
									modal:true,
									show:{effect:"slide", direction:"left"},
									hide:{effect:"slide", direction:"right"},
									width: 500,
									
									buttons:{
											"Book now!!":function(){
											/*	$('.error').hide();
		
							  var Firstname = $("input#Firstname").val();
								if (Firstname == "") {
							  $("label#Firstname_error").show();
							  $("input#Firstname").focus();
							  return false;
							}
								var Middlename = $("input#Middlename").val();
								if (Middlename == "") {
							  $("label#Middlename_error").show();
							  $("input#Middlename").focus();
							  return false;
							}
								var Lastname = $("input#Lastname").val();
								if (Lastname == "") {
							  $("label#Lastname_error").show();
							  $("input#Lastname").focus();
							  return false;
							}
							   var Age = $("input#Age").val();
								   if (Age == "") {
								 $("label#Age_error").show();
								 $("input#Age").focus();
								 return false;
							}
							  var EmailOrNumber = $("input#EmailOrNumber").val();
								if (EmailOrNumber == "") {
							  $("label#EmailOrNumber_error").show();
							  $("input#EmailOrNumber").focus();
							  return false;
							}
								var CodeID = $("input#CodeID").val();
								if (CodeID == "") {
							  $("label#CodeID_error").show();
							  $("input#CodeID").focus();
							  return false;
							}
								var Contact = $("input#Contact").val();
								if (Contact == "") {
							  $("label#Contact_error").show();
							  $("input#Contact").focus();
							  return false;
							}
							   var plane_choice = $("input#plane_choice").val();
								   if (plane_choice == "") {
								 $("label#plane_choice_error").show();
								 $("input#plane_choice").focus();
								 return false;
							}
							var depart = $("input#depart").val();
								if (depart == "") {
							  $("label#depart_error").show();
							  $("input#depart").focus();
							  return false;
							}
							   var return1 = $("input#return").val();
								   if (return1 == "") {
								 $("label#return_error").show();
								 $("input#return").focus();
								 return false;
							}*/
																var addObj={
																"Firstname":$("input[name='Firstname']").val(),
																"Middlename":$("input[name='Middlename']").val(),
																"Lastname":$("input[name='Lastname']").val(),
																"Age":$("input[name='Age']").val(),
																"EmailOrNumber":$("input[name='EmailOrNumber']").val(),
																"CodeID":$("input[name='CodeID']").val(),
																"Contact":$("input[name='Contact']").val(),
																"plane_choice":$("input[name='plane_choice']").val(),
																"galing_saHa":$("select[name='galing_saHa']").val(),
																"papuntangSa":$("select[name='papuntangSa']").val(),
																
																"depart":$("input[name='depart']").val(),
																"return":$("input[name='return']").val(),
																"travalers":$("select[name='travalers']").val()
																
															
																
													};
													//alert(JSON.stringify(addObj));
											 $.ajax({
															type:"POST",
															url:"add_customer.php",
														
															data:addObj,
															success:function(data){
																				alert(JSON.stringify(data));
																	
															},
															error:function(data){
																				alert(JSON.stringify(data));
			
															}
												});
		
														$( this ).dialog("close");
														$( "#yn" ).dialog("close");
														$( ".photo" ).dialog("close");
																},
																
											"Not now!!":function(){
														$( this ).dialog("close");
														$( "#yn" ).dialog("close");
														$( ".photo" ).dialog("close");
																},
						
								}
								
			});//end of formDialog

		$(".sub").click(function(){
					
					var objPlane = {
					
							"plane_choice":$("input[name='plane_choice']").val()
					};
				//	alert(objPlane);
					
			 $.ajax({
							type:"POST",
							url:"check_pass_population.php",
							data: objPlane,
							success:function(data){
								
											$("#dialog").dialog("open");
										$("#table_flight").html(data);						
							},
							error:function(data){
							alert(JSON.stringify(data));
			
							}
			});				
				
			
		
		});

	$("#dialog").dialog({
		autoOpen:false,
									resizable: false,
									modal:true,
									show:{effect:"slide", direction:"left"},
									hide:{effect:"slide", direction:"right"},
									width: 75,
									height: 75,
	});
	
	$("#search").click(function(){
	
	
		 							 var depart = $("input#depart").val();
									if (depart == "") {	
								  $("label#depart_error").show();
								  $("input#depart").focus();
								  return false;
								}
								 $("#myModal").modal( 'show');
						var wordObj = {
										"galing_saHa":$("select[name='galing_saHa']").val(),
										"papuntangSa":$("select[name='papuntangSa']").val()
									};	
		
		
								$.ajax({
									type: "POST",
									url: "search.php",
									data: wordObj,
									success: function(data){
										$("#wew").html(data);
				
									},
									error: function(data){
										alert(data);
				
									}
								});
		/*$("#formko").dialog({
						autoOpen:true,
						resizable: false,
						modal:true,
						show:{effect:"slide", direction:"left"},
						hide:{effect:"slide", direction:"right"},
						width: 220,
								
						buttons:{
						
								
						"OK !":function(){
							
		
				 $( this ).dialog("close");
			},
																
						
		}
});*/

	});
	
	$('#btnSearch').click(function(){		
			searchFlight();
		});
		
		
		$('#onelang').click(function(){
		
				$('#ret').hide();
				
		});
		
		$('#lahatlang').click(function(){
		
				$('#ret').show();
				
		});
		
});

function plane_choiced(plane){
	$("input[name='plane_choice']").val(plane);
}
function searchFlight(){

	var objSearch = {"galing_saHa":$('#SearchFrom').val(),
								 "papuntangSa":$('#SearchTo').val()};
			$.ajax({
				type: "POST",
				url: "search_Flight.php",
				data: objSearch,
				success: function(data){
					$('#INFO').html(data);
				},
				error: function(data){
					alert(data);
				}
	
			});

}
function opendialog(){
		$("#yn").dialog({
							autoOpen:true,
							resizable: false,
							modal:true,
							show:{effect:"slide", direction:"left"},
							hide:{effect:"slide", direction:"right"},
							width: 200,
						
							buttons:{
							
							
							"Yes":function(){
									$("#formDialog").dialog("open");
									//$( this ).dialog("close");
							},
																
								"No":function(){
										  
												$( this ).dialog("close");
								},
						
					}
			});
}
/*function showSearch(place_id){
$("#pic").html("asasa");
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

}*/

	


