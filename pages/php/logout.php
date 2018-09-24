<?php

	require("../db/core.php");
    require("../db/mysqlhelper.php");
    //require("../db/db_connect.php");
		try {
			session_destroy();
			header("location: ../login.php");
		} catch (PDOException $e) {
 
			echo $errmsg = "Error Saving Record".$e->getMessage();
		}

?>