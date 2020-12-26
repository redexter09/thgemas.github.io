<!doctype html>
<html>
<head>
<title>Login | TH Gemas </title>
	<link rel="icon" type="image/png" href="img/logoth.png">
	<link rel="stylesheet" type="text/css" href="style.css">
<style> *

body {
	margin: 0;
	padding: 0;
	background: url(./img/gren.jpg);
	background-repeat: no-repeat;
    background-attachment: fixed;  
    background-size: cover;
}

 .loginbox{
	width: 320px;
	height: 420px;
	background: #000;
	color: #fff;
	top: 50%;
	left: 50%;
	position: absolute;
	transform: translate(-50%,-50%);
	box-sizing: border-box;
	padding: 70px 30px;
}
	
.logo{
	width: 160px;
	height: 100px;
	border-radius: 0%;
	position: absolute;
	top: -50px;
	left: calc(50% - 80px);
}

h1{
	margin: 0;
	padding: 0 0 20px;
	text-allign: center;
	font-size: 22px;
}

.loginbox p{
	margin: 0;
	padding: 0;
	font-weight: bold;
	
}

.loginbox input{
	width: 100%;
	margin-bottom: 20px;
	
}

.loginbox input[type="kt"], input[type="password"]
{
	border: none;
	border-bottom: 1px solid #fff;
	background: transparent;
	outline: none;
	height: 40px;
	color: #fff;
	font-size: 16px;
}

.loginbox input[type="submit"]
{
	border: none;
	outline: none;
	height: 40px;
	background: #fb2525;
	color: #fff;
	font-size: 18px;
	border-radius: 20px;
}

.loginbox input[type="submit"]:hover
{
	cursor: pointer;
	background: #ffc107;
	color: #000;
}

.loginbox a{
	text-decoration: none;
	font-size: 12px;
	line-height: 20px;
	color: darkgrey;
}

.loginbox a:hover
{
	color: #ffc107;
}

</style>
</head>
<body>
	<div class="loginbox">
	<img src="./img/logoth.png" class="logo">
		<h1>Login Here</h1> 
		<form action="menu.html" method="POST">
			<p>No.KT</p>
			<input type="kt" name="kt" placeholder="Enter No.KT" required>
			<p>Password</p>
			<input type="password" name="password" placeholder="Enter Password" required>
			<input type="submit" name="submit" value="Login">
			<a href="#">Forget Password?</a><br>
			<a href="#">Dont have account?</a>
		</form>	
	</div>

</body>
</html>
