<?php
include 'global/header.php';
?>

<!-- This will display an extra head tag after the header is parsed but is necessary to change the description and title. -->
<head>
  <meta name="description" content="Prepare for the Community Initiative Competition. Practice public speaking, networking, and more!">
  <title>Summer of Opportunity | Soft Skills</title>
</head>

<body>
  <?php
  include 'global/navigation.php';
  ?>

  <!-- Hero area -->
  <section class="hero hero-small hero-soft-skills">
        <div class="col-sm-7">
            <h1 class="text-center animated fadeInUp">Soft Skills</h1>

            <h2 class="text-center animated fadeInUp">August 19, 2017</h2>

            <h3 class="text-center animated fadeInUp animDelay04">
                Prepare for LDG's competition
            </h3>

            <p class="text-center animated fadeInUp animDelay04">Advice from these workshops will help you win.</p>

            <h3 class="btn-hero btn btn-wire wire-btn-white animated fadeInDown animDelay08">
                Register Now $15
            </h3>
        </div>
  </section>
  <!-- End Hero Area -->

  <!-- Overview Container -->
  <div class="container-big text-center">

    <h1 class="title">Overview</h1>
    <p>Description</p>

  </div>
  <!-- End Overview Container -->

  <!-- Features Container -->
  <div class="container-big text-center bg-container">

    <h1 class="title">Features</h1>

    <div class="row">
      <div class="col-sm-4">
        <img src="img/inova-small.png"></img>
        <h2>Overview</h2>
      </div>
      <div class="col-sm-4">
        <img src="img/inova-small.png"></img>
        <h2>Overview</h2>
      </div>
      <div class="col-sm-4">
        <img src="img/inova-small.png"></img>
        <h2>Overview</h2>
      </div>
    </div>
  </div>
  <!-- End Feaures Container -->

  <!-- Fee Includes and What to Bring Container -->
  <div class="container-big text-center">

    <div class="row">
      <!-- Fee Includes -->
      <div class="col-sm-6">
        <h2>Registration | <?php echo $registration_fee['early'];?> Early Bird</h2>
        <p><?php echo $registration_fee['regular'];?> Regular (<?php echo $registration_fee['regular_date'];?>)</p>
      </div>
      <!-- End Fee Includes -->

      <!-- What to Bring -->
      <div class="col-sm-6">
        <h2>What To Bring</h2>
      </div>
      <!-- What to Bring -->
    </div>

  </div>
  <!-- End Fee Includes and What to Bring Container -->
</body>

<?php
include 'global/footer.php';
?>
</html>
