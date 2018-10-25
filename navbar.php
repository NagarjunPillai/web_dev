<?php
session_start();
if ( !isset($_SESSION['Users'])!="" ) 
{
    exit;
}
?>
<html>
<head>
<title>navig</title>
     <link rel="stylesheet" type="text/css" href="css/box.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
<style>

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
    font-family: sans-serif;
    margin-bottom: 2px;
   
}

.home {background-color:cadetblue; width: 150px; height: 50px; font-size: 18px;   clear:both;  } /* Green */
.home:hover {background-color: whitesmoke; width: 150px; height: 50px; font-size: 18px; transition-duration: 0.3s;}


}
    
    </style>
</head>
<body>
<div id="menu">
<ul>
    <a href="index1.php">
<li><button class="btn home"><div class="w3-padding w3-xlarge ">
    <i class="fa fa-home"></i>  &nbsp;  HOME</button></li>
 </a>
</ul>
</div>
    <div id="box1">

    <h4><b>ARRAYS AND POINTERS</b></h4>
    <h5>15-Sep-2017 00:00 to 21-Sep-2017 23:59</h5>
     <a href="condition.php?q=1">   <button class="take test">Take Test</button></a>
   
    </div>
    <div id="box1">

    <h4><b>FUNCTIONS AND STRUCTURES</b></h4>
    <h5>15-Sep-2017 00:00 to 21-Sep-2017 23:59</h5>
<a href="condition.php?q=2">   <button class="take test">Take Test</button></a>
   
    </div>
    <div id="box1">

    <h4><b>FILE MANAGEMENT</b></h4>
    <h5>15-Sep-2017 00:00 to 21-Sep-2017 23:59</h5>
<a href="#">   <button class="take test">Take Test</button></a>
   
    </div>
    <div id="box1">

    <h4><b>DATA STRUCTURE</b></h4>
    <h5>15-Sep-2017 00:00 to 21-Sep-2017 23:59</h5>
<a href="#">   <button class="take test">Take Test</button></a>
   
    </div>
</body>
</html>