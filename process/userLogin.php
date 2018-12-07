<?php
include '../conSQL.php';
session_start();
$error = '';

if(!empty($_POST["username"]) || !empty($_POST["password"])) {
    # Get username and password from user
    $username = $_POST["username"];
    $password = $_POST["password"];

    # Write MySql Query
    $query = "SELECT * FROM tb_user WHERE username='$username' AND password='$password'";
    # Get the query result
    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        
        $id_user = $row["id_user"];
        $level = $row["level"];

        $_SESSION["username"] = $username;
        $_SESSION["id_user"] = $id_user;
        $_SESSION["level"] = $level;

        if($level == "admin") {
            $_SESSION["as_admin"] = 'true';
            header("Location: ../app/admin");
        } else {
            $_SESSION["as_player"] = 'true';
            header("Location: ../app/player");
        }
    } else {
        $error = urlencode("Username atau password salah!");
        header("Location: ../index.php?pesan=$error");
    }

    # Close connection to database
    mysqli_close($con);

} else {
    $error = urlencode("Username atau password kosong!");
    header("Location: ../index.php?pesan=$error");
    die();
}
?>