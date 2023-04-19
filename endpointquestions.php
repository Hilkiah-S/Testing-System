<?php
include"connect.php";
ob_start();
class teyaki{
    public $question;
    public $choicea;
    public $choiceb;
    public $choicec;
    public $choiced;
    public $answers;
    public $timeall;
}

$combined=array();
 if(isset($_REQUEST['courseid'])){
  
    $courseid=$_REQUEST['courseid'];
    
    $sql="SELECT * FROM questions WHERE courseId='$courseid'";
    $result = mysqli_query($conn,$sql);

    if(!$result){
        die("Invalid query: ".$conn->error);
    }
    while($row=mysqli_fetch_assoc($result)){
    $anotherinstance = new teyaki();
     $anotherinstance->question= $row['questions'];
     $anotherinstance->choicea= $row['ChoiceA'];
     $anotherinstance->choiceb= $row['ChoiceB'];
     $anotherinstance->choicec= $row['ChoiceC'];
     $anotherinstance->choiced= $row['ChoiceD'];
     $anotherinstance->answers= $row['answers'];
     $anotherinstance->timeall=$row['timeall'];
    array_push($combined,$anotherinstance);

 }
 $sqlone="SELECT * FROM questions WHERE courseId='$courseid'";
 $resultone = mysqli_query($conn,$sqlone);
 $rowone=mysqli_fetch_assoc($resultone);
   
   $timeall=$rowone['timeall'];
  ob_clean();

   header('Content-Type: application/json; charset=utf-8');
     echo json_encode($combined);
        //  echo json_encode(["data" => $combined, "timeall" => $timeall]);
 ob_end_flush();
        // echo json_encode([value:$combined],timeall:$timeall);
    
    
}
?>