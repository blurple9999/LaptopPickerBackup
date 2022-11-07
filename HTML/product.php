<?php
	include("filter.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    
    <meta name="description" content="Laptop Picker">
    
    <title>Laptop Picker</title>
    
    <link href="asset/images/logo/logo.jpeg" rel="icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kristi%7cPoppins:400,500,600,700%7cYeseva+One&amp;display=swap">
    <link rel="stylesheet" href="asset/css/libraries.css" />
    <link rel="stylesheet" href="asset/css/style.css" />
</head>


<body>

    <div class="wrapper">
    <!-- =========================
        Header
    =========================== -->
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

                    </ul>
                </div>
            </div><!-- /.container -->

        </nav><!-- /.navabr -->

    </header><!-- /.Header -->


        <!-- ========================
                Filter
            =========================== -->
            
        <section class="shop-grid">
            <div class="container">
                <div class="row">


                    <div class="scrollable col-sm-12 col-md-12 col-lg-3">
                        <aside class="sidebar sidebar-layou2">
                            <form action="" class="widget__form-search" method="post">

                                <div class="widget widget-filter">
                                    <h5 class="widget__title">Price Range</h5>
                                    <div id="slider-range" data-min="1"
                                        data-max="5000"
                                        class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                                        data-value-min="1" data-value-max="5000" data-label-result="Price:">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                    </div>
                                    <div>
                                        <input type="hidden" id="price_range" value="1-5000" name="price_range">
                                        <label for="">Price:</label>
                                        <input style="border: 0" type="text" readonly id="amount"
                                            value="1-5000">
                                    </div>

                                </div>
                                <div class="widget widget-filter">
                                    <h5 class="widget__title">CPU Series</h5>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="CPUInput[]" value="AMD Ryzen 3" checked>
                                            
                                        <label class="form-check-label">
                                        AMD Ryzen 3
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="CPUInput[]" value="AMD Ryzen 5" checked>
                                            
                                        <label class="form-check-label">
                                        AMD Ryzen 5
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="CPUInput[]" value="AMD Ryzen 7" checked>
                                            
                                        <label class="form-check-label">
                                            AMD Ryzen 7
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="CPUInput[]" value="AMD Ryzen 9" checked>
                                            
                                        <label class="form-check-label">
                                            AMD Ryzen 9
                                        </label>
                                        
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="CPUInput[]" value="Intel Core 3i" checked>
                                            
                                        <label class="form-check-label">
                                            Intel Core i3
                                        </label>
                                        
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="CPUInput[]" value="Intel Core i5" checked>
                                            
                                        <label class="form-check-label">
                                            Intel Core i5
                                        </label>
                                        
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="CPUInput[]" value="Intel Core i7" checked>
                                            
                                        <label class="form-check-label">
                                            Intel Core i7
                                        </label>
                                        
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="CPUInput[]" value="Intel Core i9" checked>
                                            
                                        <label class="form-check-label">
                                            Intel Core i9
                                        </label>
                                        
                                    </div>
                                </div>
                                <div class="widget widget-filter">
                                    <h5 class="widget__title">Storage Size</h5>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="storageInput[]" value="128" checked>
                                            
                                        <label class="form-check-label">
                                        128 GB
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="storageInput[]" value="256" checked>
                                            
                                        <label class="form-check-label">
                                        256 GB
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="storageInput[]" value="512" checked>
                                            
                                        <label class="form-check-label">
                                        512 GB
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="storageInput[]" value="1024" checked>
                                            
                                        <label class="form-check-label">
                                        1 TB
                                        </label>
                                        
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="storageInput[]" value="2048" checked>
                                            
                                        <label class="form-check-label">
                                        2 TB
                                        </label>
                                        
                                    </div>
                                </div>
                                <div class="widget widget-filter">
                                    <h5 class="widget__title">RAM</h5>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="ramInput[]" value="4" checked>
                                            
                                        <label class="form-check-label">
                                        4 GB
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="ramInput[]" value="8" checked>
                                            
                                        <label class="form-check-label">
                                        8 GB
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="ramInput[]" value="16" checked>
                                            
                                        <label class="form-check-label">
                                        16 GB
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="ramInput[]" value="32" checked>
                                            
                                        <label class="form-check-label">
                                        32 GB
                                        </label>
                                        
                                    </div>
                                </div>

                                <div class="widget widget-filter">
                                    <h5 class="widget__title">OS</h5>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="osInput[]" value="Windows 10" checked>
                                            
                                        <label class="form-check-label">
                                        Windows 10
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="osInput[]" value="Windows 11" checked>
                                            
                                        <label class="form-check-label">
                                        Windows 11
                                        </label>
                                    </div>
                                </div>
                                <div class="widget widget-filter">
                                    <h5 class="widget__title">Manufacturer</h5>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="manufactureInput[]" value="Acer" checked>
                                            
                                        <label class="form-check-label">
                                        Acer
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="manufactureInput[]" value="Samsung" checked>
                                            
                                        <label class="form-check-label">
                                        Samsung
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="manufactureInput[]" value="Lenovo" checked>
                                            
                                        <label class="form-check-label">
                                            Lenovo
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="manufactureInput[]" value="Dell" checked>
                                            
                                        <label class="form-check-label">
                                            Dell
                                        </label>
                                        
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="manufactureInput[]" value="HP" checked>
                                            
                                        <label class="form-check-label">
                                            HP
                                        </label>
                                        
                                    </div>
                               
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="manufactureInput[]" value="Microsoft" checked>
                                            
                                        <label class="form-check-label">
                                            Microsoft
                                        </label>
                                        
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="manufactureInput[]" value="Asus" checked>
                                            
                                        <label class="form-check-label">
                                            Asus
                                        </label>
                                        
                                    </div>
                                </div>
                                <div class="widget widget-filter">
                                    <h5 class="widget__title">Touch Screen</h5>
                                    <div class="form-check">
                                         <input class="form-check-input" type="checkbox" name="touchInput[]" value="Yes" checked>
                                                
                                            <label class="form-check-label">
                                            Yes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="touchInput[]" value="No" checked>
                                                
                                            <label class="form-check-label">
                                            No
                                            </label>
                                        </div>
                                            
                                    </div>
                                    <div class="widget widget-filter">
                                        <h5 class="widget__title"> Display Size </h5>
                                        <div class="form-check">
                                             <input class="form-check-input" type="checkbox" name="sizeInput[]" value="13 Inch" checked>
                                                    
                                                <label class="form-check-label">
                                                13 Inch
                                                </label>
                                            </div>
                                            
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="sizeInput[]" value="14 Inch " checked>
                                                    
                                                <label class="form-check-label">
                                                14 Inch
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="sizeInput[]" value="15 Inch " checked>
                                                    
                                                <label class="form-check-label">
                                                15 Inch
                                                </label>
                                                
                                        
                                    </div>
                                    
                                    </div>
                                    <div class="widget widget-filter">
                                        <h5 class="widget__title">RJ 45</h5>
                                        <div class="form-check">
                                             <input class="form-check-input" type="checkbox" name="rj45Input[]" value="Yes" checked>
                                                    
                                                <label class="form-check-label">
                                                Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="rj45Input[]" value="No" checked>
                                                    
                                                <label class="form-check-label">
                                                No
                                                </label>
                                            </div>
                                                
                                        </div>
                                <div class="widget widget-filter">
                                    <h5 class="widget__title">Refresh Rate</h5>
                                    <div class="form-check">
                                         <input class="form-check-input" type="checkbox" name="refreshInput[]" value="60" checked>
                                                
                                            <label class="form-check-label">
                                            60 Hz
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="refreshInput[]" value="90" checked>
                                                
                                            <label class="form-check-label">
                                            90 Hz
                                            </label>
                                        </div>
                                        
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="refreshInput[]" value="120" checked>
                                                
                                            <label class="form-check-label">
                                            120 Hz
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="refreshInput[]" value="144" checked>
                                                
                                            <label class="form-check-label">
                                            144 Hz
                                            </label>
                                            
                                    
                                </div>
                                </div>
                                <div class="widget widget-filter">
                                    <h5 class="widget__title">Aspect Ratio</h5>
                                    <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="ratioInput[]" value="3:2" checked>
                                                
                                            <label class="form-check-label">
                                            3:2
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="ratioInput[]" value="16:9" checked>
                                                
                                            <label class="form-check-label">
                                            16:9
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="ratioInput[]" value="16:10" checked>
                                                
                                            <label class="form-check-label">
                                            16:10
                                            </label>
                                        </div>
                                       
                                    <input type="submit" value="Filter">        
                                    </div>
                                </div>
                            </form>

                        </aside><!-- /.sidebar -->
                        <table width=75% height=100px>
							<tr>
								<th>Laptop </th>
								<th>CPU</th>
								<th>Price</th>
							</tr>
                            
							<?php
								create_task_table1();
							?>
						</table>
                    </div>

                    <!-- /.col-lg-3 -->
                    <div class="col-sm-12 col-md-12 col-lg-9">
                        <div class="row">
                       </div><!-- /.row -->
                        <div class="row">

                        </div><!-- /.row -->

                    </div><!-- /.col-lg-9 -->

                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.shop -->
            
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
    

    </div><!-- /.wrapper -->

    <script src="asset/js/jquery-3.3.1.min.js"></script>

    <script src="asset/js/plugins.js"></script>

    <script src="asset/js/main.js"></script>

    <script>

        
        $(document).ready(function () {
            if($('#slider-range').length >0){
                const max_value = parseInt($('#slider-range').data('max'));
                const min_value = parseInt($('#slider-range').data('min'));
                let price_range = min_value+'-'+max_value;

            if($('#price_range').length > 0 && $('#price_range').val()){
                price_range = $('#price_range').val().trim();
            }
            let price = price_range.split('-');
            $('#slider-range').slider({
                range:true,
                min:min_value,
                max:max_value,
                values:price,
                slide:function(event,ui){
                    $('#amount').val(ui.values[0]+"-"+ui.values[1]);
                    $('#price_range').val(ui.values[0]+"-"+ui.values[1]);
                }
            })
            }
        });

        
    
    </script>

</body>

</html>
