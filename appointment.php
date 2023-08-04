<!DOCTYPE html>
<html lang="en">

<head>
  <title>Schedule an Appointment</title>
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
  <style>
    *,
    *::before,
    *::after {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    label {
      display: block;
      margin-top: 10px;
    }
    
    form {
      margin-bottom: 16px;
    }
    
    input[type=text] {
      padding: 8px;
      width: 200px;
      text-align: center;
      border-radius: 20px;
      border-color: blue;
    }
    
    input[type=submit],
    input[type=button] {
      background-color: white;
      color: hsl(182, 100%, 35%);
      border: 2px solid hsl(182, 100%, 35%);
      padding: 10px 20px;
      cursor: pointer;
      border-radius: 8px;
      transition: transform ease 0.3s;
    }
    
    input[type=submit]:hover,
    input[type=button]:hover {
      transform: scale(1.1);
    }
    
    button {
      transition: transform 0.3s ease;
    }

    button:hover {
      transform: scale(1.1);
    }

    .error {
      color: red;
    }
    
    form {
      font-size: 20px;
    }
    
    form select {
      padding: 8px 16px;
      font-size: 20px;
      background-color: #019bac;
      color: white;
      border: none;
      cursor: pointer;
      border-radius: 20px;
      transition: transform ease 0.3s;
    }
    
    .container {
      position: absolute;
      top: 25%;
      right: 15%;
      padding: 1px;
      border-radius: 10px;
      --section-padding: 200px;
    }
    
    .section {
      padding-block: 120px;
    }
    .hero {
      background-image: url('images/hero-bg.png');
      background-color: hsl(186, 100%, 19%);
      --section-padding: 200px;
      background-repeat: no-repeat;
      background-size: cover;
    }
    @media(max-width: 1100px){
      .hero-banner {
        display: none;
      }
      .hero {
        background: none;
      }
      body {
      background-color: hsl(186, 100%, 19%);
      background-repeat: no-repeat;
      background-size: cover;
      }
      .container {
        top: 12%;
      }
    }
  </style>
</head>

<body>

<section class="section hero">
    <div class="container" align='center' style="border: 1px solid white; padding: 30px; right: 8%; color: white;">
      <h1 style="font-size: 30px; color: white;">Schedule an Appointment</h1>
      <form method="POST" action="php/addAppointmentData.php">
        <label for="date">Date:</label>
        <select name="date" required style="text-align: center;">
          <?php
          // Get the current date
          $currentDate = date('Y-m-d');
          echo "<option>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSelect a Date&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</option>";
          // Generate options for the next five days
          for ($i = 1; $i <= 5; $i++) {
            $futureDate = strtotime("+$i day");
            $formattedDate = date('jS F Y', $futureDate);
            echo "<option value='$formattedDate'>$formattedDate</option>";
          }
          ?>
        </select>

        <label for="time">Time:</label>
        <select name="time" required style="text-align: center;">
          <?php
          $startTime = strtotime("10:00 AM");
          $endTime = strtotime("04:00 PM");
          echo "<option>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSelect Time &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</option>";

          while ($startTime <= $endTime) {
            $formattedTime = date("h:i A", $startTime);
            echo "<option value='$formattedTime'>$formattedTime</option>";
            $startTime += 60 * 60;
          }
          ?>
        </select>


        <label for="doctorId">Doctor:</label>
        <select name="doctorId" required onchange="showDoctorInfo(this)" style="text-align: center;">
          <?php
          // Connect to the database and retrieve the doctor data
          include 'php/connectToDatabase.php';
          $query = "SELECT doctorId, fullName, speciality, flag FROM doctor";
          $result = mysqli_query($connection, $query);
          echo "<option>Select a Doctor</option>";

          // Loop through the query result and generate the options
          while ($row = mysqli_fetch_assoc($result)) {
            $doctorId = $row['doctorId'];
            $doctorName = $row['fullName'];
            $speciality = $row['speciality'];
            $flag = $row['flag'];

            // Display the option with flag status
            if ($flag == 1) {
              echo "<option value='$doctorId' data-fullname='$doctorName' data-speciality='$speciality'>$doctorName ($speciality)</option>";
            } else {
              echo "<option value='$doctorId' disabled>$doctorName ($speciality)</option>";
            }
          }
          // Close the database connection
          mysqli_close($connection);
          ?>
        </select>
        <label for="fullName">Patient Name:</label>
        <input type="text" name="fullName" placeholder="Patient Full Name" required autocomplete="off" autofocus style="border: none;"><br><br>
        <button type="button" onclick="goBack();" style="background-color: white; color: hsl(182, 100%, 35%); border: 2px solid hsl(182, 100%, 35%);
              padding: 10px 20px; cursor: pointer;border-radius: 8px;">Cancel</button>
        <input type="submit" value="Submit" style="margin-left: 20px;">
      </form>
  </div>

          <figure class="hero-banner" id="doctorInfoContainer">
            <img src="images/hero-banner.png" width="590" height="517" alt="hero banner">
          </figure>

        </div>
      </section>
      <script>
      function goBack() {
        window.location.href = "index.php";
      }
      </script>
</body>

</html>
