<?php
session_start();
require "dbconnect.php";
if(isset($_POST['login']))
{
if ( isset($_SESSION['Users'])!="" ) 
    {
     header("Location: index1.php");
     exit;
    }



        $errMSG='';
     $name = $_POST['username'];
     $password = $_POST['password'];
    $hashPassword = hash('sha256',$password);
    if($name=="admin"&& $password=" ")
    {
        header("Location:adminlogin.php");
    }
    
    $res=mysqli_query($scon,"SELECT * FROM details WHERE username='$name'");
    $row=mysqli_fetch_array($res);
    $count = mysqli_num_rows($res);                
      if( $count == 1 && $row['password']==$password ) 
            {
             $_SESSION['Users'] = $row['username'];
             header("Location: index1.php");
            } 
            else 
            {
             $errMSG = "Invalid data <br>";

            
            }                
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/signup.css">
    <title>User Login</title>
    </head>
<style>
#rotate3D {
    color: white;
    position:relative;
    padding:10px;
    float:left;
    margin-right:50px;
    margin:10px;
}

</style>
<script>
<!--
var x,y,n=0,ny=0,rotINT,rotYINT
function rotateYDIV()
{
y=document.getElementById("rotate3D")
clearInterval(rotYINT)
rotYINT=setInterval("startYRotate()",10)
}
function startYRotate()
{
ny=ny+1
y.style.transform="rotateY(" + ny + "deg)"
y.style.webkitTransform="rotateY(" + ny + "deg)"
y.style.OTransform="rotateY(" + ny + "deg)"
y.style.MozTransform="rotateY(" + ny + "deg)"

}
</script>
<body onload="rotateYDIV()"></body>  
<form action="index.php" method="post">
	<center>
  <div style="width:200px;height:200px;" class="container">

<div onpageshow="rotateYDIV()" id="rotate3D">
    <img src="logo.png" alt="avatar" style="width:200px;height:200px;" class="avatar">
  </div>
</div>
	</center>
	<br>
  <div class="container">
    <label><b>Username</b></label>
    <input type="text" name="username" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" name="password" placeholder="Enter Password" name="psw" required>

      <button type="submit" name="login">Login</button>
     <?php if(isset($errMSG)) echo $errMSG; ?>
  </div>

</form>
</html>