  <?php 
  require"../db/database.php";
  $pdo = Database::connect();
 if($_POST['client_name']){
      $client_name = $_POST['client_name'];
      $date_sampling = $_POST['date_sampling'];
      $time_sampling = $_POST['time_sampling'];
      $sow_id = $_POST['sow_id'];
      $wc_id = $_POST['wc_id'];
      $tot_id = $_POST['tot_id'];
      $amount = $_POST['amount'];
      $name_of_si = $_POST['name_of_si'];
      $area_si = $_POST['area_si'];
      $commission_si = $_POST['commission_si'];
      $sampling_point = $_POST['sampling_point'];
      $sampled_by = $_POST['sampled_by'];
      $notes = $_POST['notes'];
	  
	  
      if ( empty($client_name) ) {
          print_r("1");
      }else{
               try{
               $pdo->query("Insert into tbl_sampling_information (si_ci_id,si_date,si_time,si_sow_id,si_wc_id,si_tot_id,si_sample_by,si_sampling_point,si_commission_si,si_notes,si_amount,si_name_of_si,si_area_of_si)
			   values ('$client_name','$date_sampling','$time_sampling','$sow_id','$wc_id','$tot_id','$sampled_by','$sampling_point','$commission_si','$notes','$amount','$name_of_si','$area_si')");
               print_r("2");
               }catch(PDOException $ex) {
                 $ex->getMessage();    
               }
        }
}

    ?>