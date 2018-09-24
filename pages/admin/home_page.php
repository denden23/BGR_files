<!-- Home page-->

<div class="card" align="center"> 
<div class="card-body"> 
<div  align="right" >
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
						$sql_list1 = "Select * from tbl_sampling_information ";
						$i = 1;
						foreach ($pdo->query($sql_list1) as $row_list1) {
							echo '<tr>';
							echo '<td><font>'. $i . '</td>';
							echo '<td><font>'. $row_list1['si_client_name'] . '</td>';
							echo '<td><font>'. $row_list1['si_company'] . '</td>';
							echo '<td><font>'. $row_list1['si_contact'] . '</td>';
							echo '<td><font>'. $row_list1['si_address'] . '</td>';	
							echo '<td><font>'. $row_list1['si_email'] . '</td>';
							echo '<td><font>'. $row_list1['si_sow_id'] . '</td>';
							echo '<td><font>'. $row_list1['si_wc_id'] . '</td>';
							echo '<td><font>'. $row_list1['si_date'] . '</td>';
							echo '<td><font>'. $row_list1['si_time'] . '</td>';
							echo '<td><font>'. $row_list1['si_tot_id'] . '</td>';
							echo '<td><font>'. $row_list1['si_id'] . '</td>';
							echo '<td><font>'. $row_list1['si_id'] . '</td>';
							echo '<td><font>'. $row_list1['si_id'] . '</td>';
							echo '<td><font>'. $row_list1['si_id'] . '</td>';
							echo '<td><font>'. $row_list1['si_id'] . '</td>';
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