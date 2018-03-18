<?php require 'connections/connect.php';
      require 'hash.php';?>
<?php
      
  if(isset($_POST['register']))
              { 
                            	 
                            		$firstname =filter_var($_POST['fname'],FILTER_SANITIZE_STRING);
                            		$lastname =filter_var($_POST['lname'],FILTER_SANITIZE_STRING);
                            		$gender =filter_var($_POST['gender'],FILTER_SANITIZE_STRING);
                                $emailid=filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
                                $contactno =filter_var($_POST['contactno'],FILTER_SANITIZE_NUMBER_INT);
                            		$category =filter_var($_POST['desg'],FILTER_SANITIZE_STRING);
                            		$depart =filter_var($_POST['dept'],FILTER_SANITIZE_STRING);
                            		$organization =filter_var($_POST['orgzn'],FILTER_SANITIZE_STRING);
                            		$password =filter_var($_POST['password'],FILTER_SANITIZE_STRING);
                                $cnfrm=filter_var($_POST['cnfrm'],FILTER_SANITIZE_STRING);

                          if($password==$cnfrm)
                          {         
                                 
            
                              $hashpassword=substr(generateHashWithSalt($password),0,MAX_LENGTH);
                              //call the hashing function and store the first 100 charactes

		                                 $sql="INSERT INTO user_info (first_name,last_name,gender,email_id,contact,category,organization,password,dept_id)values('{$firstname}','{$lastname}','{$gender}','{$emailid}','{$contactno}','{$category}','{$organization}','{$hashpassword}','{$depart}')";
        
                                        $result = mysqli_query($con,$sql);//execute query
              
                                            if($result==TRUE)// if query executed successfully
                                            {
                                              echo '<script type="text/javascript">';
                                              echo 'alert("You have been registered !! your Account will be activated within 24 Contact: hack4i.cea@gmail.com if you face any problem")';
                                              echo '</script>';// alert user about successful registration
                                            } 

                                            else
                                            {
                                              echo  "Error: " . $sql . "<br>" . mysqli_error($con);
                                            }
 
                           }//close if password match
                            
                            else // if password does not match
        
                             {  echo '<script type="text/javascript">';
                                echo 'alert("Entered password does not match")';
                                echo '</script>';
                                            } 
                                
                            
mysqli_close($con);
     }//close if register button pressed                       

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Hack4i @ CE Aranmula</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
 
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="images/favicon.png">
</head><!--/head-->
<div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">
            <h1><img class="img-responsive" src="images/logo.png" alt="logo" style="height: 45px; width:270px;"></h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll"><a href="#home">Home</a></li>
            <li class="scroll"><a href="#services">Services</a></li> 
            <li class="scroll"><a href="#about-us">About Us</a></li>                     
            <li class="scroll"><a href="#portfolio">Portfolio</a></li>
            <li class="scroll"><a href="#team">Team</a></li>
            <li class="scroll"><a href="#blog">Blog</a></li>
            <li class="scroll"><a href="#contact">Contact</a></li>       
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><body style="background-image: url(images/reg.jpg); color:black;">
  <section class="container-fixed">
   <form class="form-horizontal" method="POST">
    <div class="form-group">
       <label for="fname" class="control-label col-xs-2">First name</label>
       <div class="col-xs-5">
           <input name="fname" type ="text" class="form-control" id="fname" placeholder="Enter first name" required>
       </div>
    </div>
    <div class="form-group">
        <label for="lname" class="control-label col-xs-2">Last name</label>
        <div class="col-xs-5">
           <input name="lname" type ="text" class="form-control" id="lname" placeholder="Enter last name" required>
        </div>
     </div>
     <div class="form-group">
        <label for="gender" class="control-label col-xs-2">Gender</label>
        <div class="col-xs-5">
        Male:
           <input name="gender" type ="radio" id="gender" value="M" required>
           Female
           <input name="gender" type ="radio" id="gender" value="F" required>
        </div>
     </div>
     <div class="form-group">
        <label for="inputE-mail" class="control-label col-xs-2">Email</label>
        <div class="col-xs-5">
           <input name="email" type="email" class="form-control" id="email" placeholder="Enter e-mail" required>
        </div>
     </div>
     <div class="form-group">
        <label for="contactno" class="control-label col-xs-2">Contact number</label>
        <div class="col-xs-5">
          <input name="contactno" type ="text" class="form-control" id="contactno" maxlength="10" placeholder="Enter contact number" pattern="[789][0-9]{9}" required>
        </div>
     </div>
     <div class="form-group">
        <label for="category" class="control-label col-xs-2">Category</label>
        <div class="col-xs-5">
        Student:
           <input name="desg" type ="radio"  id="desg" value="S" required >
           Expert:
           <input name="desg" type ="radio"  id="desg" value="E" required>
        </div>
     </div>
     <div class="form-group">
        <label for="dept" class="control-label col-xs-2">Department</label>
        <div class="col-xs-5">
    <?php  
$stmnt= "SELECT * FROM dept_info";

$result = $con->query($stmnt) or die(mysqli_error($con)."[".$stmnt."]");

?>

<select name="dept" required>
<option value="">Select</option>
<?php 
while ($row = mysqli_fetch_array($result))
{
    echo "<option value=".$row['dept_id'].">".$row['dept_name']."</option>";
}
mysqli_close($con);
?>        
</select>
        </div>
     </div>
     <div class="form-group">
        <label for="orgzn" class="control-label col-xs-2">Organization</label>
        <div class="col-xs-5">
           <input  name="orgzn" type="Organization" type ="text" class="form-control" id="orgzn" placeholder="Enter organization" required>
        </div>
     </div>
     <div class="form-group">
        <label for="password" class="control-label col-xs-2">Password</label>
        <div class="col-xs-5">
           <input name="password" type ="password" class="form-control" id="password" minlength="8" placeholder="Enter password" required>
       
        </div> <div>*minimum 8 characters is required</div>
     </div>
     <div class="form-group">
        <label for="cnfrm" class="control-label col-xs-2">Confirm password</label>
        <div class="col-xs-5">
           <input name="cnfrm" type ="password" class="form-control" id="cnfrm"  minlength="8" placeholder="Re-enter password" required>
        </div>
     </div>
    <div class="submit-btn" style="margin-left: 40%;">
        <button name="register" type="submit" class="btn btn-primary" id="register">Register</button>
    </div>
  </form>
  </div>
 </div>
</section>
</body>
 <script src="js/jquery.js"></script>
 <script src="js/bootstrap.min.js"></script>

</html>
