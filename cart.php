<?php include('header.php');?>

<!-- third section Menu bar -->
<nav class="navbar navbar-expand-lg navbar-light sticky-top naav">
        <div class="container">
            <li class="nav-item dropdown bg-danger text-center">
                <a class="nav-link dropdown-toggle m-0" href="accessories.php" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categories
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item " href="electronics.php ">Electronics</a></li>
                    <li><a class="dropdown-item " href="clothing.php">Clothing</a> </li>
                    <li><a class="dropdown-item " href="furniture.php">Furniture</a></li>
                    <li><a class="dropdown-item " href="accessories.php">Accessories</a></li>
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
                        <a class="nav-link" href="aboutus.php ">About Us</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="contactus.php ">Contact Us</a>
                    </li>
                   
                </ul>
            </div>
     
        </div>
    </nav>


  	<div class="container mb-5">
		<h4 class="py-4">Shopping Cart</h4>
		<div class="row">
			<div class="col-md-8">
				<div class="card">
					<div class="row p-4">

						<div class="col-md-5 border-bottom">
							<img class="img-fluid" src="images/women-cotton-blend-trousers.jpg"  alt="women trouser">	
						</div>
	
						<div class="col-md-5 border-bottom">
							<h4>women-cotton-trouser <button type="submit" class="btn btn-dark"><i class="fas fa-trash-alt"></i></button></h4>
							<p>This is product short description. Capicola chuck tongue, anim consequat leberkas laborum ut enim bacon. Ribeye hamburger pastrami nisi ad consectetur dolor.</p>
							<h4>Rs.2000.00</h4>

							<div class="dropdown py-3 d-flex">
								<a class="btn btn-white btn-sm dropdown-toggle mb-3" href="cart.php" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Size</a>
					
								<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
									<li><a class="dropdown-item" href="#">XL</a></li>
									<li><a class="dropdown-item" href="#">L</a></li>
									<li><a class="dropdown-item" href="#">s</a></li>
								</ul>
		
								<a class="btn btn-white btn-sm dropdown-toggle ms-3 mb-3" href="cart.php" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Quantity</a>
								<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
									<li><a class="dropdown-item" href="#">1</a></li>
									<li><a class="dropdown-item" href="#">2</a></li>
									<li><a class="dropdown-item" href="#">3</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-5 py-3">
							<img class="img-fluid " src="images/women-cotton-blend-trousers.jpg"  alt="women trouser">	
						</div>
	
						<div class="col-md-7 py-3">
							<h4>women-cotton-trouser <button type="submit" class="btn btn-dark"><i class="fas fa-trash-alt"></i></button></h4>
							<p>This is product short description. Capicola chuck tongue, anim consequat leberkas laborum ut enim bacon. Ribeye hamburger pastrami nisi ad consectetur dolor.</p>
							<h4>Rs.2000.00</h4>

							<div class="dropdown pt-3 d-flex">
								<a class="btn btn-white btn-sm dropdown-toggle mb-3" href="cart.php" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Size</a>
					
								<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
									<li><a class="dropdown-item" href="#">XL</a></li>
									<li><a class="dropdown-item" href="#">L</a></li>
									<li><a class="dropdown-item" href="#">s</a></li>
								</ul>
		
								<a class="btn btn-white btn-sm dropdown-toggle ms-3 mb-3" href="cart.php" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Quantity</a>
								<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
									<li><a class="dropdown-item" href="#">1</a></li>
									<li><a class="dropdown-item" href="#">2</a></li>
									<li><a class="dropdown-item" href="#">3</a></li>
								</ul>
							</div>
						</div>
					</div>	
				</div>  
			</div>
	
			<div class="col-md-4">
				<div class="card p-3">
					<div class="d-flex justify-content-between">
						<span>2 items</span>
						<span >Rs.300.00</span>
					</div>

					<div class="d-flex justify-content-between mb-4">
						<span>Shipping</span>
						<span>Rs.100.00</span>
					</div>

					<div class="d-flex justify-content-between">
						<span>Total(tax excl.)</span>
						<span>Rs.10.00</span>
					</div>

					<div class="d-flex justify-content-between fw-bold">
						<span>Total(tax incl.)</span>
						<span>Rs.20.00</span>
					</div>

					<div class="d-flex justify-content-between ">
						<span>Taxes:</span>
						<span>Rs.0.00</span>
					</div>
					<a href="cart.php" class="btn btn-danger mx-5 mt-5 mb-2"> Proceed to Checkout</a>
				</div>
				<div class="desc-item my-5">
					<p><i class="fas fa-lock pe-3 fs-3 text-danger"></i>Easy return policy with no questions asked </p>
					<p><i class="fas fa-truck pe-3 fs-3 text-danger"></i>Order before 6 PM to get express delivery </p>
					<p><i class="fas fa-hand-holding-heart pe-3 fs-3 text-danger"></i>We provide best quality hand-picked products </p>
				</div>
			</div>
		</div>
</div>

<?php include('footer.php');?>