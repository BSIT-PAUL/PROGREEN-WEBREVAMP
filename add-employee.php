<?php
	include_once("includes/system_header.php");
	include_once("includes/system_main_wraper.php");
	include_once("includes/system_navbar.php");
?>
<link rel="shortcut icon" href="assets/img/favicon.png">
	<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
	<link rel="stylesheet" href="assets/css/style.css">

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
								<a href="dashboard.php"><img src="assets/img/home.svg" alt="sidebar_img"> <span>Dashboard</span></a>
							</li>
							<li class="active">
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
							<li>
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
								<li class="breadcrumb-item"><a href="index.php">Home</a>
								</li>
								<li class="breadcrumb-item active"> Employees</li>
							</ul>
							<h3>Create Employees</h3>
						</div>
					</div>
					<div class="col-xl-12 col-sm-12 col-12 ">
						<div class="card">
							<div class="card-header">
								<h2 class="card-titles">Basic Details <span>Organized and secure.</span></h2>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-xl-6 col-sm-12 col-12 ">
										<div class="form-group">
											<input type="text" placeholder="First Name">
										</div>
									</div>
									<div class="col-xl-6 col-sm-12 col-12 ">
										<div class="form-group">
											<input type="text" placeholder="Last Name">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-6 col-sm-12 col-12 ">
										<div class="form-group">
											<input type="text" placeholder="Email">
										</div>
									</div>
									<div class="col-xl-6 col-sm-12 col-12 ">
										<div class="form-group">
											<input type="text" placeholder="Username">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-6 col-sm-12 col-12 ">
										<div class="form-group">
											<input type="password" placeholder="Password">
										</div>
									</div>
									<div class="col-xl-6 col-sm-12 col-12 ">
										<div class="form-group">
											<input type="password" placeholder="Confirm Password">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-12 col-sm-12 col-12 ">
						<div class="card ">
							<div class="card-header">
								<h2 class="card-titles">Employment Details<span>Let everyone know the essentials so they're fully prepared.</span></h2>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-xl-6 col-sm-12 col-12 ">
										<div class="form-group">
										<label for="select">Select Department</label>
											<select class="select">
												<option value="" selected disabled>Select Department</option>
												<option value="Engineering">Engineering</option>
												<option value="Production">Production</option>
												<option value="Warehouse">Warehouse</option>
												<option value="LCS">LCS</option>
												<option value="GHQ">GHQ</option>
												<option value="GSS">GSS</option>
											</select>
										</div>
									</div>
									<div class="col-xl-6 col-sm-12 col-12 ">
										<div class="form-group">
											<label for="date">Start Date</label>
											<input type="date" placeholder="Start Date">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-6 col-sm-12 col-12 ">
										<div class="form-group">
											<label for="select">Select Job Title</label>
										<select class="select">
												<option value="" selected disabled>Select Job Title</option>
												<option value="Production">Production</option>
												<option value="Warehouse">Warehouse</option>
												<option value="CSS">CSS</option>
												<option value="GHQ">GHQ</option>
												<option value="GSS">GSS</option>
											</select>
										</div>
									</div>
									<div class="col-xl-6 col-sm-12 col-12 ">
										<div class="form-group">
										<label for="select">Select Employment Type</label>
											<select class="select">
												<option value="Regular">Regular</option>
												<option value="Casual">Casual</option>
												<option value="Seasonal">Seasonal</option>
												<option value="Project">Project</option>
												<option value="Fix Term">Fix Term</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-12 col-sm-12 col-12 ">
						<div class="card">
							<div class="card-header">
								<h2 class="card-titles">Salary Details<span>Stored securely, only visible to Super Admins, Payroll Admins, and themselves.</span></h2>
							</div>
							<div class="card-body">
								<div class="row">
								<div class="col-xl-6 col-sm-12 col-12 ">
										<div class="form-group">
											<input type="number" placeholder="Salary">
										</div>
									</div>
									<div class="col-xl-6 col-sm-12 col-12 ">
										<div class="form-group">
											<select class="select">
												<option value="Select leave" selected disabled>Frequency </option>
												<option value="leave">Annualy</option>
												<option value="leave">Monthly</option>
												<option value="leave">Weekly</option>
												<option value="leave">Daily</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xl-12 col-sm-12 col-12 ">
								<div class="form-btn">
									<a href="#" class="btn btn-apply w-auto">Add Team Member</a>
									<a href="#" class="btn btn-secondary">Cancel</a>
								</div>
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

	<script src="assets/plugins/select2/js/select2.min.js"></script>

	<script src="assets/js/script.js"></script>
</body>

</html>