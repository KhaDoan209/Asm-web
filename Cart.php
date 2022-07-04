<?php
$conn = mysqli_connect('localhost', 'root', '', 'kha') 
or die ('Connection Failed'); mysqli_set_charset($conn, "utf8");

session_start();
Error_reporting(0);

if(isset($_POST['Addtocart']))
{
  if(isset($_SESSION['cart']))
  {
    $session_array_id = array_column($_SESSION['cart'], "product_id");

    if(!in_array($_GET['product_id'], $session_array_id))
    {
      $session_array  = array(
        'product_id' => $_GET['product_id'],
        "product_name" => $_POST['product_name'],
        "images" => $_POST['images'],
        "price" => $_POST['price'],
      );
  
      $_SESSION['cart'][] = $session_array;
    }
  }
  else
  {
    $session_array  = array(
      'product_id' => $_GET['product_id'],
      "product_name" => $_POST['product_name'],
      "images" => $_POST['images'],
      "price" => $_POST['price'],
    );

    $_SESSION['cart'][] = $session_array;
  }
}

?>
<!DOCTYPE html>
<html lang = "eng">
<head>
	<meta charset="utf-8">
	<meta name ="descriptions" content = "Nha Cua Kha, Snack shop">
	<meta name = "viewport" content ="width=device-width, initial-scale = 0.5 ">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Rampart+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/68c0d6e5f7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="Base.css">
    <link rel="stylesheet" type="text/css" href="Header Navigation.css">
    <link rel="stylesheet" type="text/css" href="Notification.css">
    <link rel="stylesheet" type="text/css" href="Cart.css">
    <link rel="stylesheet" type="text/css" href="Searching.css">
    <link rel="stylesheet" type="text/css" href="Sign in.css">
    <link rel="stylesheet" type="text/css" href="Sign up.css">
     <link rel="stylesheet" type="text/css" href="Slide Show.css">
  <link rel="stylesheet" type="text/css" href="Product.css">
	<title>Cart</title>
</head>
<body>
    <style class="">
		body { 
 	 	background-image: url('https://assets.vogue.com/photos/5891620ce8e3104f57c72f03/1:1/w_280,h_280,c_limit/10-pink-paint1.jpg');
		}
		</style>
        <div class="grid_row">
        <div class="modal-shopping">

            <div class="shopping-cart">
            <!-- Title -->
                <div class="shopping-cart-heading">
                    <div class="shopping-cart-title">Shopping Cart</div>
                    <div class="shopping-cart-text">Check out and bring your snacks home <i class="fas fa-cookie-bite"></i></div>
                </div>
                <form id="cart-form" action="Cart.php?action=submit" method="post">
                    <div class="shopping-cart-item">
                                <?php
                                $total=0;
                                if(!empty($_SESSION['cart'])){

                            foreach($_SESSION['cart'] as $key => $value)

                                  {  
                          ?>
                      <div id="cart" class="container">
                        <table>
                     <tr class="item-list">

                        <td class="item-picture"><img class="item-buy-img" src="img/<?=$value['images']?>" alt=""></td>

                        <td class="item-name"><?=$value['product_name']?></td> 

                        <td class="item-price"> <?=$value['price']?></td>

                        <td><a href="Cart.php?action=remove&product_id=<?=$value['product_id']?>"><i class="item-remove fas fa-trash-alt"></i></a></td>

                      </tr>
                        </table>
                      </div>
                  	
                    </div>         
                              <?php
                              $total = $total + $value['price'];
                            }
                              }   
                                      ?> 
                    <div class="total">Total Price: <?=$total?>.000 VND</div>

                    <div class="shopping-cart-button">

                    <input value="Payment" type="submit" name="pay" class="btn btn__signUp">

                    <button class="btn btn__back"><a class="goback_signup" href="Index_profile.php">Go Back</a></button>
                   
                    </div>
             </form>
            </div>


        </div>
        </div>
        <?php
		if(isset($_GET['action'])){
			if($_GET['action']=="remove"){
				foreach($_SESSION['cart'] as $key => $value){
					if($value['product_id']==$_GET['product_id']){
						unset($_SESSION['cart'][$key]);
					}
				}
			}
		}
		?>	
  
</body>
</html>
