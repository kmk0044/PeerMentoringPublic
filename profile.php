<?php
// Initialize the session
session_start();
include("config.php");

// !!!!!!!!!!!!!!!!!!!UNCOMMENT ONCE LOG IN INFO IS APPLIED!!!!!!!!!!!!!!!
// !!!!!!!!!!!!!!!!!!!UNCOMMENT ONCE LOG IN INFO IS APPLIED!!!!!!!!!!!!!!!
// !!!!!!!!!!!!!!!!!!!UNCOMMENT ONCE LOG IN INFO IS APPLIED!!!!!!!!!!!!!!!

// Check if the user is logged in, if not then redirect him to login page
//if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//    header("location: login.php");
//    exit;
//}
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
		width:40%;
		color:white;
		background-color:#dd550c;
		padding:10px;
	}
	.userInfo {
		text-align:left;
		margin: 5px 0 0 5px;
	}
	button {
		float:right;
		background-color: #496e9c;
		color:white;
	}
</style>
</head>
<body> 
	<?php
	include "header.html";
	
//!!!!!!!!!!!!!!!!COMMENT IN PHP VARIABLE ONCE INFORMATION IS DB!!!!!!!!!!!!!!!!
//!!!!!!!!!!!!!!!!COMMENT IN PHP VARIABLE ONCE INFORMATION IS DB!!!!!!!!!!!!!!!!
//!!!!!!!!!!!!!!!!COMMENT IN PHP VARIABLE ONCE INFORMATION IS DB!!!!!!!!!!!!!!!!
	$query = "SELECT * FROM users WHERE id=0"; //username='$_SESSION["username"]'";

	$result = mysqli_query($link,$query) or die ('Error: Unable to pull data from profile'.mysqli_error($link));

	$currentuser = mysqli_fetch_array('query');

//!!!!!!!!!!!!!!!!COMMENT IN PHP VARIABLE ONCE INFORMATION IS DB!!!!!!!!!!!!!!!!
//!!!!!!!!!!!!!!!!COMMENT IN PHP VARIABLE ONCE INFORMATION IS DB!!!!!!!!!!!!!!!!
//!!!!!!!!!!!!!!!!COMMENT IN PHP VARIABLE ONCE INFORMATION IS DB!!!!!!!!!!!!!!!!

	$id = 0;//$currentuser['id'];
	$fname = "John";//$currentuser['fname'];
	$lname = "Doe";//$currentuser['lname'];
	$email = "jfd0000@auburn.edu";//$currentuser['email'];
	$username = "jfd0000";//$currentuser['username'];
	$password = "1234";//$currentuser['password'];
	$DOB = "0/0/0000";//$currentuser['DOB'];
	?>
	<form id="edit" method="POST">
		<div class="profileBox">
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
			<button type="button" onclick="editInfo()">Edit Info</button>
		</div>
	</form>

	<!-- Javascript function to update SQL entry infromation via user input through PHP -->
	<script type="text/javascript">
		function editInfo() {

			document.getElementById('edit').innerHTML=
			'<div class="profileBox"><b>First Name:</b> <input type="text" name="fname2"><br>'
			+ '<b>Last Name:</b> <input type="text" name="lname2"><br>'
			+ '<b>E-mail:</b> <input type="text" name="email2"><br>'
			+ '<b>Username:</b> <input type="text" name="username2"><br>'
			+ '<b>Birthday:</b> <input type="text" name="DOB2"><br>'
			+ '<b>Password:</b> <input type="password" name="password2" id="password2"><br>'
			+ '<b>Confirm Password:</b> <input type="password" name="password3" id="password3"><br>'
			+ '<button type="submit" onclick="confirmInformation()">UPDATE</button>'
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
			} else {
				window.location = 'profileUpdate.php';
			}
		}
	</script>
</body>
</html>