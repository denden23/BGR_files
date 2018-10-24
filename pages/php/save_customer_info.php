  <?php 
  require"../db/database.php";
  $pdo = Database::connect();
 if($_POST['c_fname'] )
{
      $c_fname = $_POST['c_fname'];
      $c_mname = $_POST['c_mname'];
      $c_lname = $_POST['c_lname'];
      $c_company = $_POST['c_company'];
      $c_address = $_POST['c_address'];
      $c_number = $_POST['c_number'];
      $c_email = $_POST['c_email'];
	  
      if ( empty($c_fname) ) {
          print_r("1");
      }else{
               try{
               $pdo->query("INSERT INTO `tbl_customer_information`(`ci_fname`, `ci_mname`, `ci_lname`, `ci_company`, `ci_contact_no`, `ci_company_address`, `ci_email`) VALUES 
			   ('$c_fname','$c_mname','$c_lname','$c_company','$c_number','$c_address','$c_email')");
               print_r("2");
               }catch(PDOException $ex) {
                 $ex->getMessage();    
               }
        }
}

    ?>