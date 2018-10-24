  <?php 
  require"../db/database.php";
  $pdo = Database::connect();
 if($_POST['category'] )
{
      $category = $_POST['category'];
      $txt_id = $_POST['txt_category'];
	  $sql_det = $pdo->query("Select * from tbl_category where c_id='$category'");
		foreach($sql_det as $row_det){
			
		if($txt_id=='load_item_details'){
			   ?>
				<div class="row">
				  <div class="col-md-6">
					<div class="form-group row">
					  <label class="col-sm-3 col-form-label">* Item Name : </label>
					  <div class="col-sm-9">
						 <select type="text" class="form-control" id="txt_p_i_id">
						<?php 
						$sql_item = $pdo->query("Select * from tbl_item where c_id='$category' order by i_description ASC");
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
						
	  <?php
	
		}else{
			?>
			<div class="row">
		  <div class="col-md-6">
			<div class="form-group row">
			  <label class="col-sm-3 col-form-label">* Item Name : </label>
			  <div class="col-sm-9">
				 <select type="text" class="form-control" id="txt_edit_p_i_id" >
				<option></option>
				<?php 
				$sql_item = $pdo->query("Select * from tbl_item where c_id='$category' order by i_description ASC");
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
			<?php
			
		}
      
   
	}
}

    ?>