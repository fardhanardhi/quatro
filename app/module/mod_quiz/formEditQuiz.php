<?php

$id=$_GET["id"];
$sql="SELECT * FROM tb_quiz WHERE id=$id";
$result=mysqli_query($con,$sql);

$quiz='';
if(mysqli_num_rows($result)==1){
    $quiz=mysqli_fetch_assoc($result);
}else{
    echo "Quiz tidak ditemukan";
}

function minutes($time){
    $time = explode(':', $time);
    return ($time[0]*60) + ($time[1]) + ($time[2]/60);
}

$minutesConvert = minutes($quiz["waktu"]);
?>

<main class="container-fluid">
    <div class="row">

        <!-- Main content -->
        <div class="col-md-12">
            <article>
                <h3 class="article-title">Edit Quiz <?php echo $quiz["nama"]; ?></h3>
                <form action="module/mod_quiz/aksiQuiz.php" method="POST" enctype="multipart/form-data">
                    <fieldset>
                        <legend>Data quiz</legend>
                        <input type="hidden" name="idQuiz" value="<?php echo $quiz["id"] ?>">
                        <div class="form-group">
                            <label for="nama">Nama Quiz</label>
                            <input type="text" class="form-control" id="username" name="nama" value="<?php echo $quiz["nama"] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="waktu">Waktu pengerjaan</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend">Menit</span>
                                </div>
                                <input type="number" class="form-control" id="nama" name="waktu" value="<?php echo $minutesConvert ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kode">Kode Quiz</label>
                            <input type="text" class="form-control" id="kode" name="kode" value="<?php echo $quiz["kode"] ?>" required>
                        </div>
                        <button type="submit" name="edit" class="btn btn-primary">Edit</button>
                    </fieldset>
                </form>
                <fieldset>
                    <legend>Data soal</legend>
                    <div class="accordion" id="accordionExample">

                        <?php
                        $query = "SELECT * FROM tb_soal WHERE quiz_id=$id";
                        $result = mysqli_query($con, $query);

                        if (mysqli_num_rows($result) > 0){
                            $index = 1;
                            while($row = mysqli_fetch_assoc($result)){
                                $soal_id = $row["id"];
                        ?>
                        <div class="card">
                            <div class="card-header" id="heading<?php echo $index; ?>">
                                <h5 class="mb-0">
                                    <div class="col-md-12">
                                        <div class="row ">
                                            <div class="col">
                                                <div class="row">
                                                    <button class="btn btn-block btn-link text-left" type="button" data-toggle="collapse" data-target="#collapse<?php echo $index; ?>" aria-expanded="true" aria-controls="collapse<?php echo $index; ?>">
                                                    Soal <?php echo $index;?>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-md-auto">
                                                <div class="row">
                                                    <a href='route.php?id=<?php echo $soal_id ?>&module=editSoal' class='btn btn-warning'><i class='fa fa-pencil'></i></a>
                                                    <a href='module/mod_quiz/aksiSoal.php?id=<?php echo $soal_id ?>&aksi=hapus' class='btn btn-danger'><i class='fa fa-trash'></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </h5>
                            </div>
                            <div id="collapse<?php echo $index; ?>" class="collapse" aria-labelledby="heading<?php echo $index; ?>" data-parent="#accordionExample">
                                <div class="card-body">
                                    <?php echo $row["soal"]; ?>                                        
                                </div>
                                <div class="card-body">

                                    <?php
                                    $query_pilihan = "SELECT * FROM tb_pilihan WHERE soal_id=$soal_id";
                                    $result_pilihan = mysqli_query($con, $query_pilihan);

                                    if (mysqli_num_rows($result_pilihan) > 0){
                                        while($row_pilihan = mysqli_fetch_assoc($result_pilihan)){

                                    ?>

                                    <div class="alert <?php echo ($row_pilihan["status"] == 'benar') ? 'alert-warning' : 'alert-danger'; ?>" role="alert">
                                        <?php echo $row_pilihan["pilihan"]?>
                                    </div>

                                    <?php 
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <?php 
                            $index++;
                            }
                        }
                        // close mysql connection
                        mysqli_close($con); 
                        ?>
                    </div>
                </fieldset>
            </article>
            <!-- Example pagination Bootstrap component -->
        </div>

    </div>
</main>