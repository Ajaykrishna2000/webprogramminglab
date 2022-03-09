<?php
include "loginpanel/connect.php";
if(isset($_POST['submit']))
    {
    $uname = $_POST['uname'];
    $upasswrd = $_POST['upasswrd'];
        
    $sql = "SELECT *  FROM customer where `uname`='$uname' and `upasswrd`='$upasswrd' ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0)
         {
        $row = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['customer'] = $row;
        header('location:index.php');   
        } 
    else 
        {
        echo "Username / Password Error!";
         }
mysqli_close($conn);
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>Smart Hub</title>
  
    <link href="assets/images/smarthublogo2.jpg" rel="icon">
  
    <link rel="stylesheet" href="style.css">
  </head>
<body>
    <form action="" method="POST">
        <div class="box-form">
            <div class="left">
                <div class="overlay">
                <h1>SMART HUB</h1>
                <h3>Autmobile Repair & Maintenance Hub</h3>
                <h4>Service at your hands</h4>
                <span>
                    <p>login with social media</p>
                    <a href="#"><i class="fa fa-google" aria-hidden="true"></i>Login with Google</a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Login with Twitter</a>
                </span>
                </div>
            </div>
            
            <div class="right">
            <img src="assets/images/smarthublogo2.jpg" style="height:100px; width:150px;align:center">
                <h5>SIGN IN</h5>
                <p>Don't have an account? <a href="signup.php">Creat Your Account</a> it takes less than a minute</p>
                <div class="inputs">
                    <input type="text" name="uname" id="uname" placeholder="User Name">
                    <br>
                    <input type="password" name="upasswrd" id="upasswrd" placeholder="Password">
                </div><br><br>
                    
                <div class="remember-me--forget-password">
                    <label>
                        <input type="checkbox" name="item" checked/>
                        <span class="text-checkbox">Remember me</span>
                    </label>
                    <p>forget password?</p>
                </div><br>
                    
                <button type="submit" id="submit" name="submit">Sign In</button>
            </div>           
        </div>
    </form>
</body>
</html>
