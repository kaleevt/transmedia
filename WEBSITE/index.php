<?php 
    require("config.php"); 
    $submitted_username = ''; 
    if(!empty($_POST)){ 
        $query = "CALL selectUser(?)"; 
        
        try{ 
            $stmt = $db->prepare($query); 
            $stmt->bindParam(1, $_POST['username'] , PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 4000); 
            $result = $stmt->execute(); 
        } 
        catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); } 
        $login_ok = false; 
        $row = $stmt->fetch(); 
        if($row){ 
            $check_password = hash('sha256', $_POST['password'] . $row['salt']); 
            for($round = 0; $round < 65536; $round++){
                $check_password = hash('sha256', $check_password . $row['salt']);
            } 
            if($check_password === $row['password']){
                $login_ok = true;
            } 
        } 

        if($login_ok){ 
            unset($row['salt']); 
            unset($row['password']); 
            $_SESSION['user'] = $row;  
            header("Location: home.php"); 
            die("Redirecting to: home.php"); 
        } 
        else{ 
            print("Login Failed."); 
            $submitted_username = htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8'); 
        } 
    } 
?> 

<!DOCTYPE html>
<html>
<title>Outrageous</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
    background-image: url('/images/alien.jpg');
    min-height: 100%;
    background-position: center;
    background-size: cover;
}
</style>
<body>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
  <div class="w3-display-topleft w3-padding-large w3-xlarge">
    Outrageous
  </div>
  <div class="w3-display-middle">
    
    <hr class="w3-border-grey" style="margin:auto;width:40%">
    <div class="w3-container ">
              <h1 class="w3-jumbo w3-animate-top">Login</h1>
            </div>

            <form class="w3-container" action="index.php" method="post">
              <label class="w3-text-black"><b>Username</b></label>
              <input class="w3-input w3-border w3-light-grey" placeholder="Username" name="username" type="text">
                

              <label class="w3-text-black"><b>Password</b></label>
              <input class="w3-input w3-border w3-light-grey" placeholder="Password" name="password" type="password">
              <input type="submit" class="w3-btn w3-blue-grey" value="Login"/> 
              
            </form>  
             <button class="w3-btn w3-blue-grey" href="register.php">Register</button>
            
  </div>
  <div class="w3-display-bottomleft w3-padding-large">
    Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a>
  </div>
</div>

</body>
</html>

  

  