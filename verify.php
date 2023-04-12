

<?php include"connect.php";
if(!isset($_SESSION['id'])){
header("Location:unauthorizedentry.html");
}
?>

<?php 

include"connect.php";

if(isset($_POST['submitone'])){
    $idd=$_POST['getid'];
   
$sql="UPDATE teachers SET verify='true' WHERE ID='$idd'";
$result = mysqli_query($conn,$sql);
if($result){
    echo"<script>alert('Succesfully Accepted')</script>";
    header("Location:viewallteachers.php");
}
}
if(isset($_POST['submittwo'])){
    $idd=$_POST['getid'];
  
    $sql="DELETE FROM teachers WHERE ID='$idd'";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo"<script>alert('Succesfully Accepted')</script>";
        header("Location:viewallteachers.php");
    }  
}

?>