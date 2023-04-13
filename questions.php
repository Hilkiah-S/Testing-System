
<?php session_start();

if(!isset($_SESSION['id'])){
header("Location:unauthorizedentry.html");
}
?>
<?php 

include"connect.php";
// echo($_SESSION['id']);
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
	<link href="css/questions.css" rel="stylesheet" type="text/css" />
<style>
  input[type="radio"] {
    display: none;
}

.answer-label {
    display: inline-block;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    cursor: pointer;
}

input[type="radio"]:checked + .answer-label {
    background-color: #ccc;
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
                <a class="nav-link" href="#">Home</a>
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
	
	<div class="container-fluid">
		<div class="row">
			<div class="card">
                <div class="card-header">
                  Add Questions for Exam
                </div>
                <div class="card-body">
                    <div class="col-lg-10 col-md-9 col-sm-8 content">
				
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <form class="form-class" method="POST" action="questionssubmit.php">
                                    <div class="form-group">
                                        <br>
                                        <label class="form-group-label" for="course">Questions : </label>
                                        <input type="text" class="form-control" id="question" name="question" placeholder="Please Insert the Question"required>
                                    </div>
                                    <div class="form-group">
                                        <br>
                                        <label class="form-group-label" for="course">Choice A :</label>
                                        <input type="text" class="form-control" id="Choice1" name="Choice1" placeholder="Please Insert Choice A"required>
                                    </div>
									<div class="form-group">
                                        <br>
                                        <label class="form-group-label" for="course">Choice B :</label>
                                        <input type="text" class="form-control" id="Choice2" name="Choice2" placeholder="Please Insert Choice B"required>
                                    </div>
									<div class="form-group">
                                        <br>
                                        <label class="form-group-label" for="course">Choice C :</label>
                                        <input type="text" class="form-control" id="Choice3" name="Choice3" placeholder="Please Insert Choice C"required>
                                    </div>
									<div class="form-group">
                                        <br>
                                        <label class="form-group-label" for="course">Choice D :</label>
                                        <input type="text" class="form-control" id="Choice4" name="Choice4" placeholder="Please Insert Choice D"required>
                                    </div>
									<div class="form-group">
                                        <br>
                                        <label class="form-group-label" for="course">Answer :</label>                                       
                                        <div>
    <input type="radio" id="choiceA" name="answera">
    <label for="choiceA" class="answer-label">Choice A</label>
</div>
<div>
    <input type="radio" id="choiceB" name="answerb">
    <label for="choiceB" class="answer-label">Choice B</label>
</div>
<div>
    <input type="radio" id="choiceC" name="answerc">
    <label for="choiceC" class="answer-label">Choice C</label>
</div>
<div>
    <input type="radio" id="choiceD" name="answerd">
    <label for="choiceD" class="answer-label">Choice D</label>
</div>
                                    </div>
                                    <input type="submit" name="lastsubmit" class="btn btn-primary" value="Submit"/>
                                    <input type="submit" name="firstsubmit" class="btn btn-primary" value="Submit & Add another"/>
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
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>




