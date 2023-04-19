<?php 
include"connect.php";

if($_REQUEST['score']&&$_REQUEST['email']){
    $mail=$_REQUEST['email'];
    $score=$_REQUEST['score'];
    $courseid=$_REQUEST['courseid'];
    $userpassinternet=$_REQUEST['password'];
    // $mail='kelkias@gmail.com';
    // $score= 8;
    // $courseid=115;
    // $userpassinternet=123456789;

    $sql="SELECT * FROM users WHERE email='$mail'";
    
    $res=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
    if($row['firsttime']=='true'){
        $sqlone = "INSERT INTO results (courseid,result,email)
        VALUES ('$courseid', '$score','$mail')";
        if(mysqli_multi_query($conn, $sqlone)){
            $query_successful=true;
        
        }
        $sqltwo="UPDATE users SET firsttime='false' WHERE email='$mail'";
       if(mysqli_multi_query($conn,$sqltwo)){
        $secquery_successful=true;
     
       }
    }
    else{
        $query_successful=false;
     }
   
    header('Content-Type: application/json; charset=utf-8');

    
    if ($query_successful && $secquery_successful) {
        echo json_encode(["error" => false, "msg" => " Successfully Submitted"]);
    } else {
        echo json_encode(["error" => true, "msg" => "Error"]);
    }
   
    exit();

}
?>