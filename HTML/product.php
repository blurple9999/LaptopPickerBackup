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
                        <li class="nav__item"><a href="index.php" class="nav__item-link text-light">Home</a></li>
                        <li class="nav__item"><a href="product.php" class="nav__item-link text-light">Product</a></li>
                        <li class="nav__item"><a href="about.html" class="nav__item-link text-light">About</a></li>
                        <li class="nav__item"><a href="contactfrom.php" class="nav__item-link text-light">Contact</a></li>
                        <li class="nav__item"><a href="search.php" class="nav__item-link text-light">Search</a></li>

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
                                    <div id="slider-range_price" data-min="1"
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
                                        <input style="border: 0" type="text" readonly id="amount_price"
                                            value="1-5000">
                                    </div>

                                </div>
                                <div class="widget widget-filter">
                                    <h5 class="widget__title">CPU Series</h5>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="CPUInput[]" value="AMD Ryzen 3">
                                            
                                        <label class="form-check-label">
                                        AMD Ryzen 3
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="CPUInput[]2" value="AMD Ryzen 5">
                                            
                                        <label class="form-check-label">
                                        AMD Ryzen 5
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="CPUInput[]3" value="AMD Ryzen 7">
                                            
                                        <label class="form-check-label">
                                            AMD Ryzen 7
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="CPUInput[]4" value="AMD Ryzen 9">
                                            
                                        <label class="form-check-label">
                                            AMD Ryzen 9
                                        </label>
                                        
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="CPUInput[]5" value="Intel Core i3" >
                                            
                                        <label class="form-check-label">
                                            Intel Core i3
                                        </label>
                                        
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="CPUInput[]6" value="Intel Core i5" >
                                            
                                        <label class="form-check-label">
                                            Intel Core i5
                                        </label>
                                        
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="CPUInput[]7" value="Intel Core i7" >
                                            
                                        <label class="form-check-label">
                                            Intel Core i7
                                        </label>
                                        
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="CPUInput[]8" value="Intel Core i9" >
                                            
                                        <label class="form-check-label">
                                            Intel Core i9
                                        </label>
                                        
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="CPUInput[]9" value="Intel Celron" >
                                            
                                        <label class="form-check-label">
                                            Intel Celron
                                        </label>
                                        
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="CPUInput[]10" value="Intel Pentium" >
                                            
                                        <label class="form-check-label">
                                            Intel Pentium
                                        </label>
                                        
                                    </div>
                                </div>
                                <div class="widget widget-filter">
                                    <h5 class="widget__title">Storage Size</h5>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="storageInput[]" value="64" >
                                            
                                        <label class="form-check-label">
                                        64 GB
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="storageInput[]2" value="128" >
                                            
                                        <label class="form-check-label">
                                        128 GB
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="storageInput[]3" value="256" >
                                            
                                        <label class="form-check-label">
                                        256 GB
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="storageInput[]4" value="512" >
                                            
                                        <label class="form-check-label">
                                        512 GB
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="storageInput[]5" value="1024" >
                                            
                                        <label class="form-check-label">
                                        1 TB
                                        </label>
                                        
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="storageInput[]6" value="2048" >
                                            
                                        <label class="form-check-label">
                                        2 TB
                                        </label>
                                        
                                    </div>
                                </div>
                                <div class="widget widget-filter">
                                    <h5 class="widget__title">RAM</h5>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="ramInput[]" value="4" >
                                            
                                        <label class="form-check-label">
                                        4 GB
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="ramInput[]2" value="8" >
                                            
                                        <label class="form-check-label">
                                        8 GB
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="ramInput[]3" value="16" >
                                            
                                        <label class="form-check-label">
                                        16 GB
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="ramInput[]4" value="32" >
                                            
                                        <label class="form-check-label">
                                        32 GB
                                        </label>
                                        
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="ramInput[]5" value="64" >
                                            
                                        <label class="form-check-label">
                                        64 GB
                                        </label>
                                        
                                    </div>
                                </div>
                                <div class="widget widget-filter">
                                    <h5 class="widget__title">GPU</h5>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="GPUInput[]" value="AMD Radeon" >
                                            
                                        <label class="form-check-label">
                                        AMD Radeon
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="GPUInput[]2" value="AMD Radeon RX 5500M" >
                                            
                                        <label class="form-check-label">
                                        AMD Radeon RX 5500M
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="GPUInput[]3" value="AMD Radeon RX 5600M" >
                                            
                                        <label class="form-check-label">
                                            AMD Radeon RX 5600M
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="GPUInput[]4" value="AMD Radeon RX 6600M" >
                                            
                                        <label class="form-check-label">
                                            AMD Radeon RX 6600M
                                        </label>
                                        
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="GPUInput[]5" value="AMD Radeon RX 6700M" >
                                            
                                        <label class="form-check-label">
                                            AMD Radeon RX 6700M
                                        </label>
                                        
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="GPUInput[]6" value="AMD Radeon Vega 3" >
                                            
                                        <label class="form-check-label">
                                            AMD Radeon Vega 3
                                        </label>
                                        
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="GPUInput[]7" value="AMD Radeon Vega 7" >
                                            
                                        <label class="form-check-label">
                                            AMD Radeon Vega 7
                                        </label>
                                        
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="GPUInput[]8" value="Intel Arc A370M" >
                                            
                                        <label class="form-check-label">
                                            Intel Arc A370M
                                        </label>
                                        
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="GPUInput[]9" value="Intel Iris" >
                                            
                                        <label class="form-check-label">
                                            Intel Iris
                                        </label>
                                        
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="GPUInput[]10" value="Intel Iris Xe" >
                                            
                                        <label class="form-check-label">
                                            Intel Iris Xe
                                        </label>
                                        
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="GPUInput[]11" value="Intel UHD" >
                                            
                                        <label class="form-check-label">
                                            Intel UHD
                                        </label>
                                        
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="GPUInput[]12" value="Nvidia GTX 1600" >
                                            
                                        <label class="form-check-label">
                                            Nvidia GTX 1600
                                        </label>
                                        
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="GPUInput[]13" value="Nvidia RTX 3050" >
                                            
                                        <label class="form-check-label">
                                            Nvidia RTX 3050
                                        </label>
                                        
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="GPUInput[]14" value="Nvidia RTX A5500" >
                                            
                                        <label class="form-check-label">
                                            Nvidia RTX A5500
                                        </label>
                                        
                                    </div>
                                </div>

                                <div class="widget widget-filter">
                                    <h5 class="widget__title">OS</h5>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="osInput[]" value="Windows 10" >
                                            
                                        <label class="form-check-label">
                                        Windows 10
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="osInput[]2" value="Windows 11" >
                                            
                                        <label class="form-check-label">
                                        Windows 11
                                        </label>
                                    </div>
                                </div>
                                <div class="widget widget-filter">
                                    <h5 class="widget__title">Manufacturer</h5>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="manufactureInput[]" value="Acer" >
                                            
                                        <label class="form-check-label">
                                        Acer
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="manufactureInput[]2" value="Asus" >
                                            
                                        <label class="form-check-label">
                                            Asus
                                        </label>
                                        
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="manufactureInput[]3" value="Dell" >
                                            
                                        <label class="form-check-label">
                                            Dell
                                        </label>
                                        
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="manufactureInput[]4" value="HP" >
                                            
                                        <label class="form-check-label">
                                            HP
                                        </label>
                                        
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="manufactureInput[]5" value="Lenovo" >
                                            
                                        <label class="form-check-label">
                                            Lenovo
                                        </label>
                                    </div>
                               
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="manufactureInput[]6" value="Microsoft" >
                                            
                                        <label class="form-check-label">
                                            Microsoft
                                        </label>
                                        
                                    </div>
                               
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="manufactureInput[]7" value="MSI" >
                                            
                                        <label class="form-check-label">
                                            MSI
                                        </label>
                                        
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="manufactureInput[]8" value="Samsung" >
                                            
                                        <label class="form-check-label">
                                        Samsung
                                        </label>
                                    </div>
                                </div>
                                    
                                <div class="widget widget-filter">
                                    <h5 class="widget__title">Display Size</h5>
                                    <div id="slider-range_display" data-min="10"
                                        data-max="20"
                                        class="slider-range-display ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                                        data-value-min="10" data-value-max="20" data-label-result="Display Size (inches):">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                    </div>
                                    <div>
                                        <input type="hidden" id="display_range" value="10-20" name="display_range">
                                        <label for="">Display Size (inches):</label>
                                        <input style="border: 0" type="text" readonly id="amount_display"
                                            value="10-20">
                                    </div>

                                </div>
                                    <div class="widget widget-filter">
                                        <h5 class="widget__title">Resolution</h5>
                                        <div class="form-check">
                                             <input class="form-check-input" type="checkbox" name="resolutionInput[]" value="1366 x 786" >
                                                    
                                                <label class="form-check-label">
                                                1366 x 786
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="resolutionInput[]2" value="1920 x 1080" >
                                                    
                                                <label class="form-check-label">
                                                1920 x 1080
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="resolutionInput[]3" value="1920 x 1200" >
                                                    
                                                <label class="form-check-label">
                                                1920 x 1200
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="resolutionInput[]4" value="2560 x 1600" >
                                                    
                                                <label class="form-check-label">
                                                2560 x 1600
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="resolutionInput[]5" value="2880 x 1920" >
                                                    
                                                <label class="form-check-label">
                                                2880 x 1920
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="resolutionInput[]6" value="3072 x 1920" >
                                                    
                                                <label class="form-check-label">
                                                3072 x 1920
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="resolutionInput[]7" value="3240 x 2160" >
                                                    
                                                <label class="form-check-label">
                                                3240 x 2160
                                                </label>
                                            </div>
                                                
                                        </div>
                                <div class="widget widget-filter">
                                    <h5 class="widget__title">Refresh Rate</h5>
                                    <div class="form-check">
                                         <input class="form-check-input" type="checkbox" name="refreshInput[]" value="60" >
                                                
                                            <label class="form-check-label">
                                            60 Hz
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="refreshInput[]2" value="90" >
                                                
                                            <label class="form-check-label">
                                            90 Hz
                                            </label>
                                        </div>
                                        
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="refreshInput[]3" value="120" >
                                                
                                            <label class="form-check-label">
                                            120 Hz
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="refreshInput[]4" value="144" >
                                                
                                            <label class="form-check-label">
                                            144 Hz
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="refreshInput[]5" value="165" >
                                                
                                            <label class="form-check-label">
                                            165 Hz
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="refreshInput[]6" value="240" >
                                                
                                            <label class="form-check-label">
                                            240 Hz
                                            </label>
                                        </div>
                                </div>
                                <div class="widget widget-filter">
                                    <h5 class="widget__title">Aspect Ratio</h5>
                                    <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="ratioInput[]" value="3:2" >
                                                
                                            <label class="form-check-label">
                                            3:2
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="ratioInput[]2" value="16:9" >
                                                
                                            <label class="form-check-label">
                                            16:9
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="ratioInput[]3" value="16:10" >
                                                
                                            <label class="form-check-label">
                                            16:10
                                            </label>
                                        </div>
                                              
                                    </div>
                                <div class="widget widget-filter">
                                    <h5 class="widget__title">Touch Screen</h5>
                                    <div class="form-check">
                                         <input class="form-check-input" type="checkbox" name="touchInput[]" value="Yes" >
                                                
                                            <label class="form-check-label">
                                            Yes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="touchInput[]2" value="No" >
                                                
                                            <label class="form-check-label">
                                            No
                                            </label>
                                        </div>
                                            
                                    </div>
                                <div class="widget widget-filter">
                                    <h5 class="widget__title">USB-A</h5>
                                    <div id="slider-range_usba" data-min="0"
                                        data-max="4"
                                        class="slider-range-usba ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                                        data-value-min="0" data-value-max="4" data-label-result="USB-A Ports:">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                    </div>
                                    <div>
                                        <input type="hidden" id="usba_range" value="0-4" name="usba_range">
                                        <label for="">USB-A Ports:</label>
                                        <input style="border: 0" type="text" readonly id="amount_usba"
                                            value="0-4">
                                    </div>

                                </div>
                                <div class="widget widget-filter">
                                    <h5 class="widget__title">USB-C</h5>
                                    <div id="slider-range_usbc" data-min="0"
                                        data-max="4"
                                        class="slider-range-usbc ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                                        data-value-min="0" data-value-max="4" data-label-result="USB-C Ports:">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                    </div>
                                    <div>
                                        <input type="hidden" id="usbc_range" value="0-4" name="usbc_range">
                                        <label for="">USB-C Ports:</label>
                                        <input style="border: 0" type="text" readonly id="amount_usbc"
                                            value="0-4">
                                    </div>

                                </div>
										<div class="widget widget-filter">
                                        <h5 class="widget__title">Thunderbolt</h5>
                                        <div class="form-check">
                                             <input class="form-check-input" type="checkbox" name="tbInput[]" value="Yes" >
                                                    
                                                <label class="form-check-label">
                                                Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="tbInput[]2" value="No" >
                                                    
                                                <label class="form-check-label">
                                                No
                                                </label>
                                            </div>
                                                
                                        </div>
                                    <div class="widget widget-filter">
                                        <h5 class="widget__title">RJ 45</h5>
                                        <div class="form-check">
                                             <input class="form-check-input" type="checkbox" name="rj45Input[]" value="Yes" >
                                                    
                                                <label class="form-check-label">
                                                Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="rj45Input[]2" value="No" >
                                                    
                                                <label class="form-check-label">
                                                No
                                                </label>
                                            </div>
                                                
                                        </div>
										<div class="widget widget-filter">
                                        <h5 class="widget__title">Micro SD</h5>
                                        <div class="form-check">
                                             <input class="form-check-input" type="checkbox" name="sdInput[]" value="Yes" >
                                                    
                                                <label class="form-check-label">
                                                Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="sdInput[]2" value="No" >
                                                    
                                                <label class="form-check-label">
                                                No
                                                </label>
                                            </div>
                                                
                                        </div>
                                <div class="widget widget-filter">
                                    <h5 class="widget__title">Battery Size</h5>
                                    <div id="slider-range_battery" data-min="30"
                                        data-max="100"
                                        class="slider-range-battery ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                                        data-value-min="30" data-value-max="100" data-label-result="Battery Size (kwh):">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                    </div>
                                    <div>
                                        <input type="hidden" id="battery_range" value="30-100" name="battery_range">
                                        <label for="">Battery Size (kwh):</label>
                                        <input style="border: 0" type="text" readonly id="amount_battery"
                                            value="30-100">
                                    </div>

                                </div>
                                <div class="widget widget-filter">
                                    <h5 class="widget__title">Weight</h5>
                                    <div id="slider-range_weight" data-min="1"
                                        data-max="6"
                                        class="slider-range-weight ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                                        data-value-min="1" data-value-max="6" data-label-result="Weight (lbs):">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                    </div>
                                    <div>
                                        <input type="hidden" id="weight_range" value="1-6" name="weight_range">
                                        <label for="">Weight (lbs):</label>
                                        <input style="border: 0" type="text" readonly id="amount_weight"
                                            value="1-6">
                                    </div>

                                </div>
                                    <input type="submit" value="Filter"> 
                                </div>
                            </form>

                        </aside><!-- /.sidebar -->
                        <table width=75% height=100px>
							<tr>
							    <th width="25px"><center>⭐</center></th>
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
			//price slider
            if($('#slider-range_price').length >0){
                const max_value = parseInt($('#slider-range_price').data('max'));
                const min_value = parseInt($('#slider-range_price').data('min'));
                let price_range = min_value+'-'+max_value;

				if($('#price_range').length > 0 && $('#price_range').val()){
					price_range = $('#price_range').val().trim();
				}
				let price = price_range.split('-');
				$('#slider-range_price').slider({
					range:true,
					min:min_value,
					max:max_value,
					values:price,
					slide:function(event,ui){
						$('#amount_price').val(ui.values[0]+"-"+ui.values[1]);
						$('#price_range').val(ui.values[0]+"-"+ui.values[1]);
					}
				})
			}
			//display size slider
			if($('#slider-range_display').length >0){
                const max_value = parseInt($('#slider-range_display').data('max'));
                const min_value = parseInt($('#slider-range_display').data('min'));
                let display_range = min_value+'-'+max_value;

				if($('#display_range').length > 0 && $('#display_range').val()){
					display_range = $('#display_range').val().trim();
				}
				let display = display_range.split('-');
				$('#slider-range_display').slider({
					range:true,
					min:min_value,
					max:max_value,
					values:display,
					slide:function(event,ui){
						$('#amount_display').val(ui.values[0]+"-"+ui.values[1]);
						$('#display_range').val(ui.values[0]+"-"+ui.values[1]);
					}
				})
			}
			//usb-a slider
			if($('#slider-range_usba').length >0){
                const max_value = parseInt($('#slider-range_usba').data('max'));
                const min_value = parseInt($('#slider-range_usba').data('min'));
                let usba_range = min_value+'-'+max_value;

				if($('#usba_range').length > 0 && $('#usba_range').val()){
					usba_range = $('#usba_range').val().trim();
				}
				let usba = usba_range.split('-');
				$('#slider-range_usba').slider({
					range:true,
					min:min_value,
					max:max_value,
					values:usba,
					slide:function(event,ui){
						$('#amount_usba').val(ui.values[0]+"-"+ui.values[1]);
						$('#usba_range').val(ui.values[0]+"-"+ui.values[1]);
					}
				})
			}
			//usb-c slider
			if($('#slider-range_usbc').length >0){
                const max_value = parseInt($('#slider-range_usbc').data('max'));
                const min_value = parseInt($('#slider-range_usbc').data('min'));
                let usbc_range = min_value+'-'+max_value;

				if($('#usbc_range').length > 0 && $('#usbc_range').val()){
					usbc_range = $('#usbc_range').val().trim();
				}
				let usbc = usbc_range.split('-');
				$('#slider-range_usbc').slider({
					range:true,
					min:min_value,
					max:max_value,
					values:usbc,
					slide:function(event,ui){
						$('#amount_usbc').val(ui.values[0]+"-"+ui.values[1]);
						$('#usbc_range').val(ui.values[0]+"-"+ui.values[1]);
					}
				})
			}
			//battery slider
			if($('#slider-range_battery').length >0){
                const max_value = parseInt($('#slider-range_battery').data('max'));
                const min_value = parseInt($('#slider-range_battery').data('min'));
                let battery_range = min_value+'-'+max_value;

				if($('#battery_range').length > 0 && $('#battery_range').val()){
					battery_range = $('#battery_range').val().trim();
				}
				let battery = battery_range.split('-');
				$('#slider-range_battery').slider({
					range:true,
					min:min_value,
					max:max_value,
					values:battery,
					slide:function(event,ui){
						$('#amount_battery').val(ui.values[0]+"-"+ui.values[1]);
						$('#battery_range').val(ui.values[0]+"-"+ui.values[1]);
					}
				})
			}
			//weight slider
			if($('#slider-range_weight').length >0){
                const max_value = parseInt($('#slider-range_weight').data('max'));
                const min_value = parseInt($('#slider-range_weight').data('min'));
                let weight_range = min_value+'-'+max_value;

				if($('#weight_range').length > 0 && $('#weight_range').val()){
					weight_range = $('#weight_range').val().trim();
				}
				let weight = weight_range.split('-');
				$('#slider-range_weight').slider({
					range:true,
					min:min_value,
					max:max_value,
					values:weight,
					slide:function(event,ui){
						$('#amount_weight').val(ui.values[0]+"-"+ui.values[1]);
						$('#weight_range').val(ui.values[0]+"-"+ui.values[1]);
					}
				})
			}
        }
		);
        </script>
        
    <script src="http://code.jquery.com/jquery.js"></script>
        <script>
        (function() {
  // variable to store our current state
  var cbstate;
  
  // bind to the onload event
  window.addEventListener('load', function() {
    // Get the current state from localstorage
    // State is stored as a JSON string
    cbstate = JSON.parse(localStorage['CBState'] || '{}');
  
    // Loop through state array and restore checked 
    // state for matching elements
    for(var i in cbstate) {
      var el = document.querySelector('input[name="' + i + '"]');
      if (el) el.checked = true;
    }
  
    // Get all checkboxes that you want to monitor state for
    var cb = document.getElementsByClassName('form-check-input');
  
    // Loop through results and ...
    for(var i = 0; i < cb.length; i++) {
  
      //bind click event handler
      cb[i].addEventListener('click', function(evt) {
        // If checkboxe is checked then save to state
        if (this.checked) {
          cbstate[this.name] = true;
        }
    
    // Else remove from state
        else if (cbstate[this.name]) {
          delete cbstate[this.name];
        }
    
    // Persist state
        localStorage.CBState = JSON.stringify(cbstate);
	      //test
      });
    }
  });
})();
    
    </script>

</body>

</html>
