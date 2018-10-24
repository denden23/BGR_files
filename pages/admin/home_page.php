<!-- Home page-->

<div class="card" align="center"> 
<div class="card-body"> 
<div  align="right" >
<button type="button" title="Add Customer Information" class="btn btn-icons btn-rounded btn-info" onclick="add_customer_info();" ><i class="mdi mdi-account-card-details" ></i></button> 
<button type="button" title="Add Transaction" class="btn btn-icons btn-rounded btn-primary" onclick="add_transaction();" ><i class="mdi mdi-plus" ></i></button> 
<button type="button" title="Print" class="btn btn-icons btn-rounded btn-default" onclick="add_transaction();" ><i class="mdi mdi-printer" ></i></button> 
<button type="button" title="Export Excel" class="btn btn-icons btn-rounded btn-success" onclick="add_transaction();" ><i class="mdi mdi-file-excel-box" ></i></button> 
</div>
<div  ><h5 class="text-primary" >TRANSACTION RECORDS</h5></div>
		<div class="card-body bg-inverse-primary" style="overflow-x: scroll" >
			<table id="tbl_sampling_information" class="table table-striped table-hover table-bordered table-condensed" >
				<thead class='bg-inverse-primary'  style="text-align:center" >
					<th><font>#</th>
					<th><font>Client's Name</th>
					<th><font>Company Name</th>
					<th><font>Contact Number</th>
					<th><font>Company Address</th>
					<th><font>Email Address</th>
					<th><font>Water Source</th>
					<th><font>Water Classification</th>
					<th><font>Date of Sampling</th>
					<th style="" ><font>Time of Sampling</th>
					<th><font>Type of Test</th>
					<th><font>Amount</th>
					<th><font>Name of Sanitary <br> Inspector</th>
					<th><font>Area of <br> S.I.</th>
					<th><font>Commission of <br> S.I.</th>
				
					<th>Action</th>
				</thead>
				<tbody>
					<?php
						$sql_list1 = "Select * from tbl_sampling_information a, tbl_customer_information b,
						tbl_source_of_water c,
						tbl_water_classification d,
						tbl_type_of_test e
						where b.ci_id = a.si_ci_id
						and c.sow_id = a.si_sow_id
						and d.wc_id = a.si_wc_id
						and e.tot_id = a.si_tot_id
						";
						$i = 1;
						foreach ($pdo->query($sql_list1) as $row_list1) {
							echo '<tr>';
							echo '<td><font>'. $i . '</td>';
							echo '<td><font>'. $row_list1['ci_fname'].' '.$row_list1['ci_lname'] . '</td>';
							echo '<td><font>'. $row_list1['ci_company'] . '</td>';
							echo '<td><font>'. $row_list1['ci_contact_no'] . '</td>';
							echo '<td><font>'. $row_list1['ci_company_address'] . '</td>';	
							echo '<td><font>'. $row_list1['ci_email'] . '</td>';
							echo '<td><font>'. $row_list1['sow_description'] . '</td>';
							echo '<td><font>'. $row_list1['wc_description'] . '</td>';
							echo '<td><font>'. $row_list1['si_date'] . '</td>';
							echo '<td><font>'. $row_list1['si_time'] . '</td>';
							echo '<td><font>'. $row_list1['tot_description'] . '</td>';
							echo '<td><font>'. $row_list1['si_amount'] . '</td>';
							echo '<td><font>'. $row_list1['si_name_of_si'] . '</td>';
							echo '<td><font>'. $row_list1['si_area_of_si'] . '</td>';
							echo '<td><font>'. $row_list1['si_commission_si'] . '</td>';
							?>
							<td style="padding:0%">
							&nbsp;<button type="button" class="btn btn-icons btn-inverse-success btn-sm" title="Edit Transaction" onclick="edit_transaction('<?php echo $row_list1['si_id'] ?>','<?php echo $row_list1['si_ci_id'] ?>','<?php echo $row_list1['si_sample_by'] ?>','<?php echo $row_list1['si_date'] ?>','<?php echo $row_list1['si_sow_id'] ?>','<?php echo $row_list1['si_wc_id'] ?>','<?php echo $row_list1['si_time'] ?>','<?php echo $row_list1['si_tot_id'] ?>','<?php echo $row_list1['si_sampling_point'] ?>','<?php echo $row_list1['si_commission_si'] ?>','<?php echo $row_list1['si_notes'] ?>','<?php echo $row_list1['si_amount'] ?>','<?php echo $row_list1['si_name_of_si'] ?>','<?php echo $row_list1['si_area_of_si'] ?>');" ><i class="mdi mdi-pencil"></i></button>&nbsp;
							&nbsp;<button type="button" class="btn btn-icons btn-inverse-danger btn-sm" title="Delete Transaction" onclick="delete_transaction('<?php echo $row_list1['si_id'] ?>');"  ><i class="mdi mdi-delete"></i></button>&nbsp;
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
<?php include('modal_add_transaction.php');?>
<?php include('modal_add_customer_info.php');?>
<?php include('modal_edit_transaction.php');?>