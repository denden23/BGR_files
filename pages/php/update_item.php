  <?php 
  require"../db/database.php";
  $pdo = Database::connect();
 if($_POST['i_id'] )
{
      $i_id = $_POST['i_id'];
      $c_id = $_POST['c_id'];
      $sc_id = $_POST['sc_id'];
      $item = $_POST['item'];
      if ( empty($i_id) ) {
          print_r("1");
      }else{
               try{
               $pdo->query("Update tbl_item set i_description='$item', c_id='$c_id', sc_id='$sc_id' where i_id='$i_id'");
               print_r("2");
               }catch(PDOException $ex) {
                 $ex->getMessage();    
               }
        }
}

    ?>