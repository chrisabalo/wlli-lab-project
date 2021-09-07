<?php include "./view/header/header.php"; ?>
    <?php include "./model/navigation/navigation.php"; ?>
    <section class="page-header padding">
        <div class="container">
            <div class="page-content text-center">
                <h2>CONTACT</h2>
                <p>Contacter nous pour plus d'inforamtions.</p>
            </div>
        </div>
    </section>
<!--<div class="mapouter"><div class="gmap_canvas">
        <iframe width="100%" height="350" id="gmap_canvas"
                src="https://maps.google.com/maps?q=Dynamic%20Layers&amp;t=&amp;z=11&amp;ie=UTF8&amp;iwloc=bekpota&amp;output=embed"
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0">

        </iframe>
        <a href="https://www.emojilib.com/"></a></div>-->
    <style>.mapouter{position:relative;text-align:right;height:350px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:350px;width:100%;}</style></div>
<section class="contact-section bg-grey padding">
    <?php include "./model/contact/contact.php"; ?>
</section>
<section class="widget-section padding">
    <?php include "./view/footer/widget.php"; ?>
</section>
    <?php include "./view/footer/footer.php"; ?>