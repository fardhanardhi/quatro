<?php
session_start();

if (empty($_SESSION['username']))
{
	echo "<script language='javascript'>alert('Login terlebih dahulu'); window.location = '../'</script>";
}
else
{

    if ($_SESSION['level'] == 'admin') 
    {
        include 'admin.php';
    }
    else if ($_SESSION['level'] == 'player') 
    {
        include 'player.php';
    }
}

?>