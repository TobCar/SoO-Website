<?php
include 'global/header.php';
?>

<!-- This will display an extra head tag after the header is parsed but is necessary to change the description and title. -->
<head>
  <meta name="description" content="Prepare for the Community Initiative Competition. Practice public speaking, networking, and more!">
  <title>Summer of Opportunity | Soft Skills</title>
  <meta property="og:title" content="Soft Skills | Summer of Opportunity"/>
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
                <a href="https://www.summerofopportunity.com/competition">Prepare for LDG's competition</a>
            </h3>

            <p class="text-center animated fadeInUp animDelay04">Advice from these workshops will help you win $1250.</p>

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
    <p>Communication/leadership, project management and community organizing
      <br><br>
These will be the essential skills focused on creating a good community initiative. Learn from industry experts! Engage in workshop activities, learn through demonstration and personal experiences!
    </p>
  </div>
  <!-- End Overview Container -->

  <!-- Workshops Container -->
  <div class="container-big text-center bg-container">

    <h1 class="title">Workshops</h1>

    <div class="row">
      <div class="col-sm-4">
        <img src="img/text-bubble.png" alt="communications" class="img-responsive feature-img"></img>
        <h2>Communications</h2>
        <p>Explaining your ideas simply.</p>
      </div>
      <div class="col-sm-4">
        <img src="img/clipboard.png" alt="organizing clipboard" class="img-responsive feature-img"></img>
        <h2>Community Organizing</h2>
        <p>Project management for nonprofits.</p>
      </div>
      <div class="col-sm-4">
        <img src="img/people.png" alt="team" class="img-responsive feature-img"></img>
        <h2>Leadership</h2>
        <p>Collaborating effectively.</p>
      </div>
    </div>
  </div>
  <!-- End Workshops Container -->

  <!-- Fee Includes, Venue Container, and What to Bring -->
  <div class="container text-center" style="padding-top: 30px; padding-bottom: 30px;">

    <div class="row">
      <!-- Fee Includes -->
      <div class="col-sm-4">
        <h2>Registration | <?php echo $registration_fee['early'];?> Early Bird</h2>
        <p><?php echo $registration_fee['regular'];?> Regular (<?php echo $registration_fee['regular_date'];?>)</p>
        <h2>Includes lunch.</h2>
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
      <div class="col-sm-4" id="what-to-bring">
        <h2>What To Bring</h2>
        <p>Something to write on</p>
        <p>Water bottle</p>
      </div>
      <!-- End What to Bring -->
    </div>

  </div>
  <!-- End Fee Includes, Venue Container, and What to Bring -->

  <!-- Features Container -->
  <div class="container-big text-center bg-container">

    <h1 class="title">Features</h1>

    <div class="row">
      <div class="col-sm-4">
        <img src="img/text-bubble-2.png" alt="text bubbles" class="img-responsive feature-img"></img>
        <h2>Important Opportunities</h2>
        <p>Discussed with other change-makers.</p>
      </div>
      <div class="col-sm-4">
        <img src="img/knowledge.png" alt="knowledge" class="img-responsive feature-img"></img>
        <h2>Life Long Skills</h2>
        <p>Cascading style sheets make websites responsive and beautiful.</p>
      </div>
      <div class="col-sm-4">
        <img src="img/network.png" alt="network" class="img-responsive feature-img"></img>
        <h2>Networking</h2>
        <p>Find other high-achieving youth. Maybe you'll work together one day.</p>
      </div>
    </div>
  </div>
  <!-- End Features Container -->

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
              <td>9:30AM - 9:45AM</td>
              <td>Check In</td>
          </tr>
          <tr>
              <td>9:45AM - 10:00AM</td>
              <td>Opening</td>
          </tr>
          <tr>
              <td>10:00AM - 11:30AM</td>
              <td>Workshops</td>
          </tr>
          <tr>
              <td>11:30AM - 12:30PM</td>
              <td>Lunch & Networking</td>
          </tr>
          <tr>
              <td>12:30PM - 2:00PM</td>
              <td>Workshops</td>
          </tr>
          <tr>
              <td>2:00PM - 2:30PM</td>
              <td>Break</td>
          </tr>
          <tr>
              <td>2:30PM - 4:00PM</td>
              <td>Workshops</td>
          </tr>
          <tr>
              <td>4:00PM - 4:30PM</td>
              <td>Closing + <a href="https://www.summerofopportunity.com/competition">Introduction to the CIC</a></td>
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
