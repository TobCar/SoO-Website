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
            <div class="card" id="card-3">
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
            <div class="card" id="card-4">
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
          <div class="card" id="card-1">
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
          <div class="card" id="card-2">
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

  <!-- Reopen main container -->
  <div class="container">
    <!-- Registration -->
    <section id="registration">
      <div class="col-xs-6 col-md-offset-3">
        <div class="animated pulse" id="register">
          <!-- Event Choices -->
          <p>Register for...</p>
          <div id="choices">
            <div class="row">
              <div class="col-xs-6">
                <input id="choice_web_design" type="checkbox"><p class="checkbox_text_choice">Web Design ($10)</p>
              </div>
              <div class="col-xs-6">
                <input id="choice_academic_success" type="checkbox"><p class="checkbox_text_choice">Academic Success ($10)</p>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6">
                <input id="choice_careers_in_medicine" type="checkbox"><p class="checkbox_text_choice">Careers In Medicine ($10)</p>
              </div>
              <div class="col-xs-6">
                <input id="choice_soft_skills" type="checkbox"><p class="checkbox_text_choice">Soft Skills ($10)</p>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6">
                <input id="choice_competition" type="checkbox"><p class="checkbox_text_choice">Business Competition ($15)</p>
              </div>
              <div class="col-xs-6">
                <input id="choice_all" type="checkbox"><p class="checkbox_text_choice">All Events ($45) BEST DEAL</p>
              </div>
            </div>
          </div>
          <!-- End Event Choices -->

          <!-- Registration Form -->
          <p>Attendee Info</p>
          <input class="side-by-side-left" id="register_first_name" name="register_first_name" type="text" placeholder="FIRST NAME">
          <input class="side-by-side-right" id="register_last_name" name="register_last_name" type="text" placeholder="LAST NAME">
          <input id="register_email" class="side-by-side-left" style="margin-bottom:24px; border-bottom:solid 1px;" name="register_email" type="text" placeholder="E-MAIL">
          <input class="side-by-side-right" style="margin-bottom:24px; border-bottom:solid 1px;" id="register_grade" name="register_grade" type="number" placeholder="GRADE">
          <input id="inova_policy_check" type="checkbox"><a id="inova_policy_wrapper" href="http://www.inovaca.org/eventpolicy/" target="_blank"> I agree to Inova's event policy.</a>
          <p style="padding-top:16px;">Emergency Contact Info</p>
          <input class="side-by-side-left" id="register_emergency_first_name" name="register_emergency_first_name" type="text" placeholder="FIRST NAME">
          <input class="side-by-side-right" id="register_emergency_last_name" name="register_emergency_last_name" type="text" placeholder="LAST NAME">
          <input id="register_emergency_phone" name="register_emergency_phone" type="text" placeholder="PHONE NUMBER"><br>

          <input id="submit" type="submit" class="btn-checkout" value="CHECKOUT NOW">

          <p class="small text-center">There are no refunds available under any circumstances except as required by law.</p>
        </div>
      </div>
		</section>
    <!-- End Registration -->


        <div class="row">
            <div class="col-md-5">
              <!-- Like our Facebook page -->
              <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F56PaperClips%2F&width=340&height=300&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1344105575651022" width="340" height="205" style="border:none;overflow:hidden; display: table;margin: 0 auto; margin-top:20px;" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
              <!-- End Like our Facebook page -->
            </div>
            <div class="col-md-2">
                <div class="vr" style="margin-left:48%;"></div>
            </div>
            <div class="col-md-5" id="mobile-btn-contact">
              <a href="contact.html" class="btn btn-wire wire-btn-white animated fadeInDown animDelay08" style="display: table;margin: 0 auto;">
                  Contact Us
              </a>
            </div>
        </div>

    <!-- End Contact -->

  </div>
  <!-- End main container -->
</body>

<?php
include 'global/footer.php';
?>

<!-- Import Form Validation  -->
<script src="js/validate-registration.js" type="text/javascript"></script>

<!-- Import JQuery -->
<script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

<!-- Import Checkout by Stripe -->
<script src="https://checkout.stripe.com/checkout.js"></script>

<script>
var registrationCost = 0;

var handler = StripeCheckout.configure({
  key: "<?php echo $stripe['publishable_key'];?>",
  name: 'The Summer of Opportunity',
  zipCode: false,
  currency: 'cad',
  image: 'https://summerofopportunity.com/img/checkout.jpg',
  locale: 'en',
  token: function(token) {
    const FIRST_NAME = $('#register_first_name').val();
    const LAST_NAME = $('#register_last_name').val();
    const EMAIL = $('#register_email').val();
    const GRADE = $('#register_grade').val();
    const EMERG_FIRST_NAME = $('#register_emergency_first_name').val();
    const EMERG_LAST_NAME = $('#register_emergency_last_name').val();
    const EMERG_PHONE = $('#register_emergency_phone').val();
    var events_attending = {};
    events_attending['web_design'] = $('#choice_web_design').is(":checked");
    events_attending['academic_success'] = $('#choice_academic_success').is(":checked");
    events_attending['careers_in_medicine'] = $('#choice_careers_in_medicine').is(":checked");
    events_attending['soft_skills'] = $('#choice_soft_skills').is(":checked");
    events_attending['competition'] = $('#choice_competition').is(":checked");
    if( $('#choice_all').val() && $('#choice_all').is(":checked") ) {
      events_attending['all'] = true;
    } else {
      events_attending['all'] = false;
    }

    $.ajax({ url: './php/registration-form.php',
         data: {register_first_name: FIRST_NAME,
                register_last_name: LAST_NAME,
                register_email: EMAIL,
                register_grade: GRADE,
                register_emergency_first_name: EMERG_FIRST_NAME,
                register_emergency_last_name: EMERG_LAST_NAME,
                register_emergency_phone: EMERG_PHONE,
                fee: registrationCost,
                events_attending: events_attending,
                token: token.id},
         type: 'post',
         success: function(output) {
           window.location.href = "https://www.summerofopportunity.com/thank-you.php";

           //Enable when debugging
           //alert(output);
         },
         error: function(err) {
            console.log(err);
            alert("Error outputted to the console.");
         }
       });
     }
});

document.getElementById('submit').addEventListener('click', function(e) {
  if( validateRegistration() ) {
    registrationCost = 0;
    const eventFee = 1000;
    const competitionFee = 1500;

    if( $('#choice_all').is(":checked") ) {
      registrationCost = eventFee*3 + competitionFee;
    } else {
      if( $('#choice_web_design').is(":checked") ) {
        registrationCost += eventFee;
      }
      if( $('#choice_academic_success').is(":checked") ) {
        registrationCost += eventFee;
      }
      if( $('#choice_careers_in_medicine').is(":checked") ) {
        registrationCost += eventFee;
      }
      if( $('#choice_soft_skills').is(":checked") ) {
        registrationCost += eventFee;
      }
      if( $('#choice_competition').is(":checked") ) {
        registrationCost += competitionFee;
      }
    }

    handler.open({
      description: 'Event Registration',
      email: $('#register_email').val(),
      amount: registrationCost
    });
  }
});

//Close Checkout on page navigation:
window.addEventListener('popstate', function() {
  handler.close();
});
</script>
</html>
