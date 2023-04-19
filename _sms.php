<?php 
session_start();
// if(!isset($_SESSION['id'])){
// header("Location:unauthorizedentry.html");
// }
         
$phone=$_SESSION['phone'];
?>
<?php 
if(isset($_POST['submitone'])){

$mymessage=mt_rand(100000,999999);
$identifierId = 'e80ad9d8-adf3-463f-80f4-7c4b39f7f164';
// base url
$url = 'https://api.afromessage.com/api/send';
$token = 'eyJhbGciOiJIUzI1NiJ9.eyJpZGVudGlmaWVyIjoiRW1wY2xBNHh0bEYxV2JMenJnMEhRbDBLZlVKMjh1WnMiLCJleHAiOjE4Mzk1ODY4OTQsImlhdCI6MTY4MTczNDA5NCwianRpIjoiZjhlNzIwNTAtMjRkYS00NzQ3LWFlNjktMWRjZDk5YTc4MGVlIn0.-83k8qEV7hsqy7Jnj7DSPX2cXL1BzmfSE02-5wueUc4';
$from = 'e80ad9d8-adf3-463f-80f4-7c4b39f7f164';
$sender = '';
$to = '0900578275';
$message = '$message';
$callback = '';

// OTP API url
$otp_url = 'https://api.afromessage.com/api/challenge';

// request OTP body
$otp_body = array(
    "from" => $from,
    "sender" => $sender,
    "to" => $to,
    "pr" => "Your OTP for verification is: ",
    "ps" => ". Please do not share this with anyone.",
    "sb" => 0,
    "sa" => 0,
    "ttl" => 3600,
    "len" => 6,
    "t" => "NUMERIC",
    "callback" => $callback
);

// send OTP request
$otp_ch = curl_init();
curl_setopt($otp_ch, CURLOPT_URL, $otp_url.'?'.http_build_query($otp_body));
curl_setopt($otp_ch, CURLOPT_RETURNTRANSFER, true);
$otp_response = curl_exec($otp_ch);
echo($otp_response );
curl_close($otp_ch);
die();
// parse OTP response
$otp = json_decode($otp_response, true)['otp'];

// send main request
$body = array(
    "from" => $from,
    "sender" => $sender,
    "to" => $to,
    "message" => $message . ' ' . $otp, // add OTP to message
    "callback" => $callback
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body));
$headers = array();
$headers[] = 'Authorization: Bearer '.$token;
$headers[] = 'Content-Type: application/json';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

// handle main request response
if ($http_code == 200) {
    $data = json_decode($result, true);
    if ($data['acknowledge'] == 'success') {
        echo "API success";
    } else {
        echo "API failure";
    }
} else {
    echo "API failure";
}

// $mymessage=mt_rand(100000,999999);
// $identifierId = 'e80ad9d8-adf3-463f-80f4-7c4b39f7f164';
// $senderName = 'Berhan';
// $recipient = '$phone';
// $message = 'Your Code is'.$mymessage;
// $callback = '';

// $url = "https://api.messagemeeeop.com/api/send?from=$identifierId&sender=$senderName&to=$recipient&message=$message&callback=$callback";

// $response = file_get_contents($url);

// // Handle the response as needed
// if ($response === false) {
//   echo "Error sending SMS.";
// } else {
//   echo "SMS sent successfully.";
// }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS -->
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 	<!-- Font Awesome Icons -->
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
 	<!-- Google Fonts -->
  	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
	<link href="css/courses.css" rel="stylesheet" type="text/css" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Phone Verification Code</title>
	<style>
        .navbar {
    height: 70px;
    padding-top: 10px;
    padding-bottom: 10px;
}
		body {
			background-color: #f1f1f1;
			font-family: Arial, sans-serif;
			font-size: 24px;
			line-height: 1.5;
		}
		
		.container {
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}
		
		h1 {
			margin-top: 0;
			font-size: 48px;
		}
		
		.phone-icon {
			width: 150px;
			height: 150px;
			background-image: url('img/sms.png');
			background-size: contain;
			background-repeat: no-repeat;
			margin-bottom: 32px;
		}
		
		input[type=text] {
			padding: 16px;
			border-radius: 8px;
			border: none;
			margin-bottom: 32px;
			width: 100%;
			box-sizing: border-box;
			font-size: 32px;
			box-shadow: 0px 4px 8px rgba(0,0,0,0.3);
			text-align: center;
		}
		
		.submitcode {
            display: block;
  margin: 0 auto;
			background-color: green;
			color: white;
			padding: 16px 32px;
			border-radius: 8px;
			border: none;
			cursor: pointer;
			font-size: 32px;
			box-shadow: 0px 4px 8px rgba(0,0,0,0.3);
			text-transform: uppercase;
			letter-spacing: 1px;
		}

        .send-code-btn {
  display: block;
  margin: 0 auto;
  background-color: blue;
  color: white;
  padding: 16px 32px;
  border-radius: 8px;
  border: none;
  cursor: pointer;
  font-size: 30px;
margin-left:10px;
  box-shadow: 0px 4px 8px rgba(0,0,0,0.3);
  text-transform: uppercase;
  letter-spacing: 1px;
        }
  .input-container {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.phone-icon {
  width: 150px;
  height: 150px;
  background-image: url('img/sms.png');
  background-size: contain;
  background-repeat: no-repeat;
  margin-bottom: 32px;
}

input[type=text] {
  padding: 16px;
  border-radius: 8px;
  border: none;
  margin-bottom: 16px;
  width: 100%;
  box-sizing: border-box;
  font-size: 32px;
  box-shadow: 0px 4px 8px rgba(0,0,0,0.3);
  text-align: center;
}

.button-container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%;
}

/* input[type=submit], input[type=button] {
  background-color: green;
  color: white;
  padding: 16px 32px;
  border-radius: 8px;
  border: none;
  cursor: pointer;
  font-size: 32px;
  box-shadow: 0px 4px 8px rgba(0,0,0,0.3);
  text-transform: uppercase;
  letter-spacing: 1px;
  width: 48%;
} */

/* .send-code-btn {
    width:80px;
    font-size: 32px;
  background-color: blue;
} */



	</style>
</head>
<body>
<nav class="navbar navbar-expand-lg">
		
			<a class="navbar-brand" href="#"><img class = "mylogo" src="img/logo.jpg" alt="">BERHAN</a>          
		
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
                </li>
              
              <li class="nav-item">
              <form action="logout.php" method="post">
  <button type="submit"  class="nav-link" style="background-color: transparent;border:none">Logout</button>
</form>
              </li>
            </ul>
          </div>
	</nav>
  <a href="seeresults.php"><input type="submit" name="seeresults" value="VIEW RESULT" class="send-code-btn"></a>
	<div class="container">
	<h1>Phone Verification Code</h1>
	<div class="phone-icon"></div>
	<form>
		<input type="text" placeholder="Enter verification code" >
		<div class="button-container">
			<input type="submit" name="submittwo" class="submitcode" value="Submit">
			<input type="submit" name="submitone" value="Send Code" class="send-code-btn">
		</div>
	</form>
</div>

</body>
</html>
