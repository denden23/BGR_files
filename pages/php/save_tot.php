  <?php 
  require"../db/database.php";
  $pdo = Database::connect();
 if($_POST['tot'] )
{
      $tot = $_POST['tot'];
      if ( empty($tot) ) {
          print_r("1");
      }else{
               try{
               $pdo->query("Insert into tbl_type_of_test (tot_description) values ('$tot')");
               print_r("2");
               }catch(PDOException $ex) {
                 $ex->getMessage();    
               }
        }
}

    ?>