<?php
session_start();
Error_reporting(0);
?>
<!DOCTYPE html>
<html lang = "eng">
<head>
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
	<script src="Style.js "></script>
	<title> Kha's House Sign Up</title>
</head>
<body class="body__signUp">

	<style>
		body { 
 	 	background-image: url('https://images.unsplash.com/photo-1569864358642-9d1684040f43?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1000&q=80');
		}
	</style>

	<div class="modal">

		<div class="modal__overlay">

		</div>
			

		<div class="modal__content">

			<div class="registerForm">

				<div class="registerForm__container">
								
				

					<h3 class="registerForm__heading">Sign Up</h3>

			
					<form  method="POST">

								<div class="registerForm__form">

				
									<div class="registerForm__layout">

										<input name="userEmail" id="regisEmail" type="text" class="registerForm__layout-input" placeholder="Enter email address">

									</div>

									<div class="registerForm__layout">

										<input name="userPassword" id="regisPass" type="text" class="registerForm__layout-input" placeholder="Enter your password"> 

									</div>

									<div class="registerForm__layout">

										<input name="userRepass" id="regisRepass" type="text" class="registerForm__layout-input" placeholder="Re-enter your password">	

									</div>	

									<div class="registerForm__layout">

										<input name="userAddress" id="regisAddress" type="text" class="registerForm__layout-input" placeholder="Enter your address">	

									</div>		

									<div class="registerForm__layout">

										<input name="userName" id="regisName" type="text" class="registerForm__layout-input" placeholder="Enter your name">	

									</div>	

									<div class="registerForm__layout">

										<input name="userPhone" id="regisPhone" type="text" class="registerForm__layout-input" placeholder="Enter your phone number">	

									</div>	

								</div>

								<div class="registerForm__aside">
										<p class="registerForm_aside-switch"> Already have an account ?<a href="SignIn.php" class="registerForm_aside-Btn">Sign In</a></p>
								</div>

								<div class="registerForm__controls">


											
											<button class="btn btn__goBack"><a class="goback_signup" href="Index.php">Go Back </a></button>
										
										

											<input value="Sign Up" type="submit" name="sign_up" class="btn btn__signUp" onclick="checkApplication()">


								</div>
								

					</form>
			
				</div>
			
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
?>


<?php
function emptyInputSignup($username, $email, $phone, $address, $password, $repassword){

	$result;
	if (empty($username) || empty($email) || empty($phone) || empty($address) || empty($password) || empty($repassword) ) {
		
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
	}
	

	function invalidEmail($email) {
		$result;
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
			
			$result = true;
		}
		else{
			$result = false;
		}
		return $result;
	}
	
	
	

?>

<?php  

	if(isset($_POST['sign_up'])){
		$username = $_POST['userName'];
		$email = $_POST['userEmail'];
		$phone = $_POST['userPhone'];
		$address = $_POST['userAddress'];
		$password = $_POST['userPassword'];
		$repassword = $_POST['userRepass'];

								
		if (emptyInputSignup($username,$email,$phone,$address,$password,$repassword) !== false){
			header("SignUp.php?error=emptyinput");
			exit();
		}
		
		if (invalidEmail($email) !== false){
			header("SignUp.php?error=invalidEmail");
			exit();
		}

		

		$duplicate = "SELECT * FROM user WHERE userEmail = '$email'";


		$result = mysqli_query($conn, $duplicate);
								

	if (mysqli_num_rows($result) > 0){
			echo '<script language="javascript">alert("Your email already exits. Please enter another email"); window.location="SignUp.php";</script>';

			die();
		}

	else {

		if($pass == $repass) {

			$duplicate = "INSERT INTO user (userName, userEmail, userPhone, userAddress, userPassword) VALUES ('$username', '$email', '$phone', '$address','$password')";

			echo '<script language="javascript"> alert("Sign Up Successfully!"); window.location="Index.php";</script>';

			$result = mysqli_query($conn, $duplicate);
		}
				
		else

		{

			echo "<script>alert('Password and Re-password are not similar')</script>";
			die();

		}
	}
}
?>
