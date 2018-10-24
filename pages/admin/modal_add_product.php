<!-- Modal -->
    <div class="modal fade" id="mod_add_product"  align="center" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" align="center" style="max-width:90%;"  >
            <div class="modal-content"  >
                <div class="modal-header">
				<h5 class="modal-title" id="myModalLabel">Add Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                       
                </div>
                <div class="modal-body">
                    <div class="alert alert-info">
                        <b>Note:</b> Items with asterisk (*) are required.
                    </div>
			
                      </p>
                  <form class="form-sample">
                    <p class="card-description">
                      <strong>Customer Information</strong>
                    </p>
					 <div class="row">
					  <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">*  Supplier : </label>
                          <div class="col-sm-9">
                            <select type="text" class="form-control" id="txt_p_supplier"  >
							<option></option>
							<?php 
							$sql_sup = $pdo->query("Select * from tbl_supplier order by s_supplier_name ASC");
							foreach($sql_sup as $row_sup){
								?>
								<option value="<?php echo $row_sup['s_id']?>" ><?php echo $row_sup['s_supplier_name']?></option>
								<?php
							}
							?>
                            </select>
                          </div>
                        </div>
						</div>
					</div>
				
					<div class="row">
						  <div class="col-md-6">
							<div class="form-group row">
							  <label class="col-sm-3 col-form-label">* Category : </label>
							  <div class="col-sm-9">
							 <select type="text" class="form-control" id="txt_p_c_id" onchange="selected_product_category('load_item_details');" >
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
							</div>
						</div>
                   
					<div id="load_sub_category" >
						<div class="row">
						  
						  <div class="col-md-6">
							<div class="form-group row">
							  <label class="col-sm-3 col-form-label">* Sub-Category : </label>
							  <div class="col-sm-9">
								 <select type="text" class="form-control" id="txt_p_sc_id" disabled >
								<option></option>
								<?php 
								$sql_item = $pdo->query("Select * from tbl_sub_category order by sc_description ASC");
								foreach($sql_item as $row_item){
									?>
									<option value="<?php echo $row_item['sc_id']?>" ><?php echo $row_item['sc_description']?></option>
									<?php
								}
								?>
								</select>
							  </div>
							</div>
						  </div>
						  </div>
						</div>
						<div id="load_item_details" >
						<div class="row">
						  
						  <div class="col-md-6">
							<div class="form-group row">
							  <label class="col-sm-3 col-form-label">* Item Name : </label>
							  <div class="col-sm-9">
								 <select type="text" class="form-control" id="txt_p_i_id" disabled >
								<option></option>
								<?php 
								$sql_item = $pdo->query("Select * from tbl_item order by i_description ASC");
								foreach($sql_item as $row_item){
									?>
									<option value="<?php echo $row_item['i_id']?>" ><?php echo $row_item['i_description']?></option>
									<?php
								}
								?>
								</select>
							  </div>
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
              
            </div>
            <!-- /.modal-content -->
        </div>
    
        <!-- /.modal-dialog -->
    <!-- /.modal -->
