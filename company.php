<?php
	include("database/dbcon.php");
	include_once("includes/system_header.php");
	include_once("includes/system_main_wraper.php");
	include_once("includes/system_navbar.php");
	include("includes/sidebar.php");
?>

		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="row">
					<div class="col-xl-12 col-sm-12 col-12 ">
						<div class="breadcrumb-path mb-4">
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php"><img src="assets/img/dash.png" class="mr-2" alt="breadcrumb">Home</a>
								</li>
								<li class="breadcrumb-item active"> Company</li>
							</ul>
							<h3>Company </h3>
						</div>
					</div>
					<div class="col-xl-12 col-sm-12 col-12 ">
						<div class="row">
							<div class="col-xl-8 col-sm-12 col-12 d-flex ">
								<div class="card card-lists flex-fill">
									<div class="card-header">
										<h2 class="card-titles">Focus Technologies</h2>
										<a class="edit-link" data-toggle="modal" data-target="#editcompany"> <i data-feather="edit"></i></a>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-xl-6 col-sm-12 col-12 d-flex ">
												<div class="member-registor flex-fill">
													<ul>
														<li>
															<label>Register Number</label>
															<span>FT0070</span>
														</li>
														<li>
															<label>Incorporation Date</label>
															<span>07 May 2000</span>
														</li>
														<li>
															<label>VAT Number</label>
															<span>VT0070</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="col-xl-6 col-sm-12 col-12 d-flex">
												<div class="member-address flex-fill">
													<label>Address</label>
													<span>Santiago de Surco <br> Av.Caminos del Inca 1325 <br> United States</span>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xl-12 col-sm-12 col-12 ">
												<div class="btn-link my-3">
													<a class="btn btn-new" data-toggle="modal" data-target="#addcompany">Add Company Information</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-sm-12 col-12 d-flex">
								<div class="card  flex-fill">
									<div class="card-header">
										<h2 class="card-titles">Focus Technologies</h2>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-xl-12 col-sm-12 col-12 ">
												<div class="member-edits">
													<ul>
														<li>
															<label>07448503267</label>
															<a class="edit-link"> <i data-feather="edit"></i></a>
														</li>
														<li>
															<label>focustechnology.com</label>
															<a class="edit-link"> <i data-feather="edit"></i></a>
														</li>
														<li>
															<label><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f29a80b2949d9187818697919a9c9d9e9d958bdc919d9f">[email&#160;protected]</a></label>
															<a class="edit-link"> <i data-feather="edit"></i></a>
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
					<!-- -->
					<div class="col-xl-12 col-sm-12 col-12 ">
						<div class="row">
							<div class="col-xl-6 col-sm-12 col-12 d-flex">
								<div class="card card-lists flex-fill">
									<div class="card-header">
										<h2 class="card-titles">Focus Technologies<span>Head Office</span></h2>
										<a class="edit-link" data-toggle="modal" data-target="#editoffice"> <i data-feather="edit"></i></a>
									</div>
									<div class="card-body d-flex align-items-center">
										<div class=" member-head employee-image">
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
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-sm-12 col-12  d-flex">
								<div class="card card-lists flex-fill">
									<div class="card-header">
										<h2 class="card-title">Overview </h2>
									</div>
									<div class="card-body">
										<div class="over-view-path">
											<ul>
												<li>
													<label>Department</label>
													<span>6</span>
												</li>
												<li>
													<label>Employees</label>
													<span>7</span>
												</li>
											</ul>
										</div>
										<div class="btn-set pl-0">
											<a class="btn btn-apply" href="employee.php">People Directory</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// Retrieve form data
			$departmentID = $_POST["departmentID"];
			$companyNumber = $_POST["companyNumber"];
			$incorporationDate = $_POST["incorporationDate"];
			$address = $_POST["companyAddress"];
			$city = $_POST["companyCity"];
			$country = $_POST["companyCountry"];
			$postalCode = $_POST["postalCode"];

			// SQL query to insert data into the "company" table
			$sql = "INSERT INTO company (deptID, companyNum, incDate, address, city, country, postalCode)
					VALUES ('$departmentID', '$companyNumber', '$incorporationDate', '$address', '$city', '$country', '$postalCode')";

			if (mysqli_query($con, $sql)) {
				// Data inserted successfully
				echo "Company information inserted successfully.";
			} else {
				// Error occurred while inserting data
				echo "Error: " . mysqli_error($con);
			}

			// Close the database connection
			mysqli_close($con);
		}
		?>


		<div class="customize_popup">
			<div class="modal fade" id="addcompany" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="staticBackdropLabel">Add Company Information</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<!-- Inside your "Add Company Information" modal -->
						<div class="modal-body">
							<form method="post">
								<div class="col-md-12 p-0 form-popup">
									<label for="departmentID">Department Name</label>
									<select name="departmentID" class="input-form" required>
										<option value="Select department" selected disabled>Select Department</option>
										<?php
										// Fetch departments from the 'department' table
										$departmentQuery = mysqli_query($con, "SELECT * FROM department");

										while ($row = mysqli_fetch_assoc($departmentQuery)) {
											echo "<option value='" . $row['deptID'] . "'>" . $row['deptName'] . "</option>";
										}
										?>
									</select>
								</div>
								<div class="col-md-12 p-0 form-popup">
									<label for="companyNumber">Registered Company Number</label>
									<input type="text" name="companyNumber" required>
								</div>
								<div class="col-md-12 p-0 form-popup">
									<label for="incorporationDate">Incorporation Date</label>
									<input type="date" name="incorporationDate" required>
								</div>
								<div class="col-md-12 p-0 form-popup">
									<label for="companyAddress">Address</label>
									<input type="text" name="companyAddress" required>
								</div>
								<div class="col-md-12 p-0 form-popup">
									<label for="companyCity">City</label>
									<input type="text" name="companyCity" required>
								</div>
								<div class="col-md-12 p-0 form-popup">
									<label for="companyCountry">Country</label>
									<input type="text" name="companyCountry" required>
								</div>
								<div class="col-md-12 p-0 form-popup">
									<label for="postalCode">Postal - Code</label>
									<input type="text" name="postalCode" required>
								</div>
								<div class="modal-footer">
									<button type="submit" class="btn btn-primary">Add</button>
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="customize_popup">
			<div class="modal fade" id="editcompany" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="staticBackdropLabel">Edit Company Information</h5>
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
								<div class=" form-popup">
									<label>Registered Company Number</label>
									<input type="text">
								</div>
								<div class=" form-popup">
									<label>Incorporation Date</label>
									<input type="text">
								</div>
								<div class=" form-popup">
									<label>Vat Number</label>
									<input type="text">
								</div>
								<div class=" form-popup">
									<label>Address line 1</label>
									<input type="text">
								</div>
								<div class=" form-popup">
									<label>Address line 2</label>
									<input type="text">
								</div>
								<div class=" form-popup">
									<label>City</label>
									<input type="text">
								</div>
								<div class=" form-popup">
									<label>Country</label>
									<input type="text">
								</div>
								<div class=" form-popup">
									<label>Post - Code</label>
									<input type="text">
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary">Add</button>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="customize_popup">
			<div class="modal fade" id="editoffice" tabindex="-1" aria-labelledby="staticBackdropLabels" aria-hidden="true">
				<div class="modal-dialog modal-lg modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="staticBackdropLabels">Edit Office</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class=" col-md-12 p-0">
								<div class=" form-popup">
									<input type="text" placeholder="Office Name">
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-primary">Add</button>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="customize_popup">
			<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="staticBackdropLabels1" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered ">
					<div class="modal-content">
						<div class="modal-header text-centers border-0">
							<h5 class="modal-title text-center" id="staticBackdropLabels1">Are You Sure Want to Delete?</h5>
						</div>
						<div class="modal-footer text-centers">
							<button type="button" class="btn btn-primary">Delete</button>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
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
	<script src="js/activePage.js"></script>
	<script src="assets/js/script.js"></script>
</body>

</html>