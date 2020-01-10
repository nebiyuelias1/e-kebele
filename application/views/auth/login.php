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