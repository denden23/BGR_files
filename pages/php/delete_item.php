  <?php 
  require"../db/database.php";
  $pdo = Database::connect();
 if($_POST['i_id'] )
{
      $i_id = $_POST['i_id'];
      if ( empty($i_id) ) {
          print_r("1");
      }else{
               try{
               $q = $pdo->query("Delete from tbl_item where i_id='$i_id'");
			   
               print_r("2");
               }catch(PDOException $ex) {
                 $ex->getMessage();    
               }
        }
}

    ?>