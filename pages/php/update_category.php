  <?php 
  require"../db/database.php";
  $pdo = Database::connect();
 if($_POST['c_id'] )
{
      $c_id = $_POST['c_id'];
      $description = $_POST['description'];
      if ( empty($c_id) ) {
          print_r("1");
      }else{
               try{
               $pdo->query("Update tbl_category set c_description='$description' where c_id='$c_id'");
               print_r("2");
               }catch(PDOException $ex) {
                 $ex->getMessage();    
               }
        }
}

    ?>