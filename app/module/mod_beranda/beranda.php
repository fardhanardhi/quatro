<!-- Jumbtron / Slider -->
<div class="jumbotron-wrap">
    <div class="container-fluid">
        <div id="mainCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="jumbotron">
                        <h1 class="text-center">Welcome to Quatro</h1>
                        <p class="lead text-center">Lorem ipsum dolor sit amet, consectetuer adipiscing
                            elit.</p>
                        <p class="lead text-center">
                            <a class="btn btn-primary btn-lg" href="#" role="button"><i class="fa fa-info"></i>
                                &nbsp; Learn more</a>
                        </p>
                    </div>

                </div>




                    <?php
                    // Query command
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
                        WHERE `tb_quiz`.`status` = 'open'
                    ";


                    // Do query
                    // $con is db connection
                    // $query is query command
                    $result = mysqli_query($con, $query);

                    // Check row number, if we have data on db ( > 0), show the result data
                    if (mysqli_num_rows($result) > 0){
                        // Create row index
                        $index = 1;
                        // Do loop through data
                        while($row = mysqli_fetch_assoc($result)){
                            // Print result to HTML structure
                            // $row is the iterator
                            // nama_barang, harga_barang, and jml_barang is array key,
                            // They are the coloums names in table tb_barang

                            // id player
                            $id = $row["id"];

                            $sql = "SELECT * FROM tb_soal WHERE quiz_id = $id";
                            $jml_soal = mysqli_query($con, $sql);
                            

                            ?>
                            <div class="carousel-item">
                                <div class="jumbotron">
                                    <h1 class="text-center"><?php echo $row["nama"]?></h1>
                                    <p class="lead text-center">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                        elit.</p>
                                    <p class="lead text-center">
                                        <a class="btn btn-primary btn-lg" href="#" role="button"><i class="fa fa-pencil"></i>
                                            &nbsp; Kerjakan</a>
                                        <a class="btn btn-secondary btn-lg" href="#" role="button"><i class="fa fa-info"></i>
                                            &nbsp; Info</a>
                                    </p>
                                </div>

                            </div>
                            <?php 
                        }
                    }
                    else {
                        ?>

                        <tr>
                            <td colspan="6" class='text-center'>Tidak ada data</td>
                        </tr>

                        <?php 
                    }
                    // close mysql connection
                    ?>







            

            </div>

            <a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>



<!-- Main content area -->
<main class="container-fluid">
    <div class="row">

        <!-- Main content -->
        <div class="col-md-12">
            <div class="row">
            
            </div>
            <article>
                <table id="quiz-list" class="table mt-2">
                    <thead>
                        <tr>
                            <th class='text-center'>No</th>
                            <th>Nama</th>
                            <th>Penyusun</th>
                            <th class='text-center'>Waktu</th>
                            <th class='text-center'>Jumlah Soal</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    // Query command
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
                        WHERE `tb_quiz`.`status` = 'open'
                    ";


                    // Do query
                    // $con is db connection
                    // $query is query command
                    $result = mysqli_query($con, $query);

                    // Check row number, if we have data on db ( > 0), show the result data
                    if (mysqli_num_rows($result) > 0){
                        // Create row index
                        $index = 1;
                        // Do loop through data
                        while($row = mysqli_fetch_assoc($result)){
                            // Print result to HTML structure
                            // $row is the iterator
                            // nama_barang, harga_barang, and jml_barang is array key,
                            // They are the coloums names in table tb_barang

                            // id player
                            $id = $row["id"];

                            $sql = "SELECT * FROM tb_soal WHERE quiz_id = $id";
                            $jml_soal = mysqli_query($con, $sql);
                            

                            ?>
                            <tr>
                                <td class='text-center'> <?php echo $index++; ?></td>
                                <td><?php echo $row["nama"] ?></td>
                                <td><?php echo $row["penyusun"] ?></td>
                                <td class='text-center'> <?php echo $row["waktu"]; ?></td>
                                <td class='text-center'> <?php echo mysqli_num_rows($jml_soal); ?></td>
                                <td class='text-center'>
                                    <a href='#' class='btn btn-warning'><i class='fa fa-pencil'></i></a>
                                </td>
                            </tr>
                            <?php 
                        }
                    }
                    else {
                        ?>

                        <tr>
                            <td colspan="6" class='text-center'>Tidak ada data</td>
                        </tr>

                        <?php 
                    }
                    // close mysql connection
                    mysqli_close($con); 
                    ?>
                    </tbody>
                </table>

            </article>
            <!-- Example pagination Bootstrap component -->
            <nav>
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>
</main>