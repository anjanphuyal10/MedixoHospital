<div style="width: 10%; margin: 10px 10px; font-size: 10px">
      <a
        href="adminPanel.php"
        class="btnGoBack has-before title-md"
        style="height: 15px"
        >Go Back</a
      >
</div>
<link rel="shortcut icon" href="../favicon.svg" type="image/svg+xml">

<style>
   .btnGoBack {
        background-color: hsl(186, 100%, 19%);
        color: hsl(0, 0%, 100%);
        font-weight: 700;
        padding: 12px 36px;
        display: flex;
        align-items: center;
        gap: 8px;
        border-radius: 6px;
        overflow: hidden;
      }
      .btnGoBack:hover{
        color: white;
        background-color:hsl(186, 100%, 19%) ;
      }

      .has-before,
      .has-after {
        position: relative;
        z-index: 1;
      }

      a {
        border: 1px solid transparent;
        background-color: hsl(186, 100%, 19%);
        color: white;
        border-radius: 5px;
        padding: 2px 4px;
        text-decoration: none;
        transition: color 0.2s ease;
      }

      .title-md {
        font-size: 16px;
      }

      .btnGoBack:is(:hover, :focus-visible)::before {
        transform: translateX(100%);
      
      }
      .btnGoBack::before {
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background-color: hsl(0, 0%, 13%);
        border-radius: 6px;
        transition: 0.5s ease;
        z-index: -1;
      }
      .has-before::before,
      .has-after::after {
        content: "";
        position: absolute;
      }
    
        tr th
        {
          background-color: hsl(186, 100%, 19%);
          color: white;
        }
    table {
      width: 100%;
      margin-top: 42px;
    }
    
    a:hover {
      color: blue;
    }
    th, td {
      padding: 8px;
      text-align: center;
      border-bottom: 1px solid #ddd;
    }

    .edit
    {
      margin-left: 10px;
    padding: 2px 8px;
    }
    .edit:hover
    {
      color: hsl(186, 100%, 19%);
      background-color: white;
    }
    .delete:hover
    {
      background-color: white;
      color: hsl(186, 100%, 19%);
    }
</style>

<hr>
<?php
include 'connectToDatabase.php';

// Get the doctorId from the query parameter
$loggedInDoctorId = $_GET['doctorId'];

echo "<h1 align='center' style='padding: 8px; color: hsl(186, 100%, 19%); position: relative;'>Your Appointments</h1>";

// Check if the doctorId is valid (you can add more validation if needed)
if (!is_numeric($loggedInDoctorId)) {
    echo "Invalid doctorId";
    exit;
}

$query = "SELECT appointmentId, date, time, doctorId, fullName FROM appointments WHERE doctorId = '$loggedInDoctorId'";
$result = mysqli_query($connection, $query);

if ($result !== null) {
    $data = mysqli_fetch_all($result);

    echo "<table>";
    echo "<tr>
          <th style='border-radius:20px 0px 0px 0px;'>Appointment Id</th>
          <th>Date</th>
          <th>Time</th>
          <th>Doctor Id</th>
          <th>Patient Name</th>
          <th>Status</th>
          <th style='border-radius:0px 20px 0px 0px;'>Actions</th>
          </tr>";

    if ($result->num_rows > 0) {
        foreach ($data as $individual_data) {
            // Check if the appointment date and time are in the future
            $status = strtotime($individual_data[1] . ' ' . $individual_data[2]) > time() ? 0 : 1;

            echo "
        <tr>
          <td>{$individual_data[0]}</td>
          <td>{$individual_data[1]}</td>
          <td>{$individual_data[2]}</td>
          <td>{$individual_data[3]}</td>
          <td>{$individual_data[4]}</td>
          <td>{$status}</td>
          <td>
            <a class='delete' href='deleteAppointmentData.php?appointmentId={$individual_data[0]}&date={$individual_data[1]}&time={$individual_data[2]}&DoctorId={$individual_data[3]}&fullName={$individual_data[4]}'> Delete </a>
            <a class='edit' href='editAppointmentData.php?appointmentId={$individual_data[0]}&date={$individual_data[1]}&time={$individual_data[2]}&DoctorId={$individual_data[3]}&fullName={$individual_data[4]}'>Edit </a>
          </td>
        </tr>";
        }

        echo "</table>";
    } else {
        echo "<tr><td colspan='7'>
      No appointments available.
      </td></tr>";
    }
} else {
    echo "Error executing the query: " . mysqli_error($connection);
}

mysqli_close($connection);
?>

