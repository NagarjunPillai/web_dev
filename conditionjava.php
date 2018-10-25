<?php
session_start();
if ( !isset($_SESSION['Users'])!="" ) 
{
    exit;
}
$page = !empty($_REQUEST['q']) ? $_REQUEST['q'] : null;
switch($page)
{
	case 1:
		$link="taketestja.php";
		break;
	case 2:
		$link="taketestja2.php";
		break;
}
?><!DOCTYPE html>
<html>
<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
     #menu {
       padding:0px 0px;
	width:1600px;
	height: 50px;
       margin: -7;
	background-color: #4d636f;
       
       

}
#menu ul {
        margin:0;
	padding: 0;

}
#menu li {
	list-style-type: none;
	float: left;
	
	text-align: left;

	width:100px;
	height: 50px;
 

	
}
.btn {
    border: none;
    color: white; /* Add a text color */
    padding: 0px 0px;
    cursor: pointer; /* Add a pointer cursor on mouse-over */
	margin-right: 10px;
   font-family: 'Oswald', sans-serif;
    margin-bottom: 2px;
   
}

.home {background-color:cadetblue; width: 150px; height: 50px; font-size: 18px;   clear:both;  } /* Green */
.home:hover {background-color: whitesmoke; width: 150px; height: 50px; font-size: 18px; transition-duration: 0.3s;}
</style>
<body class="w3-theme-l5">

<div id="menu">
<ul>
    <a href="index1.php">
<li><button class="btn home"><div class="w3-padding w3-xlarge ">
    <i class="fa fa-home"></i>  &nbsp;    HOME</button></li>
 </a>
</ul>
</div>
<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
          
      <!-- Accordion -->
      
     
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m7">
    
      <div class="w3-row-padding">
        <div class="w3-col m12">
          
        </div>
      </div>
      <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
       <img src="http://codehustler.org/wp-content/uploads/2012/12/java_logo.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
          <h2>JAVA programming</h2><br>
        <hr class="w3-clear">
        <p>Please DO NOT REFRESH the page.
<br><br>
Please DO NOT HIT BACK button.
<br><br>
Please DO NOT navigate out of the test window. Disable pop ups like anti-virus alert, messenger notification.
<br><br>
Use ONLY Mozilla Firefox / Chrome / Opera browsers without ad-wares which opens pop-up windows.
<br><br>
Incase power failure occurs or internet connectivity is not available, close the browser.<br> <br>Login after the connectivity resumes and click on the button to "RESUME TEST"</p>
          <div class="w3-row-padding" style="margin:0 -16px">
        
              <center><a href="<?php echo $link;?>"><button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><b>Begin</b></button></a></center></div> 
      </div>
     
    <!-- End Middle Column -->
    </div>
    
    <!-- Right Column -->
    
      
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

<!-- Footer -->


<footer class="w3-container w3-theme-d5">
  <p>Powered by CSE Dept</p>
</footer>
 
<script>
// Accordion
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

// Used to toggle the menu on smaller screens when clicking on the menu button
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
