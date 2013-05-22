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
	
	
$(".pic").click(function(){
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
				
						$("#formDialog").dialog({
									autoOpen:true,
									resizable: false,
									modal:true,
									show:"explode",
									hide:"explode",
									width: 500,
									
									buttons:{
											"Book now!!":function(){
											
																var addObj={
																"Firstname":$("input[name='Firstname']").val(),
																"Middlename":$("input[name='Middlename']").val(),
																"Lastname":$("input[name='Lastname']").val(),
																"Age":$("input[name='Age']").val(),
																"EmailOrNumber":$("input[name='EmailOrNumber']").val(),
																"CodeID":$("input[name='CodeID']").val(),
																"Contact":$("input[name='Contact']").val()
																
																
															/*	"plane_choice":$("input[name='plane_choice']").val(),
																"galing_saHa":$("select[name='galing_saHa']").val(),
																"papuntangSa":$("select[name='papuntangSa']").val()*/
						
																/*,
																"tuition_fee":$("input[name='tuition_fee']").val(),
																"payment":$("input[name='payment']").val(),
																"date_pay":$("input[name='date_pay']").val()*/
																
													};
											 $.ajax({
															type:"POST",
															url:"add_customer.php",
														
															data:addObj,
															success:function(data){
																//$("#add_student_table").append(data);
																	//alert( $("input[name='firstname']"]).val(); + " " + $("input[name='lastname']").val(); 'Successfully added..');
																	alert('Successfully added..');
															},
															error:function(data){
																				alert(JSON.stringify(data));
			
															}
												});
		
														$( this ).dialog("close");
																},
																
											"Not now!!":function(){
														$( this ).dialog("close");
																},
						
								}
								
						});
		$("#yn").dialog({
						autoOpen:true,
						resizable: false,
						modal:true,
						show:"explode",
						hide:"explode",
						width: 200,
						
						buttons:{
						"Yes":function(){
	
											
											
											
											
												var addObj={
																"plane_choice":$("input[name='plane_choice']").val(),
																"galing_saHa":$("select[name='galing_saHa']").val(),
																"papuntangSa":$("select[name='papuntangSa']").val(),
																"choice":$("select[name='choice']").val(),
																"depart":$("input[name='depart']").val(),
																"return":$("input[name='return']").val(),
																"travalers":$("select[name='travalers']").val()
																
						
																/*,
																"tuition_fee":$("input[name='tuition_fee']").val(),
																"payment":$("input[name='payment']").val(),
																"date_pay":$("input[name='date_pay']").val()*/
													};
											 $.ajax({
															type:"POST",
															url:"add_flight.php",
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
									  
											$( this ).dialog("close");
							},
						
		}
});
});

	
	
	$("#search").click(function(){
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
		$("#formko").dialog({
						autoOpen:true,
						resizable: false,
						modal:true,
						show:"bounce",
						hide:"explode",
						width: 220,
								
						buttons:{
						
								
						"OK !":function(){
							
		
				 $( this ).dialog("close");
			},
																
						
		}
});
	});
	
	$('#btnSearch').click(function(){		
			searchFlight();
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
	


