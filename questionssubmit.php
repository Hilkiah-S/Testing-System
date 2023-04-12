
<?php 
session_start();
include"connect.php"?>
<?php 
if(isset($_POST['firstsubmit'])){
if(isset($_POST['answera'])){
    $answer=1;
}
if(isset($_POST['answerb'])){
    $answer=2;
}
if(isset($_POST['answerc'])){
    $answer=3;
}
if(isset($_POST['answerd'])){
    $answer=4;
}
$question=$_POST['question'];
$ChoiceA=$_POST['Choice1'];
$ChoiceB=$_POST['Choice2'];
$ChoiceC=$_POST['Choice3'];
$ChoiceD=$_POST['Choice4'];
$id=$_SESSION['id'];

    $sql = "INSERT INTO questions (questions,answers,ChoiceA,ChoiceB,ChoiceC,ChoiceD,teacherId)
    VALUES ('$question', '$answer','$ChoiceA','$ChoiceB','$ChoiceC','$ChoiceD','$id')";
   if (mysqli_multi_query($conn, $sql)) {
    echo"<script>alert('Succefully Submitted')</script>";
   header("Location:questions.php");
   }


}

if(isset($_POST['lastsubmit'])){
    if(isset($_POST['answera'])){
        $answer=1;
    }
    if(isset($_POST['answerb'])){
        $answer=2;
    }
    if(isset($_POST['answerc'])){
        $answer=3;
    }
    if(isset($_POST['answerd'])){
        $answer=4;
    }
    $question=$_POST['question'];
    $ChoiceA=$_POST['Choice1'];
    $ChoiceB=$_POST['Choice2'];
    $ChoiceC=$_POST['Choice3'];
    $ChoiceD=$_POST['Choice4'];
    $id=$_SESSION['id'];
    
        $sql = "INSERT INTO questions (questions,answers,ChoiceA,ChoiceB,ChoiceC,ChoiceD,teacherId)
        VALUES ('$question', '$answer','$ChoiceA','$ChoiceB','$ChoiceC','$ChoiceD','$id')";
       if (mysqli_multi_query($conn, $sql)) {
        echo"<script>alert('Succefully Submitted')</script>";
       header("Location:submitcompleted.php");
       }
    
    
    }
    
?> 