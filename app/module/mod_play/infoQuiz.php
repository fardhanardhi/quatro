<?php

$id=$_GET["id"];
$query="SELECT * FROM tb_quiz WHERE id=$id";
$result=mysqli_query($con,$query);

$quiz='';
if(mysqli_num_rows($result)==1){
    $quiz=mysqli_fetch_assoc($result);
}else{
    echo "Quiz tidak ditemukan";
}
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

                        <div class="form-group">
                            <input type="text" name="kode" placeholder="Masukan kode Quiz"></input>
                            <button type="submit" name="mulai" class="btn btn-primary">Mulai</button>
                        </div>

                    </fieldset>
                </form>


            </article>
            <!-- Example pagination Bootstrap component -->
        </div>

    </div>
</main>