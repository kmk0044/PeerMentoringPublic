<?php 
	require_once("config.php");







/*'<div class="profileBox"><b>First Name:</b> <input type="text" name="fname2"><br>'
			+ '<b>Last Name:</b> <input type="text" name="lname2"><br>'
			+ '<b>E-mail:</b> <input type="text" name="email2"><br>'
			+ '<b>Username:</b> <input type="text" name="username2"><br>'
			+ '<b>Birthday:</b> <input type="text" name="DOB2"><br>'
			+ '<b>Password:</b> <input type="password" name="password2" id="password2"><br>'
			+ '<b>Confirm Password:</b> <input type="password" name="password3" id="password3"><br>'
			+ '<button type="submit" onclick="confirmInformation()">UPDATE</button>'
			+ '<button type="button" onclick="window.location.reload()">CANCEL</button>'
			+ '</div>';
*/
	


    $fname = $_POST['fname2']
   // $lname = filter($_POST['lname2'])
   // $dob = filter($_POST['DOB2'])
    ///$password2 = filter($_POST['gender'])
    //$password3 = filter($_POST['motto'])
   
   if($fname != NULL) {
		$newEntry = "UPDATE users SET fname='".$fname."' WHERE username ='".$_SESSION["username"]."'";

	}
	$tryEntry = mysqli_query($link,$newEntry) or die ('New Entry Failed. '.mysqli_error($link));
	
?>
<div class="profileBox">
	<form action="" method="">
	<p>Enter information below that you would like to change.</p>
	<br>
	<b>First Name:</b>
	 <input type="text" name="fname2"><br><br> 
	 <b>Last Name:</b> 
	 <input type="text" name="lname2"><br><br>
	<b>Birthday:</b>
	 <input type="text" name="DOB2"><br><br>'
		
	<b>Password:</b> <input type="password" name="password2" id="password2"><br><br>'
	<b>Confirm Password:</b>
	 <input type="password" name="password3" id="password3"><br><br>'
			+ '<button type="submit">UPDATE</button>'
			+ '<button type="button" onclick="window.location.reload()">CANCEL</button>'
			+ '</div>'