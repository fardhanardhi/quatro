<?php
include '../../../conSQL.php';
// Get id from form
if(isset($_POST['edit'])){
    $idSoal = $_POST["idSoal"];
    $isiSoal = $_POST["isiSoal"];
    $isiSoals = mysqli_real_escape_string($con, $isiSoal);
    $pilihan = $_POST["pilihan"];

    echo "<script language='javascript'>alert('$isiSoals');</script>";

    $query = "UPDATE tb_soal SET soal = '$isiSoals' WHERE id = $idSoal";

    $queryPilihan = "SELECT * FROM tb_pilihan WHERE soal_id=$idSoal";
    $result = mysqli_query($con, $queryPilihan);

    while($row = mysqli_fetch_assoc($result)){
        
        $id = $row["id"];
        $isiPilihan = mysqli_real_escape_string($con, $_POST[$id]);
        $status = ($id == $pilihan) ? 'benar' : 'salah';

        mysqli_query($con, "UPDATE tb_pilihan SET pilihan = '$isiPilihan', status = '$status' WHERE id = $id");
    }
    
    if (mysqli_query($con, $query)) { 
        echo "<script language='javascript'>alert('berhasil');</script>";
        header("Location: ../../route.php?module=quiz");
    } else {
        $error = urldecode("Update Gagal!");
        echo "<script language='javascript'>alert('$error'); window.location = '../../route.php?module=quiz'</script>";
    }
    
    // close mysql connection
    mysqli_close($con); 

}



?>