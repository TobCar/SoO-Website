<?php
include './global/header.php';
?>

<!-- This will display an extra head tag after the header is parsed but is necessary to change the description and title. -->
<head>
  <meta name="description" content="A summer of events for teenagers at the start of August, hosted by 56 Paper Clips.">
  <title>Summer of Opportunity | Home</title>
</head>

<body>
  <!-- Hero area -->
  <section class="hero">
        <div class="col-md-7">
            <h1 class="text-center animated fadeInUp">A <span class="emphasis">Week</span> of <span class="emphasis">Events</span> for <span class="emphasis">Teens</span></h1>

            <div class="line-text">
              <h2 class="text-center animated fadeInUp">A Summer of Opportunity</h2>
            </div>

            <h3 class="text-center animated fadeInUp animDelay04">
                Learn about  <br class="br">
                Making Websites | Writing A CV | Medical Careers<br></h3>


            <p class="text-center animated fadeInUp animDelay04">and win <span style="font-size: 25px">$1250</span> in the community initiative competition</p>

            <center>
              <h3 class="btn btn-wire wire-btn-white animated fadeInDown animDelay08">
                  Register Now
              </h3>
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
      <h3>Learning and discovery shouldn't end with the school year.</h3>
      <p><a href="https://www.56paperclips.com">56 Paper Clips</a> is happy to welcome all BC teens to the Summer of Opportunity. Attend any, or all, of our events and get a taste of the activities you can pursue in your spare time.</p>
      <p>We are proud to have partnered with Inova, WYNS, NSN, and LDG to make this summer a success.</p>
    </section>

    <section id="workshops" class="box">
      <!-- Title -->

      <h1 class="text-center title" style="margin-bottom: 20px">Workshops about...</h1>

      <!-- End Title -->

      <!-- Workshop Cards -->
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
              <a href="https://www.google.com" class="btn btn-blue">More Info</a>
              <a href="https://www.google.com" class="btn">Register Now | $15</a>
            </div>
          </div>


          <div class="col-xs-12 col-sm-6">
            <div class="card">
              <h2>Careers In Medicine</h2>
             <!-- <p style="margin-bottom:30px;">Listen to industry professionals tell you what it's really like.</p> -->
                <ul style="list-style:none; padding-left: 0px;" class="card-list">
                  <li>Learn how to partake in the medical field as a teen</li>
                  <li>Understand medical issues in our community</li>
                  <li>Features: Interactive sessions & multiple speakers</li>
                </ul>
              <a href="https://www.google.com" class="btn btn-blue">More Info</a>
              <a href="https://www.google.com" class="btn">Register Now | $15</a>
            </div>
          </div>
        </div>

      <!-- Row 2 -->
      <div class="row" id="row-cards">
        <div class="col-xs-12 col-sm-6">
          <div class="card">
            <h2>Soft Skills</h2>
            <ul style="list-style:none; padding-left: 0px;" class="card-list">
                <li>Lorem ipsum dolor sit amet</li>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Lorem ipsum dolor sit amet</li>
              </ul>
            <a href="https://www.google.com" class="btn btn-blue">More Info</a>
            <a href="https://www.google.com" class="btn">Register Now | $15</a>
          </div>
        </div>

        <div class="col-xs-12 col-sm-6">
          <div class="card">
            <h2>Academic Success</h2>
           <!-- <p style="margin-bottom:30px;">Tips and tricks on how to write a university application.</p> -->
              <ul style="list-style:none; padding-left: 0px;" class="card-list">
                <li>Listen to tips on applying to university</li>
                <li>Get personalized feedback on your CV</li>
                <li>Learn how to act during an interview</li>
              </ul>
            <a href="https://www.google.com" class="btn btn-blue">More Info</a>
            <a href="https://www.google.com" class="btn">Register Now | $15</a>
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
              <h1 style="">Business/NonProfit Competition</h2>
              <p style="margin-bottom:30px;">Make your idea a reality.</p>
                <div class="row">
                    <div class="col-sm-6">
             <a href="https://www.google.com" class="btn btn-blue">More Info</a>
                        </div>
                    <div class="col-sm-6">
              <a href="https://www.google.com" class="btn">Register Now | $15</a>
                        </div>
                </div>


                <h2 class="text-center" style="color:black;">...and a grand finale with <span style="font-size: 40px;"><u>$1250</u></span> in prizes...</h1>

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
        <img src="img/html.png" alt="HTML" class="img-responsive feature-img"></img>
        <h2>HTML</h2>
        <p>Hypertext Markup Language is used in every website.</p>
      </div>
    </div>
  </div>
  <!-- End What you'll learn Container -->

  <!-- Sponsors Container -->
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
          <a href="contact.html" class="btn btn-wire wire-btn-white animated fadeInDown animDelay08" style="display: table;margin: 0 auto;">
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
