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
                    
                    <form name="rte" action="module/mod_quiz/aksiSoal.php" method="post" onsubmit="DoSubmit();">
                        <input type="button" class="btn btn-warning" value="Clear" id="btnClear">
                        <button type="submit" name="edit" class="btn btn-primary">Edit</button>
                        <input type="hidden" name="isiSoal">
                        <input type="hidden" id="idSoal" name="idSoal" value="<?php echo $soal["id"];?>">
                        <div id="editor">
                            <?php echo $soal["soal"]; ?>
                        </div>
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