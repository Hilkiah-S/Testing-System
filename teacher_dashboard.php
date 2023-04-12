
<?php include"connect.php";
if(!isset($_SESSION['id'])){
header("Location:unauthorizedentry.html");
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
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
              <li class="nav-item">
                <form action="logout.php">
                <input type="submit" class="nav-link" value="Logout">
                 </form>
              </li>
            </ul>
          </div>
	</nav>
	
	<div class="container-fluid">
		<div class="row">
            <div class="card">
              
                <div class="card-header">
                  Courses for Examination
                  <!-- <button class="btn2 "><i class="fas fa-plus"></i>  Add Courses</button> -->
                </div>
                <?php 
                echo("<div class='card-body'>
                  
                  <ul class='list-group'>

                    <li class='list-group-item'>
                      <div class='d-flex align-items-center'>
                        <i class='fas fa-desktop  fa-2x mr-3'></i>
                        <div >
                          <p class='subject-label'>".$_POST['name']."</p> 
                          <p class='mb-0'> </p>
                        </div>
                        <form action='questions.php' method='POST'>
                       
                        <input type='submit' name='submit' class='btn btn-primary ml-auto' value='<i class='fas fa-plus'></i>'>
                        </form>                     </div>
                    </li>

                 </ul>
                </div>");
                ?>
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




