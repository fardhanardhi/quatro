<?php 
$idQuiz=$_GET["idQuiz"];
?>
<main class="container-fluid">
    <div class="row">

        <!-- Main content -->
        <div class="col-md-12">
            <article>
                <h3 class="article-title">Tambah soal</h3>
                    
                    <form name="rte" action="module/mod_quiz/aksiSoal.php" method="post" onsubmit="DoSubmit();">
                        <input type="button" class="btn btn-warning" value="Clear" id="btnClear">
                        <button type="submit" name="add" class="btn btn-primary">Edit</button>
                        <input type="hidden" name="isiSoal">
                        <input type="hidden" name="idQuiz" value="<?php echo $idQuiz ?>">
                        <div id="editor">
                        </div>
                    
                        <table id="pilihan-list" class="table mt-2">
                            <tbody>

                                <?php
                                $jumlahPilihan = 4;
                                
                                    for ($index = 1; $index <= $jumlahPilihan; $index++) {
                                        ?>
                                        <input type="hidden" name="jumlahPilihan" value="<?php echo $jumlahPilihan ?>">

                                        <tr>
                                            <td style="white-space: nowrap; width: 1%;">
                                                <label class="container">
                                                <!-- <input type="radio" checked="checked" name="radio"> -->
                                                    <input type="radio" class="custom-control-input" id="pilihanSoal<?php echo $index;?>" name="pilihan" value="pilihan<?php echo $index;?>" required>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                        <input type="text" class="form-control" name="pilihan<?php echo $index;?>" id="exampleFormControlInput1" placeholder="Masukan pilihan Pilihan <?php echo $index; ?>">
                                                </div>
                                            </td>
                                        </tr>
                                        
                                        <?php 
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