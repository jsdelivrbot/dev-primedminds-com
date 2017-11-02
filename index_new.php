<?php 
    error_reporting(E_ALL|E_STRICT);
    // include the document start and standard page header
    include 'http://dev-primedminds.mybluemix.net/includes/doc-start.php';
    include 'http://dev-primedminds.mybluemix.net//includes/page-header.php';
?>

<!-- START: page content -->

<div id="main">
    <video playsinline autoplay muted loop id="bgvid">
        <source src="assets/index/PMWelcomeVideo.mp4" type="video/mp4">
    </video>

    <a id="about_ref" href="about.html"><p id="homeText">A tool to inspire you mathematically!</p></a>

    <a id="volume" onclick="toggleVolume()"><img id="vol_icon" src="assets/index/speaker.png" height="40px"></a>
</div>

<!-- END: page content -->

<?php
    // include the document end to close body and html
    include 'http://dev-primedminds.mybluemix.net/includes/page-footer.php';
    require 'http://dev-primedminds.mybluemix.net/includes/doc-end.php';
?>   