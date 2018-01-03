<?php
    require("config.php");
    if(empty($_SESSION['user'])) 
    {
        header("Location: index.php");
        die("Redirecting to index.php"); 
    }
?>

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
      <a href="index.html" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    
    </div>
  </div>


<!-- ARTICLES  -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  

    </div>
  


</body>
</html>




