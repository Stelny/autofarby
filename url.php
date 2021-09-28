<h1>URL adresy</h1>
<?php
$htmlFiles = glob("*.{html,htm}", GLOB_BRACE);
$rootUrl = $_SERVER['HTTP_HOST'];

foreach($htmlFiles as $phpfile)
{
    echo '<a target="_blank" href="https://' . $rootUrl . '/' . $phpfile .'">' . $rootUrl . '/' . $phpfile.'</a>' . '<br>';
}