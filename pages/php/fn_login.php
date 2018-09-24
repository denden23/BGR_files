<?php

	require "../db/core.php";
    require "../db/mysqlhelper.php";
    require '../db/database.php';
    
    header('Content-Type: text/html; charset=utf-8');
    date_default_timezone_set('Asia/Manila');//set default timezone

    $uname1 = $_POST['txtuname'];
    $uname = htmlspecialchars($uname1, ENT_QUOTES);
    $ipassword = $_POST['txtpword'];
    if(!empty($uname) || !empty($pword)){

        $query = $mysqlhelper->query("select u_id
					                from tbl_user
					                where u_username='$uname' and u_password='$ipassword' AND (u_user_type='Administrator' OR u_user_type='REQAdministrator')");   
		              
        if($query->rowCount()){
            $rquery = $query->fetch(PDO::FETCH_NUM);
                $user_id = $rquery[0];
                $_SESSION['U_ID'] = $user_id;
                $pdo = Database::connect();
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "INSERT INTO tbl_system_logs (u_id, sl_description) VALUES( ".$_SESSION['U_ID'].", 'Login')";
                $q = $pdo->prepare($sql);
                $q->execute(array());
                Database::disconnect();
            $u_type = fn_get_user_details('u_status');
            if($u_type == 'Active'){
                $_SESSION['U_ID'] = $user_id;
                echo"1";
            }else{
                $_SESSION['U_ID'] = '';
                echo "4";
            }
            
                                    
        }else{
            //wrong username and or password
            echo"2";
        }
    }else{
        //please fill up username and or password
        echo"3";
    }

?>