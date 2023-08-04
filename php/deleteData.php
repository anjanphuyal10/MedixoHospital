<?php
include 'connectToDatabase.php';
// Get the ID of the record to delete
$id = $_GET['id'];

// Delete the record from the "userLogin" table
$deleteQuerry = "DELETE FROM userLogin WHERE id='$id'";

if ($connection->query($deleteQuerry) === TRUE) {
          // Redirect back to the admin panel
          header("Location: adminPanel.php");
          exit();
} else {
          echo "Error: " . $deleteQuerry . "<br>" . $connection->error;
}

// Close the database connection
$conn->close();
?>
