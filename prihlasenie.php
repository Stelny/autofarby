<?php
require('header.php');
?>
<main class="main login-page">
    <div class="page-content">
        <div class="container">
          <div class="row">
            <div class="col-md-9 form-wrapper col-12 mx-auto">
              <div class="row">
                <div class="col-md-6 col-12">
                  <div class="row">
                    <div class="col-md-9 col-12 mx-auto login-form-wrapper">
                      <form>
                        <h1>Prihláste sa</h1>
                        <div class="form-group">
                          <label for="email">Email <span class="red-star">*</span></label>
                          <input type="email" name="email" class="form-control input_mail" value="" placeholder="">
                        </div>
                        <div class="form-group">
                          <label for="password">Heslo <span class="red-star">*</span></label>
                          <input type="password" name="password" class="form-control input_password" value="" placeholder="">
                        </div>
                        <div class="form-group remember-form-wrapper">
                            <input type="checkbox" class="custom-checkbox" id="remember1" name="remember1" required="">
                            <label for="remember1">Zapamätať si ma</label>
                        </div>
                        <div class="d-flex justify-content-center login_container">
                          <button type="button" name="button" class="btn login_btn warning-page-link">Prihlásiť sa</button>
                        </div>
                        <div class="form-group forget-pass">
                          <a href="#">Zabudli ste heslo?</a>
                        </div>
                        <div class="form-group want-registration">
                          <a href="#">Chcem sa zaregistrovať</a>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-12 login-image-wrapper">
                  <img src="assets/images/content/carpainting.png">
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</main>
<?php
require('footer.php');
?>