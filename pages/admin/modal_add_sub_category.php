<!-- Modal -->
    <div class="modal fade" id="mod_add_sub_category"  align="center" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" align="center" >
            <div class="modal-content" >
                <div class="modal-header">
				<h5 class="modal-title" id="myModalLabel">Add Sub-Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                       
                </div>
                <div class="modal-body">
                    <div class="alert alert-info">
                        <b>Note:</b> Items with asterisk (*) are required.
                    </div>
			
                      </p>
                      <form class="forms-sample">
                        <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">* Category : </label>
                          <div class="col-sm-9">
                            <select type="text" class="form-control" id="txt_sc_category">
							<option></option>
							<?php 
							$sql_cat = $pdo->query("Select * from tbl_category order by c_description ASC");
							foreach($sql_cat as $row_cat){
								?>
								<option value="<?php echo $row_cat['c_id']?>" ><?php echo $row_cat['c_description']?></option>
								<?php
							}
							?>
							</select>
                          </div>
                        </div>
                       
                         <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">* Sub-Category : </label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="txt_sc_category_desc" placeholder="Enter Description">
                          </div>
                        </div>
                       
                        
                      </form>
					
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="save_sub_category();" title="Save" ><i class="fa fa-save" ></i> Save</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
