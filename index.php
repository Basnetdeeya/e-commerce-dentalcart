<?php include('header.php');?>


<!-- third section Menu bar -->
<nav class="navbar navbar-expand-lg navbar-light sticky-top naav">
        <div class="container">
            <li class="nav-item dropdown bg-danger text-center">
                <a class="nav-link dropdown-toggle m-0" href="electronics.php" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
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
                        <a class="nav-link " href="aboutus.php ">About Us</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="contactus.php ">Contact Us</a>
                    </li>
                   
                </ul>
            </div>
     
        </div>
    </nav>



<!-- forth section carousel -->
    <div class="container my-4 "> 
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="http://demo.templatin.com/megashop17/modules/tptnhomeslider/images/sample_lg_en-1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="http://demo.templatin.com/megashop17/modules/tptnhomeslider/images/sample_lg_en-2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="http://demo.templatin.com/megashop17/modules/tptnhomeslider/images/sample_lg_en-3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <!-- fifth section  -->
    <div class="section-speaker my-3 ">
        <div class="container ">
            <div class="row  ">
                <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                    <div class="speaker-img ">
                        <a href="#"> <img class="img-fluid speaker " src="images/sample-1.jpg " alt="speaker " /></a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                    <div class="speaker-img ">
                        <a href="#"> <img class="img-fluid speaker " src="images/sample-2.jpg " alt="speaker " /></a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                    <div class="speaker-img ">
                        <a href="#"> <img class="img-fluid speaker " src="images/sample-3.jpg " alt="speaker " /></a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                    <div class="speaker-img ">
                        <a href="#"> <img class="img-fluid speaker " src="images/sample-4.jpg " alt="speaker " /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-----------------------ON SALE------------------>

    <div class="on-sale my-5 ">
        <div class="container ">
        <div class="title d-flex justify-content-between align-items-center">
                <h1 class=" sale-head ">On Sale</h1>
                <a class="viewmore " href="onsale.php" target="_blank ">View More ></a>
            </div>
            <div class="row ">
                <div class=" col-lg-3 col-md-3 col-sm-6 hvr-grow p-0 text-center text-center ">
                    <div class="product-top ">
                       <a href="item.php"> <img class="img-fluid " src="http://demo.templatin.com/megashop17/2-home_default/galaxy-note-series-smartphone.jpg "></a>

                        <!-- <div class="overlay text-center my-4 ">
                            <button type="button " class="btn btn-secondary " title="Add to wishlist "><i class="fab fa-gratipay "></i></button>
                            <button type="button " class="btn btn-secondary cart " title="Add to cart "><i class="fas fa-cart-plus "></i></button>
                        </div> -->

                    </div>
                    <div class="product-bottom align-items-center mb-3 " title="Rating ">
                        <h6 class="text-center text-black fw-bold ">Galaxy Note Series Smartphone</h6>
                        <h5 class="my-3 text-center ">RS.23,000</h5>
                        <div class="icon text text-center ">
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star-half-alt "></i>
                            <i class="far fa-star "></i><br>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 hvr-grow p-0 text-center ">
                    <div class="product-top ">
                       <a href="item.php"> <img class="img-fluid " src="http://demo.templatin.com/megashop17/28-home_default/formal-striped-women-top.jpg "></a>

  </a>                      <!-- <div class="overlay text-center my-4 ">
                            <button type="button " class="btn btn-secondary " title="Add to wishlist "><i class="fab fa-gratipay "></i></button>
                            <button type="button " class="btn btn-secondary cart " title="Add to cart "><i class="fas fa-cart-plus "></i></button>
                        </div> -->

                    </div>
                    <div class="product-bottom align-items-center mb-3 " title="Rating ">
                        <h6 class="text-center text-black fw-bold ">Formal Stripped Women Top</h6>
                        <h5 class="my-3 text-center ">RS.2,300</h5>
                        <div class="icon text text-center ">
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star-half-alt "></i>
                            <i class="far fa-star "></i><br>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-3 col-sm-6 hvr-grow p-0 text-center ">
                    <div class="product-top ">
                       <a href="item.php"> <img class="img-fluid " src="http://demo.templatin.com/megashop17/47-home_default/webster-bluetooth-speakers.jpg "></a>

</a>                        <!-- <div class="overlay text-center my-4 ">
                            <button type="button " class="btn btn-secondary " title="Add to wishlist "><i class="fab fa-gratipay "></i></button>
                            <button type="button " class="btn btn-secondary cart " title="Add to cart "><i class="fas fa-cart-plus "></i></button>
                        </div> -->

                    </div>
                    <div class="product-bottom align-items-center mb-3 " title="Rating ">
                        <h6 class="text-center text-black fw-bold ">Webster Bluetooth Speakers</h6>
                        <h5 class="my-3 text-center ">RS.8,500</h5>
                        <div class="icon text text-center ">
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star-half-alt "></i>
                            <i class="far fa-star "></i><br>
                        </div>
                    </div>
                </div>



                <div class="col-lg-3 col-md-3 col-sm-6 hvr-grow p-0 text-center ">
                    <div class="product-top ">
                       <a href="item.php"> <img class="img-fluid " src="http://demo.templatin.com/megashop17/39-home_default/women-cotton-blend-trousers.jpg "></a>
</a>
                        <!-- <div class="overlay text-center my-4 ">
                            <button type="button " class="btn btn-secondary " title="Add to wishlist "><i class="fab fa-gratipay "></i></button>
                            <button type="button " class="btn btn-secondary cart " title="Add to cart "><i class="fas fa-cart-plus "></i></button>
                        </div> -->

                    </div>
                    <div class="product-bottom align-items-center mb-3 " title="Rating ">
                        <h6 class="text-center text-black fw-bold ">Women Cotton Blend Trouser</h6>
                        <h5 class="my-3 text-center ">RS.8,500</h5>
                        <div class="icon text text-center ">
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star-half-alt "></i>
                            <i class="far fa-star "></i><br>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-----------------------New Products-------------->
    <div class="products my-5 ">
        <div class="container ">
            <div class="title d-flex justify-content-between align-items-center">
                <h1 class=" sale-head ">New Products</h1>
                <a class="viewmore " href="newproduct.php" target="_blank ">View More ></a>
            </div>

            <div class="row ">
                <div class="col-lg-3 col-md-3 col-sm-6 hvr-grow p-0 text-center ">
                    <div class="product-top ">
                       <a href="item.php"> <img class="img-fluid " src="http://demo.templatin.com/megashop17/2-home_default/galaxy-note-series-smartphone.jpg "></a>

                        <!-- <div class="overlay text-center my-4 ">
                            <button type="button " class="btn btn-secondary " title="Add to wishlist "><i class="fab fa-gratipay "></i></button>
                            <button type="button " class="btn btn-secondary cart " title="Add to cart "><i class="fas fa-cart-plus "></i></button>
                        </div> -->

                    </div>
                    <div class="product-bottom align-items-center mb-3 " title="Rating ">
                        <h6 class="text-center text-black fw-bold ">Galaxy Note Series SmartPhone</h6>
                        <h5 class="my-3 text-center ">RS.25,000</h5>
                        <div class="icon text text-center ">
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star-half-alt "></i>
                            <i class="far fa-star "></i><br>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-3 col-sm-6 hvr-grow p-0 text-center ">
                    <div class="product-top ">
                       <a href="item.php"> <img class="img-fluid " src="http://demo.templatin.com/megashop17/14-home_default/premium-designer-hand-bag.jpg "></a>

 </a>                       <!-- <div class="overlay text-center my-4 ">
                            <button type="button " class="btn btn-secondary " title="Add to wishlist "><i class="fab fa-gratipay "></i></button>
                            <button type="button " class="btn btn-secondary cart " title="Add to cart "><i class="fas fa-cart-plus "></i></button>
                        </div> -->

                    </div>
                    <div class="product-bottom align-items-center mb-3 " title="Rating ">
                        <h6 class="text-center text-black fw-bold ">Premium Designer Hand Bag</h6>
                        <h5 class="my-3 text-center ">RS.9,500</h5>
                        <div class="icon text text-center ">
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star-half-alt "></i>
                            <i class="far fa-star "></i><br>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-3 col-sm-6 hvr-grow p-0 text-center ">
                    <div class="product-top ">
                       <a href="item.php"> <img class="img-fluid " src="http://demo.templatin.com/megashop17/15-home_default/monitor-with-wide-viewing-angle.jpg"></a> 

                        <!-- <div class="overlay text-center my-4 ">
                            <button type="button " class="btn btn-secondary " title="Add to wishlist "><i class="fab fa-gratipay "></i></button>
                            <button type="button " class="btn btn-secondary cart " title="Add to cart "><i class="fas fa-cart-plus "></i></button>
                        </div> -->

                    </div>
                    <div class="product-bottom align-items-center mb-3 " title="Rating ">
                        <h6 class="text-center text-black fw-bold ">Monitor with Wide Viewing Angle</h6>
                        <h5 class="my-3 text-center ">RS.95,000</h5>
                        <div class="icon text text-center ">
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star-half-alt "></i>
                            <i class="far fa-star "></i><br>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-3 col-sm-6 hvr-grow p-0 text-center ">
                    <div class="product-top ">
                       <a href="item.php"> <img class="img-fluid " src="http://demo.templatin.com/megashop17/19-home_default/smart-casual-men-sneakers.jpg "></a>

 </a>                       <!-- <div class="overlay text-center my-4 ">
                            <button type="button " class="btn btn-secondary " title="Add to wishlist "><i class="fab fa-gratipay "></i></button>
                            <button type="button " class="btn btn-secondary cart " title="Add to cart "><i class="fas fa-cart-plus "></i></button>
                        </div> -->

                    </div>
                    <div class="product-bottom align-items-center mb-3 " title="Rating ">
                        <h6 class="text-center text-black fw-bold ">Smart Casual Men Sneakers</h6>
                        <h5 class="my-3 text-center ">RS.8,500</h5>
                        <div class="icon text text-center ">
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star-half-alt "></i>
                            <i class="far fa-star "></i><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-----------=-----------Fifth-section-------------------->
    <div class="container-fluid ">
        <div class="row fifth-section ">
            <div class=" col-lg-6 col-md-6 p-0 ">
                <a href="#">
                    <img class="img-fluid " src="https://s3.ap-south-1.amazonaws.com/dentalkart-application-media/homepage/images/banner%20web%20image13.jpg" width="860px" alt="image ">
                </a>

            </div>
            <div class="col-lg-6 col-md-6 p-0 ">
                <a href="#">
                    <img class="img-fluid " src="https://s3.ap-south-1.amazonaws.com/dentalkart-application-media/homepage/images/banner_web.jpg" width="860px" alt="image ">
                </a>
            </div>
        </div>
    </div>


    <!--------------------Electronics----------------->

    <div class="products my-5 ">
        <div class="container ">
            <div class=" title d-flex justify-content-between align-items-center">
                <h1 class=" sale-head ">Electronics </h1>
                <a class="viewmore " href="onsale.html " target="_blank ">View More ></a>
            </div>
            <div class="row ">
                <div class="col-lg-3 col-md-3 col-sm-6 hvr-grow p-0 text-center ">
                    <div class="product-top ">
                       <a href="item.php"> <img class="img-fluid " src="http://demo.templatin.com/megashop17/34-home_default/double-door-smart-refrigerator.jpg "></a>

                        <!-- <div class="overlay text-center my-4 ">
                            <button type="button " class="btn btn-secondary " title="Add to wishlist "><i class="fab fa-gratipay "></i></button>
                            <button type="button " class="btn btn-secondary cart " title="Add to cart "><i class="fas fa-cart-plus "></i></button>
                        </div> -->

                    </div>
                    <div class="product-bottom align-items-center mb-3 " title="Rating ">
                        <h6 class="text-center text-black fw-bold ">Double Door Smart Refrigerator</h6>
                        <h5 class="my-3 text-center ">RS.122,000</h5>
                        <div class="icon text text-center ">
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star-half-alt "></i>
                            <i class="far fa-star "></i><br>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 hvr-grow p-0 text-center ">
                    <div class="product-top ">
                       <a href="item.php"> <img class="img-fluid " src="http://demo.templatin.com/megashop17/47-home_default/webster-bluetooth-speakers.jpg "></a>

</a>                        <!-- <div class="overlay text-center my-4 ">
                            <button type="button " class="btn btn-secondary " title="Add to wishlist "><i class="fab fa-gratipay "></i></button>
                            <button type="button " class="btn btn-secondary cart " title="Add to cart "><i class="fas fa-cart-plus "></i></button>
                        </div> -->

                    </div>
                    <div class="product-bottom align-items-center mb-3 " title="Rating ">
                        <h6 class="text-center text-black fw-bold ">Webster Bluetooth Speakers</h6>
                        <h5 class="my-3 text-center ">RS.8,500</h5>
                        <div class="icon text text-center ">
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star-half-alt "></i>
                            <i class="far fa-star "></i><br>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 hvr-grow p-0 text-center ">
                    <div class="product-top ">
                       <a href="item.php"> <img class="img-fluid " src="http://demo.templatin.com/megashop17/39-home_default/women-cotton-blend-trousers.jpg "></a>

                        <!-- <div class="overlay text-center my-4 ">
                            <button type="button " class="btn btn-secondary " title="Add to wishlist "><i class="fab fa-gratipay "></i></button>
                            <button type="button " class="btn btn-secondary cart " title="Add to cart "><i class="fas fa-cart-plus "></i></button>
                        </div> -->

                    </div>
                    <div class="product-bottom align-items-center mb-3 " title="Rating ">
                        <h6 class="text-center text-black fw-bold ">Women Cotton Blend Trouser</h6>
                        <h5 class="my-3 text-center ">RS.8,500</h5>
                        <div class="icon text text-center ">
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star-half-alt "></i>
                            <i class="far fa-star "></i><br>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-3 col-sm-6 hvr-grow p-0 text-center ">
                    <div class="product-top ">
                       <a href="item.php"> <img class="img-fluid " src="http://demo.templatin.com/megashop17/53-home_default/convection-micro-wave-owen.jpg "></a>

</a>                        <!-- <div class="overlay text-center my-4 ">
                            <button type="button " class="btn btn-secondary " title="Add to wishlist "><i class="fab fa-gratipay "></i></button>
                            <button type="button " class="btn btn-secondary cart " title="Add to cart "><i class="fas fa-cart-plus "></i></button>
                        </div> -->

                    </div>
                    <div class="product-bottom align-items-center mb-3 " title="Rating ">
                        <h6 class="text-center text-black fw-bold ">Convenction Micro Wave Oven</h6>
                        <h5 class="my-3 text-center ">RS.80,000</h5>
                        <div class="icon text text-center ">
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star-half-alt "></i>
                            <i class="far fa-star "></i><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--------------------Clothing----------------->

    <div class="products my-5 ">
        <div class="container ">
            <div class=" title d-flex justify-content-between align-items-center">
                <h1 class=" sale-head ">Clothing</h1>
                <a class="viewmore " href="onsale.html " target="_blank ">View More ></a>
            </div>
            <div class="row ">
                <div class="col-lg-3 col-md-3 col-sm-6 hvr-grow p-0 text-center ">
                    <div class="product-top ">
                       <a href="item.php"> <img class="img-fluid " src="http://demo.templatin.com/megashop17/39-home_default/women-cotton-blend-trousers.jpg "></a>
</a>
                        <!-- <div class="overlay text-center my-4 ">
                            <button type="button " class="btn btn-secondary " title="Add to wishlist "><i class="fab fa-gratipay "></i></button>
                            <button type="button " class="btn btn-secondary cart " title="Add to cart "><i class="fas fa-cart-plus "></i></button>
                        </div> -->

                    </div>
                    <div class="product-bottom align-items-center mb-3 " title="Rating ">
                        <h6 class="text-center text-black fw-bold ">Women Cotton Blend Trouser</h6>
                        <h5 class="my-3 text-center ">RS.2,500</h5>
                        <div class="icon text text-center ">
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star-half-alt "></i>
                            <i class="far fa-star "></i><br>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 hvr-grow p-0 text-center ">
                    <div class="product-top ">
                       <a href="item.php"> <img class="img-fluid " src="http://demo.templatin.com/megashop17/51-home_default/fortune-women-hand-bag.jpg "></a>

    </a>                    <!-- <div class="overlay text-center my-4 ">
                            <button type="button " class="btn btn-secondary " title="Add to wishlist "><i class="fab fa-gratipay "></i></button>
                            <button type="button " class="btn btn-secondary cart " title="Add to cart "><i class="fas fa-cart-plus "></i></button>
                        </div> -->

                    </div>
                    <div class="product-bottom align-items-center mb-3 " title="Rating ">
                        <h6 class="text-center text-black fw-bold ">Fortune Women Hand Bag</h6>
                        <h5 class="my-3 text-center ">RS.5000</h5>
                        <div class="icon text text-center ">
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star-half-alt "></i>
                            <i class="far fa-star "></i><br>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 hvr-grow p-0 text-center ">
                    <div class="product-top ">
                       <a href="item.php"> <img class="img-fluid " src="http://demo.templatin.com/megashop17/49-home_default/hand-accessories.jpg "></a>

          </a>              <!-- <div class="overlay text-center my-4 ">
                            <button type="button " class="btn btn-secondary " title="Add to wishlist "><i class="fab fa-gratipay "></i></button>
                            <button type="button " class="btn btn-secondary cart " title="Add to cart "><i class="fas fa-cart-plus "></i></button>
                        </div> -->

                    </div>
                    <div class="product-bottom align-items-center mb-3 " title="Rating ">
                        <h6 class="text-center text-black fw-bold ">Hand Accessories</h6>
                        <h5 class="my-3 text-center ">RS.300</h5>
                        <div class="icon text text-center ">
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star-half-alt "></i>
                            <i class="far fa-star "></i><br>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-3 col-sm-6 hvr-grow p-0 text-center ">
                    <div class="product-top ">
                       <a href="item.php"> <img class="img-fluid " src="http://demo.templatin.com/megashop17/39-home_default/women-cotton-blend-trousers.jpg "\></a>

                        <!-- <div class="overlay text-center my-4 ">
                            <button type="button " class="btn btn-secondary " title="Add to wishlist "><i class="fab fa-gratipay "></i></button>
                            <button type="button " class="btn btn-secondary cart " title="Add to cart "><i class="fas fa-cart-plus "></i></button>
                        </div> -->

                    </div>
                    <div class="product-bottom align-items-center mb-3 " title="Rating ">
                        <h6 class="text-center text-black fw-bold ">Women Cotton Blend Trouser</h6>
                        <h5 class="my-3 text-center ">RS.8,500</h5>
                        <div class="icon text text-center ">
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star-half-alt "></i>
                            <i class="far fa-star "></i><br>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
    <div class=" container mb-5 ">
        <div class="title mb-3 ">
            <h1>Custom Content Block</h1>
        </div>
        <div class="text-content ">
            <p>Multi-language custom HTML content. Use this module to optimize SEO, write more info about your shop or anything.</p>
            <p>Lorem ipsum voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat. Duis aute irure dolor in reprehenderit.</p>
            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore. Lorem ipsum voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                magni dolores eos qui ratione voluptatem sequi nesciunt. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <p>Dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex eacommodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse
                quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
        </div>
    </div>
    <?php include('footer.php'); ?>