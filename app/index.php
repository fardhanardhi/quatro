<?php
session_start();
if (empty($_SESSION[username])){
	echo "<script language='javascript'>alert('Login terlebih dahulu ');
					window.location = '../'</script>";
}
else{
	header('location: route.php?module=home');
}
?>