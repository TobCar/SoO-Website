<?php
include 'global/header.php';
?>

<!-- This will display an extra head tag after the header is parsed but is necessary to change the description and title. -->
<head>
  <meta name="description" content="Meet medical professionals and discover whether medicine is for you.">
  <title>Summer of Opportunity | Careers In Medicine</title>
  <meta property="og:title" content="Careers In Medicine | Summer of Opportunity"/>
  <meta property="og:image" content="https://www.summerofopportunity.com/img/hero-medicine.jpg"/>
</head>

<body>
  <?php
  include 'global/navigation.php';
  ?>

  <!-- Hero area -->
  <section class="hero hero-small hero-medicine">
        <div class="col-sm-7">
            <h1 class="text-center animated fadeInUp">Careers In Medicine</h1>

            <h2 class="text-center animated fadeInUp">August 13, 2017</h2>

            <h3 class="text-center animated fadeInUp animDelay04">
                Your path to medicine
            </h3>

            <p class="text-center animated fadeInUp animDelay04">Exclusive information from those active in the medical field</p>

            <a href="#register" class="btn-hero btn btn-wire wire-btn-white animated fadeInDown animDelay08">
                Register Now <?php echo $registration_fee['regular'];?>
            </a>
        </div>

        <div class="col-sm-offset-2 col-sm-3 text-center">
          <img src="img/wyns-logo.png" alt="wyns logo" class="organizer-logo"></img>
          <p>This event is organized by the Wish Youth Network Society.</p>
        </div>
  </section>
  <!-- End Hero Area -->

  <!-- Overview Container -->
  <div class="container-big text-center">

    <h1 class="title">Overview</h1>
    <p> Dreaming of a future career in the medical field? Want to get involved now but don’t know how?
<br><br>
	Careers In Medicine is a day dedicated to <b>answering your questions about entering the medical field</b> and informing you of practical ways you can start participating in the field now as youth. The event will include three insightful keynote speakers, an educational and practical workshop session on basic first aid, and an exclusive opportunity to have an interactive Q&A session with experts from the field.
<br><br>
	Join us for a valuable educational experience, networking with like-minded youth and to learn about the greater medical issues in our community. </p>

  </div>
  <!-- End Overview Container -->

  <!-- Features Container -->
  <div class="container-big text-center bg-container">

    <h1 class="title">Features</h1>

    <div class="row">
      <div class="col-sm-4">
        <img src="img/person-bubble.png" class="img-responsive feature-img"></img>
        <h2>Keynote Speakers</h2>
      </div>
      <div class="col-sm-4">
        <img src="img/medical-bag.png" class="img-responsive feature-img"></img>
        <h2>Volunteer Opportunities</h2>
      </div>
      <div class="col-sm-4">
        <img src="img/text-bubble.png" class="img-responsive feature-img"></img>
        <h2>Q&A Sessions</h2>
      </div>
    </div>
  </div>
  <!-- End Features Container -->

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
        <p>Something to take notes on</p>
        <p>Water bottle</p>
        <p>An eager mind</p>
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
        <img src="img/like.png" alt="like" class="img-responsive feature-img"></img>
        <h2>Practical Advice</h2>
        <p>Firsthand experience from medical professionals.</p>
      </div>
      <div class="col-sm-4">
        <img src="img/location.png" alt="location" class="img-responsive feature-img"></img>
        <h2>Pursuing A Medical Career</h2>
        <p>As explained by proffesionals who did it.</p>
      </div>
      <div class="col-sm-4">
        <img src="img/lightbulb.png" alt="lightbulb" class="img-responsive feature-img"></img>
        <h2>Impactful Ideas</h2>
        <p>Ways to make a difference as a teenager.</p>
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
              <td>9:45AM - 10:00AM</td>
              <td>Opening Ceremony</td>
          </tr>
          <tr>
              <td>10:00AM - 10:40AM</td>
              <td>The Road to Medicine</td>
          </tr>
          <tr>
              <td>10:40AM - 11:20AM</td>
              <td>Teen Involvement</td>
          </tr>
          <tr>
              <td>11:20AM - 12:00PM</td>
              <td>Impact on Families</td>
          </tr>
          <tr>
              <td>12:00PM - 12:45PM</td>
              <td>Lunch</td>
          </tr>
          <tr>
              <td>12:45PM - 1:30PM</td>
              <td>First Aid Workshop</td>
          </tr>
          <tr>
              <td>1:30PM - 2:00PM</td>
              <td>Q&A Panel</td>
          </tr>
      </tbody>
  </table>

    <div style="text-align:left;">
      <?php
      include 'global/registration-form.php';
      ?>
      <!-- Select this event page's checkbox in the registration form by default -->
      <script type="text/javascript">
        document.getElementById("choice_careers_in_medicine").checked = true;
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
