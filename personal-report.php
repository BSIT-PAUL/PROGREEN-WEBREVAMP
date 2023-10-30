<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>PROGREEN WebRevamp</title>

<link rel="shortcut icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/style.css">
<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
</head>
<body>

<div class="main-wrapper">

<div class="header">

<div class="header-left">
<a href="index.php" class="logo">
<img src="assets/img/logo_0.png" alt="Logo">
</a>
<a href="index.php" class="logo logo-small">
<img src="assets/img/logo (1).png" alt="Logo" width="30" height="30">
</a>
<a href="javascript:void(0);" id="toggle_btn">
<span class="bar-icon">
<span></span>
<span></span>
<span></span>
</span>
</a>
</div>




<div class="top-nav-search">
<form>
<input type="text" class="form-control" placeholder="">
<button class="btn" type="submit"><i class="fas fa-search"></i></button>
</form>
</div>


<a class="mobile_btn" id="mobile_btn">
<i class="fas fa-bars"></i>
</a>


<ul class="nav user-menu">

<li class="nav-item dropdown">
<a href="#" class="dropdown-toggle nav-link pr-0" data-toggle="dropdown">
<i data-feather="bell"></i> <span class="badge badge-pill"></span>
</a>
<div class="dropdown-menu notifications">
<div class="topnav-dropdown-header">
<span class="notification-title">Notifications</span>
<a href="javascript:void(0)" class="clear-noti"> Clear All</a>
</div>
<div class="noti-content">
<ul class="notification-list">
<li class="notification-message">
<a href="activities.php">
<div class="media">
<span class="avatar avatar-sm">
<img class="avatar-img rounded-circle" alt="" src="assets/img/profiles/avatar-02.jpg">
</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">Brian Johnson</span> paid the invoice <span class="noti-title">#DF65485</span></p>
<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="activities.php">
<div class="media">
<span class="avatar avatar-sm">
<img class="avatar-img rounded-circle" alt="" src="assets/img/profiles/avatar-03.jpg">
</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">Marie Canales</span> has accepted your estimate <span class="noti-title">#GTR458789</span></p>
<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="activities.php">
<div class="media">
<div class="avatar avatar-sm">
<span class="avatar-title rounded-circle bg-primary-light"><i class="far fa-user"></i></span>
 </div>
<div class="media-body">
<p class="noti-details"><span class="noti-title">New user registered</span></p>
<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="activities.php">
<div class="media">
<span class="avatar avatar-sm">
<img class="avatar-img rounded-circle" alt="" src="assets/img/profiles/avatar-04.jpg">
</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">Barbara Moore</span> declined the invoice <span class="noti-title">#RDW026896</span></p>
<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="activities.php">
<div class="media">
<div class="avatar avatar-sm">
<span class="avatar-title rounded-circle bg-info-light"><i class="far fa-comment"></i></span>
</div>
<div class="media-body">
<p class="noti-details"><span class="noti-title">You have received a new message</span></p>
<p class="noti-time"><span class="notification-time">2 days ago</span></p>
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="topnav-dropdown-footer">
<a href="activities.php">View all Notifications</a>
</div>
</div>
</li>


<li class="nav-item dropdown has-arrow main-drop">
<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
<span class="user-img">
<img src="assets/img/profile.jpg" alt="">
<span class="status online"></span>
</span>
<span>John Paul Bayoneto</span>
</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="profile.php"><i data-feather="user" class="mr-1"></i> Profile</a>
<a class="dropdown-item" href="settings.php"><i data-feather="settings" class="mr-1"></i> Settings</a>
<a class="dropdown-item" href="login.php"><i data-feather="log-out" class="mr-1"></i> Logout</a>
</div>
</li>

</ul>
<div class="dropdown mobile-user-menu show">
<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right ">
<a class="dropdown-item" href="profile.php">My Profile</a>
<a class="dropdown-item" href="settings.php">Settings</a>
<a class="dropdown-item" href="login.php">Logout</a>
</div>
</div>

</div>


<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div class="sidebar-contents">
<div id="sidebar-menu" class="sidebar-menu">
<div class="mobile-show">
<div class="offcanvas-menu">
<div class="user-info align-center bg-theme text-center">
<span class="lnr lnr-cross  text-white" id="mobile_btn_close">X</span>
<a href="javascript:void(0)" class="d-block menu-style text-white">
<div class="user-avatar d-inline-block mr-3">
<img src="assets/img/profiles/avatar-18.jpg" alt="user avatar" class="rounded-circle" width="50">
</div>
</a>
</div>
</div>
<div class="sidebar-input">
<div class="top-nav-search">
<form>
<input type="text" class="form-control" placeholder="Search here">
<button class="btn" type="submit"><i class="fas fa-search"></i></button>
</form>
</div>
 </div>
</div>
<ul>
<li>
<a href="index.php"><img src="assets/img/home.svg" alt="sidebar_img"> <span>Dashboard</span></a>
</li>
<li>
<a href="employee.php"><img src="assets/img/employee.svg" alt="sidebar_img"><span> Employees</span></a>
</li>
<li>
<a href="company.php"><img src="assets/img/company.svg" alt="sidebar_img"> <span> Company</span></a>
</li>
<li>
<a href="calendar.php"><img src="assets/img/calendar.svg" alt="sidebar_img"> <span>Calendar</span></a>
</li>
<li>
<a href="leave.php"><img src="assets/img/leave.svg" alt="sidebar_img"> <span>Leave</span></a>
</li>
<li>
<a href="review.php"><img src="assets/img/review.svg" alt="sidebar_img"><span>Review</span></a>
</li>
<li class="active">
<a href="report.php"><img src="assets/img/report.svg" alt="sidebar_img"><span>Report</span></a>
</li>
<li>
<a href="manage.php"><img src="assets/img/manage.svg" alt="sidebar_img"> <span>Manage</span></a>
</li>
<li>
<a href="settings.php"><img src="assets/img/settings.svg" alt="sidebar_img"><span>Settings</span></a>
</li>
<li>
<a href="profile.php"><img src="assets/img/profile.svg" alt="sidebar_img"> <span>Profile</span></a>
</li>
</ul>
<ul class="logout">
<li>
<a href="login.php"><img src="assets/img/logout.svg" alt="sidebar_img"><span>Log out</span></a>
</li>
</ul>
</div>
</div>
</div>
</div>


<div class="page-wrapper">
<div class="content container-fluid">
<div class="row">
<div class="col-xl-12 col-sm-12 col-12 ">
<div class="breadcrumb-path mb-4">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php"><img src="assets/img/dash.png" class="mr-2" alt="breadcrumb">Home</a>
</li>
<li class="breadcrumb-item active"> Reports</li>
</ul>
<h3>Reports	</h3>
</div>
</div>
<div class="col-xl-12 col-sm-12 col-12 mb-4">
<div class="head-link-set">
<ul>
<li><a class="active" href="#">Team Reports</a></li>
<li><a href="leave-report.php">Leave Reports</a></li>
<li><a href="payroll-report.php">Payroll Reports</a></li>
<li><a href="contact-report.php">Contact Reports</a></li>
<li><a href="email-report.php">Email Reports</a></li>
<li><a href="security-report.php">Security Reports</a></li>
<li><a href="wfh-report.php">W F H Reports</a></li>
</ul>
</div>
</div>
<div class="col-xl-12 col-sm-12 col-12 mb-4">
<div class="form-set">
<div class="row">
<div class="col-xl-3 col-sm-6 col-12 ">
<div class="form-group">
<input type="text" placeholder="start Date">
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12">
<div class="form-group">
<input type="text" placeholder="From">
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12 ">
<div class="form-group">
<input type="text" placeholder="To">
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12 ">
<a class="btn btn-save">Apply Filter</a>
</div>
</div>
</div>
</div>
<div class="col-xl-12 col-sm-12 col-12 mb-4">
<div class="head-link-set">
<ul>
<li><a href="report.php">Offical Reports</a></li>
<li><a class="active" href="#">Personal Reports</a></li>
</ul>
</div>
</div>
<div class="col-xl-12 col-sm-12 col-12 ">
<div class="card">
<div class="table-responsive">
<table class="table  custom-table  no-footer">
<thead>
<tr>
<th>Reviewers</th>
<th>Gender	</th>
<th>Salary Current</th>
<th>DOB</th>
<th>Phone Number	</th>
<th>Address</th>
<th>Bank Name	</th>
<th>Account Number</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<div class="table-img">
<a href="profile.php">
<img src="assets/img/profiles/avatar-13.jpg" alt="profile" class="img-table">
</a>
<label>Arvin Villaluna
</label>
</div>
</td>
<td><label>Male</label></td>
<td><label>$3000</label></td>
<td><label>25 Jun 1984	</label></td>
<td><label>9876543221</label></td>
<td><label>201 Lunetta Street,Plant City,<br>Florida(FL), 33566</label></td>
<td><label>Life Essence Banks, Inc.	</label></td>
<td><label>112300987652	</label></td>
</tr>
<tr>
<td>
<div class="table-img">
<a href="profile.php">
<img src="assets/img/profiles/avatar-16.jpg" alt="profile" class="img-table">
</a>
<label>Graciella Relevo
</label>
</div>
</td>
<td><label>Female</label></td>
<td><label>$2000</label></td>
<td><label>14 Feb 1984	</label></td>
<td><label>9876543231</label></td>
<td><label>683 Longview Avenue,New York,<br>New York(NY), 10011	</label></td>
<td><label>Life Essence Banks, Inc.	</label></td>
<td><label>112300987652	</label></td>
</tr>
<tr>
<td>
<div class="table-img">
<a href="profile.php">
<img src="assets/img/profiles/avatar-17.jpg" alt="profile" class="img-table">
</a>
<label> Jenni Sims</label>
</div>
</td>
<td><label>Female</label></td>
<td><label>$1000</label></td>
<td><label>15 Jul 1984	</label></td>
<td><label>9876534214	</label></td>
<td><label>4923 Front Street,Detroit, <br>Michigan(MI), 48226	</label></td>
<td><label>Life Essence Banks, Inc.	</label></td>
<td><label>112300987652	</label></td>
</tr>
<tr>
<td>
<div class="table-img">
<a href="profile.php">
<img src="assets/img/profiles/avatar-19.jpg" alt="profile" class="img-table">
</a>
<label> Stacey Linville</label>
</div>
</td>
<td><label>Male</label></td>
<td><label>$1000</label></td>
<td><label>15 Jul 1984	</label></td>
<td><label>9876534214	</label></td>
<td><label>4923 Front Street,Detroit, <br>Michigan(MI), 48226	</label></td>
<td><label>Life Essence Banks, Inc.	</label></td>
<td><label>112300987652	</label></td>
</tr>
<tr>
<td>
<div class="table-img">
<a href="profile.php">
<img src="assets/img/profiles/avatar-14.jpg" alt="profile" class="img-table">
</a>
<label>Maria Cotton</label>
</div>
</td>
<td><label>Male</label></td>
<td><label>$3000</label></td>
<td><label>25 Jun 1984	</label></td>
<td><label>9876543221	</label></td>
<td><label>201 Lunetta Street,Plant City,<br>Florida(FL), 33566</label></td>
<td><label>Life Essence Banks, Inc.	</label></td>
<td><label>112300987652	</label></td>
</tr>
<tr>
<td>
<div class="table-img">
<a href="profile.php">
<img src="assets/img/profiles/avatar-18.jpg" alt="profile" class="img-table">
</a>
<label>Arvin Villaluna
</label>
</div>
</td>
<td><label>Male</label></td>
<td><label>$2000</label></td>
<td><label>14 Feb 1984	</label></td>
<td><label>9876543231	</label></td>
<td><label>683 Longview Avenue,New York,<br>New York(NY), 10011	</label></td>
<td><label>Life Essence Banks, Inc.	</label></td>
<td><label>112300987652	</label></td>
</tr>
<tr>
<td>
<div class="table-img">
<a href="profile.php">
<img src="assets/img/profiles/avatar-10.jpg" alt="profile" class="img-table">
</a>
<label>Maria Cotton</label>
</div>
</td>
<td><label>Male</label></td>
<td><label>$1000</label></td>
<td><label>15 Jul 1984 </label></td>
<td><label>9876543231	</label></td>
<td><label>4923 Front Street,Detroit,<br>Michigan(MI), 48226	</label></td>
<td><label>Life Essence Banks, Inc.	</label></td>
<td><label>112300987652	</label></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>

</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>