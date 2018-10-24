  <?php 
  require"../db/database.php";
  $pdo = Database::connect();
 if($_POST['si_id'] )
{
      $si_id = $_POST['si_id'];
      if ( empty($si_id) ) {
          print_r("1");
      }else{
               try{
               $q = $pdo->query("Delete from tbl_sampling_information where si_id='$si_id'");
			   
               print_r("2");
               }catch(PDOException $ex) {
                 $ex->getMessage();    
               }
        }
}

    ?>