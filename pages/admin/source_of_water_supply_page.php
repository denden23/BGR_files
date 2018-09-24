<!-- Home page-->

<div class="card" align="center"> 
<div class="card-body"> 
<div  align="right" >
<button type="button" title="Add Type of Test" class="btn btn-icons btn-rounded btn-primary" onclick="add_sows();" ><i class="mdi mdi-plus" ></i></button> 
</div>
<div  ><h5 class="text-primary" >SOURCE OF WATER SUPPLY</h5></div>
		<div class="card-body bg-inverse-primary">
			<table id="tbl_type_of_test" class="table table-hover table-bordered table-condensed" >
				<thead class='bg-inverse-primary'>
					<th><font>#</th>
					<th><font>Source of Water Supply</th>
					<th>Action</th>
				</thead>
				<tbody>
					<?php
						$sql_list1 = "Select * from tbl_source_of_water ";
						$i = 1;
						foreach ($pdo->query($sql_list1) as $row_list1) {
							echo '<tr>';
							echo '<td><font>'. $i . '</td>';
							echo '<td><font>'. $row_list1['sow_description'] . '</td>';
							?>
							<td style="padding:0%">
							&nbsp;<button type="button" class="btn btn-icons btn-inverse-success btn-sm" title="Edit Source of water supply" onclick="edit_sow('<?php echo $row_list1['sow_id'] ?>','<?php echo $row_list1['sow_description'] ?>');" ><i class="mdi mdi-pencil"></i></button>&nbsp;
							&nbsp;<button type="button" class="btn btn-icons btn-inverse-danger btn-sm" title="Delete Source of water supply" onclick="delete_sow('<?php echo $row_list1['sow_id'] ?>');"  ><i class="mdi mdi-delete"></i></button>&nbsp;
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
<?php include('modal_add_sows.php');?>
<?php include('modal_edit_source_of_water.php');?>