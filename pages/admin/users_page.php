<!-- Users page-->

<div id="wrapper" > <h4>Users</h4>
<div class="div-wrapper">
		<table id='tbl_sampling_information' class='table table-striped table-hover table-bordered table-condensed'>
			<thead class='bg-primary'>
				<th><font>#</th>
				<th><font>User</th>
				<th><font>Username</th>
				<th><font>Password</th>
				<th>Action</th>
			</thead>
			<tbody>
				<?php
					$sql_list1 = "Select * from tbl_sampling_information ";
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