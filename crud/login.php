<?php
session_start();

require_once "database.php";
if(isset($_POST['login'])){

    $username=$_POST['username'];
    $useremail=$_POST['useremail'];
    $userpassword=$_POST['userpassword'];

    $username=mysqli_real_escape_string($connect,$username);
    $useremail=mysqli_real_escape_string($connect,$useremail);
    $userpassword=mysqli_real_escape_string($connect,$userpassword);

    $query="SELECT * FROM `register` WHERE useremail='$useremail'";
    $result=mysqli_query($connect,$query);


    if(mysqli_num_rows($result) == 0){
        echo "<h3 class='text_warning'>Please Register !</h3>";
    }else{
        while($row=mysqli_fetch_assoc($result)==0){

            $db_id=$row['id'];
            $db_username=$row['username'];
            $db_useremail=$row['useremail'];
            $db_userpassword=$row['userpassword'];
    
        }
    
        if($useremail==$db_useremail){
            if($userpassword==$db_userpassword){
                if($username==$db_username){
                    $_SESSION['username']=$db_username;
                    $_SESSION['useremail']=$db_useremail;
                    $_SESSION['userpassword']=$db_userpassword;
                    header('location:select.php');
    
                }else{
                    echo "Incorrect your name";
                }
              
            }else{
                echo "Incorrect Password";
            }
        }else{
            echo "Incorrect Email"; 
        }


    }
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>Document</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">

    
</head>
<h3 class="text-center">Login Form</h3>
<body>
<div class="container">
<form action="" method="post">

<input type="text" name="username" required=" " placeholder="User name" class="form-control" style="width:200px;"><br>
<input type="email" name="useremail" required=" " placeholder="User email" class="form-control" style="width:200px;"><br>
<input type="password" name="userpassword" required=" " placeholder="User password" class="form-control" style="width:200px;"><br> 
<input type="submit" name="login" value="Login" class="btn btn-primary">


</form>
</div>
<!-- link 3 khu chate-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
    
</body>
</html>