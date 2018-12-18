<?php
include '../../../conSQL.php';

session_start();

if(isset($_POST['edit'])){
    $idQuiz = $_POST["idQuiz"];
    $nama = $_POST["nama"];
    $kode = $_POST["kode"];
    $waktu = date('H:i:s', mktime(0,$_POST["waktu"],0));
    
    $query = "UPDATE tb_quiz SET nama='$nama', waktu='$waktu', kode='$kode' WHERE id = $idQuiz";
    
    if (mysqli_query($con, $query)) { 
        echo "<script language='javascript'>alert('berhasil');</script>";
        header("Location: ../../route.php?module=quiz");
    } else {
        $error = urldecode("Update Gagal!<br>");
        echo "<script language='javascript'>alert('$error'); window.location = '../../route.php?module=quiz'</script>";
    }
    
    // close mysql connection
    mysqli_close($con); 

}
else if(isset($_POST['add'])){
    
    $nama = $_POST["nama"];
    $waktu = date('H:i:s', mktime(0,$_POST["waktu"],0));
    $kode = generateRandomString();
    $idUser = $_SESSION["id_user"];

    $query = "INSERT INTO tb_quiz(nama, user_id, waktu, kode) VALUES('$nama', $idUser, '$waktu', '$kode')";

    if (mysqli_query($con, $query)) {
        $newIdQuiz = mysqli_insert_id($con);
        header("Location: ../../route.php?id=$newIdQuiz&module=editQuiz");
    } else {
        $error = urlencode("Gagal tambah");
        echo "<script language='javascript'>alert('$idUser'); window.location = '../../route.php?module=quiz'</script>";
    }

    mysqli_close($con);
}

else {
    $id=$_GET["id"];
    $aksi=$_GET["aksi"];
    $status=$_GET["status"];
    
    if ($status == "open") {
        $status = "close";
    } else {
        $status = "open";
    }
    
    if ($aksi == "status") {
        $queryStatus = "UPDATE tb_quiz SET status='$status' WHERE id = $id";
    
        mysqli_query($con,$queryStatus);
        header("Location: ../../route.php?module=quiz");
        
    } 
    else if ($aksi == "hapus") {
        $queryHapus = "DELETE FROM tb_quiz WHERE id = $id";
    
        mysqli_query($con,$queryHapus);
        header("Location: ../../route.php?module=quiz");
    }
}

function generateRandomString($length = 5) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

?>

