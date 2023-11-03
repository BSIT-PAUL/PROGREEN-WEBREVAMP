
//Ajax for Deleting Employees
$(document).ready(function () {
    // Handle the click event for the "Delete" button within the modal
    $("#confirmDelete").on("click", function () {
        var employeeID = $(this).data("employee-id");
        $.ajax({
            type: "POST",
            url: "delete_employee.php",
            data: { employee_id: employeeID },
            success: function (data) {
                // Handle the response from the server
                if (data === 'Employee deleted successfully') {
                    // Reload the page or update the table to reflect the changes
                    location.reload();
                } else {
                    alert("Error deleting employee");
                }
            }
        });
    });

    // Handle the click event for the ".edit_delete" elements
    $(".edit_delete").on("click", function () {
        var employeeID = $(this).data("employee-id");
        // Set the data-employee-id attribute for the "confirmDelete" button
        $("#confirmDelete").data("employee-id", employeeID);
    });
});


//Ajax For Updating Employee
$(document).ready(function () {
    // ...

    // Handle the click event for the ".edit_employee" elements
    $(".edit_employee").on("click", function () {
        var employeeID = $(this).data("employee-id");

        // Use AJAX to fetch the employee data based on employeeID
        $.ajax({
            type: "GET",
            url: "get_employee_data.php?employee_id=" + employeeID,
            success: function (data) {
                var employeeData = JSON.parse(data);
                $("#first_name").val(employeeData.firstName);
                $("#last_name").val(employeeData.lastName);
                $("#department_id").val(employeeData.departmentID);
                $("#job_id").val(employeeData.jobID);
                $("#employment_type").val(employeeData.employmentType);
                $("#salary").val(employeeData.salary);
                $("#salary_frequency").val(employeeData.salaryFrequency);

                // Set the data-employee-id attribute for the "confirmUpdate" button
                $("#confirmUpdate").data("employee-id", employeeID);
            }
        });
    });

    // Handle the click event for the "confirmUpdate" button within the modal
    $("#confirmUpdate").on("click", function () {
        var employeeID = $(this).data("employee-id");
        var first_name = $("#first_name").val();
        var last_name = $("#last_name").val();
        var department_id = $("#department_id").val();
        var job_id = $("#job_id").val();
        var employment_type = $("#employment_type").val();
        var salary = $("#salary").val();
        var salary_frequency = $("#salary_frequency").val();

        // Use AJAX to send the updated employee data to the server
        $.ajax({
            type: "POST",
            url: "update_employee.php",
            data: {
                employee_id: employeeID,
                first_name: first_name,
                last_name: last_name,
                department_id: department_id,
                job_id: job_id,
                employment_type: employment_type,
                salary: salary,
                salary_frequency: salary_frequency
            },
            success: function (data) {
                if (data === 'Employee updated successfully') {
                    location.reload();
                } else {
                    alert("Error updating employee");
                }
            }
        });
    });
});
