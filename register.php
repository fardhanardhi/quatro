<?php 
session_start();
// session_destroy();

if (!empty($_SESSION['username'])) {
    header('location: app/route.php?module=home');
}

if (isset($_GET['pesan'])) {
        $mess = "{$_GET['pesan']}";
    }
    else {
        $mess = "";
    }
?>

<html>

<head>
    <title>Quatro - Register</title>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
    <script src="./js/brand.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/signin.css">
    <link rel="stylesheet" href="css/brand.css">
    <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy" rel="stylesheet">
</head>

<body class="text-center">
    <div class="center-outer">
        <div class="center-inner">
            <div class="bubbles">
                <h1>Register</h1>
            </div>
            <form class="form-signin" action="process/userRegister.php" method="POST">
                <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <button class="btn btn-lg btn-dark btn-block mt-4" type="submit" name="register">Register</button>
                <a href="index.php" class="btn btn-lg btn-success btn-block mb-4" name="login">Login</a>

            </form>
            <?php if ($mess != '') { ?>
                <span class="badge badge-warning"><?php echo $mess; ?></span>
            <?php } ?>
        </div>
    </div>
</body>

</html>

<!-- select b.level from tb_user a, tb_level b where a.level_id = b.id and a.id = $session -->