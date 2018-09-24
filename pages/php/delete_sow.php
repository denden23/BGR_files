  <?php 
  require"../db/database.php";
  $pdo = Database::connect();
 if($_POST['sow_id'] )
{
      $sow_id = $_POST['sow_id'];
      if ( empty($sow_id) ) {
          print_r("1");
      }else{
               try{
               $q = $pdo->query("Delete from tbl_source_of_water where sow_id='$sow_id'");
			   
               print_r("2");
               }catch(PDOException $ex) {
                 $ex->getMessage();    
               }
        }
}

    ?>