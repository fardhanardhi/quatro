<?php
include '../../../conSQL.php';

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




?>