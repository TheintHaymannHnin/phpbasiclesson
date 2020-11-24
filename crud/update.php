<?php
ob_start();


require_once "database.php";//one file nae one file connect

if(isset($_GET['edit'])){
    echo $edit=$_GET['edit'];
    $query="SELECT * FROM `register` WHERE id=$edit";
    $result=mysqli_query($connect,$query);
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $username=$row['username'];
        $useremail=$row['useremail'];
        $userpassword=$row['userpassword'];

    }



}
if(isset($_POST['register'])){
    echo $username=$_POST['username'];
    echo $useremail=$_POST['useremail'];
    echo $userpassword=$_POST['userpassword'];
    $query="UPDATE `register` SET `username`='$username',`useremail`='$useremail', `userpassword`='$userpassword' WHERE id=$edit";
    mysqli_query($connect,$query);
    header('location:select.php');

    mysqli_query($connect,$query);//database ka hr ko chate     

    
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

<input type="text" name="username" required=" " value="<?php echo $username; ?>" placeholder="User name" class="form-control" style="width:200px;"><br>
<input type="email" name="useremail" required=" " value="<?php echo $useremail; ?>" placeholder="User email" class="form-control" style="width:200px;"><br>
<input type="password" name="userpassword" required=" " value="<?php echo $userpassword; ?>" placeholder="User password" class="form-control" style="width:200px;"><br> 
<input type="submit" name="register" class="btn btn-primary">


</form>
<!-- link 3 khu chate-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
    
</body>
</html>