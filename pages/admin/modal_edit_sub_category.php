<!-- Modal -->
    <div class="modal fade" id="mod_edit_sub_category"  align="center" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" align="center" >
            <div class="modal-content" >
                <div class="modal-header">
				<h5 class="modal-title" id="myModalLabel">Edit Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                       
                </div>
                <div class="modal-body">
                    <div class="alert alert-info">
                        <b>Note:</b> Items with asterisk (*) are required.
                    </div>
			
                      </p>
                      <form class="forms-sample">
                        <div class="form-group row">
						 <input type="number" class="form-control" id="txt_edit_category_id" hidden readonly >
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">* Description : </label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="txt_edit_category" placeholder="Enter Description">
                          </div>
                        </div>
                       
                        
                      </form>
					
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="update_category();" title="Save" ><i class="fa fa-save" ></i> Save</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
