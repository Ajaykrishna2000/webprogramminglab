<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Smart Hub-Admin Panel</title>

  <link href="assets/images/smarthublogo2.jpg" rel="icon">

  <link rel="stylesheet" href="style.css">
</head>
<body class="index1">
<div class="update-content">
    <form onsubmit="return myFunction();" action="" method="POST">
      <h1  class="custform" id="text1">EDIT CUSTOMER</h1>
      <table id="dynamic-table" class="custaddtable">
        <tbody>
          <tr>
            <td class="custaddtd1">
              <label for="fname">Name:</label>
            </td>
            <td class="custaddtd2">
              <input type="text" name="fname" id="fname" placeholder="Enter Your Name" style="height:40px;width:500px;" value="<?php echo $fname; ?>" >
            </td>            		   				
          </tr>
          <tr>
            <td class="custaddtd1">
              <label for="gender">Gender:</label>
            </td>
            <td class="custaddtd2">
            <input type="radio" id="gender" name="gender" value="Male" value="<?php if($gender==gender)checked ?>" >
            <label for="Male">Male</label>
            <input type="radio" id="gender" name="gender" value="Female" value="<?php if($gender==gender)checked ?>">
            <label for="Female">Female</label>
            <input type="radio" id="gender" name="gender" value="Others" value="<?php if($gender==gender)checked ?>" >
            <label for="Others">Others</label>
            </td>            		   				
          </tr>
          <tr>
            <td class="custaddtd1">
              <label for="phone">Phone Number:</label>
            </td>
            <td class="custaddtd2">
              <input type="text" name="phone" id="phone" placeholder="Enter Your Phone Number" style="height:40px;width:500px;" value="<?php echo $phone; ?>" required>
            </td>            		   				
          </tr>
          <tr>
            <td class="custaddtd1">
              <label for="email">Email Id:</label>
            </td>
            <td class="custaddtd2">
              <input type="email" name="email" id="email" placeholder="Enter Your Email Id" style="height:40px;width:500px;" value="<?php echo $email; ?>" required>
            </td>            		   				
          </tr>
          <tr>
            <td class="custaddtd1">
              <label for="address">Address:</label>
            </td>
            <td class="custaddtd2">
              <textarea name="address" id="address" placeholder="Enter Your address" style="height:100px;width:500px;" required><?php echo $address; ?></textarea>
            </td>            		   				
          </tr>
          <!--<tr>
            <td class="custaddtd1">
              <label for="">Vehicle Type:</label>
            </td>
            <td class="custaddtd2">
              <select name="vhmodel" id="vhmodel" style="height:40px;width:500px;">
                <option value="no selection">Choose Vehicle type</option>
                <option value="bike">Bike</option>
                <option value="auto">Auto</option>
                <option value="car">Car</option>
              </select>
            </td>            		   				
          </tr>-->
          <tr>
            <td class="custaddtd1">
              <label for="vhnumber">Vehicle Number:</label>
            </td>
            <td class="custaddtd2">
              <input type="text" name="vhnumber" id="vhnumber" placeholder="Enter Your vehicle number" style="height:40px;width:500px;" value="<?php echo $vhnumber; ?>" required>
            </td>            		   				
          </tr>
          <tr>
            <td class="custaddtd1">
              <label for="vhdetail">Vehicle Details:</label>
            </td>
            <td class="custaddtd2">
              <textarea name="vhdetail" id="vhdetail" placeholder="Enter Your vehicle details" style="height:100px;width:500px;" value="<?php echo $vhdetail; ?>" required></textarea>
            </td>            		   				
          </tr>
          <tr>
            <td class="custaddtd1">
              <label for="uname">Username:</label>
            </td>
            <td class="custaddtd2">
              <input type="text" name="uname" id="uname" placeholder="Enter Your username" style="height:40px;width:500px;" value="<?php echo $uname; ?>" required>
            </td>            		   				
          </tr>
          <tr>
            <td class="custaddtd1">
              <label for="upasswrd">Password:</label>
            </td>
            <td class="custaddtd2">
              <input type="password" name="upasswrd" id="upasswrd" placeholder="Enter Your password" style="height:40px;width:500px;" value="<?php echo $upasswrd; ?>" required>
            </td>            		   				
          </tr>
          <tr>
            <td class="custaddtd1">
              <label for="ucpasswrd">Confirm Password:</label>
            </td>
            <td class="custaddtd2">
              <input type="password" name="ucpasswrd" id="ucpasswrd" placeholder="Re-enter Your password" style="height:40px;width:500px;" value="<?php echo $ucpasswrd; ?>" required>
            </td>            		   				
          </tr>
        </tbody>
      </table>
      <input type="submit" id="submit" name="submit" value="Submit">
      <input type="reset" id="reset" name="reset" value="Reset">
    </form>
    <script>
      function myFunction(){
        if(document.getElementById('fname').value="")
            {
            alert("Enter you name");
            return false;
            }								
        if(document.getElementById('gender').value="")
            {
            alert("choose your gender");
            return false;
            }
        if(document.getElementById('phone').value="")
            {
            alert("Enter your phone number");
            return false;
            }
        if(document.getElementById('email').value="")
            {
            alert("Enter your Email Id");
            return false;
            }
        if(document.getElementById('address').value="")
            {
            alert("Enter your address");
            return false;
            }
        if(document.getElementById('vhmodel').value="")
            {
            alert("Choose your vehicle type");
            return false;
            }
        if(document.getElementById('vhnumber').value="")
            {
            alert("Enter your vehicle number");
            return false;
            }
        if(document.getElementById('vhdetail').value="")
            {
            alert("Enter your vehicle detail");
            return false;
            }
        if(document.getElementById('uname').value="")
            {
            alert("Enter your username");
            return false;
            }
        if(document.getElementById('upasswrd').value="")
            {
            alert("Enter your password");
            return false;
            }
        if(document.getElementById('ucpasswrd').value="")
            {
            alert("Re-enter your password");
            return false;
            }
        }
</script> 
</body>
</html> 