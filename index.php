<?php
include './global/header.php';
?>

<!-- This will display an extra head tag after the header is parsed but is necessary to change the description and title. -->
<head>
  <meta name="description" content="A summer of events for teenagers at the start of August, hosted by 56 Paper Clips.">
  <title>Summer of Opportunity | Home</title>
  <meta property="og:title" content="The Summer of Opportunity"/>
</head>

<body>
  <!-- Hero area -->
  <section class="hero">
        <div class="col-md-7">
            <h1 class="text-center animated fadeInUp"><span class="emphasis">5 Events</span><br><span class="emphasis">500 Teens</span></h1>

            <div class="line-text">
              <h2 class="text-center animated fadeInUp">A Summer of Opportunity</h2>
            </div>

            <p class="text-center animated fadeInUp">August 2017</p>

            <h3 class="text-center animated fadeInUp animDelay04">
                Some of the things you will learn...  <br class="br">
                Making Websites | Writing A CV | Public Speaking <br></h3>


            <p class="text-center animated fadeInUp animDelay04">and <span style="font-size: 25px">win $1250</span> in the community initiative competition</p>

            <center>
              <a class="btn btn-wire wire-btn-white animated fadeInDown animDelay08" id="hero-register" href="#register">
                  Register Now
              </a>
            </center>
        </div>
  </section>
  <!-- End hero area -->

  <?php
  include 'global/navigation.php';
  ?>

  <!-- Main Container -->
  <div class="container">

    <section id="about" class="box-coloured" style="margin-top: 30px;">
      <h3>Today's world is constantly changing place. It requires you to think big, be creative, and take every chance you get.</h3>
      <p>At the Summer of Opportunity, you can develop the skills needed navigate your future in this world. Learn about everything from coding to networking at this groundbreaking event, presented by <a href="https://www.56paperclips.com">56 Paper Clips</a> in partnership with the Local Development Group, National Student Network, Wish Youth Network Society, and Inova.</p>
      <p>Organized by students for students, the Summer of Opportunity is your chance to explore new ideas and learn valuable skills through workshops, seminars and competitions hosted at HiVE in downtown Vancouver.</p>
    </section>

    <section id="events" class="workshops box">
      <!-- Title -->

      <h1 class="text-center title" style="margin-bottom: 20px">Workshops about...</h1>

      <!-- End Title -->

      <!-- Workshop Cards -->

        <script src="js/select.js" type="text/javascript"></script>

        <!-- Row 1 -->
        <div class="row" id="row-cards">
          <div class="col-xs-12 col-sm-6">
            <div class="card">
              <h2>Web Design</h2>
              <ul style="list-style:none; padding-left: 0px;" class="card-list">
                  <li>Learn HTML & CSS</li>
                  <li>Make a basic site in 1 day</li>
                  <li>Introduce yourself to programming</li>
                </ul>
              <a href="https://www.summerofopportunity.com/web-design" class="btn btn-blue">More Info</a>
              <a href="#register" onclick="select('choice_web_design')" class="btn">Register Now | <?php echo $registration_fee['early'];?></a>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6">
            <div class="card">
              <h2>Academic Success</h2>
                <ul style="list-style:none; padding-left: 0px;" class="card-list">
                  <li>Listen to tips on applying to university</li>
                  <li>Get personalized feedback on your CV</li>
                  <li>Learn how to act during an interview</li>
                </ul>
              <a href="https://www.summerofopportunity.com/academic-success" class="btn btn-blue">More Info</a>
              <a href="#register" onclick="select('choice_academic_success')" class="btn">Register Now | <?php echo $registration_fee['early'];?></a>
            </div>
          </div>
        </div>

      <!-- Row 2 -->
      <div class="row" id="row-cards">
        <div class="col-xs-12 col-sm-6">
          <div class="card">
            <h2>Soft Skills</h2>
            <ul style="list-style:none; padding-left: 0px;" class="card-list">
                <li>Practice public speaking</li>
                <li>Learn effective networking</li>
                <li>Get tips to collaborate effectively</li>
              </ul>
            <a href="https://www.summerofopportunity.com/soft-skills" class="btn btn-blue">More Info</a>
            <a href="#register" onclick="select('choice_soft_skills')" class="btn">Register Now | <?php echo $registration_fee['early'];?></a>
          </div>
        </div>

        <div class="col-xs-12 col-sm-6">
          <div class="card">
            <h2>Careers In Medicine</h2>
              <ul style="list-style:none; padding-left: 0px;" class="card-list">
                <li>Learn how to partake in the medical field as a teen</li>
                <li>Understand medical issues in our community</li>
                <li>Features: Interactive sessions & multiple speakers</li>
              </ul>
            <a href="https://www.summerofopportunity.com/careers-in-medicine" class="btn btn-blue">More Info</a>
            <a href="#register" onclick="select('choice_careers_in_medicine')" class="btn">Register Now | <?php echo $registration_fee['early'];?></a>
          </div>
        </div>
      </div>
      <!-- End Workshop Cards -->
    </section>
    <!-- End Workshops Section -->

    <!-- Competitions Section -->
      <section id="competition" class="box">

        <!-- Competition Cards -->
        <div class="row" >

          <div class="col-sm-12">
            <div class="card" id="card-competition" style="border-radius: 15px; padding-top: 33px;">
              <!-- Description -->
              <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                  <h1>Community Initiative Competition</h2>
                  <p class="cic-description">Make your idea a reality.
                  <br><br>
                  The Community Initiative Competition (CIC) is a competition designed to get students involved and taking action in their neighbourhoods. The competition will bring attention to local issues and possible solutions; the best proposal will be awarded with a choice of $500 to take home or $1250 to continue the initiative.
                  <br><br>
                  Attending "Soft Skills" will prepare you for the CIC and give you a better chance of winning. Of course, you can choose to attend Soft Skills without participating in the competition.
                  </p>
              </div>
              <!-- End Description -->

              <!-- Buttons -->
              <div class="row">
                  <div class="col-sm-6">
                    <a href="https://www.summerofopportunity.com/competition" class="btn btn-blue">More Info</a>
                  </div>
                  <div class="col-sm-6">
                    <a href="#register" onclick="select('choice_competition')" class="btn">Register Now | <?php echo $registration_fee['competition_early'];?></a>
                  </div>
              </div>
              <!-- End Buttons -->

              <h2 class="text-center" style="color:black;">...and a grand finale with <span style="font-size: 40px;"><u>$1250</u></span> in prize money...</h1>
            </div>
          </div>
        </div>
        <!-- End Competition Cards -->

      </section>
    <!-- End Competitions Section -->
</div>
<!-- Close main container for the calendar -->
  <!-- Calendar of when events are happening -->
  <section id="calendar" class="box">

    <!-- Section title -->
    <div class="calendar-title" >
        <ul>
          <li style="text-align:center">
            <h2>Mark Your Calendar</h2>
          </li>
        </ul>
    </div>
    <!-- End section title -->

    <!-- August Calendar -->
    <div class="month">
        <ul>
          <li style="text-align:center">
            <span style="font-size:18px">August 2017</span>
          </li>
        </ul>
    </div>

    <ul class="weekdays">

        <li>Mo</li>
        <li>Tu</li>
        <li>We</li>
        <li>Th</li>
        <li>Fr</li>
        <li>Sa</li>
        <li>Su</li>
    </ul>

    <ul class="days">
        <li class="faded">31</li>
        <li>1</li>
        <li>2</li>
        <li>3</li>
        <li>4</li>
        <li class="used"><img src="img/inova-small.png"></img><br>Web Design<br>5</li>
        <li>6</li>
        <li>7</li>
        <li>8</li>
        <li>9</li>
        <li>10</li>
        <li>11</li>
        <li class="used"><img src="img/nsn-small.png"></img><br>Academic Success<br>12</li>
        <li class="used"><img src="img/wyns-small.png"></img><br>Careers In Medicine<br>13</li>

        <li>14</li>
        <li>15</li>
        <li>16</li>
        <li>17</li>
        <li>18</li>
        <li class="used"><img src="img/ldg-small.png"></img><br>Soft Skills<br>19</li>
        <li class="used"><img src="img/ldg-small.png"></img><br>Community Initiative Comp.<br>20</li>
    </ul>
    <!-- End August calendar -->

  </section>
  <!-- End calendar section-->

  <!-- Organizers Container -->
  <div class="container text-center">

    <h2 class="title">Organizations Involved</h2>

    <div class="row">
      <div class="col-sm-12">
        <img src="img/56pc-logo.png" alt="56 Paper Clips Logo" class="img-responsive feature-img" style="width:50%!important;">
        <a href="https://www.56paperclips.com"><h3>56 Paper Clips  |  Head Coordinator</h3></a>
        <p>Led by Tobias Carryer and Tessa Furey</p>
      </div>
    </div>

    <div class="row">
      <h2>Event Organizers</p>
      <div class="col-sm-3">
        <img src="img/inova-logo.png" alt="Inova Logo" class="img-responsive feature-img">
        <h3>Inova Computer Association</h3>
      </div>
      <div class="col-sm-3">
        <img src="img/nsn-logo.png" alt="NSN Logo" class="img-responsive feature-img">
        <h3>National Student Network</h3>
      </div>
      <div class="col-sm-3">
        <img src="img/wyns-logo.png" alt="WYNS Logo" class="img-responsive feature-img">
        <h3>Wish Youth Network Society</h3>
      </div>
      <div class="col-sm-3">
        <img src="img/ldg-logo.png" alt="LDG Logo" class="img-responsive feature-img"></img>
        <h3>Local Development Group</h3>
      </div>
    </div>
  </div>
  <!-- End Organizers Container -->

  <!-- Sponsors Container -->
  <div class="container-big text-center bg-container" id="sponsors">

    <h1 class="title">Sponsors</h1>

    <div class="row">
      <div class="col-sm-4">
        <img src="img/davidstea-logo.png" alt="DavidsTea Logo" class="img-responsive">
      </div>
      <div class="col-sm-4">
        <img src="img/hive-logo.png" alt="HiVE Logo" class="img-responsive">
      </div>
      <div class="col-sm-4">
        <img src="img/envisionfinancial-logo.png" alt="Envision Financial Logo" class="img-responsive">
      </div>
    </div>
  </div>
  <!-- End What you'll learn Container -->

  <!-- Reopen main container -->
  <div class="container">
    <?php
    include 'global/registration-form.php';
    ?>


    <div class="row">
      <!-- Like our Facebook page -->
        <div class="col-md-5">
          <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F56PaperClips%2F&width=340&height=300&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1344105575651022" width="340" height="205" style="border:none;overflow:hidden; display: table;margin: 0 auto; margin-top:20px;" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
        </div>
        <!-- End Like our Facebook page -->

        <!-- Vertical Line Divider -->
        <div class="col-md-2">
            <div class="vr" style="margin-left:48%;"></div>
        </div>
        <!-- End Vertical Line Divider -->

        <!-- Contact Us Button -->
        <div class="col-md-5" id="mobile-btn-contact">
          <a href="https://www.summerofopportunity.com/contact" class="btn btn-wire wire-btn-white animated fadeInDown animDelay08" style="display: table;margin: 0 auto;">
              Contact Us
          </a>
        </div>
        <!-- End Contact Us Button -->
    </div>

  </div>
  <!-- End main container -->
</body>

<?php
include 'global/footer.php';
?>
</html>
