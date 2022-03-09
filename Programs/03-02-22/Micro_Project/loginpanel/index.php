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
          <a href="index.php" class="active">
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
          <a href="add_customer.php">
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
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
      <img src="assets/images/admin.png" alt="">
        <span class="admin_name">admin</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        
        <div class="box">
          <a href="request.php">
          <div class="right-side">
            <div class="box-topic">Recent Requests</div>
          </div>
          <div class="left-side">
          </div></a>
        </div>
        <div class="box">
          <a href="add_customer.php">
          <div class="right-side">
            <div class="box-topic">Add Customer</div>
          </div></a>
        </div>
        <div class="box">
        <a href="view_customer.php">
          <div class="right-side">
            <div class="box-topic">View Customer</div>
          </div></a>
        </div><br>
        <div class="box">
        <a href="work_history.php">
          <div class="right-side">
            <div class="box-topic">Work History</div>
          </div></a>
        </div>
        <div class="box">
        <a href="store.php">
          <div class="right-side">
            <div class="box-topic">Store</div>
          </div></a>
        </div>
        <div class="box">
        <a href="employee.php">
          <div class="right-side">
            <div class="box-topic">Employees</div>
          </div></a>
        </div><br>
        <div class="box">
        <a href="message.php">
          <div class="right-side">
            <div class="box-topic">Messages</div>
          </div></a>
        </div>
        <div class="box">
        <a href="settings.php">
          <div class="right-side">
            <div class="box-topic">Settings</div>
          </div></a>
        </div>
        <div class="box">
          <a href="login.php">
          <div class="right-side">
            <div class="box-topic">Log Out</div>
          </div></a>
        </div>
        </div>
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

