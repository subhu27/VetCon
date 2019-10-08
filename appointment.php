<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



<section class="appointment" id="appointmentpg">
  <div class="row">
    <div class="container-fluid">
      <div class="col-md-12">
        <div class="row">
          <span class="col-md-3"></span>
          <div class="col-md-6">
            <h4 class="text-center">Appointment form</h4>
            <hr>
            <div id="appointment">
              <p class="text-success text-center">
              <?php echo $this->session->flashdata('appointment');?>
              </p>
            </div>
            <?php $this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');?>
            <?php echo form_open('appointment'); ?>
            <form method="post" role="form" class="appointmentForm">
              <div class="form-group">
                <label for="First name">Your first name * </label>
                <?php  echo form_error('firstName'); ?>
                <input type="text" name="firstName" class="form-control" id="firstName" placeholder="Your first name" value="<?php echo set_value('firstName');?>" />
            </div>
            <div class="form-group">
                <label for="Last name">Your last name </label>
                <?php  echo form_error('lastName'); ?>
                <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Your last name" value="<?php echo set_value('lastName');?>" />
            </div>
            <div class="form-group">
              <label for="email">Email </label>
              <?php  echo form_error('email'); ?>
              <input type="text" class="form-control" name="email" id="email" placeholder="Your email address" value="<?php echo set_value('email');?>" />
            </div>

            <div class="form-group">
              <label for="phone">Phone * </label>
              <?php  echo form_error('phone'); ?>
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone number"  value="<?php echo set_value('phone');?>" />
            </div>
            <div class="form-group">
                <label for="date">Appointment date * </label>
                <input type="text" id="datepicker">
            </div>

            <div class="form-group">
                <label for="date">Appointment time * </label>
                <input type="text" id="timepicker">
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <?php  echo form_error('message'); ?>
              <textarea class="form-control" name="message" value="<?php echo set_value('message');?>"></textarea>
              <i>* - required</i>
            </div>
            <button type="submit" class="btnMsg">Confirm</button>
          </form>
          <? echo form_close(); ?>
      </div>
    </div>
  </div>
</div>
</section>

<script>
$( function() {
  $( "#datepicker" ).datepicker();
} );
</script>
