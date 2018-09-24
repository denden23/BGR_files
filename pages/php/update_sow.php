  <?php 
  require"../db/database.php";
  $pdo = Database::connect();
 if($_POST['sow_id'] )
{
      $sow_id = $_POST['sow_id'];
      $description = $_POST['description'];
      if ( empty($sow_id) ) {
          print_r("1");
      }else{
               try{
               $pdo->query("Update tbl_source_of_water set sow_description='$description' where sow_id='$sow_id'");
               print_r("2");
               }catch(PDOException $ex) {
                 $ex->getMessage();    
               }
        }
}

    ?>