<?php
ob_start();

require_once "database.php";//one file nae one file connect
if(isset($_POST['register'])){
    echo $username=$_POST['username'];
    echo $useremail=$_POST['useremail'];
    echo $userpassword=$_POST['userpassword'];
    $query="INSERT INTO `register`(`username`, `useremail`, `userpassword`) VALUES ('$username','$useremail','$userpassword')";

    mysqli_query($connect,$query);//database ka hr ko chate  
    header('location:select.php');   

    
}










?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>Document</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">

    
</head>
<h3>Insert form</h3>
<body>
<form action="" method="post">

<input type="text" name="username" required=" " placeholder="User name" class="form-control" style="width:200px;"><br>
<input type="email" name="useremail" required=" " placeholder="User email" class="form-control" style="width:200px;"><br>
<input type="password" name="userpassword" required=" " placeholder="User password" class="form-control" style="width:200px;"><br> 
<input type="submit" name="register" class="btn btn-primary">


</form>
<!-- link 3 khu chate-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
    
</body>
</html>