<div class="content">
  <div class="container_12">
    <div class="grid_6">
      <h3 class="head2">Contact Info</h3>
      <div class="map">
        <figure>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001.278806260412!2d32.649583214866!3d41.21569431458515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x408354ac4492953f%3A0xab3b48ed0392a743!2sKarab%C3%BCk+%C3%9Cniversitesi!5e0!3m2!1str!2str!4v1463956084971" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </figure>
        <address>
        <dl>
          <dt>
            <p>The Company Name Inc.<br>
              8901 Marmora Road,<br>
              Glasgow, D04 89GR.</p>
          </dt>
          <dd><span>Freephone:</span>+1 800 559 6580</dd>
          <dd><span>Telephone:</span>+1 800 603 6035</dd>
          <dd><span>FAX:</span>+1 800 889 9898</dd>
        </dl>
        </address>
      </div>
    </div>


    <div class="grid_5 prefix_1">
      <h3 class="head2">MESAJ GÖNDER</h3>
      <form id="form" action="<?php echo base_url();?>home/send_message">
        <div class="success_wrapper">
          
        <p><?php echo $this->session->flashdata('mesaj'); ?></p>
          <p> <?php echo $this->session->flashdata('email_sent');  ?></p>
        <fieldset>
          <label class="mes_sender">
            <input type="text" value="<?php $session_data = $this->session->userdata('logged_in');echo $session_data['uname_surname'];?>" placeholder="Name :">
            <br class="clear">
            <span class="error error-empty">*This is not a valid name.</span><span class="empty error-empty">*This field is required.</span> </label>
         
          <label class="mes_email">
            <input type="text" value="<?php $session_data = $this->session->userdata('logged_in'); echo $session_data['user_email'];?>" placeholder="E-mail :">
            <br class="clear">
            <span class="error error-empty">*This is not a valid email address.</span><span class="empty error-empty">*This field is required.</span> </label>
          
           
          <label class="message">
            <textarea>Message:</textarea>
            <br class="clear">
            <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span> </label>
          <div class="clear"></div>
          <div class="btns"><a data-type="reset" class="btn">clear</a><a data-type="submit" class="btn">send</a>
            <div class="clear"></div>
          </div>
        </fieldset>
      </form>
    </div>
  </div>
</div>