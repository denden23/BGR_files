<!-- Home page-->

<div class="card" align="center"> 
<div class="card-body"> 
<div  align="right" >
<button type="button" title="Add Customer Information" class="btn btn-icons btn-rounded btn-primary" onclick="add_customer_info();" ><i class="mdi mdi-plus" ></i></button> 
</div>
<div  ><h5 class="text-primary" >CUSTOMER INFORMATION</h5></div>
		<div class="card-body bg-inverse-primary" style="overflow-x: scroll" >
			<table id="tbl_sampling_information" class="table table-striped table-hover table-bordered table-condensed" >
				<thead class='bg-inverse-primary'  style="text-align:center" >
					<th><font>#</th>
					<th><font>Client's Firstname</th>
					<th><font>Client's Middlename</th>
					<th><font>Client's Lastname</th>
					<th><font>Company Name</th>
					<th><font>Contact Number</th>
					<th><font>Company Address</th>
					<th><font>Email Address</th>
					<th>Action</th>
				</thead>
				<tbody>
					<?php
						$sql_list1 = "Select * from tbl_customer_information order by ci_fname DESC";
						$i = 1;
						foreach ($pdo->query($sql_list1) as $row_list1) {
							echo '<tr>';
							echo '<td><font>'. $i . '</td>';
							echo '<td><font>'. $row_list1['ci_fname'].'</td>';
							echo '<td><font>'. $row_list1['ci_mname'].'</td>';
							echo '<td><font>'. $row_list1['ci_lname'].'</td>';
							echo '<td><font>'. $row_list1['ci_company'] . '</td>';
							echo '<td><font>'. $row_list1['ci_contact_no'] . '</td>';
							echo '<td><font>'. $row_list1['ci_company_address'] . '</td>';	
							echo '<td><font>'. $row_list1['ci_email'] . '</td>';
							?>
							<td style="padding:0%">
							&nbsp;<button type="button" class="btn btn-icons btn-inverse-success btn-sm" title="Edit Customer Information" onclick="edit_customer_info('<?php echo $row_list1['ci_id'] ?>','<?php echo $row_list1['ci_fname'] ?>','<?php echo $row_list1['ci_mname'] ?>','<?php echo $row_list1['ci_lname'] ?>','<?php echo $row_list1['ci_company'] ?>','<?php echo $row_list1['ci_contact_no'] ?>','<?php echo $row_list1['ci_company_address'] ?>','<?php echo $row_list1['ci_email'] ?>');" ><i class="mdi mdi-pencil"></i></button>&nbsp;
							&nbsp;<button type="button" class="btn btn-icons btn-inverse-danger btn-sm" title="Delete Customer Information" onclick="delete_customer_info('<?php echo $row_list1['ci_id'] ?>');"  ><i class="mdi mdi-delete"></i></button>&nbsp;
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