<!DOCTYPE html>
<html>
<title>OUTRAGEOUS</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <script src="js/style.js"></script>


<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
    
</style>
<body>

<!-- Navbar -->

<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
                    <img src="images/logo.png" width="3.5%" align="left" id="logo" >


    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ABOUT</a>
    <a href="#poll" class="w3-bar-item w3-button w3-padding-large w3-hide-small">POLL</a>
    <a href="#app" class="w3-bar-item w3-button w3-padding-large w3-hide-small">APP</a>
    <a href="articles.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ARTICLES</a>

<?php
    require("config.php");
    if(empty($_SESSION['user'])) 
    {
        header("Location: index.php");
        die("Redirecting to index.php"); 
    }
?>
<a href="logout.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">LOGOUT</a>

     
    </div>
  </div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">                               <a href="#about" class="w3-bar-item w3-button w3-padding-large">ABOUT</a>
<a href="#poll" class="w3-bar-item w3-button w3-padding-large">POLL</a>
<a href="#app" class="w3-bar-item w3-button w3-padding-large">APP</a>
<a href="articles.html" class="w3-bar-item w3-button w3-padding-large">ARTICLES</a>

</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center">
    <img src="images/wall-2564902_1920.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
        <h3> <img src="images/logo.png" width="6%"><I>OUTRAGEOUS</I></h3>
      <p>THE STRUGGLER</p>   
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="./images/guy.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
        <h3> <img src="images/logo.png" width="6%"><I>OUTRAGEOUS</I></h3>
      <p><b>THE MALE</b></p>    
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="./images/other.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
        <h3> <img src="images/logo.png" width="6%"><I>OUTRAGEOUS</I></h3>
      <p><b>THE QUESTIONED</b></p>    
    </div>
  </div>
      <div class="mySlides w3-display-container w3-center">
    <img src="./images/alien.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
        <h3> <img src="images/logo.png" width="6%"><I>OUTRAGEOUS</I></h3>
      <p><b>THE FOREIGNER</b></p>    
    </div>
  </div>
      <div class="mySlides w3-display-container w3-center">
    <img src="./images/female.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
        <h3> <img src="images/logo.png" width="6%"><I>OUTRAGEOUS</I></h3>
      <p><b>THE FEMALE</b></p>    
    </div>
  </div>

  <!-- ABOUT -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="about">
    <h2 class="w3-wide">ABOUT THE PROJECT</h2>
    <p class="w3-opacity"><i>We love music</i></p>
    <p class="w3-justify">We have created a fictional band website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
      ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur
      adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <div class="w3-row w3-padding-32">
    <h2 class="w3-wide">THE TEAM</h2>

      <div class="w3-third">
       <img src="images/charles.png" class="w3-round"  style="width:60%">
          <p><b>Charles Mugisha</b><br><i>Political correctness within our society has made many people too sensitive to what are realistically small issues. With all the fuss around these small issues, the real issues that exist are sometimes forgotten about and I believe that is a real shame. I hope Outrageous highlights not only the ridiculousness of these smaller issues, but also highlight the real serious issues in today's society so we can start thinking about what we're going to do about it.</i></p>
      </div>
      <div class="w3-third">
        
        <img src="images/lucy.png" class="w3-round"  style="width:60%">
          <p><b>Lucy Vizor</b><br><i>Political correctness within our society has made many people too sensitive to what are realistically small issues. With all the fuss around these small issues, the real issues that exist are sometimes forgotten about and I believe that is a real shame. I hope Outrageous highlights not only the ridiculousness of these smaller issues, but also highlight the real serious issues in today's society so we can start thinking about what we're going to do about it.</i></p>
      </div>
      <div class="w3-third">
       
        <img src="images/nathan2.png" class="w3-round"  style="width:59%">
          <p><b>Nathan Pugsley</b><br><i>Political correctness within our society has made many people too sensitive to what are realistically small issues. With all the fuss around these small issues, the real issues that exist are sometimes forgotten about and I believe that is a real shame. I hope Outrageous highlights not only the ridiculousness of these smaller issues, but also highlight the real serious issues in today's society so we can start thinking about what we're going to do about it.</i></p>
      </div>
         <div class="w3-third">
        
        <img src="images/saima.png" class="w3-round"  style="width:60%">
             <p><b>Saima Begum</b><br><i>Political correctness within our society has made many people too sensitive to what are realistically small issues. With all the fuss around these small issues, the real issues that exist are sometimes forgotten about and I believe that is a real shame. I hope Outrageous highlights not only the ridiculousness of these smaller issues, but also highlight the real serious issues in today's society so we can start thinking about what we're going to do about it.</i></p>
      </div>
         <div class="w3-third">
             
         <img src="images/theo.png" class="w3-round"  style="width:60%">
             <p><b>Theo Kaleev</b><br><i>Political correctness within our society has made many people too sensitive to what are realistically small issues. With all the fuss around these small issues, the real issues that exist are sometimes forgotten about and I believe that is a real shame. I hope Outrageous highlights not only the ridiculousness of these smaller issues, but also highlight the real serious issues in today's society so we can start thinking about what we're going to do about it.</i></p>
      </div>
    </div>
  </div>

  <!-- The Tour Section -->
  <div class="w3-black" id="poll">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      here goes poll
    </div>
  </div>



  <!-- The APP Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="app">
   here goes the app
  </div>
  
<!-- End Page Content -->
</div>


<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>
    
<!-- SLIDESHOW java !-->
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


</body>
</html>





