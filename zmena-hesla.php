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
                    <li><a href="#"><img class="hover-hide" src="assets/images/icons/account_circle_grey.svg"><img class="hover-show" src="assets/images/icons/account_circle_red.svg">OBĽÚBENÉ PRODUKTY</a></li>
                    <li class="active"><a href="#"><img class="hover-hide" src="assets/images/icons/key.svg"><img class="hover-show" src="assets/images/icons/key_red.svg">Zmena hesla</a></li>
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
            <h1>ZMENA <span class="color-red">HESLA</span></h1>
          </div>
          <div class="row mb-100">
            <div class="col-md-12">
              <form class="form account-details-form" action="#" method="post">
                <div class="row">
                  <div class="col-md-6 offset-md-6 col-12">
                    <div class="form-group">
                      <label for="oldpass">STARÉ HESLO <span class="red-star">*</span></label>
                      <input type="password" id="oldpass" name="oldpass" placeholder="Zadaj svoje staré heslo"
                             class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6 offset-md-6 col-12">
                    <div class="form-group">
                      <label for="newpass">NOVÉ HESLO <span class="red-star">*</span></label>
                      <input type="password" id="newpass" name="newpass" placeholder="Zadaj nové heslo"
                             class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6 offset-md-6 col-12">
                    <div class="form-group">
                      <label for="newpass">ZOPAKUJ NOVÉ HESLO <span class="red-star">*</span></label>
                      <input type="password" id="newpass" name="newpass" placeholder="Zopakuj tvoje nové heslo"
                             class="form-control">
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn">ZMENIŤ HESLO</button>
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

