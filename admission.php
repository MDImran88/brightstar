<?php 
include 'include/header.php';
?>


  <!-- Page Header Start here -->
  <section class="page-header mt-160 section-notch">
    <div class="overlay">
      <div class="container">
        <h3>Admission Form</h3>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li>-</li>
          <li>Admission Form</li>
        </ul>
      </div><!-- container -->
    </div><!-- overlay -->
  </section><!-- page header -->
  <!-- Page Header End here -->

  <!-- Features Start here -->
  <section class="features padding-120">
    <div class="container">
      <div class="section-header">
        <h3>Admission Form 2022 - 2023</h3>
        <p>Education is your child's fundamental right, That's because the school your child goes to determines the course of their future. In other words, choosing a school that identifies your child's potential, nurtures their skills and enables them to become change makers is essential.</p>
      </div>
      <div class="row">
        <div class="col col-md-6 offset-3">
        <form role="form" method="post" id="reused_form" >
                        <div class="form-group">
                            <label for="name"> Child's Name</label>
                            <input type="text" class="form-control" id="name" name="name" required maxlength="50">
                        </div>
                        <div class="form-group">
                            <label for="fathername"> Father's Name</label>
                            <input type="text" class="form-control" id="fathername" name="fathername" required maxlength="50">
                        </div>
                        <div class="form-group">
                            <label for="mobile"> Mobile No</label>
                            <input type="text" class="form-control" id="mobile" name="mobile" required maxlength="50">
                        </div>
                        <div class="form-group">
                            <label for="email"> Email Id</label>
                            <input type="email" class="form-control" id="email" name="email" required maxlength="50">
                        </div>
                        <div class="form-group">
                            <label for="message"> Address:</label>
                            <textarea class="form-control" type="textarea" name="message" id="message" placeholder="Your Message Here" maxlength="6000" rows="7"></textarea>
                        </div>
                        <div class="row" style="margin-bottom:30px;">
                            <div class="col-sm-5">
                                <img src="captcha.php" id="captcha_image"/>
                                <br/>
                                <a id="captcha_reload" href="#">reload</a> 
                            </div>
                            <div class="col-sm-6">
                                <label for="email">Enter the code from the image here:</label>
                                <input type="text" class="form-control" required id="captcha" name="captcha" >
                            </div>
                        </div>
                        <button type="submit" class="btn btn-lg btn-success pull-right" id="btnContactUs">Post It! &rarr;</button>
                    </form>
                    <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Sent your message successfully!</h3> </div>
                    <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
        </div>
      </div><!-- row -->
    </div><!-- container -->
  </section><!-- features -->
  <!-- Features End here -->



  <?php 
include 'include/footer.php';
?>