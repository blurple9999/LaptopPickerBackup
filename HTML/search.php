<?php
	include("filter.php");
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Laptop Picker">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="asset/images/logo/logo.jpeg" rel="icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kristi%7cPoppins:400,500,600,700%7cYeseva+One&amp;display=swap">
    <link rel="stylesheet" href="asset/css/libraries.css" />
    <link rel="stylesheet" href="asset/css/style.css" />
    <title>Laptop Picker</title>
</head>
<body>




    <div class="container">
    <header class="header header-transparent header-layout1 bg-dark">

<nav class="navbar navbar-expand-lg sticky-navbar">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="asset/images/logo/logo.png" class="logo-light" height="80px">
        </a>
        <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavigation">
            <ul class="navbar-nav ml-auto">
                <li class="nav__item"><a href="index.html" class="nav__item-link text-light">Home</a></li>
                <li class="nav__item"><a href="product.php" class="nav__item-link text-light">Product</a></li>
                <li class="nav__item"><a href="about.html" class="nav__item-link text-light">About</a></li>
                <li class="nav__item"><a href="contact.html" class="nav__item-link text-light">Contact</a></li>
                <li class="nav__item"><a href="search.php" class="nav__item-link text-light">Search</a></li>

            </ul>
        </div>
    </div><!-- /.container -->

</nav><!-- /.navabr -->

</header><!-- /.Header -->

        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                    <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Laptop</th>
                                    <th>CPU</th>
                                    <th>Price</th>
                                  
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","laptop_list");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM laptop_list WHERE CONCAT(Laptop,CPU,Price) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['Laptop']; ?></td>
                                                    <td><?= $items['CPU']; ?></td>
                                                    <td><?= $items['Price']; ?></td>
                                                   
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">This Product is Not Available</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

      <!-- ========================
        Footer
        ========================== -->
        <footer class="footer footer-layout1 text-center bg-dark">


            <div class="footer-top">

                <div class="container">
                    <div class="row align-items-center">

                        <div class=" col-sm-12 col-md-12 col-lg-4">
                            <div class="contact-box">
                                <h6 class="contact__box-title text-white">Our Address</h6>
                                <ul class="contact__box-list list-unstyled">
                                    <li>Wayne State University <br> USA</li>

                                </ul>

                            </div><!-- /.contact-box -->

                        </div><!-- /.col-lg-4 -->
                        <div class="col-sm-12 col-md-12 col-lg-4">

                            <img src="asset/images/logo/logo.png" alt="logo"
                                class="footer__logo mb-20" height="88px" width="126px"><br><br>


                            <p class="mx-2 mb-20">LaptopPicker is a platform for finding best suitable laptop for users.</p>

                            <ul class="social__icons social__icons-white justify-content-center">
                                <li><a href="https://www.instagram.com/laptoppicker/"><i class="fa fa-instagram"></i></a></li>

                                <li><a href="https://www.facebook.com/people/Laptop-Picker/100087542163785/"><i class="fa fa-facebook"></i></a></li>


                                <li><a href="https://twitter.com/laptoppicker"><i class="fa fa-twitter"></i></a></li>
                            </ul><!-- /.social__icons -->

                            <br>
                            <p>© 2022 Laptop Picker. All rights reserved.</p>
                        </div><!-- /.col-lg-4 -->
                        <div class="col-sm-12 col-md-12 col-lg-4">

                            <div class="contact-box">
                                <h6 class="contact__box-title text-white">Our Info</h6>
    
                                <ul class="contact__box-list list-unstyled">
                                    <li><span>Main Email:</span> <a href="mailto:laptoppicker@gmail.com">laptoppicker@gmail.com</a></li>
                                    <li><span>Phone:</span> <a href="tel:+1(313) 327-9911">+1(313) 327-9911</a></li>
                                </ul>


                            </div><!-- /.contact-box -->
                        </div><!-- /.col-lg-4 -->
                    </div><!-- /.row -->

                </div><!-- /.container -->

            </div><!-- /.footer-top -->

        </footer><!-- /.Footer -->
    </div
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>