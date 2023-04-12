
<?php include"connect.php";
if(!isset($_SESSION['id'])){
header("Location:unauthorizedentry.html");
}
?>
<?php
include"connect.php";



?>


<!DOCTYPE html>
<html lang="en">
<head>	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS -->
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 	<!-- Font Awesome Icons -->
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
 	<!-- Google Fonts -->
  	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
	<link href="css/courses.css" rel="stylesheet" type="text/css" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pending Page</title>
  <style>
    body {
      background-color: #222;
    }
    
    .loader {
      display: block;
      margin: 0 auto;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      border: 5px solid #fff;
      border-top-color: transparent;
      animation: spin 1s infinite;
    }
    
    @keyframes spin {
      to { transform: rotate(360deg); }
    }
    
    .message {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      color: #fff;
      font-size: 24px;
      font-family: sans-serif;
      text-align: center;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg">
		<div class="container">
			<a class="navbar-brand" href="#"><img class = "mylogo" src="img/logo.jpg" alt="">BERHAN</a>          
		</div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
                </li>
              
              <li class="nav-item">
                <a class="nav-link" href="#">Logout</a>
              </li>
            </ul>
          </div>
	</nav>
	
  <div class="message">
    <div>
      <div class="loader"></div>
      <p>Your request is Still pending Your credentials need to be verified , check again in a little while, please.</p>
    </div>
  </div>
</body>
</html>
