<main class="container-fluid">
    <div class="row">

        <!-- Main content -->
        <div class="col-md-12">
            <article>
                <h3 class="article-title">Tambah Quiz</h3>
                <form action="module/mod_quiz/aksiQuiz.php" method="POST" enctype="multipart/form-data">
                    <fieldset>
                        <legend>Data quiz</legend>
                        <div class="form-group">
                            <label for="username">Nama Quiz</label>
                            <input type="text" class="form-control" id="username" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Waktu pengerjaan</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend">Menit</span>
                                </div>
                                <input type="number" class="form-control" id="nama" name="waktu" required>
                            </div>
                        </div>
                        <button type="submit" name="add" class="btn btn-primary">Tambah</button>
                    </fieldset>
                </form>
            </article>
            <!-- Example pagination Bootstrap component -->
        </div>

    </div>
</main>