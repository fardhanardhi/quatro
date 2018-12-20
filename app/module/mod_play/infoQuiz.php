<?php

$id=$_GET["id"];
$query = "
    SELECT
        `tb_user`.`nama` AS `penyusun`,
        `tb_quiz`.`id`,
        `tb_quiz`.`nama`,
        `tb_quiz`.`waktu`,
        `tb_quiz`.`status`,
        `tb_quiz`.`kode`
    FROM
        `tb_user`
    RIGHT JOIN
        `tb_quiz`
    ON
        `tb_user`.`id` = `tb_quiz`.`user_id`
    WHERE `tb_quiz`.`id` = $id
";

$result=mysqli_query($con,$query);

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

$sql = "SELECT * FROM tb_soal WHERE quiz_id = $id";
$jml_soal = mysqli_query($con, $sql);
?>


<!-- Main content area -->
<main class="container-fluid">
    <div class="row">

        <!-- Main content -->
        <div class="col-md-12">
            <div class="row">
            
            </div>
            <article>

                <form action="play.php" method="POST" >
                    <fieldset>
                        <legend>Info Quiz</legend>
                        <input type="hidden" name="idQuiz" value="<?php echo $id ?>">
                        <table class="table">
                            <tr>
                                <td>
                                    Nama Quiz:
                                </td>
                                <td>
                                    <?php echo $quiz["nama"]?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Nama Penyusun:
                                </td>
                                <td>
                                    <?php echo $quiz["penyusun"]?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Waktu Pengerjaan:
                                </td>
                                <td>
                                    <?php echo $minutesConvert?> Menit
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Jumlah Soal
                                </td>
                                <td>
                                    <?php echo mysqli_num_rows($jml_soal); ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="form-control" type="text" name="kode" placeholder="Masukan kode Quiz"></input>
                                </td>
                                <td>
                                    <button type="submit" name="mulai" class="btn btn-primary">Mulai</button>
                                </td>
                            </tr>
                        </table>
                            

                    </fieldset>
                </form>


            </article>
            <!-- Example pagination Bootstrap component -->
        </div>

    </div>
</main>