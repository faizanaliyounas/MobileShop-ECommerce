		<?php
			include('connection.php');
			if(isset($_POST['submit']))
			{
				$uname=$_POST['user'];
				$passwrd=$_POST['pass'];
				if($uname!='' && $passwrd!='')
				{
					$query="select * from login where username= '".$uname."'  and password= '".$passwrd."'  ";
					$result=mysqli_query($con,$query);
					$row=mysqli_num_rows($result);
					if($row>'0')
					{
						// echo "Login Successfully";
						session_start();
						$_SESSION['username']=$uname;
						$_SESSION['password']=$passwrd;
						header('Location:adminmain.php');
					} 
					else
					{
						
						
						
						echo '<script>alert("username password is Inavlid")</script>';
					}

				}
				else
				{
					echo '<script>alert("PLEASE FILL OUT ALL FIELDS")</script>';
				}
			}
		?>


		<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/logincss.css">
			<title>ADMIN PAGE</title>
		</head>
		<body>
		<div class="container-fluid">
		<form method="post" >
		<div class="login-wrap child">
			<div class="login-html">
				<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
				<div class="login-form">
					<div>
						<div class="group">
							<label for="user" class="label">Username</label>
							<input type="text" name="user" class="input">
						</div>
						<div class="group">
							<label for="pass" class="label">Password</label>
							<input type="password" name="pass" class="input" >
						</div>
						
						<div class="group">
							<input type="submit" name="submit" value="login" class="button" >
						</div>
						<div class="hr"></div>
						
					</div>
					
				</div>
			</div>
		</div>
		</div>

		</form>


		</body>
		</html>


