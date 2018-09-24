  <?php 
  require"../db/database.php";
  $pdo = Database::connect();
 if($_POST['tot_id'] )
{
      $tot_id = $_POST['tot_id'];
      $description = $_POST['description'];
      if ( empty($tot_id) ) {
          print_r("1");
      }else{
               try{
               $pdo->query("Update tbl_type_of_test set tot_description='$description' where tot_id='$tot_id'");
               print_r("2");
               }catch(PDOException $ex) {
                 $ex->getMessage();    
               }
        }
}

    ?>