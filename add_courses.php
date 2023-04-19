<?php 
session_start();
if(!(isset($_SESSION['id']))){
  header("Location:unauthorizedentry.html");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Course</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS -->
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 	<!-- Font Awesome Icons -->
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
 	<!-- Google Fonts -->
  	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
	<link href="css/courses.css" rel="stylesheet" type="text/css" />
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
                <a class="nav-link" href="index.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.html">Contact</a>
              </li>
              <li class="nav-item">
                 <form action="logout.php" method="post">
  <button type="submit"  class="nav-link" style="background-color: transparent;border:none">Logout</button>
</form>

              </li>
            </ul>
          </div>
	</nav>
	
	<div class="container-fluid">
		<div class="row">
            <div class="card">
                <div class="card-header">
                  Add Courses for Exam
                </div>
                <div class="card-body">
                    <div class="col-lg-10 col-md-9 col-sm-8 content">
				
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <form class="form-class" method="POST" action="teacher_dashboard.php">
                                    <div class="form-group-question">
                                        <br>
                                        <label class="form-group-label" for="course">Course Name:</label>
                                        <input type="text" class="form-control" id="question" name="name" placeholder="Please Insert the Course Name"required>
                                    </div>
                                    <div class="form-group">
                                        <br>
                                        <label class="form-group-label" for="course">Course Code:</label>
                                        <input type="text" class="form-control" id="question" name="courseid" placeholder="Please Insert the Course Code"required>
                                    </div>
                                    <div class="form-group">
                                        <br>
                                        <label class="form-group-label" for="course">Time Allowed(minutes):</label>
                                        <input type="text" class="form-control" id="question" name="timeall" placeholder="Please Enter the amount of Time allowed"required>
                                    </div>
									<div class="form-group">
										<label class="form-group-label" for="date">Select a date:</label>
										<input type="date" id="date" name="date" class="form-control">
									</div>
                                    <button type="submit" class="btn btn-primary">Submit</i></button>
                                </form>

                            </div>
                        </div>
                    </div>
                    
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




