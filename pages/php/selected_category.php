  <?php 
  require"../db/database.php";
  $pdo = Database::connect();
 if($_POST['category'] )
{
      $category = $_POST['category'];
      
      ?>
		<select type="text" class="form-control" id="txt_i_sub_category" >
			<option></option>
			<?php 
			$sql_cat = $pdo->query("Select * from tbl_sub_category where sc_c_id='$category' order by sc_description ASC");
			foreach($sql_cat as $row_cat){
				?>
				<option value="<?php echo $row_cat['sc_id']?>" ><?php echo $row_cat['sc_description']?></option>
				<?php
			}
			?>
		</select>
	  <?php
	
}

    ?>