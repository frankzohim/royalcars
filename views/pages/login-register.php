<?php
$title='Login-register';
ob_start();
?>
 <section id="r-customizer" class="r-customizer">
            <div class="r-selector"> 
                  <span class="d-block text-center">Color Options</span>
                  <div class="r-color_section r-color_block">
                        <ul class="r-color_selector" id="r-color_selector">
                            <li class="r-color_1" data-attr="color-01"></li>
                            <li class="r-color_6" data-attr="color-06"></li>
                            <li class="r-color_2" data-attr="color-02"></li>
                            <li class="r-color_3" data-attr="color-03"></li>
                            <li class="r-color_4" data-attr="color-04"></li>
                            <li class="r-color_5" data-attr="color-05"></li>
                            <li class="r-color_7" data-attr="color-07"></li>
                            <li class="r-color_8" data-attr="color-08"></li>
                        </ul>
                  </div>  
            </div>
            <i id="r-selector_icon" class="fa fa-cog"></i>
      </section>

        <section id="r-login-register">
          <div class="r-login-register">
            <div class="r-login-register-in">
              <div class="r-auth-or">
                <span>OR</span>
              </div>
              <div class="clearfix">
                <div class="r-auth-outer r-login">
                  <div class="r-auth-head">
                    <h2><b>Login</b> Now</h2>
                    <span>Login to our website</span>
                  </div>
                  <div class="r-auth-form">
                    <div class="r-login-fb">
                      <a href="#"><img src="assets/images/fb.jpg" class="img-fluid d-block m-auto" alt=""></a>
                    </div>
                    <div class="r-or-line"><span>OR SIGN IN</span></div>
                    <form action="#">
                      <div class="form-group">
                        <input type="text" class="form-control" required placeholder="Email">
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" required placeholder="Password">
                      </div>
                      <div class="form-group">
                        <button class="btn btn-full">LOGIN NOW</button>
                      </div>
                    </form>
                    <div class="r-from-inof">
                      <p class="text-center">
                        * Denotes mandatory field. <br>
                        ** At least one telephone number is required.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="r-auth-outer r-register">
                  <div class="r-auth-head">
                    <h2><b>Register</b> Now</h2>
                    <span>Required information for account creation</span>
                  </div>
                  <div class="r-auth-form">
                    <form action="#">
                      <div class="form-group">
                        <input type="text" required class="form-control" placeholder="User name">
                      </div>
                      <div class="form-group">
                        <input type="password" required class="form-control" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <input type="password" required class="form-control" placeholder="Confirm Password">
                      </div>
                      <div class="form-group">
                        <input type="email" required class="form-control" placeholder="Email Address">
                      </div>
                      <div class="form-group">
                        <img src="assets/images/recaptcha.jpg" class="img-fluid d-block m-auto" alt="">
                      </div>
                      <div class="form-group">
                        <button class="btn btn-full">SIGN UP NOW</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section id="r-get-in-touch">
          <div class="r-get-in-touch">
            <div class="container">
              <div class="r-get-header">
                <span>CONTACT US NOW</span>
                <h2>Keep <b>In Touch.</b></h2>
              </div>
              <div class="r-get-form">
                <form action="#">
                  <div class="clearfix">
                    <div class="form-group"><input type="text" placeholder="User name"></div>
                    <div class="form-group"><input type="email" placeholder="Email Address"></div>
                  </div>
                  <div class="form-group"><input type="email" placeholder="Title Message"></div>
                  <div class="form-group">
                    <textarea placeholder="Message"></textarea>
                  </div>
                  <div class="text-center">
                    <button class="btn btn-full">SEND MESSAGE NOW</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
        <?php $content = ob_get_clean(); ?>
        
<?php 

require '../views/layouts/master.php';?>