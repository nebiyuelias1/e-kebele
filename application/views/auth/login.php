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
    <?php echo form_open("auth/login", "class='text-center border border-light p-5'"); ?>
    <h1 class="mb-4"><?php echo lang('login_heading'); ?></h1>
    <p><?php echo lang('login_subheading'); ?></p>

    <div id="infoMessage"><?php echo $message; ?></div>
    <p>
      <?php echo lang('login_identity_label', 'identity'); ?>
      <?php echo form_input($identity, '', 'class="form-control mb-4" placeholder="Email/Username"'); ?>
    </p>

    <p>
      <?php echo lang('login_password_label', 'password'); ?>
      <?php echo form_input($password, '', 'class="form-control mb-4" placeholder="Password"'); ?>
    </p>

    <p>

    </p>

    <div class="d-flex justify-content-around">
      <div>
        <!-- Remember me -->
        <div class="custom-control custom-checkbox">
          <?php echo lang('login_remember_label', 'remember'); ?>
          <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"'); ?>
        </div>
      </div>
      <div>
        <!-- Forgot password -->
        <a href="forgot_password"><?php echo lang('login_forgot_password'); ?></a>
      </div>
    </div>


    <p><?php echo form_submit('submit', lang('login_submit_btn'), 'class="btn btn-info btn-block my-4"'); ?></p>

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