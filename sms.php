<!DOCTYPE html>
<html>
<head>
	<title>Phone Verification Code</title>
	<style>
		body {
			background-color: #f1f1f1;
			font-family: Arial, sans-serif;
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
		}
		
		.phone-icon {
			font-size: 64px;
			color: green;
			margin-bottom: 16px;
			animation: phone-icon-rotate 2s linear infinite;
		}
		
		@keyframes phone-icon-rotate {
			from {
				transform: rotate(0deg);
			}
			to {
				transform: rotate(360deg);
			}
		}
		
		input[type=text] {
			padding: 8px 16px;
			border-radius: 4px;
			border: none;
			margin-bottom: 16px;
			width: 100%;
			box-sizing: border-box;
			font-size: 16px;
			box-shadow: 0px 2px 4px rgba(0,0,0,0.3);
		}
		
		input[type=submit] {
			background-color: green;
			color: white;
			padding: 8px 16px;
			border-radius: 4px;
			border: none;
			cursor: pointer;
			font-size: 16px;
			box-shadow: 0px 2px 4px rgba(0,0,0,0.3);
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Phone Verification Code</h1>
		<div class="phone-icon">&#128241;</div>
		<form>
			<input type="text" placeholder="Enter verification code" required>
			<input type="submit" value="Submit">
		</form>
	</div>
</body>
</html>
