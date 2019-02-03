<?php
// Initialize the session
session_start();

//Connect to Database
require_once "config.php";

// Check if the user is already logged in, if yes then redirect him to welcome page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Auburn Mentoring</title>
	<style>
	.profileBox {
		margin:auto;
		height:auto;
		text-align:left;
		width:55%;
		color:white;
		background-color:#dd550c;
		padding:10px;
	}
	.userInfo {
		text-align:left;
		margin: 5px 0 0 5px;
		padding:10px;
	}
	.btnstyle {
		float:right;
		background-color: #496e9c;
		color:white;
	}
</style>
</head>
<body>
<div>
	<?php 
		include "header.php";
	?>
	<br>
</div> 
	<?php
	
	
//!!!!!!!!!!!!!!!!COMMENT IN PHP VARIABLE ONCE INFORMATION IS DB!!!!!!!!!!!!!!!!
//!!!!!!!!!!!!!!!!COMMENT IN PHP VARIABLE ONCE INFORMATION IS DB!!!!!!!!!!!!!!!!
//!!!!!!!!!!!!!!!!COMMENT IN PHP VARIABLE ONCE INFORMATION IS DB!!!!!!!!!!!!!!!!
	//$query = "SELECT * FROM users WHERE id=0"; //username='$_SESSION["username"]'";

	$query = "SELECT * FROM Users WHERE Username='".$_SESSION["username"]."'";	

	$result = mysqli_query($link,$query) or die ('Error: Unable to pull data from profile'.mysqli_error($link));

	$currentuser = mysqli_fetch_array($result);

//!!!!!!!!!!!!!!!!COMMENT IN PHP VARIABLE ONCE INFORMATION IS DB!!!!!!!!!!!!!!!!
//!!!!!!!!!!!!!!!!COMMENT IN PHP VARIABLE ONCE INFORMATION IS DB!!!!!!!!!!!!!!!!
//!!!!!!!!!!!!!!!!COMMENT IN PHP VARIABLE ONCE INFORMATION IS DB!!!!!!!!!!!!!!!!

		/*	$id = 0;//$currentuser['id'];
			$fname = "John";//$currentuser['fname'];
			$lname = "Doe";//$currentuser['lname'];
			$email = "jfd0000@auburn.edu";//$currentuser['email'];
			$username = "jfd0000";//$currentuser['username'];
			$password = "1234";//$currentuser['password'];
			$DOB = "0/0/0000";//$currentuser['DOB'];
		*/

	$id = $currentuser['UserID'];
	$fname = $currentuser['FirstName'];
	$lname = $currentuser['LastName'];
	$email = $currentuser['Email'];
	$username = $currentuser['Username'];
	$password = $currentuser['Password'];
	$DOB = $currentuser['DOB'];
	?>
	<div class="container">
	<form id="edit" method="POST">
		<div class="profileBox">
			<div class="avatar" ">
			
                <img src="download.png" alt="Circle Image" class="img-raised rounded-circle img-fluid" style="display: block; margin-right: auto;margin-left: auto;">
            </div>
			<div class="userInfo">
				<b>Name: </b><?php echo $fname." ".$lname?>
			</div>
			<div class="userInfo">
				<b>E-mail: </b><?php echo $email?>
			</div>
			<div class="userInfo">
				<b>Username: </b><?php echo $username?>
			</div>
			<div class="userInfo">
				<b>Birthdate: </b><?php echo $DOB?>
			</div>
			<button class="btn  btnstyle" type="button" onclick="window.location.href='reset-password.php'">Edit Info</button>
		</div>
	
</div>

	<FOOTER style="background-color:#03244d;border-top-width:5px;border-top-color:#dd550c;border-top-style:solid;padding:10px;position:absolute;
   bottom:0;
   width:100%;">	
	<?php
		include "footer.php";
	?>
	</FOOTER>

	<!-- Javascript function to update SQL entry infromation via user input through PHP
	<script type="text/javascript">
		function editInfo() {

			document.getElementById('edit').innerHTML=
			'<div class="profileBox"><p>Enter information below that you would like to change.</p><br><b>First Name:</b> <input type="text" name="fname2"><br><br>'
			+ '<b>Last Name:</b> <input type="text" name="lname2"><br><br>'
			+ '<b>Birthday:</b> <input type="text" name="DOB2"><br><br>'
			+ '<b>Password:</b> <input type="password" name="password2" id="password2"><br><br>'
			+ '<b>Confirm Password:</b> <input type="password" name="password3" id="password3"><br><br>'
			+ '<button type="submit">UPDATE</button>'
			+ '<button type="button" onclick="window.location.reload()">CANCEL</button>'
			+ '</div>';
		}
	</script>
	<script type="text/javascript">
		function confirmInformation() {
			var password2 = document.getElementById("password2").value;
			var password3 = document.getElementById("password3").value;
			if(password2 != password3) {
				alert('Passwords did not match!');
				editInfo();
			} 
		}
	</script> -->

</body>
</html>