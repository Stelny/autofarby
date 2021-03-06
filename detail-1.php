<?php
require('header.php');
?>

<main class="main product-detail">
  <nav class="breadcrumb-nav">
    <div class="container">
      <ul class="breadcrumb bb-no">
        <li><a href="demo1.html">Home</a></li>
        <li>Products</li>
      </ul>
    </div>
  </nav>
  <div class="page-content">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-12 mx-auto">
            <div class="row">
              <div class="col-md-5 col-12">
                <div class="gallery">
                  <div class="big-images owl-carousel">
                    <div class="gallery-main-img"><a href="https://source.unsplash.com/ndjyaOp0fOc/1500x1000" data-fancybox="gallery" data-caption="[[+pagetitle]]"><img src="https://source.unsplash.com/ndjyaOp0fOc/1500x1000" alt="[[+name]]" width="1000px;"></a></div>
                    <div class="gallery-main-img"><a href="assets/images/products/brand/brand-2.jpg" data-fancybox="gallery" data-caption="[[+pagetitle]]"><img src="assets/images/products/brand/brand-2.jpg" alt="[[+name]]" width="1000px;"></a></div>
                    <div class="gallery-main-img"><a href="https://source.unsplash.com/ndjyaOp0fOc/1500x1000" data-fancybox="gallery" data-caption="[[+pagetitle]]"><img src="https://source.unsplash.com/ndjyaOp0fOc/1500x1000" alt="[[+name]]" width="1000px;"></a></div>
                    <div class="gallery-main-img"><a href="https://source.unsplash.com/ndjyaOp0fOc/1500x1000" data-fancybox="gallery" data-caption="[[+pagetitle]]"><img src="https://source.unsplash.com/ndjyaOp0fOc/1500x1000" alt="[[+name]]" width="1000px;"></a></div>
                  </div>
                </div>
                <div class="gallery-nav">
                  <div class="small-images owl-carousel">
                    <div><img src="https://source.unsplash.com/ndjyaOp0fOc/1500x1000" alt="[[+name]]" width="100px"></div>
                    <div><img src="assets/images/products/brand/brand-2.jpg" alt="[[+name]]" width="100px"></div>
                    <div><img src="https://source.unsplash.com/ndjyaOp0fOc/1500x1000" alt="[[+name]]" width="100px"></div>
                    <div><img src="https://source.unsplash.com/ndjyaOp0fOc/1500x1000" alt="[[+name]]" width="100px"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-7 col-12">
                <div class="product-details">
                  <div class="stars">
                    <img src="assets/images/icons/star.svg">
                    <img src="assets/images/icons/star.svg">
                    <img src="assets/images/icons/star.svg">
                    <img src="assets/images/icons/star_empty.svg">
                    <img src="assets/images/icons/star_empty.svg">
                  </div>
                  <h1 class="product-title">
                    ??ISTIACE A ODMAS??OVACIE PR??PRAVKY CROMAX
                  </h1>
                  <hr class="product-devider">
                  <div class="product-availability">
                    <p>DOSTUPN??: <span class="green-color">NA SKLADE</span></p>
                  </div>
                  <p class="product-description">
                    Vysok?? kvalita farebnej b??zy Cromax v??m pom????e zv????i?? produktivitu a z??rove?? prinies?? vynikaj??ci farebn?? v??kon pre ka??d?? oper??ciu. Vynikaj??ca krycia schopnos?? a zlep??enie pr??strekov vynikaj??ce ovl??danie tvorby f??akov u??ah??uj?? vytv??ra?? nevidite??n?? opravy r??chlej??ie ako kedyko??vek predt??m. Okrem toho, lep??ie krycia schopnos?? znamen??, ??e m????ete dosiahnu?? ??pi??kov?? v??sledky pomocou men??ieho mno??stva farby, ??o zvy??uje ziskovos??.
                  </p>
                  <p class="price-wrapper">
                    <span class="new-price">202, 22 ???</span> <span class="old-price">202, 22 ???</span>
                    <span class="no-dph">
                      14,50??? bez DPH
                    </span>
                  </p>
                  <div class="amount-buy-like">
                    <div class="order-cart-count">
                      <a href="#">
                        <img src="assets/images/icons/add_circle.svg">
                      </a>
                      <input class='input-number in-basket ' type='number' min='1' step='1' max='{{$product->quantity}}' value='{{$cartItem->qty}}' data-row='{{$cartItem->rowId}}'>
                      <a href="#">
                        <img src="assets/images/icons/add_circle.svg">
                      </a>
                    </div>
                    <a href="#" class="btn btn-product"><img class="hover-hide" src="assets/images/icons/shopping_cart_red.svg" width="18px;"><img class="hover-show" src="assets/images/icons/shopping_cart.svg" width="18px;">DO KO????KA</a>
                    <a href="#" class="cart-toggle link btn-red-like">
                      <img src="assets/images/icons/heart_outlined.svg" width="24">
                    </a>
                  </div>
                  <p class="product-share">
                    <span>ZDIELAJ:</span>
                    <a href=""><img src="assets/images/icons/instagram.svg"></a>
                    <a href=""><img src="assets/images/icons/facebook_square.svg"></a>
                    <a href=""><img src="assets/images/icons/gmail.svg"></a>
                    <a href=""><img src="assets/images/icons/twitter.svg"></a>
                  </p>
                  <p class="product-create">
                    V??ROBCA: <b>CROMAX</b>
                  </p>
                  <p class="product-sku">
                    K??D PRODUKTU: <b>SK 123456789</b>
                  </p>
                  </div>
                </div>
            </div>
          </div>
          <div class="col-md-10 col-12 mx-auto">
            <div class="row">
              <div class="col-12">
                <div class="tab-teaser">
                  <div class="tab-menu">
                    <ul>
                      <li><a href="#" class="active" data-rel="tab-1">INFORM??CIE</a></li>
                      <li><a href="#" data-rel="tab-2" class="">PARAMETRE</a></li>
                      <li><a href="#" data-rel="tab-3" class="">RECENZIE (3)</a></li>
                    </ul>
                  </div>
                  <div class="tab-main-box">
                    <div class="tab-box" id="tab-1" style="display:block;">
                      <div class="row">
                        <div class="col-md-8 col-12">
                          <h3>INFORM??CIE</h3>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                          <div class="row">
                            <div class="col-md-5 col-12">
                              <img src="assets/images/icons/blank.svg">
                            </div>
                            <div class="col-md-5 col-12">
                              <img src="assets/images/icons/blank.svg">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4 col-12">
                          <img src="assets/images/icons/blank.svg">
                        </div>
                      </div>
                    </div>
                    <div class="tab-box" id="tab-2">
                      <div class="row">
                        <div class="col-md-8 col-12">
                          <table class="product-parameters">
                            <tr>
                              <td class="st-td">DRUH V??ROBKU</td>
                              <td class="nd-td">??istiace a odmas??ovacie pr??pravky</td>
                            </tr>
                            <tr class="table-border">
                              <td colspan="2"></td>
                            </tr>
                            <tr>
                              <td class="st-td">DRUH V??ROBKU</td>
                              <td class="nd-td">??istiace a odmas??ovacie pr??pravky</td>
                            </tr>
                            <tr class="table-border">
                              <td colspan="2"></td>
                            </tr>
                            <tr>
                              <td class="st-td">DRUH V??ROBKU</td>
                              <td class="nd-td">??istiace a odmas??ovacie pr??pravky</td>
                            </tr>
                          </table>
                        </div>
                        <div class="col-md-4 col-12">
                          <img src="assets/images/icons/blank.svg">
                        </div>
                      </div>
                    </div>
                    <div class="tab-box" id="tab-3">
                      <div class="row">
                        <div class="col-md-8 col-12 mx-auto">
                          <ul class="comments">
                            <li class="comment">
                              <div class="comment-body">
                                <div class="comment-avatar">
                                  <img src="assets/images/agents/1-100x100.png" alt="Commenter Avatar" width="90" height="90">
                                </div>
                                <div class="comment-content">
                                  <div class="comment-author-wrapper">
                                    <div>
                                      <h4 class="comment-author">
                                        JURAJ J??NO????K
                                      </h4>
                                      <p class="comment-date">March 22, 2021 at 1:54 pm</p>
                                    </div>
                                    <div class="stars">
                                      <a href="#"><img src="assets/images/icons/star.svg"></a>
                                      <a href="#"><img src="assets/images/icons/star.svg"></a>
                                      <a href="#"><img src="assets/images/icons/star.svg"></a>
                                      <a href="#"><img src="assets/images/icons/star_empty.svg"></a>
                                      <a href="#"><img src="assets/images/icons/star_empty.svg"></a>
                                    </div>
                                  </div>
                                  <p class="comment-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                  </p>
                                  <div class="comment-action">
                                    <a href="#" class="btn btn-comment-answer">
                                      <img src="assets/images/icons/share_vs.svg" width="24"> Odpoveda??
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="comment">
                              <div class="comment-body">
                                <div class="comment-avatar">
                                  <img src="assets/images/agents/1-100x100.png" alt="Commenter Avatar" width="90" height="90">
                                </div>
                                <div class="comment-content">
                                  <div class="comment-author-wrapper">
                                    <div>
                                      <h4 class="comment-author">
                                        JURAJ J??NO????K
                                      </h4>
                                      <p class="comment-date">March 22, 2021 at 1:54 pm</p>
                                    </div>
                                    <div class="stars">
                                      <a href="#"><img src="assets/images/icons/star.svg"></a>
                                      <a href="#"><img src="assets/images/icons/star.svg"></a>
                                      <a href="#"><img src="assets/images/icons/star.svg"></a>
                                      <a href="#"><img src="assets/images/icons/star_empty.svg"></a>
                                      <a href="#"><img src="assets/images/icons/star_empty.svg"></a>
                                    </div>
                                  </div>
                                  <p class="comment-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                  </p>
                                  <div class="comment-action">
                                    <a href="#" class="btn btn-comment-answer">
                                      <img src="assets/images/icons/share_vs.svg" width="24"> Odpoveda??
                                    </a>
                                  </div>
                                </div>
                              </div>
                              <ul class="comments sub-comments">
                                <li class="comment">
                                  <div class="comment-body">
                                    <div class="comment-avatar">
                                      <img src="assets/images/agents/1-100x100.png" alt="Commenter Avatar" width="90" height="90">
                                    </div>
                                    <div class="comment-content">
                                      <div class="comment-author-wrapper">
                                        <div>
                                          <h4 class="comment-author">
                                            JURAJ J??NO????K
                                          </h4>
                                          <p class="comment-date">March 22, 2021 at 1:54 pm</p>
                                        </div>
                                        <div class="stars">
                                          <a href="#"><img src="assets/images/icons/star.svg"></a>
                                          <a href="#"><img src="assets/images/icons/star.svg"></a>
                                          <a href="#"><img src="assets/images/icons/star.svg"></a>
                                          <a href="#"><img src="assets/images/icons/star_empty.svg"></a>
                                          <a href="#"><img src="assets/images/icons/star_empty.svg"></a>
                                        </div>
                                      </div>
                                      <p class="comment-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                      </p>
                                      <div class="comment-action">
                                        <a href="#" class="btn btn-comment-answer">
                                          <img src="assets/images/icons/share_vs.svg" width="24"> Odpoveda??
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                              </ul>
                            </li>
                            <li class="comment">
                              <div class="comment-body">
                                <div class="comment-avatar">
                                  <img src="assets/images/agents/1-100x100.png" alt="Commenter Avatar" width="90" height="90">
                                </div>
                                <div class="comment-content">
                                  <div class="comment-author-wrapper">
                                    <div>
                                      <h4 class="comment-author">
                                        JURAJ J??NO????K
                                      </h4>
                                      <p class="comment-date">March 22, 2021 at 1:54 pm</p>
                                    </div>
                                    <div class="stars">
                                      <a href="#"><img src="assets/images/icons/star.svg"></a>
                                      <a href="#"><img src="assets/images/icons/star.svg"></a>
                                      <a href="#"><img src="assets/images/icons/star.svg"></a>
                                      <a href="#"><img src="assets/images/icons/star_empty.svg"></a>
                                      <a href="#"><img src="assets/images/icons/star_empty.svg"></a>
                                    </div>
                                  </div>
                                  <p class="comment-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                  </p>
                                  <div class="comment-action">
                                    <a href="#" class="btn btn-comment-answer">
                                      <img src="assets/images/icons/share_vs.svg" width="24"> Odpoveda??
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </li>
                          </ul>
                          <div class="comment-form">
                            <h4>NAP???? SVOJU RECENZIU</h4>
                            <p>Nap???? recenziu a daj aj ostatn??m vedie??, ??o si mysl???? o na??om produkte.</p>
                            <div class="stars">
                              <span>Tvoje hodnotenie:</span>
                              <a href="#"><img src="assets/images/icons/star.svg"></a>
                              <a href="#"><img src="assets/images/icons/star.svg"></a>
                              <a href="#"><img src="assets/images/icons/star.svg"></a>
                              <a href="#"><img src="assets/images/icons/star_empty.svg"></a>
                              <a href="#"><img src="assets/images/icons/star_empty.svg"></a>
                            </div>
                            <form class="form contact-us-form" action="#" method="post">
                              <div class="row">
                                <div class="col-md-6 col-12">
                                  <div class="form-group">
                                    <label for="password">Meno <span class="red-star">*</span></label>
                                    <input type="text" id="username" name="username" class="form-control" placeholder="">
                                  </div>
                                </div>
                                <div class="col-md-6 col-12">
                                  <div class="form-group">
                                    <label for="password">Priezvisko <span class="red-star">*</span></label>
                                    <input type="email" id="email_1" name="email_1" class="form-control" placeholder="">
                                  </div>
                                </div>
                                <div class="col-12">
                                  <div class="form-group">
                                    <label for="password">Tvoj koment??r <span class="red-star">*</span></label>
                                    <textarea id="message" name="message" cols="30" rows="5" class="form-control" placeholder=""></textarea>
                                  </div>
                                </div>
                                <div class="col-12 text-right">
                                  <button type="submit" class="btn comment-button">ZVEREJNI??</button>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
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