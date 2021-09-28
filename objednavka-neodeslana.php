<?php
require('header.php');
?>
<main class="main objednavka-neodeslana-page">
    <section class="page-content py-150">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7 text-left">
                    <h1>Oops… Objednávku sa <span class="color-red">nepodarilo odoslať</span></h1>
                    <p class="warning-page-text">
                        Pri vytvorení objednávky došlo k chybe, skúste vašu objednávku zopakovať neskôr, alebo nás kontaktujte.
                    </p>
                    <a href="" class="btn warning-page-link">Kontaktovať</a>
                </div>
                <div class="col-12 col-md-5 text-center d-flex">
                    <img class="warning-page-image" src="assets/images/content/carboom.svg">
                </div>
            </div>
        </div>
    </section>
</main>
<?php
require('footer.php');
?>