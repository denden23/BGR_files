<!-- Modal -->
    <div class="modal fade" id="mod_edit_customer"  align="center" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" align="center" >
            <div class="modal-content" >
                <div class="modal-header">
				<h5 class="modal-title" id="myModalLabel">Edit Customer Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                       
                </div>
                <div class="modal-body">
                    <div class="alert alert-info">
                        <b>Note:</b> Items with asterisk (*) are required.
                    </div>
			
                      </p>
                      <form class="forms-sample">
					    <input type="number" id="txt_ci_id" readonly hidden />
                        <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">* Firstname : </label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Enter Firstname" id="txt_edit_ci_fname" />
							</div>
                        </div>
						<div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">* Middlename : </label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Enter Middlename" id="txt_edit_ci_mname" />
							</div>
                        </div>
						<div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">* Lastname : </label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Enter Lastname" id="txt_edit_ci_lname" />
							</div>
                        </div>
                       
                        <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">* Company Name : </label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control"  placeholder="Enter Company Name" id="txt_edit_ci_cname" />
                          </div>
                        </div>
						<div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">* Company Address : </label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control"  placeholder="Enter Company Address" id="txt_edit_ci_address" />
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">* Contact Number : </label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Enter Contact Number" id="txt_edit_ci_number" />
                          </div>
                        </div>
                       <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">* Email Address : </label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control"  placeholder="Enter Email Address" id="txt_edit_ci_email" />
                          </div>
                        </div>
                       
                        
                      </form>
					
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="update_customer_info();" title="Save" ><i class="fa fa-save" ></i> Save</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
