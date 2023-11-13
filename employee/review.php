<?php
include_once("includes/system_header.php");
include_once("includes/system_main_wraper.php");
include_once("includes/system_navbar.php");
include_once("includes/sidebar.php");
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
						<li class="breadcrumb-item active"> Attendance</li>
					</ul>
					<h3>Attendance</h3>
				</div>
			</div>
			<div class="col-xl-12 col-sm-12 col-12 mb-4">
				<div class="head-link-set">
					<ul>
						<li><a class="active" href="#">Overview</a></li>
						<li><a href="review-type.php">Review Types</a></li>
					</ul>
					<a class="btn-add" href="add-Review.php">Create Review</a>
				</div>
			</div>
			<div class="col-xl-12 col-sm-12 col-12">
				<div class="card">
					<div class="card-header">
						<h2 class="card-titles">Attendance</h2>
					</div>
					<div class="table-responsive">
					<table class="table custom-table no-footer">
    <thead>
        <tr>
            <th>Employee Name</th>
            <th>Employee ID</th>
            <th>Check-In Time</th>
            <th>Check-Out Time</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <label><?php echo $_SESSION['user_firstname'] . ' ' . $_SESSION['user_lastname']; ?></label>
            </td>
            <td>
                <label><?php echo $_SESSION['user_id']; ?></label>
            </td>
            <td>
                <label id="checkInTime">-</label>
            </td>
            <td>
                <label id="checkOutTime">-</label>
            </td>
            <td>
						<form method="post" action="">
                <div class="actionset">
								<button type="submit" class="btn btn-success" name="timeIn">Time In</button>
    						<button type="submit" class="btn btn-danger" name="timeOut">Time Out</button>
                </div>
						</form>
            </td>
        </tr>
        <!-- Add more rows for other employees -->
    </tbody>
</table>

</div>

<script>
    function formatDateTime(date) {
        var day = date.getDate();
        var month = date.toLocaleString('default', { month: 'short' });
        var year = date.getFullYear();
        var hours = date.getHours();
        var minutes = date.getMinutes();
        var ampm = hours >= 12 ? 'PM' : 'AM';

        // Convert to 12-hour format
        hours = hours % 12 || 12;

        return `${day} ${month} ${year} ${hours}:${minutes} ${ampm}`;
    }

    function timeIn() {
        var now = new Date();
        document.getElementById("checkInTime").innerText = formatDateTime(now);
    }

    function timeOut() {
        var now = new Date();
        document.getElementById("checkOutTime").innerText = formatDateTime(now);
    }
</script>
<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['timeIn'])) {
        // Time In button is clicked
        $employeeId = $_SESSION['user_id'];
        $checkInTime = date('Y-m-d H:i:s');
        $attendanceStatus = 'Present';

        // Insert data into the database
        $query = "INSERT INTO attendance_records (employee_id, check_in_time, attendance_status) VALUES (?, ?, ?)";
        $stmt = $con->prepare($query);
        $stmt->bind_param('iss', $employeeId, $checkInTime, $attendanceStatus);
        $stmt->execute();
        $stmt->close();
    } elseif (isset($_POST['timeOut'])) {
        // Time Out button is clicked
        $employeeId = $_SESSION['user_id'];
        $checkOutTime = date('Y-m-d H:i:s');
        $attendanceStatus = 'Present'; // Assuming the employee is considered 'Present' when checking out

        // Update the existing record with check_out_time
        $query = "UPDATE attendance_records SET check_out_time=?, attendance_status=? WHERE employee_id=? AND attendance_status='Present'";
        $stmt = $con->prepare($query);
        $stmt->bind_param('ssi', $checkOutTime, $attendanceStatus, $employeeId);
        $stmt->execute();
        $stmt->close();
    }
}
?>


		</div>
	</div>
</div>

<div class="customize_popup">
	<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="staticBackdropLabels1" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
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


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/js/script.js"></script>
</body>

</html>