  <?php 
  require"../db/database.php";
  $pdo = Database::connect();
 if($_POST['wc_id'] )
{
      $wc_id = $_POST['wc_id'];
      $description = $_POST['description'];
      if ( empty($wc_id) ) {
          print_r("1");
      }else{
               try{
               $pdo->query("Update tbl_water_classification set wc_description='$description' where wc_id='$wc_id'");
               print_r("2");
               }catch(PDOException $ex) {
                 $ex->getMessage();    
               }
        }
}

    ?>