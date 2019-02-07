<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT UserID, Username, Password FROM Users WHERE Username = '$username' and Password = '". password_hash($password) ."'" ;
        $result = sqlsrv_query($link, $sql) or die( print_r( sqlsrv_errors(), true));
        
        $rows = 0;
        while($row = sqlsrv_fetch_array($result)){
          $rows++;
        }
        if($rows==1){
            
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["username"] = $username;  

          
          header("Location: index.php");
        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        } 
                        
                       
        
        



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <div >
    <?php
       include("header.php");
       ?>
   </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        
                        <h5 class="card-title text-center">Sign In</h5>
                                   
                        <form class="form-signin" action = "" method = "post">

                        <h2>Login</h2>
                        <p>Please fill in your credentials to login.</p>

                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <!-- COMMENTS  -->
                            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                                <label>Auburn User ID</label>
                                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                                <span class="help-block"><?php echo $username_err; ?></span>
                            </div>   

                            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control">
                                <span class="help-block"><?php echo $password_err; ?></span>
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Login">
                            </div>

                            <p>Don't have an account? <a style="color:orange;" href="register.php"> Create one here</a>!</p>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
</body>
</html>



