<?php
session_start();

if (!isset($_SESSION['as_admin'])) { //jika session login bukan admin
    header('location: ../'); //alihkan berdasarkan hak akses
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
    <link rel="stylesheet" href="../../css/style.css">

    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>


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
                <nav class="navbar navbar-dark">
                    <div id="mainNavbar">
                        <ul class="flex-column mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="./">Home <span class="sr-only">(current)</span></a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#MenuDropdown" data-toggle="collapse"
                                    aria-controls="MenuDropdown" aria-expanded="false">Examples &amp; Pages</a>
                                <ul id="MenuDropdown" class="sub-navbar collapse flex-column">
                                    <li class="nav-item"><a class="nav-link" href="examples.html">Style Examples</a></li>
                                    <li class="nav-item"><a class="nav-link" href="three-column.html">Three Column</a></li>
                                    <li class="nav-item"><a class="nav-link" href="one-column.html">One column / no
                                            sidebar</a></li>
                                    <li class="nav-item"><a class="nav-link" href="text.html">Text / left sidebar</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../../process/userLogout.php?logout">Logout</a>
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

            <!-- Jumbtron / Slider -->
            <div class="jumbotron-wrap">
                <div class="container-fluid">
                    <div id="mainCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="jumbotron">
                                    <h1 class="text-center">Tristique sem vitae metus ornare </h1>
                                    <p class="lead text-center">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                        elit.</p>
                                    <p class="lead text-center">
                                        <a class="btn btn-primary btn-lg" href="#" role="button"><i class="fa fa-info"></i>
                                            &nbsp; Learn more</a>
                                        <a class="btn btn-secondary btn-lg" href="#" role="button"><i class="fa fa-gbp"></i>
                                            &nbsp; Buy now</a>
                                    </p>
                                </div>

                            </div>

                            <div class="carousel-item">
                                <div class="jumbotron">
                                    <h1 class="text-center">Cras sit amet nibh libero, in gravida nulla</h1>
                                    <p class="lead text-center">Nulla vel metus scelerisque ante sollicitudin. Cras
                                        purus odio.</p>
                                    <p class="lead text-center">
                                        <a class="btn btn-outline-primary btn-lg" href="#" role="button"><i class="fa fa-info"></i>
                                            &nbsp; Learn more</a>
                                        <a class="btn btn-outline-secondary btn-lg" href="#" role="button"><i class="fa fa-gbp"></i>
                                            &nbsp; Buy now</a>
                                    </p>
                                </div>

                            </div>
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
                        <article>
                            <h2 class="article-title">Introduction to overflow</h2>

                            <p class="article-meta">Posted on <time datetime="2017-05-14">14 May</time> by <a href="#"
                                    rel="author">Joe Bloggs</a></p>

                            <p>Welcome to overflow, a free CSS3 &amp; HTML5 responsive web template from <a href="https://zypopwebtemplates.com/"
                                    title="ZyPOP">ZyPOP</a>. This template is completely <strong>free</strong> to use
                                permitting a link remains back to <a href="https://zypopwebtemplates.com/" title="ZyPOP">https://zypopwebtemplates.com/</a>.</p>

                            <p> Should you wish to use this template unbranded you can buy a template license from our
                                website for 8.00 GBP, this will allow you remove all branding related to our site, for
                                more information about this see below.</p>

                            <p>This template has been tested in:</p>

                            <ul>
                                <li>Firefox</li>
                                <li>IE / Edge</li>
                                <li>Chrome</li>
                                <li>Safari</li>
                                <li>iOS / Android</li>
                            </ul>

                            <a href="#" class="btn btn-primary">Read more</a>
                            <a href="#" class="btn btn-secondary">Comments</a>

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


            <!-- Footer -->
            <div class="container-fluid footer-container">
                <footer class="footer">
                    <div class="footer-lists">
                        <div class="row">
                            <div class="col-sm">
                                <ul>
                                    <li>
                                        <h4>Proin accumsan</h4>
                                    </li>
                                    <li><a href="#">Rutrum nulla a ultrices</a></li>
                                    <li><a href="#">Blandit elementum</a></li>
                                    <li><a href="#">Proin placerat accumsan</a></li>
                                    <li><a href="#">Morbi hendrerit libero </a></li>
                                    <li><a href="#">Curabitur sit amet tellus</a></li>
                                </ul>
                            </div>
                            <div class="col-sm">
                                <ul>
                                    <li>
                                        <h4>Condimentum</h4>
                                    </li>
                                    <li><a href="#">Curabitur sit amet tellus</a></li>
                                    <li><a href="#">Morbi hendrerit libero </a></li>
                                    <li><a href="#">Proin placerat accumsan</a></li>
                                    <li><a href="#">Rutrum nulla a ultrices</a></li>
                                    <li><a href="#">Cras dictum</a></li>
                                </ul>
                            </div>
                            <div class="col-sm">
                                <ul>
                                    <li>
                                        <h4>Suspendisse</h4>
                                    </li>
                                    <li><a href="#">Morbi hendrerit libero </a></li>
                                    <li><a href="#">Proin placerat accumsan</a></li>
                                    <li><a href="#">Rutrum nulla a ultrices</a></li>
                                    <li><a href="#">Curabitur sit amet tellus</a></li>
                                    <li><a href="#">Donec in ligula nisl.</a></li>
                                </ul>
                            </div>
                            <div class="col-sm">
                                <h4>Suspendisse</h4>
                                <p>Integer mattis blandit turpis, quis rutrum est. Maecenas quis arcu vel felis
                                    lobortis iaculis fringilla at ligula. Nunc dignissim porttitor dolor eget porta.</p>

                                <p class="social-icons">
                                    <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                                    <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                                    <a href="#"><i class="fa fa-youtube fa-2x"></i></a>
                                    <a href="#"><i class="fa fa-instagram fa-2x"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="footer-bottom">
                        <p class="text-center">Web Template by <a href="https://zypopwebtemplates.com/">ZyPop</a>.</p>
                        <p class="text-center"><a href="#">Back to top</a></p>
                    </div>
                </footer>
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