<?php

	session_start();

	function fn_loggedin()
	{
		if(isset($_SESSION['U_ID']) && !empty($_SESSION['U_ID']))
		{
			return true;
		}
		else
		{
		}
			return false;
	}
	function fn_get_user_details($field)
	{
		include("mysqlhelper.php");
		$query = $mysqlhelper->query("select $field from tbl_user where u_id = '".$_SESSION['U_ID']."'");
		$rquery = $query->fetch(PDO::FETCH_OBJ);
		return $rquery->$field;
		
	}

	function fn_get_user_info($field1)
	{
		include("mysqlhelper.php");
		$query = $mysqlhelper->query("SELECT $field1
									FROM tbl_user_profile up , tbl_user u
									WHERE u.u_id='".$_SESSION['U_ID']."'");
		$rquery = $query->fetch(PDO::FETCH_NUM);
		return $rquery[0];
		
	}
?>