<?php
	include_once("includes/system_header.php");
	include_once("includes/system_main_wraper.php");
	include_once("includes/system_navbar.php");
?>
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
								<a href="leave.php"><img src="assets/img/leave.svg" alt="sidebar_img"> <span>Leave</span></a>
							</li>
							<li>
								<a href="review.php"><img src="assets/img/review.svg" alt="sidebar_img"><span>Review</span></a>
							</li>
							<li class="active">
								<a href="report.php"><img src="assets/img/report.svg" alt="sidebar_img"><span>Report</span></a>
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
							<h3>Reports </h3>
						</div>
					</div>
					<div class="col-xl-12 col-sm-12 col-12 mb-4">
						<div class="head-link-set">
							<ul>
								<li><a href="report.php">Team Reports</a></li>
								<li><a  class="active" href="payroll-report.php">Payroll Reports</a></li>
								<li><a href="security-report.php">Security Reports</a></li>
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
					<div class="col-xl-12 col-sm-12 col-12 ">
						<div class="card">
							<div class="table-responsive">
								<table class="table  custom-table no-footer">
									<thead>
										<tr class="text-center">
											<th>Full Name</th>
											<th>Job Role</th>
											<th>Email</th>
											<th>Salary</th>
											<th>Phone Number</th>
											<th>Secondary Number</th>
										</tr>
									</thead>
									<tbody>
										<tr>

											<?php
										$query = "SELECT * FROM employee e 
												  INNER JOIN employee_basic_info eb
												  ON e.employeeID = eb.employeeID";

										$result = mysqli_query($con, $query);

										while ($row = mysqli_fetch_assoc($result)) {
											echo "<tr class='text-center'>";
											echo "<td>" . $row['firstName'] . " " . $row['lastName'] . "</td>";
											echo "<td>" . $row['username'] . "</td>";

											// Fetch and display the department name
											$departmentQuery = "SELECT deptName FROM department WHERE deptID = " . $row['departmentID'];
											$departmentResult = mysqli_query($con, $departmentQuery);
											$departmentName = mysqli_fetch_assoc($departmentResult)['deptName'];

											// Fetch and display the job title
											$jobQuery = "SELECT jobTitle FROM job WHERE jobID = " . $row['jobID'];
											$jobResult = mysqli_query($con, $jobQuery);
											$jobTitle = mysqli_fetch_assoc($jobResult)['jobTitle'];

											echo "<td>";
											echo '<label><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="99fdf8f7e0eef8ebfdd9fce1f8f4e9f5fcb7faf6f4">[email&#160;protected]</a> </label>';
											echo "</td>";

											echo "<td> &#8369; " . $row['salary'] . "</td>";
											echo "<td>".$row["phoneNumber"]."</td>";
											echo "<td>".$row["secondaryNumber"]."</td>";
											echo "</tr>";
										}
										?>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="btn-set">
								<a class="btn btn-dwnd mt-3 mb-3">Download Report</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>


	<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="assets/js/jquery-3.6.0.min.js"></script>

	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<script src="assets/js/feather.min.js"></script>

	<script src="assets/plugins/select2/js/select2.min.js"></script>

	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<script src="assets/js/script.js"></script>
</body>

</html>