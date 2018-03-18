<link rel="shortcut icon" href="images/favicon.png">
<?php
session_start();
unset($_SESSION["name"]);
session_destroy();

?>
<!doctype html>
<title>Logout</title>
<style>
  body { text-align: center; padding: 150px; }
  h1 { font-size: 50px; }
  body { font: 20px Helvetica, sans-serif; color: #333; }
  article { display: block; text-align: left; width: 650px; margin: 0 auto; }
  a { color: #dc8100; text-decoration: none; }
  a:hover { color: #333; text-decoration: none; }
</style>

<article>
    <h1><u>You have been logged out!</u></h1>

     <p>You will be redirected in <span id="counter">5</span> second(s).</p>
<script type="text/javascript">
function countdown() {
    var i = document.getElementById('counter');
     i.innerHTML = parseInt(i.innerHTML)-1;
    if (parseInt(i.innerHTML)<=0) {
        location.href = 'index.php';
    }
   
}
setInterval(function(){ countdown(); },1000);
</script>
    <div>
        <p> Click the links to continue <a href="index.php">Home</a>, 
        Or if you want to login again click <a href="login.php">Login</p>
        <p>&mdash; Hack4innovation ? </p>
    </div>
</article>