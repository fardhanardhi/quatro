<?php
session_start();

include '../conSQL.php';

if (empty($_SESSION['username']))
{
	echo "<script language='javascript'>alert('Login terlebih dahulu'); window.location = '../'</script>";
}
else
{
    $id_user = $_SESSION["id_user"];
    $query = "SELECT terblokir FROM tb_user WHERE id = $id_user";
    $row = mysqli_fetch_assoc(mysqli_query($con, $query));

    if ($row["terblokir"] == 'true') {
        session_destroy();
        $error = urlencode("Akun anda terblokir");
        header("Location: ../index.php?pesan=$error");
    } else {
        if ($_SESSION['level'] == 'admin') 
        {
            include 'admin.php';
        }
        else if ($_SESSION['level'] == 'player') 
        {
            include 'player.php';
        }
    }
}

?>