<html>
<head>
<style>
div.gallery {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width:256px;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}
 


</style>
    <title>OUTRAGEOUS</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <script src="js/style.js"></script>
<!--///////////////////////////////-->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
   <!-- The scrollable area -->
<body data-spy="scroll" data-target=".navbar" data-offset="50">



<!-- Navbar -->

    <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"> </a>
        
    </div>
    <div>
       <img src="images/logo.png" width="50px" align="left" id="logo">
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="index.html">HOME</a></li>
        

                   

            <?php
    require("config.php");
    if(empty($_SESSION['user'])) 
    {
        header("Location: secret.php");
        die("Redirecting to secret.php"); 
    }
?>
            <li><a href="logout.php">LOGOUT</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav> 

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">


<div class="gallery">
  <a href="feminism.html">
    <img src="./images/thefemale.png" alt="Female" width="300" height="200">
    </a>
  <div class="desc">Feminism
</div>
</div>

<div class="gallery">
  <a  href="islamophobia.html">
    <img src="./images/thequestioned.png" alt="Forest" width="300" height="200">
  </a>
  <div class="desc">Islamophobia</div>
</div>

<div class="gallery">
  <a href="racism.html">
    <img src="./images/thestruggler.png" alt="Northern Lights" width="300" height="200">
  </a>
  <div class="desc">Racism</div>
</div>

<div class="gallery">
  <a  href="xenophobia.html">
    <img src="./images/theforeigner.png" alt="Mountains" width="300" height="200">
  </a>
  <div class="desc">Xenophobia</div>
</div>
<div class="gallery">
  <a  href="sexism.html">
    <img src="./images/themale.png" alt="Mountains" width="300" height="200">
  </a>
    
  <div class="desc">Sexism</div>
</div>
    </div>
</body>
    
    
</html>