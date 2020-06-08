<?php

	session_start();
	unset($_SESSION["user"]);
	session_destroy();
	header('location:/front_end/home.php')
?>
