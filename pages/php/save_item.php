  <?php 
  require"../db/database.php";
  $pdo = Database::connect();
 if($_POST['category'] )
{
      $category = $_POST['category'];
      $sub_category = $_POST['sub_category'];
      $item = $_POST['item'];
      if ( empty($category) ) {
          print_r("1");
      }else{
               try{
               $pdo->query("Insert into tbl_item (i_description,c_id,sc_id) values ('$item', '$category', '$sub_category')");
               print_r("2");
               }catch(PDOException $ex) {
                 $ex->getMessage();    
               }
        }
}

    ?>