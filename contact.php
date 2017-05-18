<?php
include './global/header.php';
?>

<head>
  <meta name="description" content="Contact the organizing team behind the Summer of Opportunity.">
  <title>Summer of Opportunity | Contact Us</title>
</head>

<body>

  <?php
  include './global/navigation.php';
  ?>

  <!-- Main Container -->
  <div class="container">

    <!-- Contact Us -->
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <h1 class="text-center" style="color:white;">Contact Us</h1>
        <p class="text-center">Do you want to sponsor our event? Do you have problems registering? Do you have a question? Feel free to send us a message no matter the reason.</p>
        <form class="animated pulse" id="contact-form" action="/php/contact-form.php">
            <input name="name" placeholder="NAME" type="text">
            <input name="email" placeholder="E-MAIL" type="text">
            <textarea name="message" type="text" placeholder="MESSAGE"></textarea>
            <input id="submit" class="btn-checkout" value="GO!" type="submit">
        </form>
      </div>
    </div>
    <!-- End Contact Us -->

  </div>
  <!-- End Main Container -->

</body>
