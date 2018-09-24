<!-- Home page-->

<div class="card" align="center" > 
<div class="card-body "> 
<div  align="right" >
<button type="button" title="Add Type of Test" class="btn btn-icons btn-rounded btn-primary" onclick="add_wc();" ><i class="mdi mdi-plus" ></i></button> 
</div>
<div  ><h5 class="text-primary" >WATER CLASSICATION</h5></div>
		<div class="card-body bg-inverse-primary">
			<table id="tbl_type_of_test" class="table  table-hover table-bordered table-condensed" >
				<thead class='bg-inverse-primary'>
					<th><font>#</th>
					<th><font>Water Classification</th>
					<th>Action</th>
				</thead>
				<tbody>
					<?php
						$sql_list1 = "Select * from tbl_water_classification ";
						$i = 1;
						foreach ($pdo->query($sql_list1) as $row_list1) {
							echo '<tr>';
							echo '<td><font>'. $i . '</td>';
							echo '<td><font>'. $row_list1['wc_description'] . '</td>';
							?>
							<td style="padding:0%">
							&nbsp;<button type="button" class="btn btn-icons btn-inverse-success btn-sm" title="Edit Water classification" onclick="edit_wc('<?php echo $row_list1['wc_id'] ?>','<?php echo $row_list1['wc_description'] ?>');" ><i class="mdi mdi-pencil"></i></button>&nbsp;
							&nbsp;<button type="button" class="btn btn-icons btn-inverse-danger btn-sm" title="Delete Water classification" onclick="delete_wc('<?php echo $row_list1['wc_id'] ?>');"  ><i class="mdi mdi-delete"></i></button>&nbsp;
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
<?php include('modal_add_water_classification.php');?>
<?php include('modal_edit_water_classification.php');?>