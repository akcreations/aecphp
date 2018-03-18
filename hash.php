<?php
 define("MAX_LENGTH", 100);//Symbolic constant MAX_LENGTH
   
    function generateHashWithSalt($password_string)
     {
          $intermediateSalt = md5(uniqid(rand(), true));
           $salt = substr($intermediateSalt, 0, 6);
           $hashed=hash("sha512",$password_string.$salt);
            return  ("sha512$".$salt."$".$hashed);//returns hashed password with salt 
      
      }
   

 function checkhash($alg,$salt,$password)
	{
		

		$hashit=hash($alg,$password.$salt);
		return($alg."$".$salt."$".$hashit);
	
	}




	?>


















    

