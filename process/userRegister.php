<?php 
include '../conSQL.php';
session_start();
$error = '';
if (isset($_POST['register'])) {
    

    $nama = trim($_POST['nama']); // get posted data and remove whitespace
    $username = trim($_POST['username']); // get posted data and remove whitespace
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // check username exist or not
    $query = "SELECT * FROM tb_user WHERE username = '$username'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result)==0) { // if username is not found, add user
        $query = "INSERT INTO tb_user(nama, username, email, password, level) VALUES('$nama', '$username', '$email', '$password', 'player')";
        // $error = urlencode("User berhasi dibuat");
        // header("Location: ../index.php?pesan=$error");
        if (mysqli_query($con, $query)) {
            $error = urlencode("Berhasil daftar");
            header("Location: ../?pesan=$error");
        } else {
            $error = urlencode("Gagal daftar");
            header("Location: ../register.php?pesan=$error");
        }
    } 
    else {
        $error = urlencode("Username sudah dipakai");
        header("Location: ../register.php?pesan=$error");
    }

}
?>