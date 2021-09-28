<?php
require('header.php');
?>
<main class="main order-page">
  <div class="page-content">
    <div class="account-content">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-12 mx-auto ">
            <div class="row">
              <div class="col-md-7 col-12">
                <div class="order-content-products">
                  <div class="toolbox order-headline">
                    <h1>DODACIE <span class="color-red">ÚDAJE</span></h1>
                  </div>
                  <div class="order-user-info">
                    <p>Máte účet? <a href="#">Prihlásiť sa</a></p>
                  </div>
                  <div class="row mb-100">
                    <div class="col-md-12">
                      <form class="form order-details-form" action="#" method="post">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="firstname">Meno <span class="red-star">*</span></label>
                              <input type="text" id="firstname" name="firstname" placeholder=""
                                     class="form-control">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="lastname">Priezvisko <span class="red-star">*</span></label>
                              <input type="text" id="lastname" name="lastname" placeholder=""
                                     class="form-control">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="email">Email <span class="red-star">*</span></label>
                              <input type="email" id="email" name="email" placeholder=""
                                     class="form-control">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="phone">Tel. číslo <span class="red-star">*</span></label>
                              <input type="tel" id="phone" name="phone" placeholder="" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="address">Adresa <span class="red-star">*</span></label>
                              <input type="text" id="address" name="address" placeholder="Ulica a popisné číslo"
                                     class="form-control form-control-md">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="town">Mesto <span class="red-star">*</span></label>
                              <input type="text" id="lastname" name="lastname" placeholder=""
                                     class="form-control form-control-md">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="town">PSČ <span class="red-star">*</span></label>
                              <input type="email" id="town" name="town" placeholder=""
                                     class="form-control form-control-md">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="country">Krajina <span class="red-star">*</span></label>
                              <input type="text" id="country" name="country" placeholder=""
                                     class="form-control form-control-md">
                            </div>
                          </div>
                        </div>
                        <div class="form-group remember-form-wrapper">
                          <input type="checkbox" class="custom-checkbox" id="remember1" name="remember1" required="">
                          <label for="remember1">Súhlasím s obchodnými podmienkamy</label>
                        </div>
                        <div class="form-group remember-form-wrapper">
                          <input type="checkbox" class="custom-checkbox" id="remember2" name="remember2" required="">
                          <label for="remember2">Nákup na firmu.</label>
                        </div>
                        <div class="form-group remember-form-wrapper">
                          <input type="checkbox" class="custom-checkbox" id="remember3" name="remember3" required="">
                          <label for="remember3">Vytvorte si účet a využívať výhody registrovaného zákazníka.</label>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-5 col-12">
                <div class="toolbox">
                  <h2>ZHRNUTIE</h2>
                </div>
                <div class="order-summary-wrapper">
                  <div class="order-summary-products-wrapper">
                    <div class="order-summary-image-wrapper">
                      <img src="assets/images/icons/blank.svg">
                    </div>
                    <div class="order-summary-text-wrapper">
                      <p class="order-summary-headline">
                        PUKLICE CIERNE 13 GORECKI RADICAL PRO13 BLACK
                      </p>
                      <p class="ks-price">
                        1KS = <span class="color-red">40,44€</span>
                      </p>
                    </div>
                  </div>
                  <div class="order-summary-price-wrapper">
                    <table>
                      <tr>
                        <td class="order-summary-title">Cena</td>
                        <td class="order-summary-price">37,99€</td>
                      </tr>
                      <tr>
                        <td class="order-summary-title">Doprava</td>
                        <td class="order-summary-price">3,99€</td>
                      </tr>
                      <tr>
                        <td class="order-summary-title">Platba</td>
                        <td class="order-summary-price">3,99€</td>
                      </tr>
                      <tr>
                        <td colspan="2" class="table-devider"></td>
                      </tr>
                      <tr>
                        <td class="order-summary-title">Spolu</td>
                        <td class="order-summary-price">43,99€</td>
                      </tr>
                    </table>
                  </div>
                  <a href="#" class="btn">Objednat</a>
                </div>
              </div>
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

