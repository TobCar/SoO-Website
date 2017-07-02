<?php
include 'global/header.php';
?>

<!-- This will display an extra head tag after the header is parsed but is necessary to change the description and title. -->
<head>
  <meta name="description" content="HTML & CSS basics for teens. Make a basic website in one day.">
  <title>Summer of Opportunity | Web Design</title>
  <meta property="og:title" content="Web Design | Summer of Opportunity"/>
  <meta property="og:image" content="https://www.summerofopportunity.com/img/hero-web-design.jpg"/>
</head>

<body>
  <?php
  include 'global/navigation.php';
  ?>

  <!-- Hero area -->
  <section class="hero hero-small hero-web-design">
        <div class="col-sm-7">
            <h1 class="text-center animated fadeInUp">Web Design</h1>

            <h2 class="text-center animated fadeInUp">August 5, 2017</h2>

            <h3 class="text-center animated fadeInUp animDelay04">
                HTML & CSS Basics
            </h3>

            <p class="text-center animated fadeInUp animDelay04">The programming languages that run the internet</p>

            <a href="#register" class="btn-hero btn btn-wire wire-btn-white animated fadeInDown animDelay08">
                Register Now <?php echo $registration_fee['early'];?>
            </a>
        </div>

        <div class="col-sm-offset-2 col-sm-3 text-center">
          <img src="img/inova-logo.png" alt="inova computer association logo" class="organizer-logo"></img>
          <p>This event is organized by the Inova Computer Association</p>
          <img src="img/lighthouselabs-logo.png" alt="Lighthouse Labs logo" style="width:100%!important;" class="organizer-logo"></img>
          <p>and taught by Lighthouse Labs.</p>
        </div>
  </section>
  <!-- End Hero Area -->

  <!-- Overview Container -->
  <div class="container-big text-center">

    <h1 class="title">Overview</h1>
    <p>Have you ever wanted to broadcast your ideas to the internet? Do you think website builders are too simplistic or don't suit your needs? Do you just want to learn more code? Do you enjoy competitions? If you answered yes to any of the questions above, the solution is in sight.
<br><br>
This day-long event will teach beginners the basics of HTML and CSS in order to allow ANYONE to develop a fully-fledged, working website. No prior knowledge of ANY programming language is required; the lessons included will be taught by experts from Lighthouse Labs.
<br><br>
The day will conclude with a mini-competition. The objective will be to design a fully-functioning website in a limited amount of time. The criteria for judging will be aspects of the website's design and functionality, such as User Interface/Experience (UI/UX), and fulfillment of the requirements.</p>

  </div>
  <!-- End Overview Container -->

  <!-- Features Container -->
  <div class="container-big text-center bg-container">

    <h1 class="title">Features</h1>

    <div class="row">
      <div class="col-sm-4">
        <img src="img/networking.png" class="img-responsive feature-img"></img>
        <h2>Networking</h2>
        <p>Meet professional instructors and young technology enthusiasts.</p>
      </div>
      <div class="col-sm-4">
        <img src="img/workshop.png" class="img-responsive feature-img"></img>
        <h2>Workshops</h2>
        <p>Taught by Lighthouse Labs.</p>
      </div>
      <div class="col-sm-4">
        <img src="img/competition.png" class="img-responsive feature-img"></img>
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
        document.getElementById("choice_web_design").checked = true;
        document.getElementById("inova_policy_check").style.display = 'inline-block';
        document.getElementById("inova_policy_wrapper").style.display = 'inline';
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
