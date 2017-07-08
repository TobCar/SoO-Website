<?php
include 'global/header.php';
?>

<!-- This will display an extra head tag after the header is parsed but is necessary to change the description and title. -->
<head>
  <meta name="description" content="Learn how to write a CV and other academic necessities.">
  <title>Summer of Opportunity | Academic Success</title>
  <meta property="og:title" content="Academic Success | Summer of Opportunity"/>
  <meta property="og:image" content="https://www.summerofopportunity.com/img/hero-academic-success.jpg"/>
</head>

<body>
  <?php
  include 'global/navigation.php';
  ?>

  <!-- Hero area -->
  <section class="hero hero-small hero-academic-success">
        <div class="col-sm-7">
            <h1 class="text-center animated fadeInUp">Academic Success</h1>

            <h2 class="text-center animated fadeInUp">August 12, 2017</h2>

            <h3 class="text-center animated fadeInUp animDelay04">
                Scholarships & Post-Secondary Applications. Resum&#233;s. Interviews.
            </h3>

            <p class="text-center animated fadeInUp animDelay04">Learn everything you need to succeed in post-secondary!</p>

            <a href="#register" class="btn-hero btn btn-wire wire-btn-white animated fadeInDown animDelay08">
                Register Now <?php echo $registration_fee['regular'];?>
            </a>
        </div>

        <div class="col-sm-offset-2 col-sm-3 text-center">
          <img src="img/nsn-logo.png" alt="national student network logo" class="organizer-logo"></img>
          <p>This event is organized by the National Student Network.</p>
        </div>
  </section>
  <!-- End Hero Area -->

  <!-- Overview Container -->
  <div class="container-big text-center">

    <h1 class="title">Overview</h1>
    <p><b>Roadmap to a Winning Application</b><br>
      Put together an outstanding application for post-secondary or a scholarship!
      We will cover how to request the fantastic reference letters,how to tackle common essay questions, and how to write a CV that showcases your
skills.
<br><br>
<b>Optionally, the NSN will also provide feedback on 1 CV/resum&#233; and 1 university application essay, provided you email us a week in advance at jlou@nsncanada.org.</b>
<br><br>
<b>Acing Interviews</b><br>Put your best self forward! We will discuss different types of
interviews, share tips on how to approach them, and provide responses to common questions.
<br><br>
<b>Panel and Networking Sessions with our National Young Leader Mentors</b>
<br>Learn from our exceptional mentors! We will share insights about our undergraduate, professional, and graduate school experiences.</p>

  </div>
  <!-- End Overview Container -->

  <!-- What you'll learn Container -->
  <div class="container-big text-center bg-container">

    <h1 class="title">What You'll Learn</h1>

    <div class="row">
      <div class="col-sm-4">
        <img src="img/resume.png" alt="HTML" class="img-responsive feature-img"></img>
        <h2>Resum&#233; Writing</h2>
      </div>
      <div class="col-sm-4">
        <img src="img/writing.png" alt="website structure" class="img-responsive feature-img"></img>
        <h2>Essay Writing</h2>
      </div>
      <div class="col-sm-4">
        <img src="img/interview.png" alt="css" class="img-responsive feature-img"></img>
        <h2>Interview Skills</h2>
      </div>
    </div>
  </div>
  <!-- End What you'll learn Container -->

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
        <p>Water Bottle</p>
        <p>A copy of your CV (Optional)</p>
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
        <img src="img/mentorship.png" class="img-responsive feature-img"></img>
        <h2>Mentorship</h2>
        <p>Get tailored advice.</p>
      </div>
      <div class="col-sm-4">
        <img src="img/connections.png" class="img-responsive feature-img"></img>
        <h2>Networking</h2>
        <p>Meet innovators.</p>
      </div>
      <div class="col-sm-4">
        <img src="img/class.png" class="img-responsive feature-img"></img>
        <h2>Workshops</h2>
        <p>Learn to succeed.</p>
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
              <td>Opening Ceremonies</td>
          </tr>
          <tr>
              <td>10:00AM - 12:00PM</td>
              <td>Roadmap to a Winning Application</td>
          </tr>
          <tr>
              <td>12:00PM - 1:00PM</td>
              <td>Lunch/ Networking with National Young Leaders</td>
          </tr>
          <tr>
              <td>1:00PM - 2:30PM</td>
              <td>Acing Academic Interviews</td>
          </tr>
          <tr>
              <td>2:30PM - 4:00PM</td>
              <td>Scholarly Writing Workshop</td>
          </tr>
          <tr>
              <td>4:00 PM - 5:00 PM</td>
              <td>Q&A With National Young Leaders</td>
          </tr>
      </tbody>
  </table>

    <div style="text-align:left;">
      <?php
      include 'global/registration-form.php';
      ?>
      <!-- Select this event page's checkbox in the registration form by default -->
      <script type="text/javascript">
        document.getElementById("choice_academic_success").checked = true;
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
