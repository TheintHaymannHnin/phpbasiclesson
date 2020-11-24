<?php
//crypt
$salt="$2y$10admnhvmdjcjdncncncncnc";//22 words htae pay ya tl
$password="12345";
$crypt=crypt($password,$salt);
echo $crypt;
echo "<hr>";
//hash
$password="12345";
$password=password_hash($password,PASSWORD_BCRYPT,array('test=>11'));

echo $password;
echo "<hr>";

//md5
$password="hello123";//weakness ka pone thay pl hmat ya tl
$md=md5($password);
echo $md;
echo "<hr>";

if($md=="f30aa7a662c728b7407c54ae6bfd27d1"){
    echo "Successful";
}




?>

