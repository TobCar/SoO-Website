<?php
include 'global/header.php';
?>

<!-- This will display an extra head tag after the header is parsed but is necessary to change the description and title. -->
<head>
  <meta name="description" content="Project management for teens. Win $1000 to start a nonprofit. August 19, 2017 at HiVE Vancouver.">
  <title>Summer of Opportunity | Soft Skills | CIC</title>
  <meta property="og:title" content="Soft Skills | Community Initiative Competition | Summer of Opportunity"/>
  <meta property="og:image" content="https://www.summerofopportunity.com/img/hero-competition.jpg"/>
</head>

<body>
  <?php
  include 'global/navigation.php';
  ?>

  <!-- Hero area -->
  <section class="hero hero-small hero-competition">
        <div class="col-sm-7">
            <h1 class="text-center animated fadeInUp">Soft Skills & Community Initiative Competition</h1>

            <h2 class="text-center animated fadeInUp">August 19, 2017</h2>

            <h3 class="text-center animated fadeInUp animDelay04">
                Win $1000 to Start a Non-Profit
            </h3>

            <p class="text-center animated fadeInUp animDelay04">Acquire critical project management skills.</p>

            <a href="#register" class="btn-hero btn btn-wire wire-btn-white animated fadeInDown animDelay08">
                Register Now <?php echo $registration_fee['regular'];?>
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
    <p>Learn the skills necessary to run initiatives in your community and organize any project effectively through a variety of workshops. Then, receive advice on crafting good presentations and good public speaking habits to prepare for the afternoon.
    <br><br>
    In the afternoon participate in the Community Initiative Competition (CIC) to pitch your idea to take action in your neighbourhood. The competition will bring attention to local issues and possible solutions; the best proposal will be awarded with a choice of $500 to take home or $1000 to continue the initiative.
    </p>

  </div>
  <!-- End Overview Container -->

  <!-- Team Container -->
  <div class="container-big text-center bg-container">

    <h1 class="title">Each Team Will</h1>

    <div class="row">
      <div class="col-sm-4">
        <img src="img/people.png" class="img-responsive feature-img"></img>
        <h2>Have 2-4 Team Members</h2>
        <p>We will match you with other attendees if you don't have anyone to go with.</p>
      </div>
      <div class="col-sm-4">
        <img src="img/lightbulb.png" class="img-responsive feature-img"></img>
        <h2>Identify A Community Issue</h2>
        <p>Anything you are passionate about or interested in.</p>
      </div>
      <div class="col-sm-4">
        <img src="img/writing.png" class="img-responsive feature-img"></img>
        <h2>Develop A Plan</h2>
        <p>It doesn't have to be perfect but it has to be feasible. Bonus points if you use your strenghts.</p>
      </div>
    </div>
  </div>
  <!-- End Team Container -->

  <!-- Fee Includes, Venue Container, and What to Bring -->
  <div class="container text-center" style="padding-top: 30px; padding-bottom: 30px;">

    <div class="row">
      <!-- Fee Includes -->
      <div class="col-sm-4">
        <h2>Registration | <?php echo $registration_fee['regular'];?></h2>
        <del>Early Bird | <?php echo $registration_fee['early'];?> Early Bird</del>
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
        <h2>$1000</h2>
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
              <td>9:00AM - 9:15AM</td>
              <td>Check In and Networking</td>
          </tr>
          <tr>
              <td>9:15AM - 9:30AM</td>
              <td>Opening</td>
          </tr>
          <tr>
              <td>9:30AM - 11:00AM</td>
              <td>Workshops</td>
          </tr>
          <tr>
              <td>11:00AM - 11:45AM</td>
              <td>Lunch and Networking</td>
          </tr>
          <tr>
              <td>11:45AM - 1:15PM</td>
              <td>Workshops</td>
          </tr>
          <tr>
              <td>1:15PM - 1:30PM</td>
              <td>CIC Introduction</td>
          </tr>
          <tr>
              <td>1:30PM - 3:00PM</td>
              <td>Competition Prep</td>
          </tr>
          <tr>
              <td>3:00PM - 4:30PM</td>
              <td>Teams Present To Judges</td>
          </tr>
          <tr>
              <td>4:30PM - 5:30PM</td>
              <td>Finalist Presentation</td>
          </tr>
          <tr>
              <td>5:30PM - 6:00PM</td>
              <td>Awards Ceremony and Closing</td>
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
