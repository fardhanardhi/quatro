<?php
include '../../../conSQL.php';
// Get id from form
if(isset($_POST['edit'])){
    $idSoal = $_POST["idSoal"];
    $idQuiz = $_POST["quizId"];
    $isiSoal = $_POST["isiSoal"];
    $isiSoals = mysqli_real_escape_string($con, $isiSoal);
    $pilihan = $_POST["pilihan"];

    if(!$_FILES["gambar"]["name"]==""){
        $code=$_FILES["gambar"]["error"];
        if($code===0){
            $nama_folder="soal";
            $tmp=$_FILES["gambar"]["tmp_name"];
            $nama_file=$_FILES["gambar"]["name"];
            $path="../../../img/$nama_folder/$nama_file";
            $pathdb="$nama_folder/$nama_file";
            $upload_check=false;
            $tipe_file=array("image/jpeg","image/jpg","image/png");
    
            if(!in_array($_FILES["gambar"]["type"],$tipe_file)){
                $error.="Cek kembali ekstensi file anda (*.jpeg,*.jpg,*.png)<br>";
                echo "<script language='javascript'>alert('$error'); window.location = '../../route.php?module=player'</script>";
                $upload_check=true;
            }
            if($upload_check==false){
                $gambar_lama = $_POST["gambar_lama"];
                $pathDel = "../../../img/$gambar_lama";
                unlink($pathDel);
            }
            if(!$upload_check and move_uploaded_file($tmp,$path)){
                $query = "UPDATE tb_soal SET soal = '$isiSoals', gambar = '$pathdb' WHERE id = $idSoal";
            }
            else{
                $error="Upload gambar gagal $tmp   $path  $upload_check";
                echo "<script language='javascript'>alert('$error'); window.location = '../../route.php?module=player'</script>";
            }
        }
    }
    else {
        $query = "UPDATE tb_soal SET soal = '$isiSoals' WHERE id = $idSoal";
    }

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
        header("Location: ../../route.php?id=$idQuiz&module=editQuiz");
    } else {
        $error = urldecode("Update Gagal!");
        echo "<script language='javascript'>alert('$error'); window.location = '../../route.php?id=$idQuiz&module=editQuiz'</script>";
    }
    
    // close mysql connection
    mysqli_close($con); 
}
else if(isset($_POST['add'])){
    $idQuiz= $_POST["idQuiz"];
    $jumlahPilihan= $_POST["jumlahPilihan"];
    $isiSoal = $_POST["isiSoal"];
    $isiSoals = mysqli_real_escape_string($con, $isiSoal);
    $pilihan = $_POST["pilihan"];





    if(!$_FILES["gambar"]["name"]==""){
        $code=$_FILES["gambar"]["error"];
        if($code===0){
            $nama_folder="soal";
            $tmp=$_FILES["gambar"]["tmp_name"];
            $nama_file=$_FILES["gambar"]["name"];
            $path="../../../img/$nama_folder/$nama_file";
            $pathdb="$nama_folder/$nama_file";
            $upload_check=false;
            $tipe_file=array("image/jpeg","image/jpg","image/png");
    
            if(!in_array($_FILES["gambar"]["type"],$tipe_file)){
                $error.="Cek kembali ekstensi file anda (*.jpeg,*.jpg,*.png)<br>";
                echo "<script language='javascript'>alert('$error'); window.location = '../../route.php?module=player'</script>";
                $upload_check=true;
            }
            if(!$upload_check and move_uploaded_file($tmp,$path)){
                $query = "INSERT INTO tb_soal(soal, gambar, quiz_id) VALUES('$isiSoals', '$pathdb', $idQuiz)";
            }
            else{
                $error="Upload gambar gagal $tmp   $path  $upload_check";
                echo "<script language='javascript'>alert('$error'); window.location = '../../route.php?module=player'</script>";
            }
        }
    }
    else {
        $query = "INSERT INTO tb_soal(soal, quiz_id) VALUES('$isiSoals', $idQuiz)";
    }
    
    if (mysqli_query($con, $query)) { 
        $newIdSoal = mysqli_insert_id($con);
        echo "<script language='javascript'>alert('berhasil');</script>";
        header("Location: ../../route.php?id=$idQuiz&module=editQuiz");
    } else {
        $error = urldecode("Update Gagal!");
        echo "<script language='javascript'>alert('$error'); window.location = '../../route.php?id=$idQuiz&module=editQuiz'</script>";
    }

    $macamPilihan = [];
    for ($j=0; $j < $jumlahPilihan; $j++) { 
        $k = $j+1;
        $macamPilihan[$j] = $_POST["pilihan$k"];
    }

    for ($i=0; $i < $jumlahPilihan; $i++) { 
        $n = $i + 1;
        $radioPilihan = "pilihan".$n;
        if ($radioPilihan == $_POST["pilihan"]) {
            mysqli_query($con, "INSERT INTO tb_pilihan(soal_id, pilihan, status) VALUES('$newIdSoal', '$macamPilihan[$i]', 'benar')");
        }
        else {
            mysqli_query($con, "INSERT INTO tb_pilihan(soal_id, pilihan) VALUES('$newIdSoal', '$macamPilihan[$i]')");
        }
    }
    
    // close mysql connection
    mysqli_close($con); 
    header("Location: ../../route.php?id=$idQuiz&module=editQuiz");
}
else {
    $id=$_GET["id"];
    $quizId=$_GET["quizId"];
    $aksi=$_GET["aksi"];
    
    if ($aksi == "hapus") {
        $queryHapus = "DELETE FROM tb_soal WHERE id = $id";
    
        if (mysqli_query($con, $queryHapus)) { 
            echo "<script language='javascript'>alert('berhasil');</script>";
            header("Location: ../../route.php?id=$quizId&module=editQuiz");
        } else {
            $error = urldecode("Update Gagal!");
            echo "<script language='javascript'>alert('$error'); window.location = '../../route.php?id=$quizId&module=editQuiz'</script>";
        }
    }
}


?>