<?php
$_SESSION['login']=false;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>

<body>
    
    <?php
    require('db.php');
    // session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        

        $query    = "SELECT 'username,password' FROM `login` WHERE username='$username'AND password='$password'";
        $result = mysqli_query($con, $query);
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['login']=true;
            $_SESSION['username']=$username;
            echo "<script type='text/javascript'>alert('valid Credentials ! Login successfully.');
            window.location.assign('dashboard.php')</script>";
        } else {
              echo "<script type='text/javascript'>alert('Invalid Credentials ! Please try again.');
              window.location.assign('index.php')</script>" ;
        }
        
        
    } else {
?>
<div class="container-fluid">
		
		<div class="row ">
			<!-- IMAGE CONTAINER BEGIN -->
			<div class="col-lg-6 col-md-6 d-none d-md-block infinity-image-container" >
                <!-- <img src="img/bg.webp" alt=""> -->
                <img src="img/bg.webp" alt="bg" width="600px" height="600px" style="padding-top: 150px;">
            </div>
			<!-- IMAGE CONTAINER END -->

			<!-- FORM CONTAINER BEGIN -->
			<div class="col-lg-6 col-md-6 infinity-form-container">				
				<div class="col-lg-9 col-md-12 col-sm-9 col-xs-12 infinity-form">
					<!-- Company Logo -->
					<div class="text-center mb-3 mt-5">
						<img src="{img/logo1.png" width="150px">
					</div>
					<div class="text-center mb-4">
			      <h4>Login into your account</h4>
			    </div>
			    <!-- Form -->
					<form  method="post" class="px-3"  >
						<!-- Input Box -->
						<div class="form-input">
							<span><i class="fa fa-envelope-o"></i></span>
							<input type="text" name="username" placeholder="Enter Username" tabindex="10"required>
						</div>
						<div class="form-input">
							<span><i class="fa fa-lock"></i></span>
							<input type="password" name="password" placeholder="Enter Password" required id="password">

						</div>
						<div class="row mb-3">
						<!-- Remember Checkbox -->
			        <div class="col-auto d-flex align-items-center">

			          <div class="custom-control custom-checkbox">
						<input type="checkbox" onclick="showpass()" class="custom-control-input" id="cb1">
			           	<label class="custom-control-label text-white" for="cb1">Show Password</label>
			          </div>
			        </div>
			 	    </div>
			 	    <!-- Login Button -->
			      <div class="mb-3"> 
                  <input type="submit" value="Login" name="submit" class="login-button" autofocus="true"/>
                <button type="reset" class="login-button">Reset</button>
						</div>
					</form>
				</div>					
			</div>
			<!-- FORM CONTAINER END -->
		</div>
	</div>	
    
    <?php
}
?>

<script>
	function showpass() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>

</html>