<?php
include 'connectToDatabase.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = mysqli_real_escape_string($connection, $_POST['id']);
    $userId = mysqli_real_escape_string($connection, $_POST['userId']);
    $fullName = mysqli_real_escape_string($connection, $_POST['fullName']);
    $phoneNumber = mysqli_real_escape_string($connection, $_POST['phoneNumber']);
    $role = mysqli_real_escape_string($connection, $_POST['role']);

    // Update the data in the "userLogin" table
    $editQuery = "UPDATE userLogin SET userId='$userId', fullName='$fullName', phoneNumber='$phoneNumber', role='$role' WHERE id='$id'";

    if (!mysqli_query($connection, $editQuery)) {
        echo "Error: " . mysqli_error($connection);
    } else {
        // Redirect back to the admin panel or a success page
        header("Location: adminPanel.php");
        exit();
    }
}

$connection->close();
?>
