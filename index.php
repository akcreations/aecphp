<?php require 'connections/connect.php';
      require 'hash.php';?>
       <link rel="shortcut icon" href="images/favicon.png">
<style>
html,body {
    height:100%;
    width: 100%;
}

body {
    display: table;
}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}
.footer {
    display: table-row;
    height: 1px;
}
.container {
    height: auto;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.active {
  background-color: #3382b7;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>

<?php
session_start();
if(isset($_SESSION["name"]))
{ 
$uid=$_SESSION["uid"];   
  $uname=$_SESSION["name"];
  $body= " You are now officially a PHP developer. GO develop your FUTURE!!!";
  $image="images/second.gif";
  
}    
else{
  $uname=" Guest";
  $uid= " Not registerd";
 $body= " You are not authorized to see the content of this page. Plz login & Confirm your identity";
  $image="images/first.gif";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <title>Instructions</title>
</head>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
   <a href="logout.php">Sign out</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<div style="padding-left:16px" class="col-xs-11">
  <h2 style="color: #3382b7" >Welcome, <?php echo $uname;?></h2>
</div>

<div style="padding-left:16px" class="col-xs-11">
  <h2 style="color: #3382b7" >User Id = <?php echo $uid;?></h2>
</div>


<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

</body>
</html>



 

    



                 
<section class="container-fixed">
     <div class="page" style="margin-left:50px; margin-right:50px;">    
<form action="login.php" method="post" role="form">     
<div class="row">
   
     <img src= <?php echo $image;?> class="img-responsive center-block"><br><br>
   
     <?php echo $body;?> 
          
                <input type="submit" class="responsive center-block"  class="btn btn-default" value="Continue" name="go" id="go" type="button">
          
        </div><!-- /input-group -->
    </div><!-- /.col-lg-4 -->
</div>
</form> </div></section>
</body>


<footer class="footer">
  <div class="topnav" id="myTopnav">
    <div class="container">
        <div class="footer-bottom">
      <div class="container">
        
          <div class="col-xs-15 col-sm-6">
            <p style="color:white; padding-top: 5px;">&copy; College of Engineering Aranmula</p>
          </div>
          <div class="col-xs-15 col-sm-6">
            <p class="pull-right" style="color:white;padding-top: 5px;">Hack4i</a></p>
          </div>
      </div>
    </div>
    </div></div>
</footer>

</html>