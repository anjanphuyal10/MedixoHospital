<?php
include "connectToDatabase.php";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $doctorId = $_POST['doctorId'];
    $fullName = $_POST['fullName'];
    $phoneNumber = $_POST['phoneNumber'];
    $speciality = $_POST['speciality'];
    $flag = $_POST['flag'];

    // Insert the data into the doctor table
    $query = "INSERT INTO doctor (doctorId, fullName, phoneNumber, speciality, flag)
              VALUES ('$doctorId', '$fullName', '$phoneNumber', '$speciality', '$flag')";

    if (!mysqli_query($connection, $query)) {
        echo "Error: " . mysqli_error($connection);
    } else {
        // Insert the data into the userLogin table with default flag value 3
        $userLoginQuery = "INSERT INTO userLogin (userId, fullName, phoneNumber, role)
                           VALUES ('$doctorId', '$fullName', '$phoneNumber', 3)";

        if (!mysqli_query($connection, $userLoginQuery)) {
            echo "Error: " . mysqli_error($connection);
        } else {
            header('location: doctorData.php');
        }
    }
}
$connection->close();
?>
