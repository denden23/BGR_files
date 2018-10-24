  <?php 
  require"../db/database.php";
  $pdo = Database::connect();
 if($_POST['si_id']){
      $si_id = $_POST['si_id'];
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
	  
	  
      if ( empty($si_id) ) {
          print_r("1");
      }else{
               try{
               $pdo->query("Update tbl_sampling_information set si_ci_id='$client_name',si_date='$date_sampling',si_time='$time_sampling',si_sow_id='$sow_id',si_wc_id='$wc_id',si_tot_id='$tot_id',si_sample_by='$sampled_by',si_sampling_point='$sampling_point',si_commission_si='$commission_si',si_notes='$notes',si_amount='$amount',si_name_of_si='$name_of_si',si_area_of_si='$area_si' where si_id='$si_id'");
               print_r("2");
               }catch(PDOException $ex) {
                 $ex->getMessage();    
               }
        }
}

    ?>