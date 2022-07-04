<?php 
session_start();
$conn = mysqli_connect("localhost", "root","", "kha"); 

if($conn){
    mysqli_query($conn,"SET NAMES 'utf8'");
}
else{
    echo "Failed to connect".mysqli_connect_error();
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
	<link rel="stylesheet" type="text/css" href="C:/Users/This PC/Desktop/Asm web/Asm 2/fontawesome-free-5.15.4-web/css/all.css">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="Base.css">
	<link rel="stylesheet" type="text/css" href="Header Navigation.css">
	<link rel="stylesheet" type="text/css" href="Notification.css">
	<link rel="stylesheet" type="text/css" href="Cart.css">
	<link rel="stylesheet" type="text/css" href="Searching.css">
	<link rel="stylesheet" type="text/css" href="Sign in.css">
	<link rel="stylesheet" type="text/css" href="Sign up.css">
	<link rel="stylesheet" type="text/css" href="Profile.css">
	<script src="Style.js"></script>
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

			<div class="Profile">

				<h3 class="Profile-heading">User Profile</h3>
					
				<form method ="post">

				<?php
				
				$userEmail = $_SESSION['userEmail'];

				$result = "SELECT * FROM user WHERE userEmail ='$userEmail'";

				$Infor = mysqli_query($conn,$result);

				if($Infor) {

				if(mysqli_num_rows($Infor)>0)
				{

					while ($row = mysqli_fetch_array($Infor))
				{
						
						?>

				<div class="Profile-container">
								
					<img class="profile-img" src="img/ava.png">

					<div class="profile-section">
						<div class="profile-section1">
							Email:
						</div>
						<div class=" profile-section2" id="name">
							<input name="userEmail" class="profile-update update-name" type="text" maxlength="255" value="<?php echo $row['userEmail']?> "disabled>
						</div>

					 </div>
					 <div class="profile-section">
						<div class="profile-section1">
							Password:
						</div>
						<div class=" profile-section2" id="pass">
							<input name="userPassword" class="profile-update update-address" type="password" maxlength="255" value="<?php echo $row['userPassword']?>">
						</div>

					 </div>

					<div class="profile-section">
						<div class="profile-section1">
							User Name:
						</div>
						<div class=" profile-section2" id="uname">
							<input name="userName" class="profile-update update-userName" type="text" maxlength="255" value="<?php echo $row['userName']?>">
						</div>

					 </div>

					 <div class="profile-section">
						<div class="profile-section1">
							Phone Number:
						</div>
						<div class=" profile-section2" id="phone">
							<input name="userPhone" class="profile-update update-phone" type="text" maxlength="255" value="<?php echo $row['userPhone']?>">
						</div>

					 </div>
					 <div class="profile-section">
						<div class="profile-section1">
							Address:
						</div>
						<div class=" profile-section2" id="addr">
							<input name="userAddress" class="profile-update update-address" type="text" maxlength="255" value="<?php echo $row['userAddress']?>">
						</div>

					 </div>

					<div class="profile-btn">
						
					 <button class="button profile-back-btn"><a class="goback_signup" href="Index_profile.php">Go Back </a></button>

					 <input value="Update" type="submit" name="Save" class="button profile-save-btn">
					 

				</div>
				<?php
					}
				}
			}
			?>
			</form>
		</div>				
			</div>
		</div>
		



</body>
</html>

<?php 
$conn = mysqli_connect("localhost", "root","", "kha"); 

if($conn){
    mysqli_query($conn,"SET NAMES 'utf8'");
}
else{
    echo "Failed to connect".mysqli_connect_error();
}


		if(isset($_POST['Save']))
				{
					$password = mysqli_real_escape_string($conn, $_POST['userPassword']);   
					$address = mysqli_real_escape_string($conn, $_POST['userAddress']);
					$phone = mysqli_real_escape_string($conn, $_POST['userPhone']);   
					$username = mysqli_real_escape_string($conn, $_POST['userName']); 
					$updateInfor = "UPDATE user SET userPassword = '$password', userAddress = '$address', userPhone = '$phone', userName = '$username' WHERE userEmail = '{$_SESSION['userEmail']}'";
					$result = mysqli_query($conn, $updateInfor);
					if($result)
					{
						echo '<script language="javascript">alert("Your profile is updated!");window.location="Profile.php";</script>';
					}
					else
					{
						echo "<script>alert('Update Failed')</script>";
					}
				}
				
?>
