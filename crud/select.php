
<?php
session_start();

ob_start();
?>
<?php
if(!$_SESSION['useremail']){
    header('location:login.php');

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>


<p class="navbar-text navbar-right float-right"><a href="logout.php" class="navbar-link btn btn-success">Logout</a></p>
<h3>Select Table</h3>
<a href="insert.php" class="btn btn-primary">Insert form</a>

<table class="table table-bordered table-hover ">

    <tr>
        <th>No:</th>
        <th>UserName</th>
        <th>userEmail</th>
        <th>UserPassword</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>

    <?php
    require_once "database.php";
    $query="SELECT * FROM `register`";
    $result=mysqli_query($connect,$query);
    while($row=mysqli_fetch_assoc($result)){

    

    

    ?>

    <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['username'] ?></td>
        <td><?php echo $row['useremail'] ?></td>
        <td><?php echo $row['userpassword'] ?></td>
        <td><a href="update.php?edit=<?php echo $row['id']; ?>" class="btn btn-warning">Update</a></td>
        <td><a href="select.php?delete=<?php echo $row['id']; ?> " class="btn btn-danger">Delete</a></td>
    </tr>

    <?php  } ?>
</table>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    
</body>
</html>

<?php

if(isset($_GET['delete'])){
    $delete_id=$_GET['delete'];
    $query="DELETE FROM `register` WHERE id=$delete_id";
    mysqli_query($connect,$query);
    header('location:select.php');


}
?>