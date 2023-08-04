<link rel="shortcut icon" href="../favicon.svg" type="image/svg+xml">

<?php
include 'connectToDatabase.php';

// Check if the connection was successful
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Generate a 6-digit random number for the userId
$userId = mt_rand(211111, 999999);

// Validate and sanitize user input
$fullName = mysqli_real_escape_string($connection, $_POST['fullName']);
$phoneNumber = mysqli_real_escape_string($connection, $_POST['phoneNumber']);

// Insert data into the "userLogin" table
$insertQuery = "INSERT INTO userLogin (userId, fullName, phoneNumber, role) VALUES ('$userId', '$fullName', '$phoneNumber', '1')";

if (!mysqli_query($connection, $insertQuery)) {
    echo "Error: " . mysqli_error($connection);
} else {
    header('location: ../userCreated.html');
}

// Close the database connection
mysqli_close($connection);



require_once '../Twilio/autoload.php';

use Twilio\Rest\Client;

// Function to send SMS using Twilio API
function sendSMS($to, $message)
{
    require_once 'config.php';

    // Create a Twilio client
    $client = new Client($accountSid, $authToken);

    // Send the SMS
    $client->messages->create(
        $to,
        [
            'from' => $twilioNumber,
            'body' => $message
        ]
    );
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Send SMS notification
    $message = "Your UserID of Medixo Hospital is: " . $userId . ". Use it to Login with registered Phone Number.";
    sendSMS('+9779847950672', $message);

    if (!mysqli_query($connection, $editQuery)) {
        echo "Error: " . mysqli_error($connection);
    } else {
        // Redirect back to the admin panel or a success page
        header("Location: ../scheduleAppointment.html");
        exit();
    }
}

$connection->close();
?>

