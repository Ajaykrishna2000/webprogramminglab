<?php
include "connect.php";
if(isset($_POST['submit']))
  {
	$cname=$_POST['cname'];
	$gender=$_POST['gender'];
	$phone=$_POST['phone'];
  $email=$_POST['email'];
	$address=$_POST['address'];
  $vehtype=$_POST['vehtype'];
	$vhnumber=$_POST['vhnumber'];
	$vhdetail=$_POST['vhdetail'];
  $uname=$_POST['uname'];
  $upasswrd=$_POST['upasswrd'];
  $ucpasswrd=$_POST['ucpasswrd'];

$sql = "INSERT INTO `customer` ( `cname`,`gender`, `phone`, `email`,`address`,`vehtype`,`vhnumber`,`vhdetail`, `uname`, `upasswrd`,
 `ucpasswrd`) VALUES ('$cname','$gender', '$phone', '$email','$address','$vehtype','$vhnumber','$vhdetail', '$uname', '$upasswrd',
  '$ucpasswrd')";
$result=$conn->query($sql);
if($result==TRUE)
{
	echo "Data entered successfully";
  //header('location:index.php');   

}
else
{
	echo "Error".$sql."<br>".$conn->error;
}
$conn->close();
}
?>
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
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Smart Hub</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="index.php">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Home</span>
          </a>
        </li>
        <li>
          <a href="request.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Recent Requests</span>
          </a>
        </li>
        <li>
          <a href="add_customer.php" class="active">
            <i class='bx bx-box' ></i>
            <span class="links_name">Add Customer</span>
          </a>
        </li>
        <li>
          <a href="view_customer.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">View Customer</span>
          </a>
        </li>
        <li>
          <a href="work_history.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Work History</span>
          </a>
        </li>
        <li>
          <a href="store.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Store</span>
          </a>
        </li>
        <li>
          <a href="employee.php">
            <i class='bx bx-user' ></i>
            <span class="links_name">Employees</span>
          </a>
        </li>
        <li>
          <a href="message.php">
            <i class='bx bx-message' ></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
        <li>
          <a href="settings.php">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Settings</span>
          </a>
        </li>
        <li class="log_out">
          <a href="login.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <img src="assets/images/smarthublogo2.jpg" style="height:40px; width:40px"><span class="dashboard">Admin Home</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class="fa fa-search" aria-hidden="true"></i>
      </div>
      <div class="profile-details">
        <img src="assets/images/admin.png" alt="">
        <span class="admin_name">admin</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
    <form onsubmit="return myFunction();" action="" method="POST">
      <h1  class="custform" id="text1">ADD CUSTOMER</h1>
      <table id="dynamic-table" class="custaddtable">
        <tbody>
          <tr>
            <td class="custaddtd1">
              <label for="cname">Name:</label>
            </td>
            <td class="custaddtd2">
              <input type="text" name="cname" id="cname" placeholder="Enter Your Name" style="height:40px;width:500px;" required>
            </td>            		   				
          </tr>
          <tr>
            <td class="custaddtd1">
              <label for="gender">Gender:</label>
            </td>
            <td class="custaddtd2">
            <input type="radio" id="gender" name="gender" value="Male" required>
            <label for="Male">Male</label>
            <input type="radio" id="gender" name="gender" value="Female" required>
            <label for="Female">Female</label>
            <input type="radio" id="gender" name="gender" value="Others" required>
            <label for="Others">Others</label>
            </td>            		   				
          </tr>
          <tr>
            <td class="custaddtd1">
              <label for="phone">Phone Number:</label>
            </td>
            <td class="custaddtd2">
              <input type="text" name="phone" id="phone" placeholder="Enter Your Phone Number" maxlength="10" style="height:40px;width:500px;" required>
            </td>            		   				
          </tr>
          <tr>
            <td class="custaddtd1">
              <label for="email">Email Id:</label>
            </td>
            <td class="custaddtd2">
              <input type="email" name="email" id="email" placeholder="Enter Your Email Id" style="height:40px;width:500px;" required>
            </td>            		   				
          </tr>
          <tr>
            <td class="custaddtd1">
              <label for="address">Address:</label>
            </td>
            <td class="custaddtd2">
              <textarea name="address" id="address" placeholder="Enter Your address" style="height:100px;width:500px;" required></textarea>
            </td>            		   				
          </tr>
          <tr>
            <td class="custaddtd1">
              <label for="">Vehicle Type:</label>
            </td>
            <td class="custaddtd2">
              <select name="vehtype" id="vehtype" style="height:40px;width:500px;">
                <option value="no selection">Choose Vehicle type</option>
                <option value="bike">Bike</option>
                <option value="auto">Auto</option>
                <option value="car">Car</option>
              </select>
            </td>            		   				
          </tr>
          <tr>
            <td class="custaddtd1">
              <label for="vhnumber">Vehicle Number:</label>
            </td>
            <td class="custaddtd2">
              <input type="text" name="vhnumber" id="vhnumber" placeholder="Enter Your vehicle number" style="height:40px;width:500px;" required>
            </td>            		   				
          </tr>
          <tr>
            <td class="custaddtd1">
              <label for="vhdetail">Vehicle Details:</label>
            </td>
            <td class="custaddtd2">
              <textarea name="vhdetail" id="vhdetail" placeholder="Enter Your vehicle details" style="height:100px;width:500px;" required></textarea>
            </td>            		   				
          </tr>
          <tr>
            <td class="custaddtd1">
              <label for="uname">Username:</label>
            </td>
            <td class="custaddtd2">
              <input type="text" name="uname" id="uname" placeholder="Enter Your username" style="height:40px;width:500px;" required>
            </td>            		   				
          </tr>
          <tr>
            <td class="custaddtd1">
              <label for="upasswrd">Password:</label>
            </td>
            <td class="custaddtd2">
              <input type="password" name="upasswrd" id="upasswrd" placeholder="Enter Your password" style="height:40px;width:500px;" required>
            </td>            		   				
          </tr>
          <tr>
            <td class="custaddtd1">
              <label for="ucpasswrd">Confirm Password:</label>
            </td>
            <td class="custaddtd2">
              <input type="password" name="ucpasswrd" id="ucpasswrd" placeholder="Re-enter Your password" style="height:40px;width:500px;" required>
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
        if(document.getElementById('vehtype').value="")
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
        if(document.getElementById('upasswrd').value!=document.getElementById('ucpasswrd').value)
            {
            alert("Password not same");
            return false;
            }
        }
</script> 
    </div>
  </section>
      <div class="footerindex">
        <div class="container">
          <div class="copyright">
            &copy; Copyright <strong><span>@jay</span></strong>. All Rights Reserved
          </div>
        </div>
      </div>
</body>
</html>

