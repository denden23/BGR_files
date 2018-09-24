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
					<th><font>Type of Test</th>
					<th>Action</th>
				</thead>
				<tbody>
					<?php
						$sql_list1 = "Select * from tbl_item ";
						$i = 1;
						foreach ($pdo->query($sql_list1) as $row_list1) {
							echo '<tr>';
							echo '<td><font>'. $i . '</td>';
							echo '<td><font>'. $row_list1['i_description'] . '</td>';
							?>
							<td style="padding:0%">
							&nbsp;<button type="button" class="btn btn-icons btn-inverse-success btn-sm" title="Edit Type of test" onclick="edit_tot('<?php echo $row_list1['i_id'] ?>','<?php echo $row_list1['i_description'] ?>');" ><i class="mdi mdi-pencil"></i></button>&nbsp;
							&nbsp;<button type="button" class="btn btn-icons btn-inverse-danger btn-sm" title="Delete Type of test" onclick="delete_tot('<?php echo $row_list1['i_id'] ?>');"  ><i class="mdi mdi-delete"></i></button>&nbsp;
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
<?php include('modal_edit_type_of_test.php');?>