<?php
require('header.php');
?>
<main class="main account-page">
  <div class="page-content">
    <nav class="breadcrumb-nav">
      <div class="container">
        <ul class="breadcrumb bb-no">
          <li><a href="demo1.html">Home</a></li>
          <li>Products</li>
        </ul>
      </div>
    </nav>
    <div class="account-content">
      <div class="container">
        <aside class="account-sidebar">
          <div class="sidebar-content">
            <div class="pin-wrapper">
              <div class="filters-sidebar">
                <div class="widget">
                  <h3 class="widget-title"><span>MOŽNOSTI ÚČTU</span><span class="toggle-btn"></span></h3>
                  <ul class="widget-body">
                    <li class="active"><a href="#"><img class="hover-hide" src="assets/images/icons/account_circle_grey.svg"><img class="hover-show" src="assets/images/icons/account_circle_red.svg">OBĽÚBENÉ PRODUKTY</a></li>
                    <li><a href="#"><img class="hover-hide" src="assets/images/icons/key.svg"><img class="hover-show" src="assets/images/icons/key_red.svg">Zmena hesla</a></li>
                    <li><a href="#"><img class="hover-hide" src="assets/images/icons/paper.svg"><img class="hover-show" src="assets/images/icons/paper_red.svg">Moje objednávky</a></li>
                    <li><a href="#"><img class="hover-hide" src="assets/images/icons/heart_outlined_grey.svg"><img class="hover-show" src="assets/images/icons/heart_outlined_red.svg">Obľúbené produkty</a></li>
                    <li><a href="#"><img class="hover-hide" src="assets/images/icons/logout.svg"><img class="hover-show" src="assets/images/icons/logout_red.svg">Odhlásiť sa</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </aside>
        <div class="account-content-products">
          <div class="toolbox">
            <h1>MÔJ <span class="color-red">ÚČET</span></h1>
          </div>
          <div class="account-user-info">
            <div class="account-user-info-image">
              <img src="assets/images/icons/blank.svg">
            </div>
            <div>
              <h2>Juraj Jánošík</h2>
              <p>juraj.janosik@gmail.com</p>
            </div>
            <div class="account-user-info-link">
              <a href="#" class="btn">ZMENIŤ PROFILOVKU</a>
            </div>
          </div>
          <div class="row mb-100">
            <div class="col-md-12">
              <form class="form account-details-form" action="#" method="post">
                <div class="row">
                  <div class="col-12">
                    <h2>
                      Osobné údaje
                    </h2>
                  </div>
                </div>
                <div class="row mb-100">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="firstname">Meno <span class="red-star">*</span></label>
                      <input type="text" id="firstname" name="firstname" placeholder="Zadaj tvoje krstné meno"
                             class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="lastname">Priezvisko <span class="red-star">*</span></label>
                      <input type="text" id="lastname" name="lastname" placeholder="Zadaj tvoje priezvisko"
                             class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="email">Email <span class="red-star">*</span></label>
                      <input type="email" id="email" name="email" placeholder="meno.priezvisko@gmail.com"
                             class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="phone">Tel. číslo <span class="red-star">*</span></label>
                      <input type="tel" id="phone" name="phone" placeholder="0944 111 333" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="select-year">Dátum narodenia <span class="red-star">*</span></label>
                      <div>
                        <div class="select-date">
                          <select id="select-day" class="form-control select-day"></select>
                          <select id="select-month" class="form-control select-month">
                            <option value="0">January
                            <option value="1">February
                            <option value="2">March
                            <option value="3">April
                            <option value="4">May
                            <option value="5">June
                            <option value="6">July
                            <option value="7">August
                            <option value="8">September
                            <option value="9">October
                            <option value="10">November
                            <option value="11">December
                          </select>
                          <select id="select-year" class="form-control select-year"></select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="gender">Pohlavie <span class="red-star">*</span></label>
                      <div>
                        <select id="gender" class="form-control">
                          <option>Muž</option>
                          <option>Žena</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                      <div class="row">
                        <div class="col-12">
                          <h2>
                            Osobné údaje
                          </h2>
                        </div>
                      </div>
                      <div class="row">
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
                            <input type="text" id="lastname" name="lastname" placeholder="Bratislava"
                                   class="form-control form-control-md">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="town">PSČ <span class="red-star">*</span></label>
                            <input type="email" id="town" name="town" placeholder="033 01"
                                   class="form-control form-control-md">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="country">Krajina <span class="red-star">*</span></label>
                            <input type="text" id="country" name="country" placeholder="Slovensko"
                                   class="form-control form-control-md">
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
                <button type="submit" class="btn">ULOŽIŤ</button>
              </form>
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

