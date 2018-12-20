<?php
include '../../../conSQL.php';
session_start();

// Get id from form
    $id=$_GET["id"];
    $aksi=$_GET["aksi"];
    
    if ($aksi == "hapus") {
        $queryHapus = "DELETE FROM tb_hasil_quiz WHERE id = $id";

        mysqli_query($con,$queryHapus);
        header("Location: ../../route.php?module=editHasilQuiz");
    }

?>