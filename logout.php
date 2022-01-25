<?php
	session_start();
	session_destroy();
	header('Location: client_pages/home.html')
?>