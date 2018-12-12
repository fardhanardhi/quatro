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
                echo "<script language='javascript'>alert('$error'); window.location = '../../route.php?module=admin'</script>";
                $upload_check=true;
            }
            if($upload_check==false){
                unlink($_POST["foto_lama"]);
            }
            if(!$upload_check and move_uploaded_file($tmp,$path)){
                $query = "UPDATE tb_user SET username='$username', nama='$nama', email='$email', foto='$pathdb' WHERE id = $idUser";
            }
            else{
                $error="Upload foto gagal";
                echo "<script language='javascript'>alert('$error'); window.location = '../../route.php?module=admin'</script>";
            }
        }
    }
    else {
        $query = "UPDATE tb_user SET username='$username', nama='$nama', email='$email' WHERE id = $idUser";
    }
    
    if (mysqli_query($con, $query)) { 
        echo "<script language='javascript'>alert('berhasil');</script>";
        header("Location: ../../route.php?module=admin");
    } else {
        $error = urldecode("Update Gagal! Username telah dipakai");
        echo "<script language='javascript'>alert('$error'); window.location = '../../route.php?module=admin'</script>";
    }
    
    // close mysql connection
    mysqli_close($con); 

}
else if(isset($_POST['add'])){
    
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // check username exist or not
    $query = "SELECT * FROM tb_user WHERE username = '$username'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result)==0) { // if username is not found, add user
        $query = "INSERT INTO tb_user(nama, username, email, password, level) VALUES('$nama', '$username', '$email', '$password', 'admin')";
        // $error = urlencode("User berhasi dibuat");
        // header("Location: ../index.php?pesan=$error");
        if (mysqli_query($con, $query)) {
            header("Location: ../../route.php?module=admin");
        } else {
            $error = urlencode("Gagal tambah");
            echo "<script language='javascript'>alert('$error'); window.location = '../../route.php?module=admin'</script>";
        }
    } 
    else {
        $error = "Username sudah dipakai";
        echo "<script language='javascript'>alert('$error'); window.location = '../../route.php?module=admin'</script>";
    }
    mysqli_close($con);
}
else {
    $id=$_GET["id"];
    $aksi=$_GET["aksi"];
    
    if ($aksi == "hapus") {
        $queryHapus = "DELETE FROM tb_user WHERE id = $id";

        mysqli_query($con,$queryHapus);
        header("Location: ../../route.php?module=admin");
    }
    
}



?>