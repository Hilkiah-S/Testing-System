<?php
session_start();
$fullname=$_POST['fullname'];
$userpassword=$_POST['password'];
$email=$_POST['email'];
// $phone=$_POST['phone'];




include"connect.php";

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "testdb";

// // Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


if(isset($_POST['submit']) && isset($_FILES['file'])){
    
  $file=$_FILES['file'];
  print_r($file);
     $fileName=$_FILES['file']['name'];
     $fileTmpName=$_FILES['file']['tmp_name'];
     $fileSize=$_FILES['file']['size'];
     $fileError=$_FILES['file']['error'];
     $fileType=$_FILES['file']['type'];
 
     $fileextend=explode('.',$fileName);
     $fileActualExtension = strtolower(end($fileextend));
     $allowed = ['jpg','jpeg','png'];
     
     if(in_array($fileActualExtension,$allowed)){
 if($fileError===0){
     if($fileSize<5000000){
         
         $fileNewName=$fullname.date("d-m-y-h-i-s").".".$fileActualExtension;
         $fileNewDistination='uploads/clientimg/'.$fileNewName;
         move_uploaded_file($fileTmpName,$fileNewDistination);
     
       
         // Create connection
//  $conn = mysqli_connect($servername, $username, $password, $dbname);
//  // Check connection
//  if (!$conn) {
//    die("Connection failed: " . mysqli_connect_error());
//  }

//  $_SESSION['email']=$email;
 
 $sql = "INSERT INTO users (fullname,email,password,picture,verify)
 VALUES ('$fullname', '$email','$userpassword','$fileNewName','false')";
if (mysqli_multi_query($conn, $sql)) {
    echo("<script>Account succefully </script>");
header("Location:login.php");
}
//  if (mysqli_multi_query($conn, $sql)) {
//   $anothersql ="SELECT*FROM clients";
// $results=$conn->query($anothersql);
// while($product = $results->fetch_assoc()){
//   $products[] = $product;
// }
// $encoded_data=json_encode($products,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
// file_put_contents('json/clients.json',$encoded_data);
    
//    header("Location:displayclient.php");
//  } else {
//    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//  }
 
 mysqli_close($conn);
 
 
     }else{
  echo "File size not allowed";
     }}
 else{
     echo "Some thing went wrong";
 }
 
 }}
 else{
     echo"Not set";
 }
 
 




