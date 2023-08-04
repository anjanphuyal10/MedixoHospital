<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medixo Hospital</title>
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;700&family=Rubik:wght@400;500;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap" async defer></script>
</head>

<body id="top" data-preloader>

  <!-- *************** Header ******************* -->
  
  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="images/medixoLogoSmall.png" width="136" height="46" alt="medixo home" styl>
      </a>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">

          <a href="#" class="logo">
            <img src="images/logo.svg" width="136" height="46" alt="Medixo home">
          </a>

          <a class="nav-close-btn" data-nav-toggler style="cursor: pointer;">
            <img src="images/crossIcon.png" alt="Cross Icon" style="height: 30px;">
          </a>

        </div>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="index.php" class="navbar-link title-md">Home</a>
          </li>

          <li class="navbar-item">
            <a href="#doctorsListings" class="navbar-link title-md">Doctors</a>
          </li>

          <li class="navbar-item">
            <a href="#serviceBar" class="navbar-link title-md">Services</a>
          </li>

          <li class="navbar-item">
            <a href="#contactBar" class="navbar-link title-md">Contact</a>
          </li>

        </ul>

      </nav>

      <a class="nav-open-btn" data-nav-toggler style="cursor: pointer;">
        <img src="images/menuIcon.png" alt="Menu Icon" style="height: 30px;">
      </a>

      <a href="scheduleAppointment.html" class="btn has-before title-md">Make Appointment</a>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>





  <main>
    <article>
      <section class="section hero" style="background-image: url('images/hero-bg.png')">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle has-before">Welcome To Medixo</p>

            <h1 class="headline-lg hero-title">
              Find Your <br>
              Doctor.
            </h1>

            <div class="hero-card">

              <p class="title-lg card-text">
                Daily Motivational Quotes
              </p>

              <div class="wrapper">
              <span id="quote"></span>
              </div>

            </div>

          </div>

          <figure class="hero-banner">
            <img src="images/hero-banner.png" width="590" height="517" alt="hero banner">
          </figure>

        </div>
      </section>




      <!-- ***************** Service ********************** -->
      <section class="service">
        <div class="container" id="serviceBar">

          <ul class="service-list">

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <img src="images/icon-1.png" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <h3 class="headline-sm card-title">
                  <a href="#">ENT</a>
                </h3>

                <p class="card-text" style="text-align: justify;">
                  ENT, short for Ear, Nose, and Throat, is a specialized medical field that focuses on 
                  diagnosing and treating disorders and conditions related to the ears, nose, throat, and related structures.
                </p>

                <a href="#" class="btn-circle"><img src="images/arrowRight.png" alt="Arrow Pointing Right"
                    style="height: 20px;"></a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <img src="images/icon-2.png" width="71" height="71" alt="icon">
                </div>

                <h3 class="headline-sm card-title">
                  <a href="#">Neurology</a>
                </h3>

                <p class="card-text" style="text-align: justify;">
                 Neurology is a medical specialty that focuses on the diagnosis and treatment of disorders related to the nervous system. This includes the brain, spinal cord, and peripheral nerves. 
                 <br><br>
                </p>

                <a href="#" class="btn-circle"><img src="images/arrowRight.png" alt="Arrow Pointing Right"
                    style="height: 20px;"></a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <img src="images/icon-3.png" width="71" height="71" alt="icon">
                </div>

                <h3 class="headline-sm card-title">
                  <a href="#">Pulmonology</a>
                </h3>

                <p class="card-text" style="text-align: justify;">
                  Pulmonology is a specialized field in medicine that focuses on the diagnosis, treatment, and management of diseases related to the respiratory system. 
                  <br><br><br>
                </p>

                <a href="#" class="btn-circle"><img src="images/arrowRight.png" alt="Arrow Pointing Right"
                    style="height: 20px;"></a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <img src="images/icon-4.png" width="71" height="71" alt="icon">
                </div>

                <h3 class="headline-sm card-title">
                  <a href="#">Orthopedics</a>
                </h3>

                <p class="card-text" style="text-align: justify;">
                 Orthopedics is a medical specialty that focuses on the diagnosis, treatment, and prevention of conditions and injuries related to the musculoskeletal system. 
                </p><br><br>

                <a href="#" class="btn-circle"><img src="images/arrowRight.png" alt="Arrow Pointing Right"
                    style="height: 20px;"></a>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- ********************* About ******************** -->
      <section class="section about">
        <div class="container">

          <div class="about-content">

            <p class="section-subtitle title-lg has-after" id="about-label">About Us</p>

            <h2 class="headline-md">Experienced Workers</h2>

            <p class="section-text">
              At our hospital, we take pride in our team of experienced doctors. Our dedicated healthcare professionals
              have years of expertise and are committed to providing exceptional care to our patients.
            </p>

            <ul class="tab-list">

              <li>
                <button class="tab-btn active">Vision</button>
              </li>

              <li>
                <button class="tab-btn">Mission</button>
              </li>

              <li>
                <button class="tab-btn">Strategy</button>
              </li>

            </ul>

            <p class="tab-text">
              With a diverse range of specialties and a wealth of knowledge, our doctors ensure that you receive the
              best possible treatment tailored to your needs.
            </p>

            <div class="wrapper">

              <ul class="about-list">

                <li class="about-item">
                  <img src="images/tickIcon.png" alt="Tick Icon" style="height: 20px;">
                  <span class="span">Positive and supportive environment </span>
                </li>

                <li class="about-item">
                  <img src="images/tickIcon.png" alt="Tick Icon" style="height: 20px;">
                  <span class="span">Building trust</span>
                </li>

                <li class="about-item">
                  <img src="images/tickIcon.png" alt="Tick Icon" style="height: 20px;">
                  <span class="span">Ensuring best treatment received</span>
                </li>

                <li class="about-item">
                  <img src="images/tickIcon.png" alt="Tick Icon" style="height: 20px;">
                  <span class="span">Superior medical care</span>
                </li>

              </ul>

            </div>

          </div>

          <figure class="about-banner">
            <img src="images/about-banner.png" width="554" height="678" alt="about banner" class="w-100">
          </figure>

        </div>
      </section>





      <!-- ********************* Listing of Services ************************* -->
      <section class="section listing" id="doctorsListings">
        <div class="container">

          <ul class="grid-list">

            <li>
              <p class="section-subtitle title-lg" id="listing-label">Doctors Listing</p>

              <h2 class="headline-md">Browse by specialist</h2>
            </li>

            <?php
            include 'php/connectToDatabase.php'; // Assuming you have a file to establish the database connection
            
            // Query to fetch doctor data
            $query = "SELECT fullName, speciality FROM doctor";
            $result = mysqli_query($connection, $query);

            // Check if there are any doctors
            if (mysqli_num_rows($result) > 0) {
              // Array of icon numbers
              $icons = array(1, 2, 3, 4, 5, 6, 7);

              // Loop through each row and generate listing card
              while ($row = mysqli_fetch_assoc($result)) {
                $fullName = $row['fullName'];
                $speciality = $row['speciality'];

                if (!empty($icons)) {
                  // Randomly select an icon number
                  $randomIcon = array_rand($icons);
                  $iconNumber = $icons[$randomIcon];

                  // Remove the selected icon number from the array
                  unset($icons[$randomIcon]);
                } else {
                  $icons = array(1, 2, 3, 4, 5, 6, 7);
                  $randomIcon = array_rand($icons);
                  $iconNumber = $icons[$randomIcon];
                  unset($icons[$randomIcon]);
                }

                // Generate the listing card HTML
                echo '<li>';
                echo '<div class="listing-card">';
                echo '<div class="card-icon">';
                echo '<img src="images/icon-' . $iconNumber . '.png" width="71" height="71" alt="icon">';
                echo '</div>';
                echo '<div>';
                echo '<h3 class="headline-sm card-title">' . $speciality . '</h3>';
                echo '<p class="card-text">' . $fullName . '</p>';
                echo '</div>';
                echo '</div>';
                echo '</li>';
              }
            } else {
              echo '<li>No doctors found.</li>';
            }

            mysqli_close($connection);
            ?>


          </ul>

        </div>
      </section>

      <!-- ************************** Footer ***************************  -->
      <footer class="footer" style="background-image: url('images/footer-bg.png')" id="contactBar">
        <div class="container">

          <div class="section footer-top">

            <div class="footer-brand">

              <a href="#" class="logo">
                <img src="images/medixoLogoSmall.png" width="136" height="46" alt="Medixo logo">
              </a>

              <ul class="contact-list has-after">

                <li class="contact-item">

                  <img src="images/mailIcon.png" alt="Mail Icon" style="height: 55px;">

                  <div>
                    <p>
                      Main Email : <a href="mailto:contact@medixohospital.com"
                        class="contact-link">contact@medixohospital.com</a>
                    </p>

                    <p>
                      Inquiries : <a href="mailto:Info@medixohospital.com"
                        class="contact-link">Info@medixohospital.com</a>
                    </p>
                  </div>

                </li>

                <li class="contact-item">

                  <img src="images/phoneIcon.png" alt="Phone Icon" style="height: 55px;">

                  <div>
                    <p>
                      Main Telephone : <a href="tel:9847950672" class="contact-link">9847950672</a>
                    </p>

                    <p>
                      Inquiries : <a href="tel:9841361927" class="contact-link">9841361927</a>
                    </p>
                  </div>

                </li>

              </ul>

            </div>

            <div class="footer-list">

              <p class="headline-sm footer-list-title">About Us</p>

              <p class="text">
                We are Medixo Hospital. We provide best Service in Nepal.
              </p>

            </div>


          </div>

          <div align="center">
            <div id="map" align="center" style="border-radius: 20px;" alt="Google Map"></div>
          </div> <br>
        </div>
      </footer>

      <!-- ********************* Back To top ****************** -->
      <a href="#top" class="back-top-btn" data-back-top-btn>
        <img src="images/arrowUp.png" alt="Arrow Up" style="height: 20px;">
      </a>

      <script src="js/script.js"></script>
      <script>
        function initMap() {
          var map = new google.maps.Map(document.getElementById('map'), {
            center: { lat: 27.67043621347555, lng: 85.30984850186114 },
            zoom: 19
          });
          var marker = new google.maps.Marker({
            position: { lat: 27.67043621347555, lng: 85.30984850186114 },
            map: map,
            title: 'Student Marker'
          });
        }
        
        // **************Change active class in About us**************
        // Get all tab buttons
        var tabButtons = document.querySelectorAll('.tab-btn');

        // Set the initial active tab
        var activeTabIndex = 0;
        tabButtons[activeTabIndex].classList.add('active');

        // Function to switch to the next tab
        function switchTab() {
          tabButtons[activeTabIndex].classList.remove('active');
          activeTabIndex = (activeTabIndex + 1) % tabButtons.length;
          tabButtons[activeTabIndex].classList.add('active');
        }
        setInterval(switchTab, 2000);
        
        /*-----------Motivational Quotes in hero section----------------*/
        const quotes = [
          "The art of medicine consists of amusing the patient while nature cures the disease. - Voltaire",
          "The best doctor gives the least medicines. - Benjamin Franklin",
          "Medicine is a science of uncertainty and an art of probability. - William Osler",
          "Wherever the art of medicine is loved, there is also a love of humanity. - Hippocrates",
          "Medicine is not only a science; it is also an art. - Paracelsus",
          "In nothing do men more nearly approach the gods than in giving health to men. - Cicero"
        ];

        const wrapper = document.querySelector('.wrapper');
        const quoteElement = document.getElementById('quote');
        let currentQuoteIndex = 0;

        function rotateQuotes() {
          quoteElement.textContent = quotes[currentQuoteIndex];
          currentQuoteIndex = (currentQuoteIndex + 1) % quotes.length;
        }

        setInterval(rotateQuotes, 5000); // Change the time interval (in milliseconds) as needed

        // Initial quote rotation
        rotateQuotes();
      </script>

</body>

</html>
