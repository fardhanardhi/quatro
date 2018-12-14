<?php

$id=$_GET["id"];
$quizId=$_GET["quizId"];
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
                    
                    <form name="rte" action="module/mod_quiz/aksiSoal.php" method="post" onsubmit="DoSubmit();" enctype="multipart/form-data">
                        <input type="button" class="btn btn-warning" value="Clear" id="btnClear">
                        <button type="submit" name="edit" class="btn btn-primary">Edit</button>
                        <input type="hidden" name="isiSoal">
                        <input type="hidden" id="idSoal" name="idSoal" value="<?php echo $soal["id"];?>">
                        <input type="hidden" id="quizId" name="quizId" value="<?php echo $quizId;?>">
                        <div id="editor">
                            <?php echo $soal["soal"]; ?>
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="gambar">
                            <input type="hidden" id="gambar_lama" name="gambar_lama" value="<?php echo $soal["gambar"];?>">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php 
                            if (!empty($soal["gambar"])) {
                            ?> 
                                <center>
                                    <img style='width: 70%; height: auto;' src='../img/<?php echo $soal["gambar"]; ?>'> 
                                </center>
                            <?php 
                            }
                            ?>
                            <input type="hidden" name="foto_lama" value="<?php echo $user["foto"] ?>">
                        </div>

                        <table id="pilihan-list" class="table mt-2">
                            <tbody>

                                <?php
                                
                                $query = "SELECT * FROM tb_pilihan WHERE soal_id=$id";
                                $result = mysqli_query($con, $query);

                                if (mysqli_num_rows($result) > 0){
                                    $index = 1;
                                    while($row = mysqli_fetch_assoc($result)){
                                        $pilihan_id = $row["id"];

                                        ?>

                                        <tr>
                                            <td style="white-space: nowrap; width: 1%;">
                                                <label class="container">
                                                <!-- <input type="radio" checked="checked" name="radio"> -->
                                                    <input type="radio" class="custom-control-input" id="pilihanSoal<?php echo $index;?>" name="pilihan" <?php echo ($row["status"] == 'benar') ? 'checked' : '' ?> value=<?php echo $row["id"]; ?> required>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                        <input type="text" class="form-control" name="<?php echo $row["id"]; ?>" id="exampleFormControlInput1" placeholder="Masukan pilihan Pilihan <?php echo $index; ?>" value="<?php echo $row["pilihan"];?>">
                                                </div>
                                            </td>
                                        </tr>
                                        
                                        <?php 
                                        $index++;
                                    }
                                }
                                // close mysql connection
                                mysqli_close($con); 
                                ?>


                            </tbody>
                        </table>
                    </form>
            </article>
            <!-- Example pagination Bootstrap component -->
        </div>

    </div>
</main>