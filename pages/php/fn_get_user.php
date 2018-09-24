<?php
 
 if(fn_loggedin()){
        $u_type = fn_get_user_details('u_user_type');
        if($u_type =='Administrator'){
            header("location:admin/index.php");
        }else if($u_type =='REQAdministrator'){
            header("location:request/index.php");
        }else{
           header("location: login.php"); 
        }

    }else{

    }
	?>