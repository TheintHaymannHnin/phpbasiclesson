<!-- php method=get,post,put,delete -->
<?php 
 print_r($_GET);//get metthod ko hlen phan ta variable
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h2>Register Form</h2>
	<form action="" method="get"><!-- get so url bar mr output pya tl -->
		<input type="text" name="username" required="" placeholder="Username"><br>
		<input type="email" name="useremail" required="" placeholder="Useremail"><br>
		<input type="password" name="userpassword" required="" placeholder="Userpassword"><br>
		<input type="submit" name="register">
	</form>
</body>
</html>