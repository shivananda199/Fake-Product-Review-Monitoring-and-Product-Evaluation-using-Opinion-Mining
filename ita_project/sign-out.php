<?php 
	session_start();
	session_destroy();
	echo "<script>window.alert('See you again!!')
							  window.close();</script>";
?>