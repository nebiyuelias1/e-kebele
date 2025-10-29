<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>e-Kebele - <?php echo $title; ?></title>
    <!-- MDB icon -->
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/mdb-favicon.ico" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
</head>
<body class="grey lighten-3">

<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md">
    <?php echo form_open("auth/register", "class='text-center border border-light p-5'"); ?>
    <h1 class="mb-4">Register</h1>
    <p>Create a new account to access e-Kebele services</p>

    <div id="infoMessage"><?php echo $message; ?></div>

    <p>
      <label for="first_name">First Name:</label>
      <?php echo form_input($first_name, '', 'class="form-control mb-4" placeholder="First Name"'); ?>
    </p>

    <p>
      <label for="last_name">Last Name:</label>
      <?php echo form_input($last_name, '', 'class="form-control mb-4" placeholder="Last Name"'); ?>
    </p>

    <?php if($identity_column !== 'email'): ?>
    <p>
      <label for="identity">Username:</label>
      <?php echo form_input($identity, '', 'class="form-control mb-4" placeholder="Username"'); ?>
    </p>
    <?php endif; ?>

    <p>
      <label for="email">Email:</label>
      <?php echo form_input($email, '', 'class="form-control mb-4" placeholder="Email"'); ?>
    </p>

    <p>
      <label for="phone">Phone:</label>
      <?php echo form_input($phone, '', 'class="form-control mb-4" placeholder="Phone (optional)"'); ?>
    </p>

    <p>
      <label for="password">Password:</label>
      <?php echo form_input($password, '', 'class="form-control mb-4" placeholder="Password"'); ?>
    </p>

    <p>
      <label for="password_confirm">Confirm Password:</label>
      <?php echo form_input($password_confirm, '', 'class="form-control mb-4" placeholder="Confirm Password"'); ?>
    </p>

    <p><?php echo form_submit('submit', 'Register', 'class="btn btn-info btn-block my-4"'); ?></p>

    <p>Already have an account? <a href="<?php echo base_url('auth/login'); ?>">Login here</a></p>

    <?php echo form_close(); ?>
  </div>
  <div class="col-md-3"></div>
</div>
    <!-- jQuery -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/mdb.min.js"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript"></script>

</body>

</html>
