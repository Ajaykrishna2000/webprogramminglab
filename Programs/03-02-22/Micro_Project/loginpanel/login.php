<?php
include "connect.php";
if(isset($_POST['submit']))
    {
    $aduname = $_POST['aduname'];
    $adpassword = $_POST['adpassword'];
        
    $sql = "SELECT *  FROM adminlogin where `aduname`='$aduname' and `adpassword` ='$adpassword'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0)
         {
        $row = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['adminlogin'] = $row;
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

    <title>Smart Hub-Admin Login</title>

    <link href="assets/images/smarthublogo2.jpg" rel="icon">

    <link rel="stylesheet" href="style.css">
</head>
<body class="adlogin">
    <div class="sign-up-form">
        <img src="assets/images/smarthublogo2.jpg">
        <h2>ADMIN LOGIN</h2>
        <form action="" method="POST" class="adform">
        <i class="fas fa-user-cog"></i> 
            <input type="text" name="aduname" id="aduname" class="input-box" placeholder="User Name"><br>
            <input type="password" name="adpassword" id="adpassword" class="input-box" placeholder="Password">
            <p><span><input type="checkbox" name="adchk" id="adchk"></span>I agree to the terms and conditions</p>
            <input type="submit" id="submit" name="submit" value="Log in">
            <input type="reset" id="reset" name="reset" value="Cancel">
        </form>
    </div>
</body>
</html>
