<?php include('header.php');?>

<!-- third section Menu bar -->
<nav class="navbar navbar-expand-lg navbar-light sticky-top naav">
        <div class="container">
            <li class="nav-item dropdown bg-danger text-center">
                <a class="nav-link dropdown-toggle m-0" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 Categories
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item " href="electronics.php">Electronics</a></li>
                    <li><a class="dropdown-item " href="clothing.php">Clothing</a> </li>
                    <li><a class="dropdown-item " href="furniture.php">Furniture</a></li>
                    <li><a class="dropdown-item " href="accessories.php">Acessories</a></li>
                    <li><a class="dropdown-item " href="stationary.php">Stationary</a></li>
                    <li><a class="dropdown-item " href="healthcare.php">Health Care</a></li>
                </ul>
            </li>
            <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="newproduct.php ">New Products</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="trending.php ">Trending</a>
                    </li>`
                    <li class="nav-item ">
                        <a class="nav-link " href="brand.php ">Brands</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active" href="aboutus.php ">About Us</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="contactus.php ">Contact Us</a>
                    </li>
                   
                </ul>
            </div>
        </div>
    </nav>





    <body>
        <div class="container my-5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-black" href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </nav>
            <h4 class="pb-3">About Us</h4>

            <div class="page-content ">
                <h4>Our company</h4>
                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                    anim id est laborum. Lorem ipsum dolor sit amet conse ctetur adipisicing elit. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod.</p>
                <h4>Our team</h4>
                <p>Eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo. Lorem ipsum dolor sit amet conse ctetur adipisicing elit. Lorem ipsum dolor sit
                    amet conse ctetur adipisicing elit, sed do eiusmod. Eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <h4>Testimonials</h4>
                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                    id est laborum. Lorem ipsum dolor sit amet conse ctetur adipisicing elit. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod.</p>

            </div>
        </div>

 <?php include('footer.php');?>