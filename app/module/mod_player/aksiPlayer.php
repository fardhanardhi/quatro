<?php
include '../../../conSQL.php';
// Get id from form
if(isset($_POST['edit'])){
    $idUser = $_POST["idUser"];
    $username=$_POST["username"];
    $nama=$_POST["nama"];
    $email=$_POST["email"];
    
    if(!$_FILES["foto"]["name"]==""){
        $code=$_FILES["foto"]["error"];
        if($code===0){
            $nama_folder="profile";
            $tmp=$_FILES["foto"]["tmp_name"];
            $nama_file=$_FILES["foto"]["name"];
            $path="../../../img/$nama_folder/$nama_file";
            $pathdb="$nama_folder/$nama_file";
            $upload_check=false;
            $tipe_file=array("image/jpeg","image/jpg","image/png");
    
            if(!in_array($_FILES["foto"]["type"],$tipe_file)){
                $error.="Cek kembali ekstensi file anda (*.jpeg,*.jpg,*.png)<br>";
                echo "<script language='javascript'>alert('$error'); window.location = '../../route.php?module=player'</script>";
                $upload_check=true;
            }
            if($upload_check==false){
                unlink($_POST["foto_lama"]);
            }
            if(!$upload_check and move_uploaded_file($tmp,$path)){
                $query = "UPDATE tb_user SET username='$username', nama='$nama', email='$email', foto='$pathdb' WHERE id = $idUser";
            }
            else{
                $error="Upload foto gagal $tmp   $path  $upload_check";
                echo "<script language='javascript'>alert('$error'); window.location = '../../route.php?module=player'</script>";
            }
        }
    }
    else {
        $query = "UPDATE tb_user SET username='$username', nama='$nama', email='$email' WHERE id = $idUser";
    }
    
    if (mysqli_query($con, $query)) { 
        echo "<script language='javascript'>alert('berhasil');</script>";
        header("Location: ../../route.php?module=player");
    } else {
        $error = urldecode("Update Gagal! Cek kembali ekstensi file anda (*.jpeg,*.jpg,*.png)<br>");
        echo "<script language='javascript'>alert('$error'); window.location = '../../route.php?module=player'</script>";
    }
    
    // close mysql connection
    mysqli_close($con); 

}
else {
    $id=$_GET["id"];
    $aksi=$_GET["aksi"];
    $terblokir=$_GET["terblokir"];

    if ($terblokir == "true") {
        $status = "false";
    } else {
        $status = "true";
    }
    
    if ($aksi == "blokir") {
        $queryBlokir = "UPDATE tb_user SET terblokir='$status' WHERE id = $id";

        mysqli_query($con,$queryBlokir);
        header("Location: ../../route.php?module=player");
        
    } 
    else if ($aksi == "hapus") {
        $queryHapus = "DELETE FROM tb_user WHERE id = $id";

        mysqli_query($con,$queryHapus);
        header("Location: ../../route.php?module=player");
    }
    
}



?>