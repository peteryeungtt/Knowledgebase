<?php session_start(); /* Starts the session */

	/* Check Login form submitted */
	if(isset($_POST['Submit'])){
		/* Define username and associated password array */
		$logins = array('Support' => 'MTPO2021!');

		/* Check and assign submitted Username and Password to new variable */
		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';

		/* Check Username and Password existence in defined array */
		if (isset($logins[$Username]) && $logins[$Username] == $Password){
			/* Success: Set session variables and redirect to Protected page  */
			$_SESSION['UserData']['Username']=$logins[$Username];
			header("location:index.php");
			exit;
		} else {
			/*Unsuccessful attempt: Set error message */
			$msg="<span style='color:red'>Invalid Login Details</span>";
		}
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="icon" href="img/search-icon.png" type="image/icon type">
<script type="text/javascript" src="jquery.min.js"></script>
<script src="bootstrap.min.js"></script>
<script src="accordion.js" type="text/javascript"></script>
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

</head>
<body class="text-center">
<div class="logindiv">
<form class="form-signin" action="" method="post" name="Login_Form">
<div class="loginimage">
	<img src="img/support.png" alt="PTIN System Renew or Register" width="100" height="110" />

</div>

	<label class="username" for="inputEmail" class="sr-only"></label>
	<input type="text" input name="Username" class="form-control" placeholder="Username" required autofocus>
	<label for="inputPassword" class="sr-only"></label>
	<input input name="Password" type="password" class="form-control" placeholder="Password" required>
	<div class="checkbox mb-3">
	</div>
	<button class="btn btn-lg btn-primary btn-block" input name="Submit" type="submit" value="Login">Sign in</button>
	</form>
</div>

</body>
</html>
