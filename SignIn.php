<?php
session_start();
?>
<!DOCTYPE html>
<html lang = "eng">
<head>
	<meta charset="utf-8">
	<meta name ="descriptions" content = "Nha Cua Kha, Snack shop">
	<meta name = "viewport" content ="width=device-width, initial-scale = 0.5 ">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Rampart+One&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="C:/Users/This PC/Desktop/Asm web/Asm 2/fontawesome-free-5.15.4-web/css/all.css">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="Base.css">
	<link rel="stylesheet" type="text/css" href="Header Navigation.css">
	<link rel="stylesheet" type="text/css" href="Notification.css">
	<link rel="stylesheet" type="text/css" href="Cart.css">
	<link rel="stylesheet" type="text/css" href="Searching.css">
	<link rel="stylesheet" type="text/css" href="Sign in.css">
	<link rel="stylesheet" type="text/css" href="Sign up.css">
	<title> Kha's House Sign In</title>
</head>

<body class="body__signIn">

	<style>
		body { 
 	 	background-image: url('https://images.unsplash.com/photo-1569864358642-9d1684040f43?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1000&q=80');
		}
	</style>
	<div class="modal">

		<div class="modal__overlay">
			
		</div>

		<div class="modal__content">

			<div class="signInForm">
				
			<form  method="POST">

				<div class="signInForm__container">
								
				

					<h3 class="signInForm__heading">Sign In</h3>

			
				
				<div class="signInForm__form">

					<div class="signInForm__layout">

					<input name="userEmail" type="text" class="signInForm__layout-input" placeholder="Enter your email address">
			
				</div>

				<div class="signInForm__layout">

					<input name="userPassword" type="password" class="signInForm__layout-input" placeholder="Enter your password"> 

				</div>

								
				</div>
						
				<div class="signInForm__aside">
							<p class="signInForm_aside-switch"> Don't have an account ?<a href="SignUp.php" class="signInForm_aside-Btn">Sign up</a></p>
				</div>

				<div class="signInForm__controls">

				
				<button class="btn btn__goBack"><a class="goback_signup" href="Index.php">Go Back</a></button>
				

						
				<input value="Sign In" type="submit" name="sign_in" class="btn btn__signUp" onclick="checkApplication()">
					

				</div>
				
				</div>
				</form>

			</div>

				

			</div>
		</div>
		

</body>

</html>

<?php  

	$conn=mysqli_connect("localhost", "root", "", "kha");

		if($conn){
					mysqli_query($conn,"SET NAMES 'utf8'");

				}
		else {
				echo "Failed to connect".mysqli_connect_error();
				}

		if(isset($_POST['sign_in'])){

			$email = $_POST['userEmail'];

			$password = $_POST['userPassword'];

			$result = "SELECT * FROM user WHERE userEmail = '$email' AND userPassword = '$password'";

			$checkEmail = mysqli_query($conn, $result);

			if (mysqli_num_rows($checkEmail) < 1){
				echo '<script language="javascript">alert("Incorrect email or password!"); window.location="SignIn.php";</script>';
				die();
				}
				else

				$row = mysqli_fetch_assoc($checkEmail);

				$_SESSION['userEmail'] = $row['userEmail'];

				echo '<script language="javascript">alert("Login successfully!"); window.location="Index_profile.php";</script>';
						
		}
?>

