  <?php 
  require"../db/database.php";
  $pdo = Database::connect();
 if($_POST['wc_id'] )
{
      $wc_id = $_POST['wc_id'];
      if ( empty($wc_id) ) {
          print_r("1");
      }else{
               try{
               $q = $pdo->query("Delete from tbl_water_classification where wc_id='$wc_id'");
			   
               print_r("2");
               }catch(PDOException $ex) {
                 $ex->getMessage();    
               }
        }
}

    ?>