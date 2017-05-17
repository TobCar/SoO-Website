<!-- Registration -->
<section id="registration">
  <div class="row">
    <div class="col-xs-12">
      <div class="animated pulse" id="register">
        <!-- Event Choices -->
        <p>Register for...</p>
        <div id="choices">
          <div class="row">
            <div class="col-xs-6">
              <input id="choice_web_design" type="checkbox"><p class="checkbox_text_choice">Web Design (<?php echo $registration_fee['early'];?>)</p>
            </div>
            <div class="col-xs-6">
              <input id="choice_academic_success" type="checkbox"><p class="checkbox_text_choice">Academic Success (<?php echo $registration_fee['early'];?>)</p>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <input id="choice_careers_in_medicine" type="checkbox"><p class="checkbox_text_choice">Careers In Medicine (<?php echo $registration_fee['early'];?>)</p>
            </div>
            <div class="col-xs-6">
              <input id="choice_soft_skills" type="checkbox"><p class="checkbox_text_choice">Soft Skills (<?php echo $registration_fee['early'];?>)</p>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <input id="choice_competition" type="checkbox"><p class="checkbox_text_choice">Business Competition (<?php echo $registration_fee['competition_early'];?>)</p>
            </div>
            <div class="col-xs-6">
              <input id="choice_all" type="checkbox"><p class="checkbox_text_choice">All Events (<?php echo $registration_fee['all'];?>) BEST DEAL</p>
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
  </div>
</section>
<!-- End Registration -->

<!-- Import Form Validation  -->
<script src="js/validate-registration.js" type="text/javascript"></script>

<!-- Import JQuery -->
<script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

<!-- Import Checkout by Stripe -->
<script src="https://checkout.stripe.com/checkout.js"></script>

<script>
//Fade in Inova policy box if event is chosen
$('#choice_web_design').on('change', function() {
    if($('#choice_web_design').is(":checked")) {
        $('#inova_policy_check').fadeIn();
        $('#inova_policy_wrapper').fadeIn();
    } else {
        if($('#choice_all').is(":checked")) {
        } else {
          $('#inova_policy_check').fadeOut('fast');
          $('#inova_policy_wrapper').fadeOut('fast');
        }
    }
});

$('#choice_all').on('change', function() {
    if($('#choice_all').is(":checked")) {
        $('#inova_policy_check').fadeIn();
        $('#inova_policy_wrapper').fadeIn();
    } else {
        if($('#choice_web_design').is(":checked")) {
        } else {
          $('#inova_policy_check').fadeOut('fast');
          $('#inova_policy_wrapper').fadeOut('fast');
        }
    }
});

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

    $.ajax({ url: './php/registration-form-server-code.php',
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
           window.location.href = "https://www.summerofopportunity.com/thank-you";

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
    const eventFee = <?php echo $stripe['event_fee'];?>;
    const competitionFee = <?php echo $stripe['comp_fee'];?>;

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
