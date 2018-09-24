<!-- Modal -->
    <div class="modal fade" id="mod_add_transaction"  align="center" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" align="center" style="max-width:90%;"  >
            <div class="modal-content"  >
                <div class="modal-header">
				<h5 class="modal-title" id="myModalLabel">Add Transaction</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                       
                </div>
                <div class="modal-body">
                    <div class="alert alert-info">
                        <b>Note:</b> Items with asterisk (*) are required.
                    </div>
			
                      </p>
                      <form class="forms-sample">
                           
          
                 
                  <form class="form-sample">
                    <p class="card-description">
                      <strong>Customer Information</strong>
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">* Client's Name : </label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Enter Client's Name" id="txt_si_client_name" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">* Company Name : </label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Enter Company Name" id="txt_si_company_name"  />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
					 <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">* Contact Number : </label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Enter Contact Number" id="txt_si_contact_num" />
                          </div>
                        </div>
						</div>
                      
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">* Company Address : </label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Enter Company Address" id="txt_si_company_address" />
                          </div>
                        </div>
						</div>
                      
                    </div> 
					<div class="row">
					 <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"> Email Address : </label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Enter Email Address" id="txt_si_email" />
                          </div>
                        </div>
						</div>
                    </div>
					 <p class="card-description">
                      <strong> Sampling Information </strong>
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">* Date of Sampling : </label>
                          <div class="col-sm-9">
							  <input type="date" class="form-control" placeholder="Enter Date of Sampling" id="txt_si_date_sampling" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">* Time of Sampling : </label>
                          <div class="col-sm-9">
							  <input type="time" class="form-control" placeholder="Enter Time of Sampling" id="txt_si_time_sampling" />
                          </div>
                        </div>
                      </div>
                    </div>
					
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">* Water Source: </label>
                          <div class="col-sm-9">
                            <select class="form-control" id="txt_si_sow_id" >
							<option></option>
                             <?php 
							  $sql_sow = $pdo->query("Select * from tbl_source_of_water order by sow_description ASC");
							  foreach($sql_sow as $row_sow){
								  ?>
								  <option value="<?php echo $row_sow['sow_id']?>" ><?php echo $row_sow['sow_description']?></option>
								  <?php
							  }
							  ?>
							  	<option>Others</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">* Water Classification : </label>
                          <div class="col-sm-9">
                            <select class="form-control" id="txt_si_wc_id" >
							<option></option>
                             <?php 
							  $sql_sow = $pdo->query("Select * from tbl_water_classification order by wc_description ASC");
							  foreach($sql_sow as $row_sow){
								  ?>
								  <option value="<?php echo $row_sow['wc_id']?>" ><?php echo $row_sow['wc_description']?></option>
								  <?php
							  }
							  ?>
							  <option>Others</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
										
                    
					<div class="row">
					 <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">* Sampling Point : </label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" placeholder="Enter Sampling Point" id="txt_si_sampling_point" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">* Sampled By : </label>
                          <div class="col-sm-9">
                               <input type="text" class="form-control" placeholder="Enter Sampled By" id="txt_si_sampled_by" />
                          </div>
                        </div>
                      </div>
					 
                    </div>
					
					<div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">* Type of Test: </label>
                          <div class="col-sm-9">
                            <select class="form-control" id="txt_si_tot_id" >
							<option></option>
                             <?php 
							  $sql_sow = $pdo->query("Select * from tbl_type_of_test order by tot_description ASC");
							  foreach($sql_sow as $row_sow){
								  ?>
								  <option value="<?php echo $row_sow['tot_id']?>" ><?php echo $row_sow['tot_description']?></option>
								  <?php
							  }
							  ?>
							  	<option>Others</option>
                            </select>
                          </div>
                        </div>
                      </div>
					  <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">* Notes : </label>
                          <div class="col-sm-9">
                               <input type="text" class="form-control" placeholder="Enter Notes" id="txt_si_notes" />
                          </div>
                        </div>
                      </div>
					 
                    </div> 
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">* Amount: </label>
                          <div class="col-sm-9">
                              <input type="number" class="form-control" placeholder="Enter Amount" id="txt_si_amount" />
                         
                          </div>
                        </div>
                      </div>
					  <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">* Name of Sanitary Inspector : </label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" placeholder="Enter Name of Sanitary Inspector" id="txt_si_name_of_si" />
                         
                          </div>
                        </div>
                      </div>
                    </div>
					<div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">* Area of S.I. : </label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" placeholder="Enter Area of S.I." id="txt_si_area_of_si" />
                         
                          </div>
                        </div>
                      </div>
					  <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">* Commission of S.I. : </label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" placeholder="Enter Commission of S.I." id="txt_si_commission_si" />
                         
                          </div>
                        </div>
                      </div>
                    </div>
                    
                      </form>
					
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="save_transaction();" title="Save" ><i class="fa fa-save" ></i> Save</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->