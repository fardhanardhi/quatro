<?php

$id=$_SESSION["id_user"];
$query="SELECT * FROM tb_user WHERE id=$id";
$result=mysqli_query($con,$query);

$user='';
if(mysqli_num_rows($result)==1){
    $user=mysqli_fetch_assoc($result);
}else{
    echo "User tidak ditemukan";
}
?>


<!doctype html>
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
</head>

<body>


    <!-- Main navigation -->
    <div id="sidebar">

        <div class="navbar-expand-md navbar-dark">

            <img style='width: 100%; height: auto; ' src='../img/<?php echo (empty($user["foto"]) ? 'profile/default.png' : $user["foto"]); ?>'>
            <div style="background-color: #00a326;" class=" h-10">&nbsp;</div>


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
                <nav class="navbar navbar-dark">
                    <div id="mainNavbar">
                        <ul class="flex-column mr-auto">
                            <li class="nav-item <?php echo(($_GET['module']=='home') ? 'active' : ''); ?>">
                                <a class="nav-link" href="route.php?module=home">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item <?php echo(($_GET['module']=='hasilQuiz') ? 'active' : ''); ?>">
                                <a class="nav-link" href="route.php?module=hasilQuiz">Hasil Quiz <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item <?php echo(($_GET['module']=='editProfil') ? 'active' : ''); ?>">
                                <a class="nav-link" href="route.php?module=editProfil">Profil <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">Logout</a>
                            </li>
                        </ul>
                    </div>
                </nav>


                <!-- Sidebar search form -->
                <form class="form-inline sidebar-search-form my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" size="10" placeholder="Search" aria-label="Search">
                    <button class="btn my-2 my-sm-0" type="submit">Search</button>
                </form>

                <!-- Social icons -->
                <p class="sidebar-social-icons social-icons">
                    <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                    <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                    <a href="#"><i class="fa fa-youtube fa-2x"></i></a>
                    <a href="#"><i class="fa fa-instagram fa-2x"></i></a>
                </p>

            </div>
        </div>
    </div>


    <div id="content">
        <div id="content-wrapper">

            <!-- include content -->
            <?php include "content.php"; ?>

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