<?php require 'connections/connect.php';?>
<?php

    define("MAX_LENGTH", 100);
    function generateHashWithSalt($password) {
    $intermediateSalt = md5(uniqid(rand(), true));
    $salt = substr($intermediateSalt, 0, 6);
    $hashed=hash("sha512",$password . $salt);
    return  ("sha512$".$salt."$".$hashed);
		
}
$pass="Some random password";
$var=substr(generateHashWithSalt($pass),0,MAX_LENGTH);
echo $var;

?>

