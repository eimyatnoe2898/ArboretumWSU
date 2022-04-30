<?php
  if ($_GET["success"]) {
    echo "<script>alert('Thank you for the feeedback. We will get back to you.');</script>";
  }
?>
  <div class="container border border-dark shadow rounded justify-content-center">
      <span class="big-circle"></span>
      <div class="form center">
        <div class="contact-info">
          <div class="d-flex justify-content-center">
            <i class="fa fa-comments mr-5" style="font-size:40px;color:purple;"></i>
            <h3 class="title center">Get in touch</h3>
          </div>
          <p class="text justify-content-center" style="text-align: center;">
              Want to get in touch? We'd love to hear from you.
              Here's how you can reach us...
          </p>
        </div>

        <div class="contact-form justify-content-center">

          <form id="cf" action="processContact.php" method="POST"  autocomplete="off"  >
            <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
                <div class="mb-5">
                    <input type="text" name="name" id="name" class="input form-control" placeholder="Name" />
                </div>
                <div class="mb-5">
                  <input type="text" name="email" id="email" class="input form-control input-sm" placeholder="Email"/>
                </div>
                <div class="mb-5">
                  <input type="tel" name="phone" class="input form-control input-sm"id="phone" placeholder="Phone"/>
                </div>
                <div class="mb-5">
                  <textarea name="message" class="input form-control input-sm" id="msg" placeholder="Message"></textarea>
                </div>
                <input type="submit" onclick="formValidation(event);" name="submitcf" value="Send" class="btn form-control input-sm btn-dark" />
          </form>
        </div>
      </div>
    </div>
