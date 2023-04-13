<?php 
include"connect.php";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(isset($_REQUEST['email'])&& isset($_REQUEST['password'])){

     $phoneemail=$_REQUEST['email'];
     $phonepass=$_REQUEST['password'];
     $sql="SELECT * FROM users WHERE email='$phoneemail'";
     $res=mysqli_query($conn,$sql);
     $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
      
     if($phoneemail==$row['email'] && $phonepass==$row['password']){
    $login_successful=true;



     }
     else{
        $login_successful=false;
     }
    header('Content-Type: application/json; charset=utf-8');

    
    if ($login_successful) {
        echo json_encode(["error" => false, "msg" => "Login successful"]);
    } else {
        echo json_encode(["error" => true, "msg" => "Invalid username or password"]);
    }
    
    exit();

}



 
?>