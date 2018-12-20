<!-- Main content area -->
<main class="container-fluid">
    <div class="row">

        <!-- Main content -->
        <div class="col-md-12">
            <div class="row">
            
            </div>
            <article>
                <h2 class="article-title">Manage Hasil Quiz</h2>
                <p class="article-meta">Posted on <time datetime="2017-05-14">14 May</time> by <a href="#"rel="author">Joe Bloggs</a></p>

                <table id="hasil-quiz-list" class="table mt-2">
                    <thead>
                        <tr>
                            <th rowspan="2" class='text-center align-middle'>No</th>
                            <th rowspan="2" class='align-middle'>Nama</th>
                            <th rowspan="2" class='align-middle'>Player</th>
                            <th rowspan="2" class='text-center align-middle'>Tanggal Pengerjaan</th>
                            <th colspan="3" class='text-center'>Jumlah Jawaban</th>
                            <th rowspan="2" class='text-center align-middle'>Nilai</th>
                            <th rowspan="2" class='text-center align-middle'>Action</th>
                        </tr>
                            <th class='text-center'>Benar</th>
                            <th class='text-center'>Salah</th>
                            <th class='text-center'>Kosong</th>
                        <tr>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    // Query command
                    $query = "
                        SELECT
                            a.nama AS 'player',
                            c.id,
                            b.nama,
                            c.tanggal,
                            c.soal_benar,
                            c.soal_salah,
                            c.soal_kosong
                        FROM
                            tb_user a,
                            tb_quiz b,
                            tb_hasil_quiz c
                        WHERE
                            c.quiz_id = b.id AND c.user_id = a.id
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

                            // id admin
                            $id = $row["id"];

                            $jBenar=$row["soal_benar"];
                            $jSalah=$row["soal_salah"];
                            $jKosong=$row["soal_kosong"];

                            $nilai = $jBenar + $jSalah + $jKosong;
                            $nilai = $jBenar / $nilai * 100;


                            ?>
                            <tr>
                                <td class='text-center'> <?php echo $index++; ?></td>
                                <td><?php echo $row["nama"] ?></td>
                                <td><?php echo $row["player"] ?></td>
                                <td class='text-center'><?php echo $row["tanggal"] ?></td>
                                <td class='text-center'><?php echo $row["soal_benar"] ?></td>
                                <td class='text-center'><?php echo $row["soal_salah"] ?></td>
                                <td class='text-center'><?php echo $row["soal_kosong"] ?></td>
                                <td class='text-center'><?php echo $nilai ?></td>
                                <td class='text-center'>
                                    <a href='module/mod_hasil_quiz/aksiHasilQuiz.php?id=<?php echo $id ?>&aksi=hapus' class='btn btn-danger'><i class='fa fa-trash'></i></a>
                                </td>                            
                            </tr>
                            <?php 
                        }
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