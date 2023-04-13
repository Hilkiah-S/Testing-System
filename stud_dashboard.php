<?php require="connect.php"?>

<?php include"connect.php";
if(!isset($_SESSION['id'])){
header("Location:unauthorizedentry.html");
}
?>
<?php 
if($POST['submit']){
  $mail=$POST['email'];
  $sql="SELECT * FROM users WHERE email='$mail'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
$pic=
}
else{
  header("Location:invalidentry.html");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS -->
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 	<!-- Font Awesome Icons -->
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
 	<!-- Google Fonts -->
  	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
	<link href="css/dashboard.css" rel="stylesheet" type="text/css" />
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
                <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" download>Download</a>
                </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
              <li class="nav-item">
              <form action="logout.php" method="post">
  <button type="submit"  class="nav-link" style="background-color: transparent;border:none">Logout</button>
</form>
              </li>
            </ul>
          </div>
	</nav>
	<!-- <img class = "mylogo" src="img/logo.jpg" alt=""> -->
  <?php echo"<img class='mylogo' src='uploads/clientimg/$pic'>" ?>
	<div class="container-fluid">

		<div class="row">
            <div class="card">
                <div class="card-header">
                  Courses
                </div>
                <div class="card-body">
                  <ul class="list-group">

                    <li class="list-group-item">
                      <div class="d-flex align-items-center">
                        <i class="fas fa-desktop  fa-2x mr-3"></i>
                        <div >
                          <p class="subject-label">Operating System</p> 
                          <p class="mb-0"> You can check your operating system result. </p>
                        </div>
                        <button class="btn btn-primary ml-auto"><i class="far fa-eye"></i></button>                      </div>
                    </li>

                    <li class="list-group-item">
                        <div class="d-flex align-items-center">
                          <i class="fas fa-desktop  fa-2x mr-3"></i>
                          <div >
                            <p class="subject-label">Operating System</p> 
                            <p class="mb-0"> You can check your operating system result. </p>
                          </div>
                          <button class="btn btn-primary ml-auto"><i class="far fa-eye"></i></button>                      </div>
                      </li>

                      <li class="list-group-item">
                        <div class="d-flex align-items-center">
                          <i class="fas fa-desktop  fa-2x mr-3"></i>
                          <div >
                            <p class="subject-label">Operating System</p> 
                            <p class="mb-0"> You can check your operating system result. </p>
                          </div>
                          <button class="btn btn-primary ml-auto"><i class="far fa-eye"></i></button>                      </div>
                      </li>

                      <li class="list-group-item">
                        <div class="d-flex align-items-center">
                          <i class="fas fa-desktop  fa-2x mr-3"></i>
                          <div >
                            <p class="subject-label">Operating System</p> 
                            <p class="mb-0"> You can check your operating system result. </p>
                          </div>
                          <button class="btn btn-primary ml-auto"><i class="far fa-eye"></i></button>                      </div>
                      </li>
                 </ul>
                </div>
              </div>
              
                                     
		</div>
	</div>
  <div class="footer">
	<p>Copyright &copy; Jimma University, 2023 All Rights reserved</p>
</div>

	<!-- Bootstrap core JavaScript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<!-- Font Awesome JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>




