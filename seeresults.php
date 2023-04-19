
<?php 
session_start();



?>

<?php include"connect.php";
if(!isset($_SESSION['id'])){
header("Location:unauthorizedentry.html");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>See all the data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            background-color: #222222;
            color: #FFFFFF;
        }
        h1 {
            font-size: 2.5rem;
            font-weight: bold;
        }
        th, td {
            font-size: 1.5rem;
            padding: 10px;
        }
        input[type='button'] {
            background-color: #00FFFF;
            border-radius: 4px;
            color: #FFFFFF;
            float: right;
            font-size: 1.5rem;
            padding: 10px;
        }
        input[type='submit'] {
            background-color: #1E90FF;
            border: 1px solid #1E90FF;
            border-radius: 4px;
            color: #FFFFFF;
            font-size: 1.5rem;
            padding: 10px;
        }
    </style>
</head>
<body>                                              
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="my-5">ALL RESULTS</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>COURSE CODE</th>
                            <th>RESULT</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                           include"connect.php";
                           $mail=$_SESSION['email'];
                            $sql="SELECT * FROM results WHERE email='$mail'";
                            $result = mysqli_query($conn,$sql);

                            if(!$result){
                                die("Invalid query: ".$conn->error);
                            }
                            while($row=mysqli_fetch_assoc($result)){
                                $id=$row['ID'];
                                echo "<tr>
                                        <td>".$row['courseid']."</td>
                                        <td>".$row['result']."</td>
                                       
                                    </tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
