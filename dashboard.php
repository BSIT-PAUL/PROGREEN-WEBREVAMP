<?php
include 'database/dbcon.php';
include_once("includes/system_header.php");
include_once("includes/system_main_wraper.php");
include_once("includes/system_navbar.php");
include_once("includes/sidebar.php");
?>
<div class="page-wrapper">
	<div class="content container-fluid">
		<div class="page-name 	mb-4">
			<h4 class="m-0"><img src="assets/img/profile.jpg" class="mr-1" alt="profile" /> Welcome Admin</h4>
			<label>Sat, 21 Oct 2023
			</label>
		</div>
		<div class="row mb-4">
			<div class="col-xl-6 col-sm-12 col-12">
				<div class="breadcrumb-path ">
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php"><img src="assets/img/dash.png" class="mr-3" alt="breadcrumb" />Home</a>
						</li>
						<li class="breadcrumb-item active">Dashboard</li>
					</ul>
					<h3>Admin Dashboard</h3>
				</div>
			</div>
			<div class="col-xl-6 col-sm-12 col-12">
				<div class="row">
					<div class="col-xl-12 col-sm-12 col-12">
						<a class="btn-dash" href="#"> Admin Dashboard</a>
					</div>
					<!-- <div class="col-xl-6 col-sm-6 col-12">
								<a class="btn-emp" href="index-employee.php">Employee Dashboard</a>
							</div> -->
				</div>
			</div>
		</div>
		<?php

		// SQL query to get employee count
		$sqlEmployeeCount = "SELECT COUNT(*) as employeeCount FROM `employee`";
		$resultEmployeeCount = $con->query($sqlEmployeeCount);


		// Fetch the count
		$rowEmployeeCount = $resultEmployeeCount->fetch_assoc();
		$employeeCount = $rowEmployeeCount['employeeCount'];


		// Query to get the department count
		$sqlDepartmentCount = "SELECT COUNT(*) as department_count FROM `department`";
		$resultDepartmentCount = mysqli_query($con, $sqlDepartmentCount);

		// Fetch the result
		$rowDepartmentCount = mysqli_fetch_assoc($resultDepartmentCount);
		$departmentCount = $rowDepartmentCount['department_count'];

		// Query to get the leave count
		$sqlLeaveCount = "SELECT COUNT(*) as leave_count FROM `leave_application`";
		$resultLeaveCount = mysqli_query($con, $sqlLeaveCount);

		// Fetch the result
		$rowLeaveCount = mysqli_fetch_assoc($resultLeaveCount);
		$leaveCount = $rowLeaveCount['leave_count'];

		// Query to get the total salary
		$sqlTotalSalary = "SELECT SUM(`salary`) as total_salary FROM `employee`";
		$resultTotalSalary = mysqli_query($con, $sqlTotalSalary);

		// Fetch the result
		$rowTotalSalary = mysqli_fetch_assoc($resultTotalSalary);
		$totalSalary = $rowTotalSalary['total_salary'];

		// Convert total salary to millions
		$totalSalaryMillions = $totalSalary / 1000000;

		// Format the result with "M"
		$formattedSalary = number_format($totalSalaryMillions, 2) . "M";
		$sql = "SELECT d.deptName, COUNT(e.departmentID) AS marks_percentage_count
		FROM department d
		LEFT JOIN employee e ON d.deptID = e.departmentID
		GROUP BY d.deptName";

$result = $con->query($sql);

$label = array("Engineering", "Production", "Warehouse", "LCS", "GHQ", "GSS");
$percentage = array_fill_keys($label, 0);

while ($row = $result->fetch_assoc()) {
$percentage[$row["deptName"]] = $row["marks_percentage_count"];
}

$chartLabel = json_encode(array_keys($percentage));
$chartData = json_encode(array_values($percentage));



		// Close the database connection
		$con->close();

		?>
		<div class="row mb-4">
			<div class="col-xl-3 col-sm-6 col-12">
				<div class="card board1 fill1 ">
					<div class="card-body">
						<div class="card_widget_header">
							<label>Employees</label>
							<h4><?php echo $employeeCount; ?></h4>


						</div>
						<div class="card_widget_img">
							<img src="assets/img/dash1.png" alt="card-img" />
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-sm-6 col-12">
				<div class="card board1 fill2 ">
					<div class="card-body">
						<div class="card_widget_header">
							<label>Department</label>
							<h4><?php echo $departmentCount; ?></h4>
						</div>
						<div class="card_widget_img">
							<img src="assets/img/dash2.png" alt="card-img" />
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-sm-6 col-12">
				<div class="card board1 fill3 ">
					<div class="card-body">
						<div class="card_widget_header">
							<label>Leaves</label>
							<h4><?php echo $leaveCount; ?></h4>
						</div>
						<div class="card_widget_img">
							<img src="assets/img/dash3.png" alt="card-img" />
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-sm-6 col-12">
				<div class="card board1 fill4 ">
					<div class="card-body">
						<div class="card_widget_header">
							<label>Salary</label>
							<h4>$<?php echo $formattedSalary; ?></h4>
						</div>
						<div class="card_widget_img">
							<img src="assets/img/dash4.png" alt="card-img" />
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-6 d-flex mobile-h">
				<div class="card flex-fill">
					<div class="card-header">
						<div class="d-flex justify-content-between align-items-center">
							<h5 class="card-title">Total Employees by Department</h5>
						</div>
					</div>
					<div class="card-body">
    <canvas id="chartjs-doughnut"></canvas>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>
    <script>
        var chartLabel = <?php echo $chartLabel; ?>;
        var chartData = <?php echo $chartData; ?>;

        new Chart(document.getElementById("chartjs-doughnut"), {
            type: 'doughnut',
            data: {
                labels: chartLabel,
                datasets: [{
                    backgroundColor: ["#51EAEA", "#FCDDB0", "#FF9D76", "#FB3569", "#82CD47","#7638FF", "#22CC62"],
                    data: chartData
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom'
                    }
                },
                cutout: '50%', // the portion of the doughnut that is cutout in the middle
                radius: 180
            }
        });
    </script>
</div>

				</div>
			</div>
			<div class="col-xl-6 d-flex">
				<div class="card flex-fill">
					<div class="card-header">
						<div class="d-flex justify-content-between align-items-center">
							<h5 class="card-title">Total Salary By Unit</h5>
						</div>
					</div>
					<div class="card-body">
						<div id="sales_chart"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-6 col-sm-12 col-12 d-flex">
				<div class="card card-list flex-fill">
					<div class="card-header ">
						<h4 class="card-title">Total Salary By Unit</h4>
					</div>
					<div class="card-body">
						<div class="team-list">
							<div class="team-view">
								<div class="team-img">
									<img src="assets/img/profiles/avatar-03.jpg" alt="avatar" />
								</div>
								<div class="team-content">
									<label>Maria Cotton</label>
									<span>PHP</span>
								</div>
							</div>
							<div class="team-action">
								<ul>
									<li><a><i data-feather="trash-2"></i></a></li>
									<li><a><i data-feather="edit-2"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="team-list">
							<div class="team-view">
								<div class="team-img">
									<img src="assets/img/profiles/avatar-04.jpg" alt="avatar" />
								</div>
								<div class="team-content">
									<label>Graciella Relevo
									</label>
									<span>IOS</span>
								</div>
							</div>
							<div class="team-action">
								<ul>
									<li><a><i data-feather="trash-2"></i></a></li>
									<li><a><i data-feather="edit-2"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="team-list">
							<div class="team-view">
								<div class="team-img">
									<img src="assets/img/profiles/avatar-06.jpg" alt="avatar" />
								</div>
								<div class="team-content">
									<label>Jenni Sims</label>
									<span>Android</span>
								</div>
							</div>
							<div class="team-action">
								<ul>
									<li><a><i data-feather="trash-2"></i></a></li>
									<li><a><i data-feather="edit-2"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="team-list">
							<div class="team-view">
								<div class="team-img">
									<img src="assets/img/profiles/avatar-11.jpg" alt="avatar" />
								</div>
								<div class="team-content">
									<label>Danny</label>
									<span>Design</span>
								</div>
							</div>
							<div class="team-action">
								<ul>
									<li><a><i data-feather="trash-2"></i></a></li>
									<li><a><i data-feather="edit-2"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-sm-12 col-12 d-flex">
				<div class="card card-list flex-fill">
					<div class="card-header">
						<div class="">
							<h4 class="card-title">Recent Activities</h3>
						</div>
					</div>
					<div class="card-body dash-activity">
						<div class="slimscroll activity_scroll">
							<div class="activity-set">
								<div class="activity-img">
									<img src="assets/img/profiles/avatar-02.jpg" alt="avatar">
								</div>
								<div class="activity-content">
									<label>Lorem ipsum dolor sit amet,</label>
									<span>2 hours ago</span>
								</div>
							</div>
							<div class="activity-set">
								<div class="activity-img">
									<img src="assets/img/profiles/avatar-05.jpg" alt="avatar">
								</div>
								<div class="activity-content">
									<label>Lorem ipsum dolor sit amet,</label>
									<span>3 hours ago</span>
								</div>
							</div>
							<div class="activity-set">
								<div class="activity-img">
									<img src="assets/img/profiles/avatar-07.jpg" alt="avatar">
								</div>
								<div class="activity-content">
									<label>Lorem ipsum dolor sit amet,</label>
									<span>4 hours ago</span>
								</div>
							</div>
							<div class="activity-set">
								<div class="activity-img">
									<img src="assets/img/profiles/avatar-08.jpg" alt="avatar">
								</div>
								<div class="activity-content">
									<label>Lorem ipsum dolor sit amet,</label>
									<span>5 hours ago</span>
								</div>
							</div>
							<div class="activity-set">
								<div class="activity-img">
									<img src="assets/img/profiles/avatar-09.jpg" alt="avatar">
								</div>
								<div class="activity-content">
									<label>Lorem ipsum dolor sit amet,</label>
									<span>6 hours ago</span>
								</div>
							</div>
							<div class="activity-set">
								<div class="activity-img">
									<img src="assets/img/profiles/avatar-10.jpg" alt="avatar">
								</div>
								<div class="activity-content">
									<label>Lorem ipsum dolor sit amet,</label>
									<span>2 hours ago</span>
								</div>
							</div>
							<div class="activity-set">
								<div class="activity-img">
									<img src="assets/img/profiles/avatar-12.jpg" alt="avatar">
								</div>
								<div class="activity-content">
									<label>Lorem ipsum dolor sit amet,</label>
									<span>3 hours ago</span>
								</div>
							</div>
							<div class="activity-set">
								<div class="activity-img">
									<img src="assets/img/profiles/avatar-13.jpg" alt="avatar">
								</div>
								<div class="activity-content">
									<label>Lorem ipsum dolor sit amet,</label>
									<span>4 hours ago</span>
								</div>
							</div>
						</div>
						<div class="leave-viewall activit">
							<a>View all <img src="assets/img/right-arrow.png" class="ml-2" alt="arrow"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-sm-12 col-12 d-flex">
				<div class="card card-list flex-fill">
					<div class="card-header ">
						<h4 class="card-title-dash">Your Upcoming Leave</h4>
						<div class="dropdown">
							<button class="btn btn-action " type="button" id="roomsBtn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-ellipsis-h"></i>
							</button>
							<div class="dropdown-menu" aria-labelledby="roomsBtn">
								<a class="dropdown-item" href="#">Action</a>
							</div>
						</div>
					</div>
					<div class="card-body p-0">
						<div class="leave-set">
							<span class="leave-inactive">
								<i class="fas fa-briefcase"></i>
							</span>
							<label>Mon, 16 Dec 2021</label>
						</div>
						<div class="leave-set">
							<span class="leave-active">
								<i class="fas fa-briefcase"></i>
							</span>
							<label>Fri, 20 Dec 2021</label>
						</div>
						<div class="leave-set">
							<span class="leave-active">
								<i class="fas fa-briefcase"></i>
							</span>
							<label>Wed, 25 Dec 2021</label>
						</div>
						<div class="leave-set">
							<span class="leave-active">
								<i class="fas fa-briefcase"></i>
							</span>
							<label>Fri, 27 Dec 2021</label>
						</div>
						<div class="leave-set">
							<span class="leave-active">
								<i class="fas fa-briefcase"></i>
							</span>
							<label>Tue, 31 Dec 2021</label>
						</div>
						<div class="leave-viewall">
							<a href="leave.php">View all <img src="assets/img/right-arrow.png" class="ml-2" alt="arrow" /></a>
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

<script src="assets/plugins/apexchart/apexcharts.min.js"></script>
<script src="assets/plugins/apexchart/chart-data.js"></script>
<script src="js/activePage.js"></script>
<script src="assets/js/script.js"></script>
</body>

</html>