<!-- php method=get,post,put,delete -->
<?php 
 print_r($_POST);//post metthod ko hlen phan ta variable
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h2>Register Form</h2>
	<form action="" method="post"><!-- post so url bar mr ma por bu get ka po myn tl
		data myr yin post--> 
		<input type="text" name="username" required="" placeholder="Username"><br>
		<input type="email" name="useremail" required="" placeholder="Useremail"><br>
		<input type="password" name="userpassword" required="" placeholder="Userpassword"><br>
		<input type="submit" name="register">
	</form>
</body>
</html>