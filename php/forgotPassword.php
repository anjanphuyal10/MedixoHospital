<link rel="shortcut icon" href="../favicon.svg" type="image/svg+xml">

<div align="center">
<?php
include "connectToDatabase.php";

$fullName = "";
$phoneNumber = "";
$userId = "";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve form data
  $fullName = $_POST['fullName'];
  $phoneNumber = $_POST['phoneNumber'];


  $query = "SELECT userId FROM userLogin WHERE fullName = ? AND phoneNumber = ?";
  $stmt = $connection->prepare($query);
  $stmt->bind_param("ss", $fullName, $phoneNumber);
  $stmt->execute();
  $stmt->bind_result($userId);


  if ($stmt->fetch()) {
    echo "<h1>Please note this User ID in order to Login</h1>";
    echo "<h1>" . "User ID: $userId" . "</h1>";
    echo "<div id='countdown'>Redirecting in 10 seconds...</div>";
    echo "<script>
                              var count = 10;
                              var countdownElement = document.getElementById('countdown');
                                        var countdownInterval = setInterval(function() {
                                                  countdownElement.innerHTML = 'Redirecting in ' + count + ' seconds...';
                                                  count--;
                                                  if (count < 0) {
                                                            clearInterval(countdownInterval);
                                                            window.location.href = '../scheduleAppointment.html';
                                                  }
                                        }, 1000);
                                        function hideForm() {
                                          var formDiv = document.getElementById('newPatientCreateForm');
                                          formDiv.style.display = 'none';
                                        }
                              </script>";
  } else {
    echo "Invalid Credentialss";
  }
  $stmt->close();
}
?>

</div>
<style>
          body {
                    background-color: #ff99f5;
                    background-image:
                              radial-gradient(at 61% 4%, hsla(303, 91%, 61%, 1) 0px, transparent 50%),
                              radial-gradient(at 75% 66%, hsla(196, 91%, 79%, 1) 0px, transparent 50%),
                              radial-gradient(at 98% 88%, hsla(76, 87%, 78%, 1) 0px, transparent 50%),
                              radial-gradient(at 23% 16%, hsla(238, 96%, 77%, 1) 0px, transparent 50%),
                              radial-gradient(at 95% 65%, hsla(13, 91%, 75%, 1) 0px, transparent 50%),
                              radial-gradient(at 10% 79%, hsla(228, 96%, 69%, 1) 0px, transparent 50%),
                              radial-gradient(at 85% 58%, hsla(328, 81%, 68%, 1) 0px, transparent 50%);  
}
          #newPatientCreateForm {
                              margin-left: 37.5%;
                              margin-top: 10%;
                              background-color: rgba(0, 0, 0, 0.75);
                              height: 60%;
                              width: 50%;
                              border-radius: 10px;
                    }

          button {
                    transition: transform ease 0.3s;
          }
          button:hover {
                    transform: scale(1.2);
          }
</style>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" style="width: 25%;" id="newPatientCreateForm" style="align-content: center;">
          <div>
          <div style="display: flex; flex-direction: column; align-items: center; padding-top: 30%;">

                              <label for="fullName" style="color: white; font-weight: bold;">Full Name:</label>
                              <input type="text" name="fullName" id="fullName" placeholder="Your Full Name"
                              style="border: 2px solid white; padding: 5px; margin-bottom: 10px; width: 90%; border-radius: 10px; text-align: center;" required>
                              
                              <label for="phoneNumber"
                              style="color: white; font-weight: bold;">Phone Number:</label>
                              <input type="tel" name="phoneNumber" id="phoneNumber" placeholder="Phone Number"
                              style="border: 2px solid white; padding: 5px; margin-bottom: 10px; width: 90%; border-radius: 10px; text-align: center;" required>
                              <br>
                              <button type="submit" id="submitButton" onclick="hideForgotPassword();" style="background-color: skyblue; color: white; border: none; padding: 10px 20px; margin-bottom: 10px; cursor: pointer; width: 25%; border-radius: 8px;">Submit</button>
                    </div>
          </div>
</form>   