<?php
	include("database/dbcon.php");
	include_once("includes/system_header.php");
	include_once("includes/system_main_wraper.php");
	include_once("includes/system_navbar.php");
	include("includes/sidebar.php");
?>
<link rel="shortcut icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/style.css">

		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="row">
					<div class="col-xl-12 col-sm-12 col-12 mb-4">
						<div class="breadcrumb-path ">
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php"><img src="assets/img/dash.png" class="mr-2" alt="breadcrumb">Home</a>
								</li>
								<li class="breadcrumb-item active"> Leave</li>
							</ul>
							<h3>Leave</h3>
						</div>
					</div>
				</div>
				
				
				<div class="row">
					<div class="col-xl-12 col-sm-12 col-12 ">
						<div class="card">
							<div class="card-header">
								<h2 class="card-titles">Leave Details</h2>
							</div>
							<div class="card-body p-0">
								<div class="table-responsive">
									<table class="table  custom-table  no-footer">
										<thead>
											<tr>
												<th>Date</th>
												<th>Total Employees </th>
												<th>First Half </th>
												<th>Second Half </th>
												<th>Working From Home </th>
												<th>Absent</th>
												<th>Today Aways</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label>05 May 2019 </label></td>
												<td><label>7 </label></td>
												<td><label>6 </label></td>
												<td><label>6 </label></td>
												<td><label>1 </label></td>
												<td><label>0 </label></td>
												<td><label>1 </label></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-12 col-sm-12 col-12 ">
						<div class="card ">
							<div class="card-header">
								<h2 class="card-titles">Leave Details</h2>
							</div>
							<div class="card-body p-0">
								<div class="table-responsive">
									<table class="table  custom-table  no-footer">
										<thead>
											<tr class="text-center">
												<th>Employee</th>
												<th>Leave Type </th>
												<th>Start Date</th>
												<th>End Date</th>
												<th>Desc</th>
												<th>Status</th>
												<th colspan="3">Action</th>
											</tr>
										</thead>
										<tbody>
												<?php 
													$query = "SELECT * FROM leave_application lp
															  INNER JOIN employee e ON e.employeeID = lp.employee_id
															  WHERE lp.Status = 'Pending'";

													$result = mysqli_query($con, $query);

													while ($row = mysqli_fetch_assoc($result)) {
														echo "<tr class='text-center'>";
														echo "<td>" . $row['firstName'] . " " . $row['lastName'] . "</td>";
														echo "<td>" . $row['leave_type'] . "</td>";
														echo "<td>". $row["start_date"] . "</td>";
														echo "<td>". $row["end_date"] ."</td>";
														echo "<td>". $row["additional_reasons"] . "</td>";
														echo "<td>". $row["Status"] . "</td>";
														echo '<td>';
														echo '<div class="employee-head">';
														echo '<label><a class="action_label3" data-leave-id="'. $row['id'].'" data-toggle="modal" data-target="#approving">Approve</a></label>';

														echo '<label><a class="action_label4 text-center" data-decline-leave-id="'. $row['id'].'" data-toggle="modal" data-target="#delete">Reject <i data-feather="trash-2"></i> </a></label>';
														echo '</div>';
														echo '</td>';
														echo "</tr>";
													}
												?>
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


		<div class="customize_popup">
			<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
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
		<div class="customize_popup">
			<div class="modal fade" id="approving" tabindex="-1" aria-labelledby="staticBackdropLabels" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header text-centers border-0">
							<h5 class="modal-title text-center" id="staticBackdropLabels1">Are You Sure Want to Approve?</h5>
						</div>
						<div class="modal-footer text-centers">
							<button type="submit" class="btn btn-primary" id="confirmApprove">Approve</button>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="customize_popup">
			<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="staticBackdropLabels1" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header text-centers border-0">
							<h5 class="modal-title text-center" id="staticBackdropLabels1">Are You Sure Want to Reject?</h5>
						</div>
						<div class="modal-footer text-centers">
							<button type="submit" class="btn btn-primary" id="confirmReject">Reject</button>
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
	<script src="js/activePage.js"></script>
	<script src="assets/js/script.js"></script>
	<script src="assets/js/ajax.js"></script>
</body>

</html>