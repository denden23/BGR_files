  <?php 
  require"../db/database.php";
  $pdo = Database::connect();
 if($_POST['category'] )
{
      $category = $_POST['category'];
      if ( empty($category) ) {
          print_r("1");
      }else{
               try{
               $pdo->query("Insert into tbl_category (c_description) values ('$category')");
               print_r("2");
               }catch(PDOException $ex) {
                 $ex->getMessage();    
               }
        }
}

    ?>