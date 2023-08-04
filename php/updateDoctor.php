<?php
include 'connectToDatabase.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $doctorId = mysqli_real_escape_string($connection, $_POST['doctorId']);
    $fullName = mysqli_real_escape_string($connection, $_POST['fullName']);
    $phoneNumber = mysqli_real_escape_string($connection, $_POST['phoneNumber']);
    $speciality = mysqli_real_escape_string($connection, $_POST['speciality']);
    $flag = mysqli_real_escape_string($connection, $_POST['flag']);

    $editQuery = "UPDATE doctor SET fullName='$fullName', phoneNumber='$phoneNumber', speciality='$speciality', flag='$flag'   WHERE doctorId='$doctorId'";

    if (!mysqli_query($connection, $editQuery)) {
        echo "Error: " . mysqli_error($connection);
    } else {
        // Redirect back to the admin panel or a success page
        header("Location: doctorData.php");
        exit();
    }
}

mysqli_close($connection);
?>