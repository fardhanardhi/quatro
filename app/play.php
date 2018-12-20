<?php 
session_start();

include '../conSQL.php';

    $idQuiz = $_POST["idQuiz"];
    $kode = $_POST["kode"];

    $query="SELECT * FROM tb_quiz WHERE id=$idQuiz";
    $result=mysqli_query($con,$query);

    $quiz='';
    if(mysqli_num_rows($result)==1){
        $quiz=mysqli_fetch_assoc($result);
    }else{
        echo "Quiz tidak ditemukan";
    }

    if ($quiz["kode"] != $kode) {
        $error="kode salah";
        echo "<script language='javascript'>alert('$error'); window.location = 'route.php?>&module=home'</script>";
    } 
        # code...
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Quatro Admin</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
    <!-- Main CSS -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<style>
    .radio-toolbar input[type="radio"] {
        display: none;
    }

    .radio-toolbar label {
        display: block;
        background-color: #ffffff;
        padding: 4px 11px;
        font-family: Arial;
        font-size: 16px;
        cursor: pointer;
        border: 1px solid #80B763;
    }

    .radio-toolbar input[type="radio"]:checked+label {
        background-color: #80B763;
        color: #ffffff;
    }
</style>
</head>

<body data-spy="scroll" data-target="#myScrollspy" data-offset="1">


    <!-- Main navigation -->
    <div id="sidebar">

        <div class="navbar-expand-md navbar-dark">

            <header class="d-none d-md-block">
                <h1><span>my</span>Quatro</h1>
            </header>


            <!-- Mobile menu toggle and header -->
            <div class="mobile-header-controls">
                <a class="navbar-brand d-md-none d-lg-none d-xl-none" href="#"><span>my</span>website</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#SidebarContent"
                    aria-controls="SidebarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div id="SidebarContent" class="collapse flex-column navbar-collapse">



                <!-- Main navigation items -->
                <nav class="navbar navbar-dark" id="myScrollspy">
                    <div id="mainNavbar">
                        <ul class="flex-column mr-auto nav nav-pills">
                            <?php 

                            $sql = "SELECT * FROM tb_soal WHERE quiz_id=$idQuiz";
                            $result = mysqli_query($con, $sql);
                            
                            for ($i=1; $i <= mysqli_num_rows($result); $i++) { 
                                ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#section<?php echo $i;?>">Soal <?php echo $i;?></a>
                                    </li>
                                <?php 
                            }
                            ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>


    <div id="content">
        <div id="content-wrapper">

            <!-- include content -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-12">
                        <form action="module/mod_play/aksiQuiz.php" method="post">
                            <?php
                            $query = "SELECT * FROM tb_soal WHERE quiz_id=$idQuiz ORDER BY RAND()";
                            $result = mysqli_query($con, $query);

                            if (mysqli_num_rows($result) > 0){
                                $index = 1;
                                while($row = mysqli_fetch_assoc($result)){
                                    $soal_id = $row["id"];
                            ?>
                            
                            <div id="section<?php echo $index; ?>">  
                                <div class="card border-success mt-5 mb-5">
                                    <div class="card-header">Soal Nomor <?php echo $index; ?></div>
                                    <div class="card-body text-success">
                                        <?php echo $row["soal"]; ?>     
                                        <?php 
                                        if (!empty($row["gambar"])) {
                                        ?> 
                                            <center>
                                                <img style='width: 700px; height: auto;' src='../img/<?php echo $row["gambar"]; ?>'> 
                                            </center>
                                        <?php 
                                        }
                                        ?>
                                    </div>
                                    <div class="card-footer">
                                        <?php
                                        $query_pilihan = "SELECT * FROM tb_pilihan WHERE soal_id=$soal_id ORDER BY RAND()";
                                        $result_pilihan = mysqli_query($con, $query_pilihan);

                                        if (mysqli_num_rows($result_pilihan) > 0){
                                            while($row_pilihan = mysqli_fetch_assoc($result_pilihan)){

                                        ?>

                                        <div class="radio-toolbar">
                                            <input type="radio" id="radio<?php echo $row_pilihan["id"]?>" name="soal<?php echo $row["id"]?>" value="<?php echo $row_pilihan["id"]?>">
                                            <label for="radio<?php echo $row_pilihan["id"]?>"><?php echo $row_pilihan["pilihan"]?></label>
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
                            <input type="hidden" name="idQuiz" value="<?php echo $idQuiz ?>">
                            <button type="submit" name="selesai" class="btn btn-primary btn-block mb-5"><h1 class="text-light ">Selesai</h1></button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>








    <!-- Bootcamp JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>

</body>
</html>