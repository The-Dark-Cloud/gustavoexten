<?php
session_start(); 
include ('config.php');

$errorMessage = '';

if (isset($_SESSION['logged_in'])) {
   unset($_SESSION['logged_in']);
}


if (isset($_POST['username']) && isset($_POST['password'])) {
if ($_POST['username'] ===  $panelusername && $_POST['password'] === $panelpassword) {
$_SESSION['logged_in'] = true;
header('Location: dashboard.php');
exit;
} else {
$errorMessage = 'Wrong username/password combination';
}
}
?>
<html>
<head>
    <title>Login to Continue</title>
<link rel="icon" type="image/x-icon" href="/assets/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-grid.min.css">
	<script src="home/js/uikit.js"></script>
	<script src="home/js/uikit-icons.js"></script>
	<link rel="stylesheet" href="home/css/uikit.css">
	
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	      <link rel="stylesheet" href="home/css/styles.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main2.css">
</head>


	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">

           <h5>  <center>Login to Access Error Logs:</center> </h5>
               <br>                  
               <form method ="POST"class="signin-form" id="frmLogin" action="login.php">
                            <div class="form-group">
                                <input name="username" type="text" id="username" class="form-control" placeholder="Username" >
                            </div>
                            <div class="form-group">
                                <input name="password" type="password" id="password" class="form-control" placeholder="Password">
                            </div>

                            <button type="submit" name="btnLogin" class="btn signin-button btn-lg">Enter</button>
                          


                            
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                
            </div>
        </div>
    </div>
</body>

</html>
