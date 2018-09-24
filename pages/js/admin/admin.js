// transaction
$(document).ready(function(){
	
	 // $('#'+menu+'').show();
	 var menu = document.getElementById('page').value;
	// alert(menu);
	  if(menu =='settings'){
		   $('#settings_button').css("color","black");
		   $('#home_button').css("color","white");
		   $('#users_button').css("color","white");
	  }else if(menu =='index'){
		   $('#home_button').css("color","black");
		   $('#settings_button').css("color","white");
		   $('#users_button').css("color","white");
	  }else if(menu =='users'){
		   $('#users_button').css("color","black");
		   $('#settings_button').css("color","white");
		   $('#home_button').css("color","white");
	  }
	  
	$('#tbl_sows').DataTable({
			responsive: true
	});
	$('#tbl_sampling_information').DataTable({
                responsive: true
	});
	$('#tbl_type_of_test').DataTable({
		responsive: true
	});
	$('#tbl_category').DataTable({
		responsive: true
	});
	$('#tbl_sub-category').DataTable({
		responsive: true
	});
	
});
// transaction

//add transaction
function add_transaction(){
	$('#mod_add_transaction').modal();
}

//add transaction
function save_transaction(){
	var client_name = document.getElementById('txt_si_client_name').value;
	var company_name = document.getElementById('txt_si_company_name').value;
	var contact_num = document.getElementById('txt_si_contact_num').value;
	var company_address = document.getElementById('txt_si_company_address').value;
	var email = document.getElementById('txt_si_email').value;
	var date_sampling = document.getElementById('txt_si_date_sampling').value;
	var time_sampling = document.getElementById('txt_si_time_sampling').value;
	var sow_id = document.getElementById('txt_si_sow_id').value;
	var wc_id = document.getElementById('txt_si_wc_id').value;
	var tot_id = document.getElementById('txt_si_tot_id').value;
	var amount = document.getElementById('txt_si_amount').value;
	var name_of_si = document.getElementById('txt_si_name_of_si').value;
	var area_si = document.getElementById('txt_si_area_of_si').value;
	var commission_si = document.getElementById('txt_si_commission_si').value;
	var sampling_point = document.getElementById('txt_si_sampling_point').value;
	var sampled_by = document.getElementById('txt_si_sampled_by').value;
	var notes = document.getElementById('txt_si_notes').value;
	
		if(client_name.length==0 ){
             alert("Please input Client's Name.");
             $('#txt_si_client_name').focus();
         }else if(company_name.length==0 ){
             alert("Please input Company Name.");
             $('#txt_si_company_name').focus();
         }else if(contact_num.length==0 ){
             alert("Please input Contact Number.");
             $('#txt_si_contact_num').focus();
         }else if(company_address.length==0 ){
             alert("Please input Company Address.");
             $('#txt_si_company_address').focus();
         }else if(email.length==0 ){
             alert("Please input Email Address.");
             $('#txt_si_email').focus();
         }else if(date_sampling.length==0 ){
             alert("Please input Date of Sampling.");
             $('#txt_si_date_sampling').focus();
         }else if(time_sampling.length==0 ){
             alert("Please input Time of Sampling.");
             $('#txt_si_time_sampling').focus();
         }else if(sow_id.length==0 ){
             alert("Please select Water Source.");
             $('#txt_si_sow_id').focus();
         }else if(wc_id.length==0 ){
             alert("Please select Water Classification.");
             $('#txt_si_wc_id').focus();
         }else if(tot_id.length==0 ){
             alert("Please select Type of Test.");
             $('#txt_si_tot_id').focus();
         }else if(amount.length==0 ){
             alert("Please input Amount.");
             $('#txt_si_amount').focus();
         }else if(name_of_si.length==0 ){
             alert("Please input Name of Sanitary Inspector.");
             $('#txt_si_name_of_si').focus();
         }else if(area_si.length==0 ){
             alert("Please input Area of S.I.");
             $('#txt_si_area_of_si').focus();
         }else if(commission_si.length==0 ){
             alert("Please input Commission of S.I.");
             $('#txt_si_commission_si').focus();
         }else if(sampling_point.length==0 ){
             alert("Please input Sampling point.");
             $('#txt_si_sampling_point').focus();
         }else if(sampled_by.length==0 ){
             alert("Please input Sampled by.");
             $('#txt_si_sampled_by').focus();
         }else{
			$.post("../php/save_transaction.php",{
				client_name:client_name,
				company_name:company_name,
				contact_num:contact_num,
				company_address:company_address,
				email:email, 
				date_sampling:date_sampling,
				time_sampling:time_sampling,
				sow_id:sow_id,
				wc_id:wc_id,
				tot_id:tot_id,
				commission_si:commission_si,
				area_si:area_si,
				name_of_si:name_of_si,
				sampling_point:sampling_point,
				sampled_by:sampled_by,
				notes:notes,
				amount:amount
					}, function(result){
				 if(result==1){
						alert("Fill up all fields.");
					}else if(result==2){
						alert("Succcessfully Added.");
						//$("#closeformadd").click();
						location.reload();
					}else{
						alert(result);
					}

			});
		 }
}
//add transaction

//settings
function settings_selected(settings){
	if(settings =='SOWS'){
		   $('#settings_sows').show();
		   $('#btn_sows').css("color","red");
		 
	  }
}




//add type of test
function add_tot(){
	$('#mod_add_type_test').modal();
}
//edit type of test
function edit_tot(tot_id, description){
	$('#mod_edit_type_of_test').modal();
	$('#txt_edit_tot_id').val(tot_id);
	$('#txt_edit_tot_description').val(description);
}
//save type of test

function save_tot(){

	var tot = document.getElementById('txt_tot_description').value;

	$.post("../php/save_tot.php",{
		tot: tot
		}, function(result){
		 if(result==1){
				alert("Fill up all fields.");
			}else if(result==2){
				alert("Succcessfully Added.");
				//$("#closeformadd").click();
				location.reload();
			}else{
				alert(result);
			}

	});
}
//Edit type of test

function update_tot(){

	var tot_id = document.getElementById('txt_edit_tot_id').value;
	var description = document.getElementById('txt_edit_tot_description').value;

	$.post("../php/update_tot.php",{
		tot_id: tot_id,
		description: description
		}, function(result){
		 if(result==1){
				alert("Fill up all fields.");
			}else if(result==2){
				alert("Succcessfully Updated.");
				//$("#closeformadd").click();
				location.reload();
			}else{
				alert(result);
			}

	});
}


//delete tot
function delete_tot(tot_id){
	//alert(tot_id);
	var x = confirm("Are you sure you want to delete this Type of Test?");
	if(x){
		$.post("../php/delete_tot.php",{
		tot_id: tot_id
		}, function(result){
		 if(result==1){
				alert("Fill up all fields.");
			}else if(result==2){
				alert("Succcessfully Deleted.");
				//$("#closeformadd").click();
				location.reload();
			}else{
				alert(result);
			}

	});
	}
}


//add sows
function add_sows(){
	$('#mod_add_sow').modal();
}
//edit type of test
function edit_sow(sow_id, description){
	$('#mod_edit_sow').modal();
	$('#txt_edit_sow_id').val(sow_id);
	$('#txt_edit_sow_description').val(description);
}

//save sows
function save_sows(){
	//alert();
	var sows = document.getElementById('txt_sow_description').value;
	$.post("../php/save_sows.php",{
		sows: sows
		}, function(result){
		 if(result==1){
				alert("Fill up all fields.");
			}else if(result==2){
				alert("Succcessfully Added.");
				//$("#closeformadd").click();
				location.reload();
			}else{
				alert(result);
			}

	});
}
//add sows

//update sow
function update_sow(){

	var sow_id = document.getElementById('txt_edit_sow_id').value;
	var description = document.getElementById('txt_edit_sow_description').value;

	$.post("../php/update_sow.php",{
		sow_id: sow_id,
		description: description
		}, function(result){
		 if(result==1){
				alert("Fill up all fields.");
			}else if(result==2){
				alert("Succcessfully Updated.");
				//$("#closeformadd").click();
				location.reload();
			}else{
				alert(result);
			}

	});
}
//delete sow
function delete_sow(sow_id){
	//alert(tot_id);
	var x = confirm("Are you sure you want to delete this Source of water supply?");
	if(x){
		$.post("../php/delete_sow.php",{
		sow_id: sow_id
		}, function(result){
		 if(result==1){
				alert("Fill up all fields.");
			}else if(result==2){
				alert("Succcessfully Deleted.");
				//$("#closeformadd").click();
				location.reload();
			}else{
				alert(result);
			}

	});
	}
}

//add water classification

function add_wc(){
	$('#mod_add_water_class').modal();
}
//edit water classification
function edit_wc(wc_id, description){
	$('#mod_edit_water_class').modal();
	$('#txt_edit_wc_id').val(wc_id);
	$('#txt_edit_wc_description').val(description);
}

//save water classification

function save_wc(){
	//alert();
	var wc= document.getElementById('txt_wc_description').value;
	$.post("../php/save_wc.php",{
		wc: wc
		}, function(result){
		 if(result==1){
				alert("Fill up all fields.");
			}else if(result==2){
				alert("Succcessfully Added.");
				//$("#closeformadd").click();
				location.reload();
			}else{
				alert(result);
			}

	});
}
//add water classification


//update water classification

function update_wc(){

	var wc_id = document.getElementById('txt_edit_wc_id').value;
	var description = document.getElementById('txt_edit_wc_description').value;

	$.post("../php/update_wc.php",{
		wc_id: wc_id,
		description: description
		}, function(result){
		 if(result==1){
				alert("Fill up all fields.");
			}else if(result==2){
				alert("Succcessfully Updated.");
				//$("#closeformadd").click();
				location.reload();
			}else{
				alert(result);
			}

	});
}
//delete water classification

function delete_wc(wc_id){
	//alert(tot_id);
	var x = confirm("Are you sure you want to delete this Water classification?");
	if(x){
		$.post("../php/delete_wc.php",{
		wc_id: wc_id
		}, function(result){
		 if(result==1){
				alert("Fill up all fields.");
			}else if(result==2){
				alert("Succcessfully Deleted.");
				//$("#closeformadd").click();
				location.reload();
			}else{
				alert(result);
			}

	});
	}
}

//add water classification


//add category
function add_category(){
	$('#mod_add_category').modal();
}
function add_sub_category(){
	$('#mod_add_sub_category').modal();
}

//save category
function save_category(){
	//alert();
	var category = document.getElementById('txt_category').value;
	$.post("../php/save_category.php",{
		category: category
		}, function(result){
		 if(result==1){
				alert("Fill up all fields.");
			}else if(result==2){
				alert("Succcessfully Added.");
				//$("#closeformadd").click();
				location.reload();
			}else{
				alert(result);
			}

	});
}
//add category

//add sub-category
function save_sub_category(){
	//alert();
	var category = document.getElementById('txt_sc_category').value;
	var sub_category = document.getElementById('txt_sc_category_desc').value;
	$.post("../php/save_sub_category.php",{
		category: category,
		sub_category: sub_category
		}, function(result){
		 if(result==1){
				alert("Fill up all fields.");
			}else if(result==2){
				alert("Succcessfully Added.");
				//$("#closeformadd").click();
				location.reload();
			}else{
				alert(result);
			}

	});
}

//add sub-category

//edit category
function edit_category(c_id,description){
	$('#mod_edit_category').modal();
	$('#txt_edit_category_id').val(c_id);
	$('#txt_edit_category').val(description);
}

function update_category(){
	
	var c_id = document.getElementById('txt_edit_category_id').value;
	var description = document.getElementById('txt_edit_category').value;
	
	$.post("../php/update_category.php",{
		c_id: c_id,
		description: description
		}, function(result){
		 if(result==1){
				alert("Fill up all fields.");
			}else if(result==2){
				alert("Succcessfully Updated.");
				//$("#closeformadd").click();
				location.reload();
			}else{
				alert(result);
			}

	});
}

//edit category

//delete category
function delete_category(c_id){
	var x = confirm("Are you sure you want to delete this Category?");
	if(x){
		$.post("../php/delete_category.php",{
		c_id: c_id
		}, function(result){
		 if(result==1){
				alert("Fill up all fields.");
			}else if(result==2){
				alert("Succcessfully Deleted.");
				//$("#closeformadd").click();
				location.reload();
			}else{
				alert(result);
			}

	});
	}
}
//delete category

//selected category
function selected_category(){
	var category = document.getElementById('txt_i_category').value;
	if(category.length==0){
		alert("Please select Category.");
        $('#txt_i_category').focus();
	}else{
		$.post("../php/selected_category.php",{
			category: category
			}, function(data){
			   $("#div_sub_category").html(data);
		});
	}

}
//selected category

//add category

//add item
function add_item(){
	$('#mod_add_item').modal();
}
function add_sub_category(){
	$('#mod_add_sub_category').modal();
}
//add item


//settings