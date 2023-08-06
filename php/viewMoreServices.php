<link rel="stylesheet" href="../css/style.css">
<link rel="shortcut icon" href="../favicon.svg" type="image/svg+xml">
<?php include 'connectToDatabase.php'; ?>
<div style="width: 10%; margin: 10px 10px;">
  <a href="../index.php" class="btn has-before title-md" style=" height: 40px;">Go Back</a>
</div>
<section class="service" style="margin-top: 100px;">
  <div class="container" id="serviceBar" style="margin-bottom:65px;">           
    <ul class="service-list" style=" border: solid 1px hsl(182, 100%, 35%);">
      <?php
      $query = "SELECT * FROM services";
      $result = mysqli_query($connection, $query);

      while ($row = mysqli_fetch_assoc($result)) {
        $iconSrc = $row['icon'];
        $title = $row['title'];
        $description = $row['description'];
        ?>
          <li>
            <div class="container">
              <div class="service-card">
                <div class="card-icon">
                  <img src="<?php echo "../" . $iconSrc; ?>" width="71" height="71" alt="icon">
                </div>
                <h3 class="headline-sm card-title">
                  <a href="#"><?php echo $title; ?></a>
                </h3>
                <p class="card-text" style="text-align:justify;">
                  <?php echo $description; ?>
                </p>
              </div>
              <div class="makeappbutton">
              <a href="../scheduleAppointment.html"><button style="margin-left:50px; border: 1px solid transparent; color:white;position:center; background-color: hsl(186, 100%, 19%);text-align:center; border-radius:4px; padding:2px 4px;">Make Appointment</button></a>
              </div>
              </div>
             </li>
         
      <?php } ?>
      
    </ul>
    <br><br>
  </div>
</section>

<?php
mysqli_close($connection);
?>
