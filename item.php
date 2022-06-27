<?php include('header.php');?>


<!-- third section Menu bar -->
<nav class="navbar navbar-expand-lg navbar-light sticky-top naav">
        <div class="container">
            <li class="nav-item dropdown bg-danger text-center">
                <a class="nav-link dropdown-toggle m-0" href="newproduct.php" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                        <a class="nav-link active" href="newproduct.php ">New Products</a>
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

        <div class="item-page py-5">
            <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-black" href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-black" href="newproduct.php">New Products</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Galaxy Note Series SmartPhone</li>
                </ol>
            </nav>
                <div class="row">
                   <div class="col-md-6">
                        <!-- <img class="img-fluid" src="images/galaxy-note-series-smartphone.jpg" alt=""> -->
                        <div class="images ">
                            <div class="text-center"> 
                                <img id="main-image" class="img-fluid border" src="http://demo.templatin.com/megashop17/25-home_default/galaxy-android-smartphone.jpg" width="400"/> 
                            </div>
                            <div class="thumbnail text-center pt-3"> 
                                <img class="border" onclick="change_image(this)" src="http://demo.templatin.com/megashop17/24-home_default/galaxy-android-smartphone.jpg" width="100" > 
                                <img class="border" onclick="change_image(this)" src="http://demo.templatin.com/megashop17/25-home_default/galaxy-android-smartphone.jpg" width="100">
                            </div>
                        </div>
                   </div> 

                   <div class="col-md-6 py-4">
                        <h5>Galaxy Note Series SmartPhone</h5>
                        <p>This is product short description. Capicola chuck tongue, anim consequat leberkas laborum ut enim bacon. Ribeye hamburger pastrami nisi ad consectetur dolor.</p>
                        <h4 class="text-danger">$210.00</h4>
                        
                        <div class="fw-bold my-3">
						 <a class="call-col fw-bold " href="tel: 977-9844123847">Call /</a>
						<a class="whatsapp-col fw-bold" style="color: greenyellow;" href="https://api.whatsapp.com/send?phone=+9779844123847&amp;text=I am interested in QA55Q60AARXHE" target="_blank"> Whatsapp</a> /
						<a class="viber-col fw-bold" style="color: purple;" href="viber://add?number=9779844123847"> Viber</a> /
						<a class="text-black fw-bold" href="tel: 977-9844123847">9844123847</a> To Order
                    </div>

                        <div class="d-flex pt-2 text-secondary">
                            <span class="pe-3">Share</span>
                            <a class="pe-3 text-secondary " href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="pe-3 text-secondary" href=""><i class="fab fa-twitter"></i></a>
                            <a class="pe-3 text-secondary" href=""><i class="fab fa-pinterest-p"></i></a>
                        </div>

                        <div class="py-3">
                            <p><i class="fas fa-lock pe-3 fs-3 text-danger"></i>Easy return policy with no questions asked </p>
                            <p><i class="fas fa-truck pe-3 fs-3 text-danger"></i>Order before 6 PM to get express delivery </p>
                            <p><i class="fas fa-hand-holding-heart pe-3 fs-3 text-danger"></i>We provide best quality hand-picked products </p>
                        </div>
                   </div>
                </div>

                <ul class="nav nav-tabs pt-5" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active text-black fw-bold fs-5" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Description</button>
                    </li>
                    <li class="nav-item " role="presentation">
                        <button class="nav-link text-black fw-bold fs-5" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Product Details</button>
                    </li>
                </ul>
                <div class="tab-content p-3 border" id="myTabContent">
                    <div class="tab-pane fade show active text-black" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h6 class="pb-2">Description of the items</h6>
                        <p>Lorem ipsum voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. <br> <br>

                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore. <br> <br>

                        Dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex eacommodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. <br> <br>

                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore.</p>
                    </div>
                    <div class="tab-pane fade text-black" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h6 class="pb-2">Product Details of the items</h6>
                        <p>Lorem ipsum voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. <br> <br>

                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore. <br> <br>

                        Dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex eacommodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. <br> <br>

                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore.</p>
                    </div>
                </div>

                <div class="py-4">
                    <div class="title d-flex justify-content-between align-items-center">
                        <h2 class=" sale-head ">Other products in the same category:</h2>
                        <a class="viewmore " href="newproduct.php" target="_blank ">View More ></a>
                    </div>

                    <div class="row ">
                        <div class="col-lg-3 col-md-3 col-sm-6 hvr-grow p-0 text-center ">
                            <div class="product-top ">
                                <img class="img-fluid " src="http://demo.templatin.com/megashop17/2-home_default/galaxy-note-series-smartphone.jpg ">

                                <div class="overlay text-center my-4 ">
                                    <button type="button " class="btn btn-secondary " title="Add to wishlist "><i class="fab fa-gratipay "></i></button>
                                    <button type="button " class="btn btn-secondary cart " title="Add to cart "><i class="fas fa-cart-plus "></i></button>
                                </div>
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
                                <img class="img-fluid " src="http://demo.templatin.com/megashop17/14-home_default/premium-designer-hand-bag.jpg ">

                                <div class="overlay text-center my-4 ">
                                    <button type="button " class="btn btn-secondary " title="Add to wishlist "><i class="fab fa-gratipay "></i></button>
                                    <button type="button " class="btn btn-secondary cart " title="Add to cart "><i class="fas fa-cart-plus "></i></button>
                                </div>
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
                                <img class="img-fluid " src="http://demo.templatin.com/megashop17/15-home_default/monitor-with-wide-viewing-angle.jpg ">

                                <div class="overlay text-center my-4 ">
                                    <button type="button " class="btn btn-secondary " title="Add to wishlist "><i class="fab fa-gratipay "></i></button>
                                    <button type="button " class="btn btn-secondary cart " title="Add to cart "><i class="fas fa-cart-plus "></i></button>
                                </div>
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
                                <img class="img-fluid " src="http://demo.templatin.com/megashop17/19-home_default/smart-casual-men-sneakers.jpg ">

                                <div class="overlay text-center my-4 ">
                                    <button type="button " class="btn btn-secondary " title="Add to wishlist "><i class="fab fa-gratipay "></i></button>
                                    <button type="button " class="btn btn-secondary cart " title="Add to cart "><i class="fas fa-cart-plus "></i></button>
                                </div>

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


                <div class="py-4">
                    <div class="title d-flex justify-content-between align-items-center">
                        <h2 class=" sale-head ">Customers who bought this product also bought:</h2>
                        <a class="viewmore " href="newproduct.php" target="_blank ">View More ></a>
                    </div>

                    <div class="row ">
                        <div class="col-lg-3 col-md-3 col-sm-6 hvr-grow p-0 text-center ">
                            <div class="product-top ">
                                <img class="img-fluid " src="http://demo.templatin.com/megashop17/2-home_default/galaxy-note-series-smartphone.jpg ">

                                <div class="overlay text-center my-4 ">
                                    <button type="button " class="btn btn-secondary " title="Add to wishlist "><i class="fab fa-gratipay "></i></button>
                                    <button type="button " class="btn btn-secondary cart " title="Add to cart "><i class="fas fa-cart-plus "></i></button>
                                </div>
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
                                <img class="img-fluid " src="http://demo.templatin.com/megashop17/14-home_default/premium-designer-hand-bag.jpg ">

                                <div class="overlay text-center my-4 ">
                                    <button type="button " class="btn btn-secondary " title="Add to wishlist "><i class="fab fa-gratipay "></i></button>
                                    <button type="button " class="btn btn-secondary cart " title="Add to cart "><i class="fas fa-cart-plus "></i></button>
                                </div>
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
                                <img class="img-fluid " src="http://demo.templatin.com/megashop17/15-home_default/monitor-with-wide-viewing-angle.jpg ">

                                <div class="overlay text-center my-4 ">
                                    <button type="button " class="btn btn-secondary " title="Add to wishlist "><i class="fab fa-gratipay "></i></button>
                                    <button type="button " class="btn btn-secondary cart " title="Add to cart "><i class="fas fa-cart-plus "></i></button>
                                </div>
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
                                <img class="img-fluid " src="http://demo.templatin.com/megashop17/19-home_default/smart-casual-men-sneakers.jpg ">

                                <div class="overlay text-center my-4 ">
                                    <button type="button " class="btn btn-secondary " title="Add to wishlist "><i class="fab fa-gratipay "></i></button>
                                    <button type="button " class="btn btn-secondary cart " title="Add to cart "><i class="fas fa-cart-plus "></i></button>
                                </div>

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
        </div>
       

    <?php include('footer.php');?>
