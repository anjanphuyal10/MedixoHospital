<?php
include 'connectToDatabase.php';

// Get the user ID, full name, and phone number from the form input
$userId = $_POST['userId'];
$fullName = $_POST['fullName'];
$phoneNumber = $_POST['phoneNumber'];

// Prepare the SQL query to check if the user ID exists in the userLogin table
$query = "SELECT * FROM userLogin WHERE userId = '$userId'";
$result = mysqli_query($connection, $query);

if ($result) {
    // User ID exists in the userLogin table
    if ($row = mysqli_fetch_assoc($result)) {
        // Verify the full name and phone number
        if ($row['fullName'] === $fullName && $row['phoneNumber'] === $phoneNumber) {
            $roleId = $row['role'];

            // Prepare the SQL query to retrieve the role name based on the role ID
            $roleQuery = "SELECT * FROM role WHERE roleId = '$roleId'";
            $roleResult = mysqli_query($connection, $roleQuery);

            if ($roleResult) {
                if ($roleRow = mysqli_fetch_assoc($roleResult)) {
                    $roleName = $roleRow['roleName'];

                    // Redirect the user based on the role
                    if ($roleName === 'user') {
                        header("Location: ../appointment.php");
                        exit;
                    } elseif ($roleName === 'admin') {
                        header("Location: ../php/adminPanel.php");
                        exit;
                    }
                }
            }
        }
    }
}

// User ID, full name, or phone number is incorrect or an error occurred
header("Location: ../errorUserCheck.html");
exit;
?>
