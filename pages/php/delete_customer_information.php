  <?php 
  require"../db/database.php";
  $pdo = Database::connect();
 if($_POST['ci_id'] )
{
      $ci_id = $_POST['ci_id'];
      if ( empty($ci_id) ) {
          print_r("1");
      }else{
               try{
               $q = $pdo->query("Delete from tbl_customer_information where ci_id='$ci_id'");
			   
               print_r("2");
               }catch(PDOException $ex) {
                 $ex->getMessage();    
               }
        }
}

    ?>