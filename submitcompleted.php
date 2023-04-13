
<?php include"connect.php";
if(!isset($_SESSION['id'])){
header("Location:unauthorizedentry.html");
}
?>
<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS -->
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 	<!-- Font Awesome Icons -->
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
 	<!-- Google Fonts -->
  	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
	<link href="css/courses.css" rel="stylesheet" type="text/css" />
  <meta charset="UTF-8">


	<title>Success Page</title>
	
	<style>
		body {
			background-color: #222;
			color: #fff;
			font-family: Arial, sans-serif;
		}

		.container {
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}

		.icon {
			width: 200px;
			height: 200px;
			background-color: green;
			border-radius: 50%;
			display: flex;
			justify-content: center;
			align-items: center;
			font-size: 100px;
			animation: bounce 2s ease-in-out infinite;
		}

		@keyframes bounce {
			0%, 100% {
				transform: scale(1);
			}
			50% {
				transform: scale(1.2);
			}
		}

        .cta {
        height: 85px;
	display: inline-block;
	padding: 10px 30px;
	color: white;
	background-color: transparent;
	border: 2px solid rgb(232, 143, 8);
	font-size: 2rem;
	text-transform: uppercase;
	letter-spacing: 0.1rem;
	margin-top: 30px;
	transition: 0.3s ease;
	transition-property: background-color, color;
	margin-right: 40px;
	border-radius: 50px;
}

.cta:hover {
	color: black;
	background-color: rgb(232, 143, 8);
}
		.heading {
			font-size: 40px;
			font-family: Arial, sans-serif;
			text-align: center;
			background-color: #222;
			color: #fff;
			padding: 20px;
		}

		.buttons {
			position: absolute;
			top: 10px;
			right: 10px;
		}

		button {
			background-color: #fff;
			color: #222;
			border: none;
			border-radius: 5px;
			padding: 10px;
			margin-left: 10px;
			cursor: pointer;
			font-family: Arial, sans-serif;
			font-size: 16px;
		}

		button:hover {
			background-color: #eee;
		}
	</style>
</head>
<body>

	
	
	<div class="container">
		<div class="icon">✔</div>
	</div>

	<div class="heading">
		<p>You have successfully submitted your questions</p>
	</div>

</body>
</html>
