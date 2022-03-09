<?php
include "loginpanel/connect.php";
if(isset($_POST['submit']))
  {
  $uname=$_POST['uname'];
  $upasswrd=$_POST['upasswrd'];
  $ucpasswrd=$_POST['ucpasswrd'];

$sql = "INSERT INTO `customer` ( `uname`, `upasswrd`, `ucpasswrd`) VALUES ('$uname', '$upasswrd', '$ucpasswrd')";
$result=$conn->query($sql);
if($result==TRUE)
{
	echo "Data entered successfully";
    header('location:signin.php');   
}
else
{
	echo "Error".$sql."<br>".$conn->error;
}
$conn->close();
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
    <form action=" " method="POST" style="border:1px solid #ccc">
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
                <h5>SIGN UP</h5>
                <p>Already have an account? <a href="signin.php">Sign in</a>  now to know more...</p>
                <div class="inputs">
                    <input type="text" name="uname" id="uname" placeholder="User Name"><br>
                    <input type="password" name="upasswrd" id="upasswrd" placeholder="Password"><br>
                    <input type="password" name="ucpasswrd" id="ucpasswrd" placeholder="Confirm Password"><br>
                </div>
                    
                <br><br>
                    
                <div class="remember-me--forget-password">
                    <label>
                        <input type="checkbox" name="item" checked/>
                        <span class="text-checkbox">I agree the terms and conditions</span>
                    </label>
                    <p><a href="">Click here to know more...</a></p>
                </div><br>
                    
                <button type="submit" id="submit" name="submit">Register now</button>
            </div>            
        </div>
    </form>
</body>
</html>
