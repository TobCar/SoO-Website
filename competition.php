<?php
include 'global/header.php';
?>

<!-- This will display an extra head tag after the header is parsed but is necessary to change the description and title. -->
<head>
  <meta name="description" content="HTML & CSS basics for teens. Make a basic website in one day.">
  <title>Summer of Opportunity | CIC</title>
  <meta property="og:title" content="Community Initiative Competition | Summer of Opportunity"/>
</head>

<body>
  <?php
  include 'global/navigation.php';
  ?>

  <!-- Hero area -->
  <section class="hero hero-small hero-competition">
        <div class="col-sm-7">
            <h1 class="text-center animated fadeInUp">Community Initiative Competition</h1>

            <h2 class="text-center animated fadeInUp">August 20, 2017</h2>

            <h3 class="text-center animated fadeInUp animDelay04">
                Win $1250 to Start a Non-Profit
            </h3>

            <p class="text-center animated fadeInUp animDelay04"><a href="https://www.summerofopportunity.com/soft-skills">Attending "Soft Skills" will help you win.</a></p>

            <a href="#register" class="btn-hero btn btn-wire wire-btn-white animated fadeInDown animDelay08">
                Register Now <?php echo $registration_fee['competition_early'];?>
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
    <p>Make your idea a reality.
    <br><br>
    The Community Initiative Competition (CIC) is a competition designed to get students involved and taking action in their neighbourhoods. The competition will bring attention to local issues and possible solutions; the best proposal will be awarded with a choice of $500 to take home or $1250 to continue the initiative.
    <br><br>
    Attending <a href="https://www.summerofopportunity.com/soft-skills">"Soft Skills"</a> will prepare you for the CIC and give you a better chance of winning. Of course, you can choose to attend Soft Skills without participating in the competition.
    </p>

  </div>
  <!-- End Overview Container -->

  <!-- Features Container -->
  <div class="container-big text-center bg-container">

    <h1 class="title">Each Team Will</h1>

    <div class="row">
      <div class="col-sm-4">
        <img src="img/people.png" class="img-responsive feature-img"></img>
        <h2>Have 2-4 Team Members</h2>
        <p>No one makes it alone. Choose people you are already friends with so you stay together when the going gets rough.</p>
      </div>
      <div class="col-sm-4">
        <img src="img/sitemap.png" class="img-responsive feature-img"></img>
        <h2>Identify A Community Issues</h2>
        <p>Anything you are passionate about or interested in.</p>
      </div>
      <div class="col-sm-4">
        <img src="img/sitemap.png" class="img-responsive feature-img"></img>
        <h2>Develop A Plan</h2>
        <p>It doesn't have to be perfect but it has to be feasible. Bonus points if you use your strenghts.</p>
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
      <div class="col-sm-4" id="what-to-bring">
        <h2>What To Bring</h2>
        <p>Laptop + Charger</p>
        <p>Water Bottle</p>
      </div>
      <!-- End What to Bring -->
    </div>

  </div>
  <!-- End Fee Includes, Venue Container, and What to Bring -->

  <!-- What you'll learn Container -->
  <div class="container-big text-center bg-container">

    <h1 class="title">What You'll Win</h1>

    <div class="row">
      <div class="col-sm-4">
        <img src="img/ldg-logo.png" alt="LDG Logo" class="img-responsive feature-img"></img>
        <h2>Mentorship</h2>
        <p>LDG will advise you and help run your organization.</p>
      </div>
      <div class="col-sm-4">
        <img src="img/money.png" alt="prize money" class="img-responsive feature-img"></img>
        <h2>$1250</h2>
        <p>To help execute the initiative.</p>
      </div>
      <div class="col-sm-4">
        <img src="img/connections.png" alt="connections" class="img-responsive feature-img"></img>
        <h2>Connections</h2>
        <p>LDG can connect you with people to help grow your initiative.</p>
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
              <td>9:30AM - 9:45AM</td>
              <td>Check In</td>
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
        document.getElementById("choice_competition").checked = true;
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
