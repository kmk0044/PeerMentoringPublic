<!--login.html-->
<!doctype html>
<!DOCTYPE html>
<html>
<head>
	<title>Auburn Peer Mentoring</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
</head>
<body>
    <header>
        <?php
        include "header.html";
    ?>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">SIGN IN</h5>
                        <form class="form-signin">
                            <div class="form-label-group">
                                <label style="font-size: 12px;" for="inputEmail">EMAIL ADDRESS</label>
                                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                                    
                                    </div>
                         
                            <div class="form-label-group">
                                    <label style="font-size: 12px;" for="inputPassword">PASSWORD</label>
                                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                                    </div>
                          
                            <div class="custom-control">
                                <input type="checkbox" class="form-check-input" id="rememberPassCheck">
                                    <label style="font-size: 12px;" for="rememberPassCheck">Remember password</label>
                                    </div>
                                    <br>
                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
                           <hr class="my-4">
                           <p style="font-size: 15px; text-align: center;">
                               Don't have an account?  <a href="...">Create one Here!</a>
                           </p>

                          
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
