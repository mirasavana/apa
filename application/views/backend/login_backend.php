<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Lelang</title>
	<link rel="stylesheet" href="slide navbar style.css">
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
  <style type="text/css">
    body{
	margin: 0;
	padding: 0;
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	font-family: 'times', sans-serif;
	background: #adc178;
}
.main{
	width: 350px;
	height: 500px;
	background: #adc178;
	overflow: hidden;
	border-radius: 10px;
	box-shadow: 5px 20px 50px #000;
}
#chk{
	display: none;
}
.signup{
	position: relative;
	width:100%;
	height: 100%;
}
label{
	color: #fff;
	font-size: 2.3em;
	justify-content: center;
	display: flex;
	margin: 60px;
	font-weight: bold;
	cursor: pointer;
	transition: .5s ease-in-out;
}

input{
	width: 60%;
	height: 40px;
	margin: 10px auto;
	justify-content: center;
	display: block;
	color: 	#808080;
	background: #fff;
	font-size: 1em;
	font-weight: bold;
	margin-top: 20px;
	outline: none;
	border: none;
	border-radius: 5px;
	transition: .2s ease-in;
	cursor: pointer;
}
button:hover{
	background: #6d44b8;
}
.login{
	height: 460px;
	background: #eee;
	border-radius: 60% / 10%;
	transform: translateY(-180px);
	transition: .8s ease-in-out;
}
.login label{
	color: #eee;
	transform: scale(.6);
}

#chk:checked ~ .login{
	transform: translateY(-500px);
}
#chk:checked ~ .login label{
	transform: scale(1);	
}
#chk:checked ~ .signup label{
	transform: scale(.6);
}
  </style>
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
      <?php
	  
		if (isset($_SESSION['message_login_error'])) {
			echo "<script>alert('Password Failed')</script>";
		}
		 ?>
				<form method="post" class="form">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="text" name="username" class="form_login" placeholder="Username" required="">
					<input type="password" name="password" class="form_login" placeholder="Password" required="">
					<input type="submit" name="login" value="login">
				</form>
			</div>

			
	</div>
</body>
</html>