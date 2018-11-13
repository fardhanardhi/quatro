<?php

$id=$_GET["id"];
$sql="SELECT * FROM tb_soal WHERE id=$id";
$result=mysqli_query($con,$sql);

$soal='';
if(mysqli_num_rows($result)==1){
    $soal=mysqli_fetch_assoc($result);
}else{
    echo "Soal tidak ditemukan";
}
?>

<main class="container-fluid">
    <div class="row">

        <!-- Main content -->
        <div class="col-md-12">
            <article>
                <h3 class="article-title">Edit soal</h3>
                    <input type="button" class="btn btn-success" value="Reset" id="btnReset">
                    <input type="button" class="btn btn-secondary" value="Clear" id="btnClear">
                    <div id="editor"></div>
                    <textarea name="isi" id="isi" cols="50" rows="5"></textarea>
                    <input type="button" value="ok" id="submit1">

                    <form action="module/mod_quiz/aksiSoal.php" method="post">
                        <input type="text" id="idSoal" name="idSoal" value="<?php echo $soal["id"];?>">
                        <input type="text" id="isiSoal" name="isiSoal" value="<?php echo $soal["soal"];?>">
                        <button type="submit" id="btnEdit" name="edit" class="btn btn-primary">Edit</button>
                    </form>
                    <?php
                    $query = "SELECT * FROM tb_pilihan WHERE soal_id=$id";
                    $result = mysqli_query($con, $query);

                    if (mysqli_num_rows($result) > 0){
                        $index = 1;
                        while($row = mysqli_fetch_assoc($result)){
                            $pilihan_id = $row["id"];


                            ?>
                            <div class="alert <?php echo ($row["status"] == 'benar') ? 'alert-warning' : 'alert-danger'; ?>" role="alert">
                                <?php echo $row["pilihan"]?>
                            </div>
                            <?php 
                            $index++;
                        }
                    }
                    // close mysql connection
                    mysqli_close($con); 
                    ?>

            </article>
            <!-- Example pagination Bootstrap component -->
        </div>

    </div>
</main>