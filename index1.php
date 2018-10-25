<?php
session_start();
if ( !isset($_SESSION['Users'])!="" ) 
{
    exit;
}
?>
<!DOCTYPE html>
<html>
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>
<body class="w3-theme-l5">
<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>HOME</a>
   <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Account Settings"><i class="fa fa-user"></i></a>
  <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="Logout"><img src="https://image.freepik.com/free-icon/power_318-10548.jpg" class="w3-circle" style="height:25px;width:25px" alt="Avatar"></a>
 </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
</div>

<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card-2 w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">My Profile</h4>
         <p class="w3-center"><img src="https://cdn3.iconfinder.com/data/icons/rcons-user-action/32/boy-512.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> <?php echo ($_SESSION['Users'])?> </p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> Chennai, TN</p>
         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> April 1, 1998</p>
        </div>
      </div>
      <br>
      
      <!-- Accordion -->
     
      <!-- Alert Box -->
      <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
          <i class="fa fa-remove"></i>
        </span>
        <p><strong>Welcome!</strong></p>
        <p>This is a platform to develop your programming skills.</p>
      </div>
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m7">
    
      <div class="w3-row-padding">
        <div class="w3-col m12">
          
        </div>
      </div>
    <!-- <center> <img src="http://stjosephs.ac.in/images/logo.jpg" alt="Smiley face" width="700" height="150"></center>--> 
      <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
        <img src="http://wikiprogramming.org/wp-content/uploads/2015/05/c-logo.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
          <h2>C programming</h2><br>
        <hr class="w3-clear">
        <p>MCQ on C Programming</p>
          <div class="w3-row-padding" style="margin:0 -16px">
        
              <center><button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><a href="navbar.php" style="text-decoration:none"><b>Begin</b></button></center></a></div> 
      </div>
      
      <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
        <img src="http://wikiprogramming.org/wp-content/uploads/2015/05/c-logo.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <h2>C++ Programming</h2><br>
        <hr class="w3-clear">
        <p>MCQ on C ++ Programming</p>
          <center><button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"> <a href="navbarcpp.php" style="text-decoration:none"><b>Begin</b></button></center>
              </a>
      </div>  

      <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
          
        <img src="http://codehustler.org/wp-content/uploads/2012/12/java_logo.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <h2>Java Programming</h2><br>
        <hr class="w3-clear">
          <p>MCQ on java Programming</p>
          <center> <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><a href="navbarjava.php" style="text-decoration:none"><b>Begin</b></button> </center>
              </a>
      </div> 
      
    <!-- End Middle Column -->
    </div>
	  	  <div class="w3-col m2"><center>        
		   <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><a href="progs.php" style="text-decoration:none"><b>Program</b>
			   </a>
			  </button></center></div>
	</div>
	</div>
<!-- End Page Container -->
<br>
<!-- Footer -->
<footer class="w3-container w3-theme-d5">
  <p>Powered by CSE Dept</p>
</footer>
 
<script>
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme-d1";
    } else { 
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-theme-d1", "");
    }
}
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html> 
