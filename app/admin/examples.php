<!doctype html>
<html lang="en">

<head>
    <title>MyCompany - ZyPop Web Templates</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


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
                <h1><span>my</span>website</h1>
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
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                            </li>

                            <li class="nav-item active dropdown">
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
                                <a class="nav-link" href="#">Services</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Products</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
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
                    <div class="jumbotron jumbotron-narrow static-slider">
                        <h1 class="text-center">Style examples</h1>
                    </div>
                </div>
            </div>

            <!-- Main content area -->
            <main class="container-fluid">
                <div class="row">

                    <!-- Main content -->
                    <div class="col-sm-8">
                        <article>
                            <h2 class="article-title">Examples</h2>

                            <p>Here are some examples based on basic HTML mark up and Bootstrap's built in components.</p>
                            <p>Consult the <a href="https://getbootstrap.com/docs/4.0/getting-started/introduction/">Bootstrap
                                    documentation</a> for more information.</p>

                            <h1>Heading H1</h1>
                            <h2>Heading H2</h2>
                            <h3>Heading H3</h3>
                            <h4>Heading H4</h4>
                            <h5>Heading H5</h5>


                            <p>&nbsp;</p>


                            <h3>Lists</h3>
                            <ul>

                                <li>List item</li>
                                <li>List item</li>
                                <li>List item</li>
                            </ul>

                            <ol>
                                <li>List item</li>
                                <li>List item</li>
                                <li>List item</li>
                            </ol>

                            <p>&nbsp;</p>

                            <h3>Code and blockquote</h3>
                            <p>Here is an example of some <code>&lt;? echo('Hello world'); ?&gt;</code> inline code.</p>

                            <pre><code>&lt;p&gt;This code block...&lt;/p&gt;
&lt;p&gt;Covers multiple lines...&lt;/p&gt;
                                </code></pre>


                            <blockquote>
                                <p>Mauris sit amet tortor in urna tincidunt aliquam. Pellentesque habitant morbi
                                    tristique senectus et netus et malesuada fames ac turpis egestas</p>
                            </blockquote>


                            <p>&nbsp;</p>



                            <h3>Table</h3>

                            <table class="table">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Age</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>John Smith</td>
                                    <td>28</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Fred James</td>
                                    <td>49</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Rachel Johnson</td>
                                    <td>19</td>
                                </tr>

                            </table>

                            <p>&nbsp;</p>


                            <h3>Form</h3>

                            <fieldset>
                                <legend>Form legend</legend>
                                <div class="form-group">
                                    <label for="exampleInputName">Your name</label>
                                    <input type="text" class="form-control" id="exampleInputName">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email
                                        with anyone else.</small>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputMessage">Message</label>
                                    <textarea class="form-control" id="exampleInputMessage" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </fieldset>


                            <h3>Alerts</h3>
                            <div class="alert alert-primary" role="alert">
                                This is a primary alert—check it out!
                            </div>
                            <div class="alert alert-secondary" role="alert">
                                This is a secondary alert—check it out!
                            </div>
                            <div class="alert alert-success" role="alert">
                                This is a success alert—check it out!
                            </div>
                            <div class="alert alert-danger" role="alert">
                                This is a danger alert—check it out!
                            </div>
                            <div class="alert alert-warning" role="alert">
                                This is a warning alert—check it out!
                            </div>
                            <div class="alert alert-info" role="alert">
                                This is a info alert—check it out!
                            </div>
                            <div class="alert alert-light" role="alert">
                                This is a light alert—check it out!
                            </div>
                            <div class="alert alert-dark" role="alert">
                                This is a dark alert—check it out!
                            </div>

                            <p>&nbsp;</p>

                            <h3>Badges</h3>
                            <span class="badge badge-primary">Primary</span>
                            <span class="badge badge-secondary">Secondary</span>
                            <span class="badge badge-success">Success</span>
                            <span class="badge badge-danger">Danger</span>
                            <span class="badge badge-warning">Warning</span>
                            <span class="badge badge-info">Info</span>
                            <span class="badge badge-light">Light</span>
                            <span class="badge badge-dark">Dark</span>

                            <p>&nbsp;</p>

                            <h3>Buttons</h3>
                            <button type="button" class="btn btn-primary">Primary</button>
                            <button type="button" class="btn btn-secondary">Secondary</button>
                            <button type="button" class="btn btn-success">Success</button>
                            <button type="button" class="btn btn-danger">Danger</button>
                            <button type="button" class="btn btn-warning">Warning</button>
                            <button type="button" class="btn btn-info">Info</button>
                            <button type="button" class="btn btn-light">Light</button>
                            <button type="button" class="btn btn-dark">Dark</button>
                            <button type="button" class="btn btn-link">Link</button>

                            <p>&nbsp;</p>

                            <h3>Tabs</h3>
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#">Disabled</a>
                                </li>
                            </ul>
                        </article>
                    </div>


                    <!-- Sidebar -->
                    <aside class="col-sm-4">
                        <div class="sidebar-box">
                            <h4>Categories</h4>
                            <div class="list-group list-group-root">
                                <a class="list-group-item" href="index.html">Home Page</a>
                                <a class="list-group-item active" href="examples.html">Style Examples</a>
                                <div class="list-group">
                                    <a class="list-group-item" href="three-column.html">Three Column</a>
                                    <a class="list-group-item" href="one-column.html">One column / no sidebar</a>
                                    <a class="list-group-item" href="text.html">Text / left sidebar</a>
                                </div>
                                <a class="list-group-item" href="three-column.html">Three column layout example</a>
                                <a class="list-group-item" href="#">Sed aliquam libero ut velit bibendum</a>
                                <a class="list-group-item" href="#">Maecenas condimentum velit vitae</a>
                            </div>
                        </div>

                        <div class="sidebar-box sidebar-box-bg">
                            <h4>About us</h4>
                            <p>Aenean nec massa a tortor auctor sodales sed a dolor. Duis vitae lorem sem. Proin at
                                velit vel arcu pretium luctus. <a href="#" class="readmore">Read More &raquo;</a></p>
                        </div>

                        <div class="sidebar-box">
                            <h4>Search site</h4>
                            <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </div>

                        <div class="sidebar-box">
                            <h4>Helpful Links</h4>
                            <ul>
                                <li><a href="http://www.themeforest.net/?ref=spykawg" title="premium templates">Premium
                                        HTML web templates from $10</a></li>
                                <li><a href="http://www.dreamhost.com/r.cgi?259541" title="web hosting">Cheap web
                                        hosting from Dreamhost</a></li>
                                <li><a href="http://tuxthemes.com" title="Tux Themes">Premium WordPress themes</a></li>
                            </ul>
                        </div>
                    </aside>


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
                        <p class="text-center">Free Bootstrap Template by <a href="https://zypopwebtemplates.com/">ZyPop</a>.</p>
                        <p class="text-center"><a href="#">Back to top</a></p>
                    </div>

                </footer>
            </div>
        </div>
    </div>

    <!-- Bootcamp JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous"></script>

</body>

</html>