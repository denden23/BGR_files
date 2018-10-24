<!-- Home page-->

<div class="card" align="center"> 
<div class="card-body"> 
<div  align="right" >
<button type="button" title="Add Supplier Information" class="btn btn-icons btn-rounded btn-primary" onclick="add_supplier_info();" ><i class="mdi mdi-plus" ></i></button> 
</div>
<div  ><h5 class="text-primary" >SUPPLIER INFORMATION</h5></div>
		<div class="card-body bg-inverse-primary" style="overflow-x: scroll" >
			<table id="tbl_sampling_information" class="table table-striped table-hover table-bordered table-condensed" >
				<thead class='bg-inverse-primary'  style="text-align:center" >
					<th><font>#</th>
					<th><font>Supplier Name</th>
					<th><font>Address</th>
					<th><font>Contact Number</th>
					<th><font>Email Address</th>
					<th>Action</th>
				</thead>
				<tbody>
					<?php
						$sql_list1 = "Select * from tbl_supplier order by s_supplier_name DESC";
						$i = 1;
						foreach ($pdo->query($sql_list1) as $row_list1) {
							echo '<tr>';
							echo '<td><font>'. $i . '</td>';
							echo '<td><font>'. $row_list1['s_supplier_name'].'</td>';
							echo '<td><font>'. $row_list1['s_address'].'</td>';
							echo '<td><font>'. $row_list1['s_contact_number'].'</td>';
							echo '<td><font>'. $row_list1['s_email'] . '</td>';
							?>
							<td style="padding:0%">
							&nbsp;<button type="button" class="btn btn-icons btn-inverse-success btn-sm" title="Edit Supplier Information" onclick="edit_supplier('<?php echo $row_list1['s_id'] ?>','<?php echo $row_list1['ci_fname'] ?>','<?php echo $row_list1['ci_mname'] ?>','<?php echo $row_list1['ci_lname'] ?>','<?php echo $row_list1['ci_company'] ?>','<?php echo $row_list1['ci_contact_no'] ?>','<?php echo $row_list1['ci_company_address'] ?>','<?php echo $row_list1['ci_email'] ?>');" ><i class="mdi mdi-pencil"></i></button>&nbsp;
							&nbsp;<button type="button" class="btn btn-icons btn-inverse-danger btn-sm" title="Delete Supplier Information" onclick="delete_supplier('<?php echo $row_list1['s_id'] ?>');"  ><i class="mdi mdi-delete"></i></button>&nbsp;
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
<?php include('modal_edit_customer_info.php');?>
<?php include('modal_add_customer_info.php');?>