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

            // Redirect the user based on their role
            switch ($roleId) {
                case 1: // User
                    header("Location: ../appointment.php");
                    break;
                case 2: // Admin
                    header("Location: ../php/adminPanel.php");
                    break;
                case 3: // Doctor
                    // Check if the doctor exists in the doctor table
                    $doctorId = $row['userId'];
                    $doctorQuery = "SELECT doctorId FROM doctor WHERE doctorId = $doctorId";
                    $doctorResult = mysqli_query($connection, $doctorQuery);

                    if ($doctorResult && mysqli_num_rows($doctorResult) > 0) {
                        header("Location: ../php/doctorPanel.php?doctorId=$doctorId");
                    } else {
                        header("Location: ../errorUserCheck.html");
                    }
                    break;
                default:
                    header("Location: ../errorUserCheck.html");
                    break;
            }

            exit; // Exit after redirection
        }
    }
}

// User ID, full name, or phone number is incorrect or an error occurred
header("Location: ../errorUserCheck.html");
exit;
?>
