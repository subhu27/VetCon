
<section class="appointment" id="appointmentpg">
  <div class="row">
    <div class="container-fluid">
      <div class="col-md-12">
        <div class="row">
          <span class="col-md-3"></span>
          <div class="col-md-6">
            <h4 class="text-center"> Appointment form </h4>
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

            <div class="well">
              <div id="datetimepicker1" class="input-append date">
                <input data-format="dd/MM/yyyy hh:mm:ss" type="text"></input>
                <span class="add-on">
                  <i data-time-icon="icon-time" data-date-icon="icon-calendar">
                  </i>
                </span>
              </div>
            </div>
            <script type="text/javascript">
              $(function() {
                $('#datetimepicker1').datetimepicker({
                  language: 'pt-BR'
                });
              });
            </script>

            <div class="form-group">
              <label for="phone">Phone * </label>
              <?php  echo form_error('phone'); ?>
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone number"  value="<?php echo set_value('phone');?>" />
            </div>
            <div class="form-group">
                <label for="date">Appointment date * </label>
                <input type="text" name="appointmentDate" class="form-control" id="appointmentDate" placeholder="Appointment date" value="<?php echo set_value('appointmentDate');?>" />
            </div>

            <div class="form-group">
                <label for="date">Appointment time * </label>
                <?php  echo form_error('time'); ?>
                <input type="text" name="appointmentTime" class="form-control" id="appointmentTime" placeholder="Appointment time" value="<?php echo set_value('appointmentTime');?>" />
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
