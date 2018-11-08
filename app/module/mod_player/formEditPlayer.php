<?php

$id=$_GET["id"];
$query="SELECT * FROM tb_user WHERE id=$id";
$result=mysqli_query($con,$query);

$user='';
if(mysqli_num_rows($result)==1){
    $user=mysqli_fetch_assoc($result);
}else{
    echo "User tidak ditemukan";
}
?>

<main class="container-fluid">
    <div class="row">

        <!-- Main content -->
        <div class="col-md-12">
            <article>
                <h3 class="article-title">Edit <?php echo $user["nama"]; ?> Profile</h3>
                <form action="module/mod_player/aksiPlayer.php" method="POST" enctype="multipart/form-data">
                    <fieldset>
                        <legend>Data diri</legend>
                        <input type="hidden" name="idUser" value="<?php echo $user["id"] ?>">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" value="<?php echo $user["username"] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $user["nama"] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="<?php echo $user["email"] ?>" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" name="foto" id="foto" class="form-control">
                        </div>
                        <div class="form-group">
                            <img style='width: 200px; height: auto;' src='../img/<?php echo (empty($user["foto"]) ? 'profile/default.png' : $user["foto"]); ?>'>
                            <input type="hidden" name="foto_lama" value="<?php echo $user["foto"] ?>">
                        </div>

                        <button type="submit" name="edit" class="btn btn-primary">Edit</button>
                    </fieldset>
                </form>
            </article>
            <!-- Example pagination Bootstrap component -->
        </div>

    </div>
</main>