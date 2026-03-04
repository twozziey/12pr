<?php
	session_start();
	session_destroy();
	setcookie('ID','', time() - 3600,"/");
?>