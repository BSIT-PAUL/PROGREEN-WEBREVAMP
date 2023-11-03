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
					<div class="col-xl-12 col-sm-12 col-12 mb-4">
						<div class="breadcrumb-path ">
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php"><img src="assets/img/dash.png" class="mr-2" alt="breadcrumb" />Home</a>
								</li>
								<li class="breadcrumb-item active"> Employees</li>
							</ul>
							<h3>Employees</h3>
						</div>
					</div>
					<div class="col-xl-12 col-sm-12 col-12 mb-4">
						<div class="head-link-set">
							<ul>
								<li><a class="active" href="#">All</a></li>
								<li><a href="employee-team.php">Teams</a></li>
								<li><a href="employee-office.php">Offices</a></li>
							</ul>
							<a class="btn-add" href="add-employee.php"><i data-feather="plus"></i> Add Employee</a>
						</div>
					</div>
					<div class="col-xl-12 col-sm-12 col-12 mb-4">
						<div class="row">
							<div class="col-xl-10 col-sm-8 col-12 ">
								<label class="employee_count">7 People</label>
							</div>
							<div class="col-xl-1 col-sm-2 col-12 ">
								<a href="#" class="btn-view active "><i data-feather="grid"></i> </a>
							</div>
							<div class="col-xl-1 col-sm-2 col-12 ">
								<a href="employee.php" class="btn-view "><i data-feather="list"></i> </a>
							</div>
						</div>
					</div>
					<div class="col-xl-12 col-sm-12 col-12 ">
						<div class="card grid-views">
							<div class="card-body">
								<div class="row">
									<div class="col-xl-4 col-sm-12 col-12 ">
										<div class="employee_grid">
											<a href="profile.php"><img src="assets/img/profiles/avatar-14.jpg" alt="profile" /></a>
											<h5>Maria Cotton</h5>
											<label>PHP Team Lead</label>
											<a><span class="__cf_email__" data-cfemail="254844574c44464a51514a4b65405d44485549400b464a48">[email&#160;protected]</span></a>
										</div>
									</div>
									<div class="col-xl-4 col-sm-12 col-12 ">
										<div class="employee_grid">
											<a href="profile.php"><img src="assets/img/profiles/avatar-15.jpg" alt="profile" /></a>
											<h5>Danny Ward</h5>
											<label>Designing Team Lead</label>
											<a><span class="__cf_email__" data-cfemail="187c797676616f796a7c587d60797568747d367b7775">[email&#160;protected]</span></a>
										</div>
									</div>
									<div class="col-xl-4 col-sm-12 col-12 ">
										<div class="employee_grid">
											<a href="profile.php"><img src="assets/img/profiles/avatar-16.jpg" alt="profile" /></a>
											<h5>Graciella Relevo
											</h5>
											<label>IOS Team Lead</label>
											<a><span class="__cf_email__" data-cfemail="0f6366616b6e6c7d6e796a7d4f6a776e627f636a216c6062">[email&#160;protected]</span></a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-4 col-sm-12 col-12 ">
										<div class="employee_grid">
											<a href="profile.php"><img src="assets/img/profiles/avatar-17.jpg" alt="profile" /></a>
											<h5>Jenni Sims</h5>
											<label>Android Team Lead</label>
											<a><span class="__cf_email__" data-cfemail="345e515a5a5d475d594774514c55594458511a575b59">[email&#160;protected]</span></a>
										</div>
									</div>
									<div class="col-xl-4 col-sm-12 col-12 ">
										<div class="employee_grid">
											<a href="profile.php"><img src="assets/img/profiles/avatar-18.jpg" alt="profile" /></a>
											<h5>John Gibbs</h5>
											<label>Business Team Lead</label>
											<a><span class="__cf_email__" data-cfemail="573d383f3933252e2433363b3217322f363a273b327934383a">[email&#160;protected]</span></a>
										</div>
									</div>
									<div class="col-xl-4 col-sm-12 col-12 ">
										<div class="employee_grid">
											<a href="profile.php"><img src="assets/img/profiles/avatar-19.jpg" alt="profile" /></a>
											<h5>Stacey Linville</h5>
											<label>Testing Team Lead</label>
											<a><span class="__cf_email__" data-cfemail="85f6f1e4e6e0fce9ecebf3ece9e9e0c5e0fde4e8f5e9e0abe6eae8">[email&#160;protected]</span></a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-4 col-sm-12 col-12 ">
										<div class="employee_grid">
											<a href="profile.php"><img src="assets/img/profiles/avatar-10.jpg" alt="profile" /></a>
											<h5>Richard Wilson</h5>
											<label>Operation Manager</label>
											<a><span class="__cf_email__" data-cfemail="a3d1cac0cbc2d1c7d4cacfd0cccde3c6dbc2ced3cfc68dc0ccce">[email&#160;protected]</span></a>
										</div>
									</div>
									<div class="col-xl-4 col-sm-12 col-12 ">
										<div class="employee_grid">
											<a href="profile.php"><img src="assets/img/profiles/avatar-20.jpg" alt="profile" /></a>
											<h5>Daniel Griffing</h5>
											<label>Designing Team</label>
											<a><span class="__cf_email__" data-cfemail="8ce8ede2e5e9e0ebfee5eaeae5e2ebcce9f4ede1fce0e9a2efe3e1">[email&#160;protected]</span></a>
										</div>
									</div>
									<div class="col-xl-4 col-sm-12 col-12 ">
										<div class="employee_grid">
											<a href="profile.php"><img src="assets/img/profiles/avatar-21.jpg" alt="profile" /></a>
											<h5>Michelle Fairfax</h5>
											<label>PHP Team</label>
											<a><span class="__cf_email__" data-cfemail="f19c989299949d9d9497909883979089b19489909c819d94df929e9c">[email&#160;protected]</span></a>
										</div>
									</div>
								</div>
								<div class="row pagination_path">
									<div class="col-sm-12 col-md-5">
										<div class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 12 entries</div>
									</div>
									<div class="col-sm-12 col-md-7">
										<div class="dataTables_paginate paging_simple_number">
											<ul class="pagination">
												<li class="paginate_button page-item previous disabled">
													<a href="#" data-dt-idx="0" tabindex="0" class="page-link btnnavingation"><i data-feather="arrow-left"></i></a>
												</li>
												<li class="paginate_button page-item ">
													<a href="#" class="page-link">1</a>
												</li>
												<li class="paginate_button page-item ">
													<a href="#" tabindex="0" class="page-link">2</a>
												</li>
												<li class="paginate_button page-item ">
													<a href="#" tabindex="0" class="page-link">3</a>
												</li>
												<li class="paginate_button page-item ">
													<a href="#" tabindex="0" class="page-link">4</a>
												</li>
												<li class="paginate_button page-item ">
													<a href="#" tabindex="0" class="page-link">. . .</a>
												</li>
												<li class="paginate_button page-item ">
													<a href="#" tabindex="0" class="page-link">10</a>
												</li>
												<li class="paginate_button page-item next">
													<a href="#" tabindex="0" class="page-link btnnavingation"><i data-feather="arrow-right"></i></a>
												</li>
											</ul>
										</div>
									</div>
								</div>
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

	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<script src="assets/js/script.js"></script>
</body>

</html>