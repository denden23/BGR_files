  <?php 
  require"../db/database.php";
  $pdo = Database::connect();
 if($_POST['customer'] )
{
      $customer = $_POST['customer'];
      $txt_id = $_POST['txt_id'];
	  $sql_det = $pdo->query("Select * from tbl_customer_information where ci_id='$customer'");
		foreach($sql_det as $row_det){
			
		if($txt_id=='txt_si_ci_id'){
			   ?>
				<div class="row">
						  
						  <div class="col-md-6">
							<div class="form-group row">
							  <label class="col-sm-3 col-form-label">* Company Name : </label>
							  <div class="col-sm-9">
								<input type="text" class="form-control" placeholder="Enter Company Name" id="txt_si_company_name"  value="<?php echo $row_det['ci_company'] ?>"  />
							  </div>
							</div>
						  </div>
						   <div class="col-md-6">
							<div class="form-group row">
							  <label class="col-sm-3 col-form-label">* Company Address : </label>
							  <div class="col-sm-9">
								<input type="text" class="form-control" placeholder="Enter Company Address" id="txt_si_company_address" value="<?php echo $row_det['ci_company_address'] ?>" />
							  </div>
							</div>
							</div>
						</div>
						<div class="row">
						 <div class="col-md-6">
							<div class="form-group row">
							  <label class="col-sm-3 col-form-label">* Contact Number : </label>
							  <div class="col-sm-9">
								<input type="text" class="form-control" placeholder="Enter Contact Number" id="txt_si_contact_num" value="<?php echo $row_det['ci_contact_no'] ?>" />
							  </div>
							</div>
							</div>
						   <div class="col-md-6">
							<div class="form-group row">
							  <label class="col-sm-3 col-form-label"> Email Address : </label>
							  <div class="col-sm-9">
								<input type="text" class="form-control" placeholder="Enter Email Address" id="txt_si_email" value="<?php echo $row_det['ci_email'] ?>" />
							  </div>
							</div>
							</div>
						 
						  
						</div> 
						
	  <?php
	
		}else{
			?>
			<div class="row">
						  
						  <div class="col-md-6">
							<div class="form-group row">
							  <label class="col-sm-3 col-form-label">* Company Name : </label>
							  <div class="col-sm-9">
								<input type="text" class="form-control" placeholder="Enter Company Name" id="txt_edit_si_company_name"   value="<?php echo $row_det['ci_company'] ?>"  />
							  </div>
							</div>
						  </div>
						  <div class="col-md-6">
							<div class="form-group row">
							  <label class="col-sm-3 col-form-label">* Company Address : </label>
							  <div class="col-sm-9">
								<input type="text" class="form-control" placeholder="Enter Company Address" id="txt_edit_si_company_address"  value="<?php echo $row_det['ci_company_address'] ?>" />
							  </div>
							</div>
							</div>
						</div>
						<div class="row">
						 <div class="col-md-6">
							<div class="form-group row">
							  <label class="col-sm-3 col-form-label">* Contact Number : </label>
							  <div class="col-sm-9">
								<input type="text" class="form-control" placeholder="Enter Contact Number" id="txt_edit_si_contact_num" value="<?php echo $row_det['ci_contact_no'] ?>" />
							  </div>
							</div>
							</div>
						  <div class="col-md-6">
							<div class="form-group row">
							  <label class="col-sm-3 col-form-label"> Email Address : </label>
							  <div class="col-sm-9">
								<input type="text" class="form-control" placeholder="Enter Email Address" id="txt_edit_si_email"  value="<?php echo $row_det['ci_email'] ?>" />
							  </div>
							</div>
							</div>
						</div> 
						
			<?php
			
		}
      
   
	}
}

    ?>