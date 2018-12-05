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
?>

<main class="container-fluid">
    <div class="row">

        <!-- Main content -->
        <div class="col-md-12">
            <article>
                <h3 class="article-title">Edit Quiz <?php echo $quiz["nama"]; ?></h3>
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
                                                        <a href='' class='btn btn-danger'><i class='fa fa-trash'></i></a>
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

            </article>
            <!-- Example pagination Bootstrap component -->
        </div>

    </div>
</main>