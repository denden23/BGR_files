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

//Product list
//add product
function add_product(){
	$('#mod_add_product').modal();
}
//add product

//Product list

//add customer info
function add_customer_info(){
	$('#mod_add_customer').modal();
}

//save customer infor

function save_customer_info(){
	var c_fname = document.getElementById('txt_ci_fname').value;
	var c_mname = document.getElementById('txt_ci_mname').value;
	var c_lname = document.getElementById('txt_ci_lname').value;
	var c_company = document.getElementById('txt_ci_cname').value;
	var c_address = document.getElementById('txt_ci_address').value;
	var c_number = document.getElementById('txt_ci_number').value;
	var c_email = document.getElementById('txt_ci_email').value;
	
	if(c_fname.length==0 ){
             alert("Please input Customer Firstname.");
             $('#txt_ci_fname').focus();
	 }else if(c_lname.length==0 ){
		 alert("Please input Customer Lastname.");
		 $('#txt_ci_lname').focus();
	 }else if(c_company.length==0 ){
		 alert("Please input Customer Company.");
		 $('#txt_ci_cname').focus();
	 }else if(c_address.length==0 ){
		 alert("Please input Customer Address.");
		 $('#txt_ci_address').focus();
	 }else{
		 $.post("../php/save_customer_info.php",{
				c_fname:c_fname,
				c_mname:c_mname,
				c_lname:c_lname,
				c_company:c_company,
				c_address:c_address,
				c_number:c_number,
				c_email:c_email
					}, function(result){
				 if(result==1){
						alert("Fill up all fields.");
					}else if(result==2){
						alert("Succcessfully Added.");
						location.reload();
					}else{
						alert(result);
					}

			});
	 }
}
//save customer infor

//edit customer infor
function edit_customer_info(ci_id,ci_fname,ci_mname,ci_lname,ci_company,ci_contact_no,ci_company_address,ci_email){
	$('#mod_edit_customer').modal();
	$('#txt_ci_id').val(ci_id);
	$('#txt_edit_ci_fname').val(ci_fname);
	$('#txt_edit_ci_mname').val(ci_mname);
	$('#txt_edit_ci_lname').val(ci_lname);
	$('#txt_edit_ci_cname').val(ci_company);
	$('#txt_edit_ci_address').val(ci_company_address);
	$('#txt_edit_ci_number').val(ci_contact_no);
	$('#txt_edit_ci_email').val(ci_email);
}

function update_customer_info(){
	var ci_id = document.getElementById('txt_ci_id').value;
	var c_fname = document.getElementById('txt_edit_ci_fname').value;
	var c_mname = document.getElementById('txt_edit_ci_mname').value;
	var c_lname = document.getElementById('txt_edit_ci_lname').value;
	var c_company = document.getElementById('txt_edit_ci_cname').value;
	var c_address = document.getElementById('txt_edit_ci_address').value;
	var c_number = document.getElementById('txt_edit_ci_number').value;
	var c_email = document.getElementById('txt_edit_ci_email').value;
	 $.post("../php/update_customer_info.php",{
			c_fname:c_fname,
			c_mname:c_mname,
			c_lname:c_lname,
			c_company:c_company,
			c_address:c_address,
			c_number:c_number,
			c_email:c_email,
			ci_id:ci_id
			 }, function(result){
				 if(result==1){
						alert("Fill up all fields.");
					}else if(result==2){
						alert("Succcessfully Updated.");
						location.reload();
					}else{
						alert(result);
					}
		});
}
//edit customer infor

//delete customer info
function delete_customer_info(ci_id){
	var x = confirm("Are you sure you want to delete this Customer Information?");
	if(x){
		$.post("../php/delete_customer_information.php",{
		ci_id:ci_id
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
//delete customer info
//add customer info

//selected customer
function selected_customer(txt_id,form_load){
 var customer = document.getElementById(txt_id).value;
	 $.post("../php/load_customer_info.php",{
			customer: customer,
			txt_id: txt_id
			}, function(data){
			$("#"+form_load+"").html(data);
		});
}
//selected customer
// transaction

//add transaction
function add_transaction(){
	$('#mod_add_transaction').modal();
}

//add transaction
function save_transaction(){
	var client_name = document.getElementById('txt_si_ci_id').value;
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
	//alert(client_name+date_sampling+time_sampling+sow_id+wc_id+tot_id+commission_si+area_si+name_of_si+sampling_point+sampled_by+notes+amount);
		if(client_name.length==0 ){
             alert("Please select Client.");
             $('#txt_si_ci_id').focus();
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
         }else if(sampling_point.length==0 ){
             alert("Please input Sampling point.");
             $('#txt_si_sampling_point').focus();
         }else if(sampled_by.length==0 ){
             alert("Please input Sampled by.");
             $('#txt_si_sampled_by').focus();
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
         }else{
			$.post("../php/save_transaction.php",{
				client_name:client_name,
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
//edit transaction
function edit_transaction(si_id,si_ci_id,si_sample_by,si_date,si_sow_id,si_wc_id,si_time,si_tot_id,si_sampling_point,si_commission_si,si_notes,si_amount,si_name_of_si,si_area_of_si){
	$('#mod_edit_transaction').modal();
	$('#txt_edit_si_id').val(si_id);
	$('#txt_edit_si_ci_id').val(si_ci_id);
	$('#txt_edit_si_date_sampling').val(si_date);
	$('#txt_edit_si_time_sampling').val(si_time);
	$('#txt_edit_si_sow_id').val(si_sow_id);
	$('#txt_edit_si_wc_id').val(si_wc_id);
	$('#txt_edit_si_sampling_point').val(si_sampling_point);
	$('#txt_edit_si_sampled_by').val(si_sample_by);
	$('#txt_edit_si_tot_id').val(si_tot_id);
	$('#txt_edit_si_notes').val(si_notes);
	$('#txt_edit_si_amount').val(si_amount);
	$('#txt_edit_si_name_of_si').val(si_name_of_si);
	$('#txt_edit_si_area_of_si').val(si_area_of_si);
	$('#txt_edit_si_commission_si').val(si_commission_si);
	var txt_id ='txt_edit_si_id';
	 $.post("../php/load_customer_info.php",{
			customer: si_ci_id,
			txt_id: txt_id
			}, function(data){
			$("#load_customer_info1").html(data);
		});
}

function update_transaction(){
	var si_id = document.getElementById('txt_edit_si_id').value;
	var client_name = document.getElementById('txt_edit_si_ci_id').value;
	var date_sampling = document.getElementById('txt_edit_si_date_sampling').value;
	var time_sampling = document.getElementById('txt_edit_si_time_sampling').value;
	var sow_id = document.getElementById('txt_edit_si_sow_id').value;
	var wc_id = document.getElementById('txt_edit_si_wc_id').value;
	var tot_id = document.getElementById('txt_edit_si_tot_id').value;
	var amount = document.getElementById('txt_edit_si_amount').value;
	var name_of_si = document.getElementById('txt_edit_si_name_of_si').value;
	var area_si = document.getElementById('txt_edit_si_area_of_si').value;
	var commission_si = document.getElementById('txt_edit_si_commission_si').value;
	var sampling_point = document.getElementById('txt_edit_si_sampling_point').value;
	var sampled_by = document.getElementById('txt_edit_si_sampled_by').value;
	var notes = document.getElementById('txt_edit_si_notes').value;
	//alert(client_name+date_sampling+time_sampling+sow_id+wc_id+tot_id+commission_si+area_si+name_of_si+sampling_point+sampled_by+notes+amount);
		if(client_name.length==0 ){
             alert("Please select Client.");
             $('#txt_edit_si_ci_id').focus();
         }else if(date_sampling.length==0 ){
             alert("Please input Date of Sampling.");
             $('#txt_edit_si_date_sampling').focus();
         }else if(time_sampling.length==0 ){
             alert("Please input Time of Sampling.");
             $('#txt_edit_si_time_sampling').focus();
         }else if(sow_id.length==0 ){
             alert("Please select Water Source.");
             $('#txt_edit_si_sow_id').focus();
         }else if(wc_id.length==0 ){
             alert("Please select Water Classification.");
             $('#txt_edit_si_wc_id').focus();
         }else if(sampling_point.length==0 ){
             alert("Please input Sampling point.");
             $('#txt_edit_si_sampling_point').focus();
         }else if(sampled_by.length==0 ){
             alert("Please input Sampled by.");
             $('#txt_edit_si_sampled_by').focus();
         }else if(tot_id.length==0 ){
             alert("Please select Type of Test.");
             $('#txt_edit_si_tot_id').focus();
         }else if(amount.length==0 ){
             alert("Please input Amount.");
             $('#txt_edit_si_amount').focus();
         }else if(name_of_si.length==0 ){
             alert("Please input Name of Sanitary Inspector.");
             $('#txt_edit_si_name_of_si').focus();
         }else if(area_si.length==0 ){
             alert("Please input Area of S.I.");
             $('#txt_edit_si_area_of_si').focus();
         }else if(commission_si.length==0 ){
             alert("Please input Commission of S.I.");
             $('#txt_edit_si_commission_si').focus();
         }else{
			$.post("../php/update_transaction.php",{
				client_name:client_name,
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
				amount:amount,
				si_id:si_id
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
}
//edit transaction

//delete transaction 
function delete_transaction(si_id){
	var x = confirm("Are you sure you want to delete this Transaction?");
	if(x){
		$.post("../php/delete_transaction.php",{
		si_id: si_id
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
//delete transaction 

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
	if(category.length==0){
		 alert("Please select Category.");
             $('#txt_sc_category').focus();
	}else if(sub_category.length==0){
		 alert("Please input Sub-Category.");
             $('#txt_sc_category_desc').focus();
	}else{
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

//edit sub
function edit_sub_category(c_id,sc_id,description){
	$('#mod_edit_sub_category').modal();
	$('#txt_sc_id').val(sc_id);
	$('#txt_edit_sc_category').val(c_id);
	$('#txt_edit_sub_desc').val(description);
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
//edit sub

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
function selected_category(txt , div_sub_category){
	var category = document.getElementById(txt).value;
	if(category.length==0){
		alert("Please select Category.");
        $('#'+txt).focus();
	}else{
		$.post("../php/selected_category.php",{
			category: category
			}, function(data){
			   $("#"+div_sub_category).html(data);
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

//save item
function save_item(){
	//alert();
	var category = document.getElementById('txt_i_category').value;
	var sub_category = document.getElementById('txt_i_sub_category').value;
	var item = document.getElementById('txt_item').value;
	if(category.length==0){
		alert("Please select Category.");
        $('#txt_i_category').focus();
	}else if(item.length==0){
		alert("Please input Item description.");
        $('#txt_item').focus();
	}else{
		$.post("../php/save_item.php",{
			category: category,
			sub_category: sub_category,
			item: item
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
//save item

//edit item
function edit_item(i_id,description, c_id, sc_id){
	$('#mod_edit_item').modal();
	$('#txt_i_id').val(i_id);
	$('#txt_edit_item').val(description);
	$('#txt_edit_i_category').val(c_id);
	$('#txt_i_sub_category').val(sc_id);
}

function update_item(){
	var i_id = document.getElementById('txt_i_id').value;
	var c_id = document.getElementById('txt_edit_i_category').value;
	var sc_id = document.getElementById('txt_i_sub_category').value;
	var item = document.getElementById('txt_edit_item').value;
	if(item.length==0){
		alert("Please input Item description.");
        $('#txt_edit_item').focus();
	}else{
		$.post("../php/update_item.php",{
		i_id: i_id,
		c_id: c_id,
		sc_id: sc_id,
		item: item
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
	
}

//delete item
function delete_item(i_id){
	var x = confirm("Are you sure you want to delete this Item?");
	if(x){
		$.post("../php/delete_item.php",{
		i_id: i_id
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
//delete item


//selected category
function selected_product_category(txt_category){
	var category = document.getElementById('txt_p_c_id').value;
	$.post("../php/load_items.php",{
		category: category,
		txt_category:txt_category
		}, function(data){
			$("#"+txt_category+"").html(data);
			
	});
}
//selected category

//edit item

//add item

//date
$('#txt_edit_si_date_sampling').keypress(function(event) {event.preventDefault();});
$('#txt_si_date_sampling').keypress(function(event) {event.preventDefault();});

//date

//settings