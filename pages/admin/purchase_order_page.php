<!-- Home page-->

<div class="card" align="center"> 
<div class="card-body"> 
<div  align="right" >

<button type="button" title="Add Product" class="btn btn-icons btn-rounded btn-primary" onclick="add_product();" ><i class="mdi mdi-plus" ></i></button> 
</div>
<div  ><h5 class="text-primary" >PURCHASE ORDER</h5></div>
		<div class="card-body bg-inverse-primary" style="overflow-x: scroll" >
			<table id="tbl_sampling_information" class="table table-striped table-hover table-bordered table-condensed" >
				<thead class='bg-inverse-primary'  style="text-align:center" >
					<th><font>#</th>
					<th><font>Supplier</th>
					<th><font>Item Name</th>
					<th><font>Category</th>
					<th><font>Buying Price</th>
					<th><font>Selling Price</th>
					<th><font>Quantity</th>
					<th><font>Date Purchased</th>
					<th>Action</th>
				</thead>
				<tbody>
					<?php
						$sql_list1 = "Select * from tbl_product 
						";
						$i = 1;
						foreach ($pdo->query($sql_list1) as $row_list1) {
							echo '<tr>';
							echo '<td><font>'. $i . '</td>';
							
							echo '</tr>';
						   $i++;
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php include('modal_add_product.php');?>
<?php include('modal_add_customer_info.php');?>