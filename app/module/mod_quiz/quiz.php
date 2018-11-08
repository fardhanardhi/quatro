<!-- Main content area -->
<main class="container-fluid">
    <div class="row">

        <!-- Main content -->
        <div class="col-md-12">
            <div class="row">
            
            </div>
            <article>
                <h2 class="article-title">Manage Quiz</h2>
                <p class="article-meta">Posted on <time datetime="2017-05-14">14 May</time> by <a href="#"rel="author">Joe Bloggs</a></p>
                <a href="formAddQuiz.php" class="btn btn-success"><i class='fa fa-plus-circle'></i>&nbsp;Tambah Quiz</a>

                <table id="quiz-list" class="table mt-2">
                    <thead>
                        <tr>
                            <th class='text-center'>No</th>
                            <th>Nama</th>
                            <th>Penyusun</th>
                            <th class='text-center'>Waktu</th>
                            <th class='text-center'>Status</th>
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
                            `tb_quiz`.`status`
                        FROM
                            `tb_user`
                        RIGHT JOIN
                            `tb_quiz`
                        ON
                            `tb_user`.`id` = `tb_quiz`.`user_id`
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
                                <td class='text-center'> <?php echo $row["status"]; ?></td>
                                <td class='text-center'> <?php echo mysqli_num_rows($jml_soal); ?></td>
                                <td class='text-center'>
                                    <a href='route.php?id=<?php echo $id ?>&module=editQuiz' class='btn btn-warning'><i class='fa fa-pencil'></i></a>
                                    <a href='process/actionDeleteBarang.php?id=<?php echo $id; ?>' class='btn btn-danger'><i class='fa fa-trash'></i></a>
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