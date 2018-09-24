<!-- Settings page-->

 <div class="navbar-default sidebar" style="margin-top:0px" role="navigation">
   
	<ul class="nav" id="side-menu" align="left">
		
		<li align="left"><a class="btn btn-outline btn-primary" style="width:100%" onclick="settings_selected('SOWS');" id="btn_sows" > <i class="fa fa-filter fa-fw" ></i> Source of Water Supply </a></li>
		<li><a class="btn btn-outline btn-primary" style="width:100%" > <i class="fa fa-tasks fa-fw"></i> Water Classification </a></li>
		<li><a class="btn btn-outline btn-primary" style="width:100%" > <i class="fa fa-tasks fa-fw"></i> Type of Test</a></li>
		
	</ul>
		
		
</div
<!-- /.sidebar-collapse -->

<!-- /.navbar-static-side -->

<div id="page-wrapper" id="settings_data"> 

<div id="settings_sows"  >
<div class="div-wrapper" align="right" > 
<button type="button" title="Add Source of Water Supply" class="btn btn-primary btn-circle" onclick="add_sows();" ><i class="fa fa-plus" ></i></button> 
<button type="button" title="Print" class="btn btn-default btn-circle" onclick="add_transaction();" ><i class="fa fa-print" ></i></button> 
<button type="button" title="Export Excel" class="btn btn-success btn-circle" onclick="add_transaction();" ><i class="fa fa-file-excel-o" ></i></button> 
</div>
<div class="div-wrapper">
		<table id='tbl_sows' class='table table-striped table-bordered table-hover'>
			<thead class='bg-primary'>
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
						echo '<td><font>'. $row_list1['sow_description'] . '</td>';
						echo '</tr>';
					   $i++;
					}
				?>
			</tbody>
		</table>
	</div>
</div>

<?php include('modal_add_sows.php');?>
</div>