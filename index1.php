<!DOCTYPE html>
<html>
<head>
	<style>
		body{
margin: 0;
padding: 0;
font-family: sans-serif;
background-image:url(d.jpg);
background-size:cover;

		}
		.box{

			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			width: 400px;
			padding: 40px;
			background: rgba(0, 0, 0, 0, 0.6);
			box-sizing: border-box;
			box-shadow: 0 15px 25px rgba(0, 0, 0, 0.5);
			border-radius: 10px;
		}
		.box h2{

			margin: 0 0 30px;
			padding: 0px;
			color: #fff;
			text-align: center;
		}
		.box .input-box{
			position: relative;
		}
		.box .input-box input{

			width: 100%;
			padding: 10px 0px;
			font-size: 16px;
			color: #fff;
			letter-spacing: 1px;
			margin-bottom: 30px;
			border: none;
			background: transparent;
			border-bottom: 1px solid #fff;
		}
		.box .input-box label{

			position: absolute;
			top: 0px;
			left: 0px;
			letter-spacing: 1px;
			padding: 10px 0px;
			font-size: 10px;
			color: #fff;
			transition: .5s;
		}
		.box .input-box input:focus ~ label,
		.box .input-box input:valid ~ label{
			top:-18px;
			left: 0px;
			color: #03a9f4;
			font-size: 12px;
		}
		.box input[type='submit']{

			background: transparent;
			border: none;
			outline: none;
			color: #fff;
			background: #227be3;
			padding: 10px 20px;
			border-radius: 5px;
			cursor: pointer;

		}
		.box input[type='submit']:hover{
			background-color: #3067b9;
		}



		
	</style>
  <title>Store form data in .txt file</title>
</head>
<body>
  <div class="box">

  	<h2>Login</h2>
  	<form action="">
  		<div class="input-box">
  			<input type="text" name="username" autocomplete="off" required>
  			<label for="">Username</label>
  		</div>
  		<div class="input-box">
  			<input type="email" name="email" autocomplete="off" required>
  			<label for="">Email</label>
  		</div>
  		<div class="input-box">
  			<input type="password" name="password" autocomplete="off" required>
  			<label for="">Password</label>
  		</div>
  		<input type="submit" value="save">
  	</form>
  	
  </div>

</body>
</html>
<<?php 
	
 extract($_REQUEST);
 $file=fopen('data.txt', 'a');

 fwrite($file, 'name :');
 fwrite($file, $username .', ');
 fwrite($file, 'Email :');
  fwrite($file, $email .', ');
   fwrite($file, 'password :');
    fwrite($file, $password .', ');


 ?>

