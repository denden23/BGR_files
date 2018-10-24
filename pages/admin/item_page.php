<!-- Home page-->

<div class="card" align="center" > 
<div class="card-body "> 
<div  align="right" >
<button type="button" title="Add Item" class="btn btn-icons btn-rounded btn-primary" onclick="add_item();" ><i class="mdi mdi-plus" ></i></button> 
</div>
<div  ><h5 class="text-primary" >ITEM</h5></div>
		<div class="card-body bg-inverse-primary">
			<table id="tbl_type_of_test" class="table  table-hover table-bordered table-condensed" >
				<thead class='bg-inverse-primary'>
					<th><font>#</th>
					<th><font>Category</th>
					<th><font>Sub-Category</th>
					<th><font>Item</th>
					<th>Action</th>
				</thead>
				<tbody>
					<?php
						$sql_list1 = "Select * from tbl_item order by data_as_of desc";
						$i = 1;
						foreach ($pdo->query($sql_list1) as $row_list1) {
							$category ='';
							$sub_category ='';
							$sel_category = $pdo->query("Select * from tbl_category where c_id ='".$row_list1['c_id']."'");
							foreach($sel_category as $row_cat){
								$category = $row_cat['c_description'];
							}
							$sel_sub_category = $pdo->query("Select * from tbl_sub_category where sc_id ='".$row_list1['sc_id']."'");
							foreach($sel_sub_category as $row_sub_cat){
								$sub_category = $row_sub_cat['sc_description'];
							}
							
							echo '<tr>';
							echo '<td><font>'. $i . '</td>';
							echo '<td><font>'. $category . '</td>';
							echo '<td><font>'. $sub_category . '</td>';
							echo '<td><font>'. $row_list1['i_description'] . '</td>';
							?>
							<td style="padding:0%">
							&nbsp;<button type="button" class="btn btn-icons btn-inverse-success btn-sm" title="Edit Item" onclick="edit_item('<?php echo $row_list1['i_id'] ?>','<?php echo $row_list1['i_description'] ?>','<?php echo $row_list1['c_id'] ?>','<?php echo $row_list1['sc_id'] ?>');" ><i class="mdi mdi-pencil"></i></button>&nbsp;
							&nbsp;<button type="button" class="btn btn-icons btn-inverse-danger btn-sm" title="Delete Item" onclick="delete_item('<?php echo $row_list1['i_id'] ?>');"  ><i class="mdi mdi-delete"></i></button>&nbsp;
							</td>
							<?php
							echo '</tr>';
						   $i++;
						}
					?>
				</tbody>
			</table>
		</div>    
	
	
	
	
		
		
		
	</div>
</div>
<?php include('modal_add_item.php');?>
<?php include('modal_edit_item.php');?>