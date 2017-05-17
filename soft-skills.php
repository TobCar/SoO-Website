<?php
include 'global/header.php';
?>

<!-- This will display an extra head tag after the header is parsed but is necessary to change the description and title. -->
<head>
  <meta name="description" content="Prepare for the Community Initiative Competition. Practice public speaking, networking, and more!">
  <title>Summer of Opportunity | Soft Skills</title>
</head>

<body>
  <?php
  include 'global/navigation.php';
  ?>

  <!-- Hero area -->
  <section class="hero hero-small hero-soft-skills">
        <div class="col-sm-7">
            <h1 class="text-center animated fadeInUp">Soft Skills</h1>

            <h2 class="text-center animated fadeInUp">August 19, 2017</h2>

            <h3 class="text-center animated fadeInUp animDelay04">
                Prepare for LDG's competition
            </h3>

            <p class="text-center animated fadeInUp animDelay04">Advice from these workshops will help you win.</p>

            <a href="#register" class="btn-hero btn btn-wire wire-btn-white animated fadeInDown animDelay08">
                Register Now <?php echo $registration_fee['early'];?>
            </a>
        </div>

        <div class="col-sm-offset-2 col-sm-3 text-center">
          <img src="img/ldg-logo.png" alt="local development group logo" class="organizer-logo"></img>
          <p>This event is organized by the Local Development Group.</p>
        </div>
  </section>
  <!-- End Hero Area -->

  <!-- Overview Container -->
  <div class="container-big text-center">

    <h1 class="title">Overview</h1>
    <p>Description</p>

  </div>
  <!-- End Overview Container -->

  <!-- Features Container -->
  <div class="container-big text-center bg-container">

    <h1 class="title">Features</h1>

    <div class="row">
      <div class="col-sm-4">
        <img src="img/sitemap.png" class="img-responsive feature-img"></img>
        <h2>Networking</h2>
        <p>Meet professional instructors and young technology enthusiasts.</p>
      </div>
      <div class="col-sm-4">
        <img src="img/sitemap.png" class="img-responsive feature-img"></img>
        <h2>Workshops</h2>
        <p>Taught by professional instructors.</p>
      </div>
      <div class="col-sm-4">
        <img src="img/sitemap.png" class="img-responsive feature-img"></img>
        <h2>Mini-Competition</h2>
        <p>Team up with your friends and compete to make the best website.</p>
      </div>
    </div>
  </div>
  <!-- End Features Container -->

  <!-- Fee Includes, Venue Container, and What to Bring -->
  <div class="container text-center" style="padding-top: 30px; padding-bottom: 30px;">

    <div class="row">
      <!-- Fee Includes -->
      <div class="col-sm-4">
        <h2>Registration | <?php echo $registration_fee['early'];?> Early Bird</h2>
        <p><?php echo $registration_fee['regular'];?> Regular (<?php echo $registration_fee['regular_date'];?>)</p>
        <h2>Includes lunch and snacks.</h2>
      </div>
      <!-- End Fee Includes -->

      <!-- Venue -->
      <div class="col-sm-4">
        <h2>Venue</h2>
        <p>HiVE Vancouver</p>
        <a href="https://www.google.ca/maps/place/The+HiVE,+128+W+Hastings+St,+Vancouver,+BC+V6B+1G8/data=!4m2!3m1!1s0x5486717986699687:0x4fb885f79ca787fa?sa=X&ved=0ahUKEwjQ_fDn8fXTAhUmrVQKHQSCDjgQ8gEIJTAA">128 W Hastings St, <b>Vancouver</b>, BC V6B 1G8</a>
      </div>
      <!-- End Venue -->

      <!-- What to Bring -->
      <div class="col-sm-4">
        <h2>What To Bring</h2>
        <p>Laptop</p>
        <p>Water Bottle</p>
      </div>
      <!-- End What to Bring -->
    </div>

  </div>
  <!-- End Fee Includes, Venue Container, and What to Bring -->

  <!-- What you'll learn Container -->
  <div class="container-big text-center bg-container">

    <h1 class="title">What You'll Learn</h1>

    <div class="row">
      <div class="col-sm-4">
        <img src="img/html.png" alt="HTML" class="img-responsive feature-img"></img>
        <h2>HTML</h2>
        <p>Hypertext Markup Language is used in every website.</p>
      </div>
      <div class="col-sm-4">
        <img src="img/sitemap.png" alt="website structure" class="img-responsive feature-img"></img>
        <h2>Website Structure</h2>
        <p>What's a body tag? Come and find out.</p>
      </div>
      <div class="col-sm-4">
        <img src="img/css.png" alt="css" class="img-responsive feature-img"></img>
        <h2>CSS</h2>
        <p>Cascading style sheets make websites responsive and beautiful.</p>
      </div>
    </div>
  </div>
  <!-- End What you'll learn Container -->

  <!-- Schedule and Registration Container -->
  <div class="container-big text-center">

    <h2 class="title">Schedule</h2>

    <table class="table table-striped table-bordered table-responsive">
      <thead>
          <tr>
              <th>Time</th>
              <th>Activity</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>9:00AM - 9:15AM</td>
              <td>Registration</td>
          </tr>
          <tr>
              <td>9:15AM - 9:30AM</td>
              <td>Opening Ceremony</td>
          </tr>
          <tr>
              <td>9:30AM - 10:30AM</td>
              <td>HTML Workshop PT.1</td>
          </tr>
          <tr>
              <td>10:30AM - 10:50AM</td>
              <td>Snack Break</td>
          </tr>
          <tr>
              <td>10:50AM - 11:20AM</td>
              <td>HTML Workshop PT.2</td>
          </tr>
          <tr>
              <td>11:20AM - 12:20PM</td>
              <td>CSS Workshop PT.1</td>
          </tr>
          <tr>
              <td>12:20PM - 1:20PM</td>
              <td>Lunch</td>
          </tr>
          <tr>
              <td>1:20PM - 1:50PM</td>
              <td>CSS Workshop PT.2</td>
          </tr>
          <tr>
              <td>1:50PM - 4:15PM</td>
              <td>Web Design Competition</td>
          </tr>
          <tr>
              <td>4:15PM - 4:45PM</td>
              <td>Awards / Games</td>
          </tr>
          <tr>
              <td>4:45PM - 5:00PM</td>
              <td>Closing Ceremonies</td>
          </tr>
      </tbody>
  </table>

    <div style="text-align:left;">
      <?php
      include 'global/registration-form.php';
      ?>
      <!-- Select this event page's checkbox in the registration form by default -->
      <script type="text/javascript">
        document.getElementById("choice_soft_skills").checked = true;
      </script>
    </div>
  </div>
  <!-- End Schedule and Register Container -->

  <?php
  include 'global/event-cards.php';
  ?>
</body>

<?php
include 'global/footer.php';
?>
</html>
