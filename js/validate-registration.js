//Requires JQuery
function validateRegistration() {
  var canContinue = true;

  if( $('#choice_web_design').is(":checked") == false && $('#choice_academic_success').is(":checked") == false &&
      $('#choice_careers_in_medicine').is(":checked") == false && $('#choice_soft_skills').is(":checked") == false &&
      $('#choice_competition').is(":checked") == false ) {

      //Val() is false if the checkbox isn't in the form
      if( $('#choice_all').val() ) {
        if( $('#choice_all').is(":checked") == false ) {
          $('#choices').css('border', 'solid');
          $('#choices').css('border-color', 'red');
          canContinue = false;
        } else {
          $('#choices').css('border-color', 'transparent');
        }
      } else {
          $('#choices').css('border', 'solid');
          $('#choices').css('border-color', 'red');
          canContinue = false;
      }
  } else {
    $('#choices').css('border-color', 'transparent');
  }

  if( validateName($('#register_first_name').val()) == false ) {
    $('#register_first_name').css('border-bottom', 'solid');
    $('#register_first_name').css('border-color', 'red');
    canContinue = false;
  } else {
    $('#register_first_name').css('border-bottom', 'none');
    $('#register_first_name').css('border-color', 'white');
  }

  if( validateName($('#register_last_name').val()) == false ) {
    $('#register_last_name').css('border-bottom', 'solid');
    $('#register_last_name').css('border-color', 'red');
    canContinue = false;
  } else {
    $('#register_last_name').css('border-bottom', 'none');
    $('#register_last_name').css('border-color', 'white');
  }

  var email = $('#register_email').val()
  if( email == '' || validateEmail(email) == false ) {
    $('#register_email').css('border-color', 'red');
    canContinue = false;
  } else {
    $('#register_email').css('border-color', 'white');
  }

  var grade = $('#register_grade').val();
  if( grade == '' || grade.length > 2 || parseInt(grade) < 0 || parseInt(grade) > 12 || /^\d{1,2}$/.test(grade) == false ) {
    $('#register_grade').css('border-color', 'red');
    canContinue = false;
  } else {
    $('#register_grade').css('border-color', 'white');
  }

  //Val() is false if the checkbox isn't in the form
  if( $('#inova_policy_check').val() ) {
    if( ($('#choice_web_design').is(":checked") == true || $('#choice_all').is(":checked") == true)
        && $('#inova_policy_check').is(":checked") == false ) {
      $('#inova_policy_wrapper').css('background', 'red');
      canContinue = false;
    } else {
      $('#inova_policy_wrapper').css('background', 'transparent');
    }
  }

  if( validateName($('#register_emergency_first_name').val()) == false ) {
    $('#register_emergency_first_name').css('border-bottom', 'solid');
    $('#register_emergency_first_name').css('border-color', 'red');
    canContinue = false;
  } else {
    $('#register_emergency_first_name').css('border-bottom', 'none');
    $('#register_emergency_first_name').css('border-color', 'white');
  }

  if( validateName($('#register_emergency_last_name').val()) == false ) {
    $('#register_emergency_last_name').css('border-bottom', 'solid');
    $('#register_emergency_last_name').css('border-color', 'red');
    canContinue = false;
  } else {
    $('#register_emergency_last_name').css('border-bottom', 'none');
    $('#register_emergency_last_name').css('border-color', 'white');
  }

  if( $('#register_emergency_phone').val() == '' || /\d+/.test($('#register_emergency_phone').val()) == false ) {
    $('#register_emergency_phone').css('border-bottom', 'solid');
    $('#register_emergency_phone').css('border-color', 'red');
    canContinue = false;
  } else {
    $('#register_emergency_phone').css('border-bottom', 'none');
    $('#register_emergency_phone').css('border-color', 'white');
  }

  return canContinue;
}

function validateName( name ) {
  return name != '' && /\d+/.test(name) == false;
}

function validateEmail( email ) {
  var re = /^[_a-zA-Z0-9-]+(\.+[_a-zA-Z0-9-]*)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-z]{2,4})$/;
  return re.test(email);
}
