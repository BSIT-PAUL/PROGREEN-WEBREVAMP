<?php
include("database/dbcon.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employee_id = $_POST['employee_id'];

    $sql = "DELETE FROM `attendance_records` WHERE employee_id = $employee_id";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Employee Attendance Deleted successfully";
    } else {
        echo "Error Deleting Employee Attendance: " . mysqli_error($con);
    }
}
?>