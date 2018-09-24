  <?php 
  require"../db/database.php";
  $pdo = Database::connect();
 if($_POST['wc'] )
{
      $wc = $_POST['wc'];
      if ( empty($wc) ) {
          print_r("1");
      }else{
               try{
               $pdo->query("Insert into tbl_water_classification (wc_description) values ('$wc')");
               print_r("2");
               }catch(PDOException $ex) {
                 $ex->getMessage();    
               }
        }
}

    ?>