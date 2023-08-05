<link rel="shortcut icon" href="../favicon.svg" type="image/svg+xml">

<title>Success</title>
  <link rel="shortcut icon" href="../favicon.svg" type="image/svg+xml">

  <style>
    .success-popup {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: #f5f5f5;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      text-align: center;
      font-size: 20px;
    }
  </style>
  <script>
    // Function to close the popup after 5 seconds and redirect to appointment.php
    function closePopup() {
      setTimeout(function() {
        window.location.href = '../index.php';
      }, 5000);
    }
  </script>
</head>
<body onload="closePopup()">
  <div class="success-popup">
    <h3>
      Appointment successfully scheduled!
    </h3>
  </div>
</body>
</html>
<?php
include 'connectToDatabase.php';
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
$doctorId = mysqli_real_escape_string($connection, $_GET['doctorId']);
$doctorQuery = "SELECT fullName FROM doctor WHERE doctorId = '$doctorId'";
$appointmentQuery = "SELECT time, date FROM appointments";
$result = mysqli_query($connection, $doctorQuery);
$resultAppointment = mysqli_query($connection, $appointmentQuery);

if ($result && $resultAppointment) {
  while ($row = mysqli_fetch_assoc($result)) {
    $fullName = $row['fullName'];
  }
  while ($row = mysqli_fetch_assoc($resultAppointment)) {
    $time = $row['time'];
    $date = $row['date'];
  }
  // Send SMS notification
  $message = "Your Appointment with doctor " . $fullName . " is successfully scheduled at " . "$date" . " and at $time o'clock.";
  sendSMS('+9779847950672', $message);
}
if (!mysqli_query($connection, $doctorQuery) && !mysqli_query($connection, $appointmentQuery)) {
  echo "Error: " . mysqli_error($connection);
}

$connection->close();
?>
