<?php
	include_once("includes/system_header.php");
	include_once("includes/system_main_wraper.php");
	include_once("includes/system_navbar.php");
?>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
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
								<li><a href="employee.php">All</a></li>
								<li><a href="employee-team.php">Teams</a></li>
								<li><a class="active" href="#">Offices</a></li>
							</ul>
							<a class="btn-add" href="add-employee.php"><i data-feather="plus"></i> Add Person</a>
						</div>
					</div>
				</div>
				<div class="row mb-3">
					<div class="col-xl-10 col-sm-8 col-12 ">
						<label class="employee_count">1 Office</label>
					</div>
					<div class="col-xl-1 col-sm-2 col-12 ">
						<a href="#" class="btn-view active "><i data-feather="grid"></i> </a>
					</div>
					<div class="col-xl-1 col-sm-2 col-12 ">
						<a href="employee.php" class="btn-view "><i data-feather="list"></i> </a>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-12 col-sm-12 col-12 ">
						<div class="card  card-lists">
							<div class="card-header  ">
								<h2 class="card-titles">Create New Office</h2>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-xl-8 col-sm-12 col-12 ">
										<input type="text" placeholder="Office Name" class="input-form">
									</div>
									<div class="col-xl-2 col-sm-6 col-6 ">
										<a href="#" class="btn-create " data-toggle="modal" data-target="#createOffice">Create Office </a>
									</div>
									<div class="col-xl-2 col-sm-6 col-6 ">
										<a href="#" class="btn-cancel ">Cancel </a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-12 col-sm-12 col-12 ">
						<div class="card">
							<div class="card-header create-formhead">
								<h2 class="card-titles">Focus Technologies<span>Head Office</span></h2>
								<a data-toggle="modal" data-target="#edit" class="edit-link"><i data-feather="edit"></i> </a>
							</div>
							<div class="card-body">
								<div class="member-formcontent member-row">
									<div class="member-head">
										<h2>Members</h2>
										<div class="avatar-group">
											<div class="avatar avatar-xs group_img group_header">
												<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-10.jpg">
											</div>
											<div class="avatar avatar-xs group_img group_header">
												<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-15.jpg">
											</div>
											<div class="avatar avatar-xs group_img group_header">
												<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-16.jpg">
											</div>
											<div class="avatar avatar-xs group_img group_header">
												<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-17.jpg">
											</div>
											<div class="avatar avatar-xs group_img group_header">
												<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-14.jpg">
											</div>
											<div class="avatar avatar-xs group_img group_header">
												<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-18.jpg">
											</div>
										</div>
									</div>
									<div class="member_link">
										<a data-toggle="collapse" href="#table" role="button" aria-expanded="false" aria-controls="table"><i data-feather="chevron-down"></i></a>
									</div>
								</div>
								<div class="table-responsive collapse show" id="table">
									<table class="table  custom-table  no-footer">
										<thead>
											<tr>
												<th>Name</th>
												<th>Line Manager</th>
												<th>Team</th>
												<th>Office</th>
												<th>Permissions</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<div class="table-img">
														<a href="profile.php">
															<img src="assets/img/profiles/avatar-13.jpg" alt="profile" class="img-table" />
														</a>
														<label>Arvin Villaluna
														</label>
													</div>
												</td>
												<td>
													<label class="action_label">Richard Wilson </label>
												</td>
												<td>
													<label class="action_label2">Design </label>
												</td>
												<td><label>Focus Technologies </label></td>
												<td><label>Team Lead</label></td>
												<td class="tab-select">
													<select class="select">
														<option value="active">Active</option>
														<option value="inactive">Inactive</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>
													<div class="table-img">
														<a href="profile.php">
															<img src="assets/img/profiles/avatar-16.jpg" alt="profile" class="img-table" />
														</a>
														<label>Graciella Relevo
														</label>
													</div>
												</td>
												<td>
													<label class="action_label">Richard Wilson </label>
												</td>
												<td>
													<label class="action_label2">IOS </label>
												</td>
												<td><label>Focus Technologies </label></td>
												<td><label>Team Lead</label></td>
												<td class="tab-select">
													<select class="select">
														<option value="active">Active</option>
														<option value="inactive">Inactive</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>
													<div class="table-img">
														<a href="profile.php">
															<img src="assets/img/profiles/avatar-17.jpg" alt="profile" class="img-table" />
														</a>
														<label>Jenni Sims</label>
													</div>
												</td>
												<td>
													<label class="action_label">Richard Wilson </label>
												</td>
												<td>
													<label class="action_label2">Android </label>
												</td>
												<td><label>Focus Technologies </label></td>
												<td><label>Team Lead</label></td>
												<td class="tab-select">
													<select class="select">
														<option value="active">Active</option>
														<option value="inactive">Inactive</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>
													<div class="table-img">
														<a href="profile.php">
															<img src="assets/img/profiles/avatar-19.jpg" alt="profile" class="img-table" />
														</a>
														<label>Stacey Linville</label>
													</div>
												</td>
												<td>
													<label class="action_label">Richard Wilson </label>
												</td>
												<td>
													<label class="action_label2">Testing </label>
												</td>
												<td><label>Focus Technologies </label></td>
												<td><label>Team Lead</label></td>
												<td class="tab-select">
													<select class="select">
														<option value="active">Active</option>
														<option value="inactive">Inactive</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>
													<div class="table-img">
														<a href="profile.php">
															<img src="assets/img/profiles/avatar-14.jpg" alt="profile" class="img-table" />
														</a>
														<label>Maria Cotton</label>
													</div>
												</td>
												<td>
													<label class="action_label">Richard Wilson </label>
												</td>
												<td>
													<label class="action_label2">PHP </label>
												</td>
												<td><label>Focus Technologies </label></td>
												<td><label>Team Lead</label></td>
												<td class="tab-select">
													<select class="select">
														<option value="active">Active</option>
														<option value="inactive">Inactive</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>
													<div class="table-img">
														<a href="profile.php">
															<img src="assets/img/profiles/avatar-18.jpg" alt="profile" class="img-table" />
														</a>
														<label>John Gibbs</label>
													</div>
												</td>
												<td>
													<label class="action_label">Richard Wilson </label>
												</td>
												<td>
													<label class="action_label2">PHP </label>
												</td>
												<td><label>Focus Technologies </label></td>
												<td><label>Team Lead</label></td>
												<td class="tab-select">
													<select class="select">
														<option value="active">Active</option>
														<option value="inactive">Inactive</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>
													<div class="table-img">
														<a href="profile.php">
															<img src="assets/img/profiles/avatar-10.jpg" alt="profile" class="img-table" />
														</a>
														<label>Richard Wilson</label>
													</div>
												</td>
												<td>
													<label class="action_label in_active">No </label>
												</td>
												<td>
													<label class="action_label2">Business </label>
												</td>
												<td><label>Focus Technologies </label></td>
												<td><label>Super Admin</label></td>
												<td class="tab-select">
													<select class="select">
														<option value="active">Active</option>
														<option value="inactive">Inactive</option>
													</select>
												</td>
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

		<div class="create_popup">
			<div class="modal fade" id="createOffice" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="staticBackdropLabel">Create Office</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class=" col-md-12 p-0">
								<div class=" form-popup">
									<label>Office Name</label>
									<input type="text" placeholder="Enter Department Name">
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-apply">Apply</button>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="customize_popup">
			<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="staticBackdropLabel">Edit Office</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class=" col-md-12 p-0">
								<div class=" form-popup">
									<label>Office Name</label>
									<input type="text">
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-apply">Apply</button>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
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