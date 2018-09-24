  <?php 
  require"../db/database.php";
  $pdo = Database::connect();
 if($_POST['category'] )
{
      $category = $_POST['category'];
      $sub_category = $_POST['sub_category'];
      if ( empty($category) ) {
          print_r("1");
      }else{
               try{
               $pdo->query("Insert into tbl_sub_category (sc_c_id, sc_description) values ('$category','$sub_category')");
               print_r("2");
               }catch(PDOException $ex) {
                 $ex->getMessage();    
               }
        }
}

    ?>