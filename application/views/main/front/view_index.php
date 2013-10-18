<?php $this->site_model->add_js('assets/js/jquery.nivo.slider.pack.js'); ?>
<?php $this->site_model->add_css('assets/css/nivo-slider.css'); ?>

<script type="text/javascript">
    
    $(window).load(function() {
        $('#slideshow').nivoSlider({
            effect:'random', //Specify sets like: 'fold,fade,sliceDown'
            animSpeed:400, //Slide transition speed
            pauseTime:4000,
            directionNav:false, //Next & Prev
            directionNavHide:false, //Only show on hover
            controlNav:true, //1,2,3...
            captionOpacity:0.8
        });
    });

</script>

<div id="slideshow">
    <img src="/assets/images/slideshow/2010-green.jpg" alt="" title=""/>
    <img src="/assets/images/slideshow/2010-yellow.jpg" alt="" title=""/>
    <img src="/assets/images/slideshow/2010-orange.jpg" alt="" title=""/>
    <img src="/assets/images/slideshow/2010-teal.jpg" alt="" title=""/>
</div>

<div id="maincontent">
    <h1>Welcome to the home of the Tampa Scally Hatter</h1>
    <p>The Scally Hatter is a frisbee hat tournament in Tampa, Florida.  It is organized as a fundraiser for Scally Wenches (USF Womans Ultimate Frisbee Team).  This tournament occurs near the end of every year.</p>
    <h2>Reasons to sign up and play:</h2>
    <ul>
        <li>You get to play frisbee!</li>
        <li>Everyone is welcome, frisbee noob all the way to frisbee god.</li>
        <li>You are helping the USF Womans team by providing them with a way to pay for things. MONEY!</li>
        <li>Meet people from all over the Tampa area and more.  True love is often found on the frisbee field.</li>
        <li>It's Florida, its good to be outside.. even if its a hundred degrees out..</li>
        <li>Did we mention... you get to play frisbee?</li>
    </ul>
    <p>If you want to find out more information about the upcoming Scally Hatter, please click <?php echo anchor('info', 'info'); ?> at the top.</p>
</div>