<!-- Main content area -->
<main class="container-fluid">
    <div class="row">

        <!-- Main content -->
        <div class="col-md-12">
            <article>
                <h2 class="article-title">Manage Player</h2>

                <p class="article-meta">Posted on <time datetime="2017-05-14">14 May</time> by <a href="#"
                        rel="author">Joe Bloggs</a></p>


                <table id="player-list" class="table">
                    <thead>
                        <tr>
                            <th class='text-center'>No</th>
                            <th class='text-center'>Foto</th>
                            <th>Username</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    // Query command
                    $query = "SELECT * FROM tb_user WHERE level = 'player'";
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

                            ?>
                            <tr>
                                <td class='text-center'> <?php echo $index++; ?></td>
                                <td class='text-center'><img style='width: 50px; height: auto' src='../img/<?php echo (empty($row["foto"]) ? 'profile/default.png' : $row["foto"]); ?>' height=25%></td>
                                <td><?php echo $row["username"] ?></td>
                                <td><?php echo $row["nama"] ?></td>
                                <td><?php echo $row["email"] ?></td>
                                <td class='text-center'>
                                    <a href='formEditBarang.php?id=$id' class='btn btn-warning'><i class='fa fa-pencil'></i></a>
                                    <a href='process/actionDeleteBarang.php?id=$id' class='btn btn-danger'><i class='fa fa-trash'></i></a>
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