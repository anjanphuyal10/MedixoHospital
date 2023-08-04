<?php
include "connectToDatabase.php";

// Assuming the doctorId is passed as a parameter, retrieve it
if (isset($_GET['doctorId'])) {
          $doctorId = $_GET['doctorId'];

          // Prepare and execute the DELETE query
          $query = "DELETE FROM doctor WHERE doctorId = ?";
          $stmt = $connection->prepare($query);
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
