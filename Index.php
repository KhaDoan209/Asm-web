<?php  
	$conn=mysqli_connect("localhost", "root", "", "kha");

		if($conn){
					mysqli_query($conn,"SET NAMES 'utf8'");

				}
		else {
				echo "Failed to connect".mysqli_connect_error();
				}
?>
<!DOCTYPE html>
<html lang = "eng">
<head>
	<meta charset="utf-8">
	<meta name ="descriptions" content = "Nha Cua Kha, Snack shop">
	<meta name = "viewport" content ="width=device-width, initial-scale = 1.0 ">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Rampart+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://kit.fontawesome.com/68c0d6e5f7.js" crossorigin="anonymous"></script>
  	<script src="Style.js "></script>
	<link rel="stylesheet" type="text/css" href="Base.css">
	<link rel="stylesheet" type="text/css" href="Header Navigation.css">
	<link rel="stylesheet" type="text/css" href="Notification.css">
	<link rel="stylesheet" type="text/css" href="Cart.css">
	<link rel="stylesheet" type="text/css" href="Searching.css">
	<link rel="stylesheet" type="text/css" href="Sign in.css">
	<link rel="stylesheet" type="text/css" href="Sign up.css">
	<link rel="stylesheet" type="text/css" href="Slide Show.css">
	<link rel="stylesheet" type="text/css" href="Product.css">
	<title> Welcome to Nha Cua Kha</title>
</head>
<body>
	

	<div class="website">

		<header class="header"> 
		<style class="">
		body { 
 	 	background-image: url('https://assets.vogue.com/photos/5891620ce8e3104f57c72f03/1:1/w_280,h_280,c_limit/10-pink-paint1.jpg');
		}
		</style>

			<div class="grid">
				<!--header nav-->
				<nav class="header__navigation">

					<ul class="header__navigation-list">

						<li class="header__navigation-item header__nav-follow"> Follow Us On </li>

						<i><a href="https://www.facebook.com/VinhhKhaa/" id="facebook" target="_blank" class="header__navigation-icon fab fa-facebook-f"></a></i>

						<i><a href="https://www.instagram.com/_vihkha/" id="instagram" target="_blank"class="header__navigation-icon fab fa-instagram-square"></a></i>
					</ul>

					<ul class="header__navigation-list">
					
						<li class="header__navigation-item">
							<a href="SignIn.php" class="header__nav-link header__nav-signIn">Sign In</a>
						</li>
						<li class="header__navigation-item header__nav-divideLine"></li>

						<li class="header__navigation-item">
							<a href="SignUp.php" class="header__nav-link header__nav-signUp">Sign Up</a>
						</li>	
					
					</ul>
				</nav>

				<div class="header__searchBar">

					<div class="header__logo">
						<a href="" class="header__logo-storeName"><img class="logo" src="img/logo.png"></a>						
					</div>
				<!--search nav-->
					<div class="header__search">

						<input type="text" class="header__search-input" placeholder="Find in the shop">	

						<button class="header__search-btn">
							<i class="header__search-btnIcon fas fa-search"></i>
						</button> 
							
					</div>
				<!--cart nav-->

					<div class="header__cart">

						<div class="header__cart-wrap">

						<a href="SignIn.php" ><i id="cart__icon" class="header__cart-icon fas fa-shopping-cart" ></i></a>


							
						</div>

						</div>
					</div>

				</div>
			</header>


			<div class="container"> 
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
			    <!-- Indicators -->
			    <ol class="carousel-indicators">
			      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			      <li data-target="#myCarousel" data-slide-to="1"></li>
			      <li data-target="#myCarousel" data-slide-to="2"></li>
			    </ol>

			    <!-- Wrapper for slides -->
			    <div class="carousel-inner">
			      <div class="item active">
					<a href="SignIn.php" class="buynow">Buy now at Kha's House</a>
			        <img id="slide3" src="img/slide3.png" alt=" " style="width:100%;" style="height:900px;">
			      </div>

			      <div class="item">
			        <img id="slide2" src="img/slide2.jpg" alt="" style="width:100%;" style="height:fit-content;">
			      </div>
			    
			      <div class="item">
					
			        <img id="slide1" src="img/slide1.jpg" alt=" " style="width:100%;" style="height:fit-content;">
			      </div>
			    </div>

			    <!-- Left and right controls -->
			    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			      <span class="glyphicon glyphicon-chevron-left"></span>
			      <span class="sr-only">Previous</span>
			    </a>
			    <a class="right carousel-control" href="#myCarousel" data-slide="next">
			      <span class="glyphicon glyphicon-chevron-right"></span>
			      <span class="sr-only">Next</span>
			    </a>
			  </div>

			<div class="grid__row">

				<div class="grid__column-2">
					<nav class="category">
					<h3 class="category__heading"><i class="category__heading-icon fas fa-list"></i>Category</h3>

					<ul class="category_list">

						<li class="category-item category-item-active">

							<a href="#Domestic" class="category-item__link">Domestic Products</a>

						</li>
						
						<li class="category-item">

							<a href="#Imported" class="category-item__link">Imported Products</a>

						</li>

					</ul>

					</nav>

			 	 </div>

			 	<div class="grid__column-10">
				  <form method = "POST">
			 	 	<div class="grid__column-10-domestic">

			  			<div id="Domestic" class="Product">
						  
			  				<div class="grid__row">
							  <?php
								$query = "SELECT * FROM product WHERE category_id = 1";

								$result = $conn->query($query);

								foreach($result as $product):
								?>
								<div class="grid__column-2-4">	

									<div class="Product__item">
										
											<img class="Product__item-img" src="img/<?=$product['images']?>
												"> 		
						
												<h4 class="Product__item-name"><?=$product['product_name']?>
												
												</h4>
												
												
												<div  class="Product__item-price"><?=$product['price']?>
													
												</div>
													
												
												<div class="Product_button"><button class=" Product__item-btn-add" name="Add" >Add to cart</button>
												</div>

									</div>
										
								</div>
								<?php
								endforeach;
								?>
			  			</div>

						<div id="Imported" class="Product">
						  
			  				<div class="grid__row">
							  <?php
								$query = "SELECT * FROM product WHERE category_id = 2";

								$result = $conn->query($query);

								foreach($result as $product):
								?>
								<div class="grid__column-2-4">	

									<div class="Product__item">
										
											<img class="Product__item-img" src="img/<?=$product['images']?>"> 		
						
												<h4 class="Product__item-name"><?=$product['product_name']?>
												
												</h4>
												
												
												<div  class="Product__item-price"><?=$product['price']?>
													
												</div>
													
												
												<div class="Product_button"><button class=" Product__item-btn-add" name="Add" >Add to cart</button>
												</div>

									</div>
										
								</div>
								<?php
								endforeach;
								?>
			  			</div>

			 		</div>







					
				</div>
				 
			 </div>
			
			</div>


		<footer class="footer">
			<p>
    ©2021 Copyright By Kha Doan
  			</p>
		</footer>
		
	</div>


	
</body>
</html>
<?php
		if(isset($_POST['Add'])){

		$email = $_POST['userEmail'];

		$result = "SELECT * FROM user WHERE userEmail = '$email'";
		
		$checkEmail = mysqli_query($conn, $result);

		if (mysqli_num_rows($checkEmail) < 1)
			{
			echo '<script language="javascript">alert("You must sign in before purchasing"); window.location="SignIn.php";</script>';
			die();
			}
							
		}
?>