  <?php 
  require"../db/database.php";
  $pdo = Database::connect();
 if($_POST['c_id'] )
{
      $c_id = $_POST['c_id'];
      if ( empty($c_id) ) {
          print_r("1");
      }else{
               try{
               $q = $pdo->query("Delete from tbl_category where c_id='$c_id'");
			   
               print_r("2");
               }catch(PDOException $ex) {
                 $ex->getMessage();    
               }
        }
}

    ?>