  <?php 
  require"../db/database.php";
  $pdo = Database::connect();
 if($_POST['ci_id'] )
{
      $ci_id = $_POST['ci_id'];
      $c_fname = $_POST['c_fname'];
      $c_mname = $_POST['c_mname'];
      $c_lname = $_POST['c_lname'];
      $c_company = $_POST['c_company'];
      $c_address = $_POST['c_address'];
      $c_number = $_POST['c_number'];
      $c_email = $_POST['c_email'];
	  
      if ( empty($ci_id) ) {
          print_r("1");
      }else{
               try{
               $pdo->query("Update `tbl_customer_information` set `ci_fname`='$c_fname',`ci_mname`='$c_mname',`ci_lname`='$c_lname',`ci_company`='$c_company',`ci_contact_no`='$c_number',`ci_company_address`='$c_address',`ci_email`='$c_email' where `ci_id`='$ci_id'");
               print_r("2");
               }catch(PDOException $ex) {
                 $ex->getMessage();    
               }
        }
}

    ?>