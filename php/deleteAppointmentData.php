<?php
include 'connectToDatabase.php';
$appointmentId = $_GET['appointmentId'];

// Delete the appointment from the appointments table
$deleteQuery = "DELETE FROM appointments WHERE appointmentId = '$appointmentId'";

if (!mysqli_query($connection, $deleteQuery)) {
          echo "Error: " . mysqli_error($connection);
} else {
          // Redirect back to the appointment.php page or a success page
          header("Location: appointmentData.php");
          exit();
}

mysqli_close($connection);
?>

