<?php
include "connectToDatabase.php";

// Assuming the doctorId is passed as a parameter, retrieve it
if (isset($_GET['doctorId'])) {
    $doctorId = $_GET['doctorId'];

    // Delete associated appointments first
    $deleteAppointmentsQuery = "DELETE FROM appointments WHERE doctorId = ?";
    $stmt = $connection->prepare($deleteAppointmentsQuery);
    $stmt->bind_param("s", $doctorId);
    $stmt->execute();
    $stmt->close();

    // Now, delete the doctor record
    $deleteDoctorQuery = "DELETE FROM doctor WHERE doctorId = ?";
    $stmt = $connection->prepare($deleteDoctorQuery);
    $stmt->bind_param("s", $doctorId);
    $stmt->execute();

    // Check if the deletion was successful
    if ($stmt->affected_rows > 0) {
        header("Location: doctorData.php");
        exit();
    } else {
        echo "Failed to delete doctor with doctorId $doctorId.";
    }

    $stmt->close();
} else {
    echo "Invalid doctorId provided.";
}

$connection->close();
?>
