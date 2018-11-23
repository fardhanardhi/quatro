<!-- Main content area -->
<main class="container-fluid">
    <div class="row">

        <!-- Main content -->
        <div class="col-md-12">
            <article>
                <h2 class="article-title">Manage Player</h2>
                <p class="article-meta">Posted on <time datetime="2017-05-14">14 May</time> by <a href="#"rel="author">Joe Bloggs</a></p>
                <!-- <a href="formAddBarang.php" class="btn btn-primary"><i class='fa fa-plus-circle'></i>&nbsp;Tambah Player</a> -->

                <table id="player-list" class="table mt-2">
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
                            <tr class="<?php echo ($row["terblokir"] == 'true') ? 'bg-dark' : ''; ?>">
                                <td class='text-center'> <?php echo $index++; ?></td>
                                <td class='text-center'><img style='width: 50px; height: auto' src='../img/<?php echo (empty($row["foto"]) ? 'profile/default.png' : $row["foto"]); ?>' height=25%></td>
                                <td><?php echo $row["username"] ?></td>
                                <td><?php echo $row["nama"] ?></td>
                                <td><?php echo $row["email"] ?></td>
                                <td class='text-center'>
                                    <a href='route.php?id=<?php echo $id ?>&module=editPlayer' class='btn btn-warning'><i class='fa fa-pencil'></i></a>
                                    <a href='module/mod_player/aksiPlayer.php?id=<?php echo $id ?>&terblokir=<?php echo ($row["terblokir"] == 'true') ? 'true' : 'false'; ?>&aksi=blokir' class='btn <?php echo ($row["terblokir"] == 'true') ? 'btn-primary' : 'btn-dark'; ?>'><i class='fa <?php echo ($row["terblokir"] == 'true') ? 'fa-unlock-alt' : 'fa-lock'; ?>'></i></a>
                                    <a href='module/mod_player/aksiPlayer.php?id=<?php echo $id ?>&aksi=hapus' class='btn btn-danger'><i class='fa fa-trash'></i></a>
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

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit Player</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>