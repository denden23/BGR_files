<!-- Home page-->

<div class="card" align="center" style="width:50%; float:left"  > 
<div class="card" align="center" > 
<div class="card-body "> 
<div  align="right" >
<button type="button" title="Add Category" class="btn btn-icons btn-rounded btn-primary" onclick="add_category();" ><i class="mdi mdi-plus" ></i></button> 
</div>
<div  ><h5 class="text-primary" >CATEGORY</h5></div>
		<div class="card-body bg-inverse-primary">
			<table id="tbl_category" class="table  table-hover table-bordered table-condensed" >
				<thead class='bg-inverse-primary'>
					<th><font>#</th>
					<th><font>Category</th>
					<th>Action</th>
				</thead>
				<tbody>
					<?php
						$sql_list1 = "Select * from tbl_category ";
						$i = 1;
						foreach ($pdo->query($sql_list1) as $row_list1) {
							echo '<tr>';
							echo '<td><font>'. $i . '</td>';
							echo '<td><font>'. $row_list1['c_description'] . '</td>';
							?>
							<td style="padding:0%">
							&nbsp;<button type="button" class="btn btn-icons btn-inverse-success btn-sm" title="Edit Category" onclick="edit_category('<?php echo $row_list1['c_id'] ?>','<?php echo $row_list1['c_description'] ?>');" ><i class="mdi mdi-pencil"></i></button>&nbsp;
							&nbsp;<button type="button" class="btn btn-icons btn-inverse-danger btn-sm" title="Delete Category" onclick="delete_category('<?php echo $row_list1['c_id'] ?>');"  ><i class="mdi mdi-delete"></i></button>&nbsp;
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
</div>
<?php include('modal_add_category.php');?>
<?php include('modal_edit_category.php');?>
<!-- Home page-->

<div class="card" align="center" style="width:50%; float:right"  > 
<div class="card" align="center" > 
<div class="card-body "> 
<div  align="right" >
<button type="button" title="Add Sub-Category" class="btn btn-icons btn-rounded btn-primary" onclick="add_sub_category();" ><i class="mdi mdi-plus" ></i></button> 
</div>
<div  ><h5 class="text-primary" >SUB-CATEGORY</h5></div>
		<div class="card-body bg-inverse-primary">
			<table id="tbl_sub-category" class="table  table-hover table-bordered table-condensed" >
				<thead class='bg-inverse-primary'>
					<th><font>#</th>
					<th><font>Category</th>
					<th><font>Sub-Category</th>
					<th>Action</th>
				</thead>
				<tbody>
					<?php
						$sql_list1 = "Select b.c_description, a.sc_id ,a.sc_description 
						from tbl_sub_category a, tbl_category b where b.c_id=a.sc_c_id";
						$i = 1;
						foreach ($pdo->query($sql_list1) as $row_list1) {
							echo '<tr>';
							echo '<td><font>'. $i . '</td>';
							echo '<td><font>'. $row_list1['c_description'] . '</td>';
							echo '<td><font>'. $row_list1['sc_description'] . '</td>';
							?>
							<td style="padding:0%">
							&nbsp;<button type="button" class="btn btn-icons btn-inverse-success btn-sm" title="Edit Sub-Category" onclick="edit_sub_category('<?php echo $row_list1['c_id'] ?>','<?php echo $row_list1['c_description'] ?>');" ><i class="mdi mdi-pencil"></i></button>&nbsp;
							&nbsp;<button type="button" class="btn btn-icons btn-inverse-danger btn-sm" title="Delete Sub-Category" onclick="delete_sub_category('<?php echo $row_list1['c_id'] ?>');"  ><i class="mdi mdi-delete"></i></button>&nbsp;
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
</div>
<?php include('modal_add_sub_category.php');?>
<?php include('modal_edit_sub_category.php');?>