<?php
	require_once('../../private/initialize.php'); 
	student_log_out();
	redirect_to(url_for('/index.php'));
?>