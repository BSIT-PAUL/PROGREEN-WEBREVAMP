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
