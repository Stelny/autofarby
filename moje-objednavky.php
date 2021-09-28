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
                    <li><a href="#"><img class="hover-hide" src="assets/images/icons/key.svg"><img class="hover-show" src="assets/images/icons/key_red.svg">Zmena hesla</a></li>
                    <li class="active"><a href="#"><img class="hover-hide" src="assets/images/icons/paper.svg"><img class="hover-show" src="assets/images/icons/paper_red.svg">Moje objednávky</a></li>
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
            <h1>MOJE <span class="color-red">OBJEDNÁVKY</span></h1>
          </div>
          <div class="row mb-100">
            <div class="col-md-12">
              <table class="shop-table">
                <tr>
                  <th class="order-id">ČÍSLO OBJEDNÁVKY</th>
                  <th class="order-date">DÁTUM</th>
                  <th class="order-total">CENA</th>
                  <th class="order-status">Stav</th>
                  <th class="order-actions"></th>
                </tr>
                <tr class="shop-table-item">
                  <td class="order-id">123456789</td>
                  <td class="order-date">26.6.2020</td>
                  <td class="order-total">121.00€</td>
                  <td class="order-status sold"><p>Zaplatené</p></td>
                  <td class="order-action">
                    <div id="ex1" class="modal">
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
                              <td class="order-summary-title">ID OBJEDNÁVKY</td>
                              <td class="order-summary-price">123456789</td>
                            </tr>
                            <tr>
                              <td class="order-summary-title">DÁTUM</td>
                              <td class="order-summary-price">16.6.2020</td>
                            </tr>
                            <tr>
                              <td class="order-summary-title">CENA</td>
                              <td class="order-summary-price">66,56€</td>
                            </tr>
                            <tr>
                              <td class="order-summary-title">STAV</td>
                              <td class="order-summary-price"><span class="order-status sold"><p class="ml-auto">Zaplatené</p></span></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                    <a href="#ex1" rel="modal:open" class="btn">Detail objednávky</a>
                  </td>
                </tr>
                <tr style="height: 20px;"></tr>
                <tr class="shop-table-item">
                  <td class="order-id">123456789</td>
                  <td class="order-date">26.6.2020</td>
                  <td class="order-total">121.00€</td>
                  <td class="order-status unsold"><p>Nezaplatené</p></td>
                  <td class="order-action">
                    <div id="ex2" class="modal">
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
                              <td class="order-summary-title">ID OBJEDNÁVKY</td>
                              <td class="order-summary-price">123456789</td>
                            </tr>
                            <tr>
                              <td class="order-summary-title">DÁTUM</td>
                              <td class="order-summary-price">16.6.2020</td>
                            </tr>
                            <tr>
                              <td class="order-summary-title">CENA</td>
                              <td class="order-summary-price">66,56€</td>
                            </tr>
                            <tr>
                              <td class="order-summary-title">STAV</td>
                              <td class="order-summary-price"><span class="order-status unsold"><p class="ml-auto">Neaplatené</p></span></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                    <a href="#ex2" rel="modal:open" class="btn">Detail objednávky</a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
          <div class="row">
            <div class="col-12 blog-view-pagination-wrapper">
              <div class="blog-view-pagination-link">
                <a href="#" class="btn btn-blog-pagination">NAČÍTAŤ ĎALŠIE</a>
              </div>
              <div class="blog-view-pagination-items">
                <ul class="pagination">
                  <li class="page-item">
                    <a class="page-link btn" href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item"><a class="page-link btn" href="#">1</a></li>
                  <li class="page-item"><a class="page-link btn" href="#">2</a></li>
                  <li class="page-item"><a class="page-link btn" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link btn" href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
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
