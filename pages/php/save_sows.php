  <?php 
  require"../db/database.php";
  $pdo = Database::connect();
 if($_POST['sows'] )
{
      $sows = $_POST['sows'];
      if ( empty($sows) ) {
          print_r("1");
      }else{
               try{
               $pdo->query("Insert into tbl_source_of_water (sow_description) values ('$sows')");
               print_r("2");
               }catch(PDOException $ex) {
                 $ex->getMessage();    
               }
        }
}

    ?>