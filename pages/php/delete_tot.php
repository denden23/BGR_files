  <?php 
  require"../db/database.php";
  $pdo = Database::connect();
 if($_POST['tot_id'] )
{
      $tot_id = $_POST['tot_id'];
      if ( empty($tot_id) ) {
          print_r("1");
      }else{
               try{
               $q = $pdo->query("Delete from tbl_type_of_test where tot_id='$tot_id'");
			   
               print_r("2");
               }catch(PDOException $ex) {
                 $ex->getMessage();    
               }
        }
}

    ?>