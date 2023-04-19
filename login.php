<?php  
session_start();
if(isset($_POST['submit'])){

$mail=$_POST['email'];
$userpassword=$_POST['password'];


include"connect.php";
$sql="SELECT * FROM users WHERE email='$mail'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
$sqlone="SELECT * FROM teachers WHERE email='$mail'";
$resone=mysqli_query($conn,$sqlone);
$rowone=mysqli_fetch_array($resone,MYSQLI_ASSOC);
$sqltwo="SELECT * FROM admins WHERE email='$mail'";
$restwo=mysqli_query($conn,$sqltwo);
$rowtwo=mysqli_fetch_array($restwo,MYSQLI_ASSOC);
if($mail==$row['email'] && $userpassword==$row['password']){
 
  $_SESSION['id']=$row['ID'];
  $_SESSION['email']=$row['email'];
  if($row['verify']=='true'){
  header("Location:stud_dashboard.php");}
  else{
    $_SESSION['phone']=$row['phone'];
    header("Location:_sms.php");
  }

}
else if ($mail==$rowone['email'] && $userpassword==$rowone['password']) {
  if($rowone['verify']=='true'){
  $email=$rowone['email'];
  $_SESSION['id']=$rowone['ID'];
  header("Location:add_courses.php");}
  else{
    echo("<script>alert('Not verified yet!')</script>");
    
    header("Location:unauthorizedentry.html");
    
  }

}
else if($mail==$rowtwo['email'] && $userpassword==$rowtwo['password']){
  $_SESSION['id']=$rowtwo['ID'];
header("Location:viewallteachers.php");
}
else{
  echo ("<script>
  alert('email or password is incorrect');
  </script>");
}
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="css/login.css" rel="stylesheet" type="text/css" />

</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="form-container">
              <div class="text-center">
                <i class="fas fa-user-circle fa-4x mb-3"></i>
                <h4 class="form-group-label">Login</h4>
              </div>
            <form method="POST" action="login.php">
                <div class="form-group">
                    <label class="form-group-label" for="useranme">Username</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                      </div>
                      <input type="username" name="email" class="form-control" id="username" placeholder="Enter username" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-group-label" for="password">Password</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                      </div>
                      <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" required>
                    </div>
                  </div>
                  <input type="submit" name ="submit" class="btn btn-primary btn-block" value="Sign in">
            </form>
            <div class="mt-3 text-center">
                <span>Don't have an account?</span>
                <a href="registerfirst.html">Sign up</a>
              </div>
            </div>
          </div>
        </div>
    </div>
      <div class="footer">
        
        <p class="ml-2">Copyright &copy; Jimma University, 2023 All Rights reserved</p>
    </div>
      <!-- Bootstrap JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <!-- Font Awesome JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js"></script>
  </body>
</html>
