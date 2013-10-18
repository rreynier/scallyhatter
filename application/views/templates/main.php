<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
        <title><?php echo $title; ?></title>        
        <?php if ($meta_desc) { ?><meta name="description" content="<?php echo $meta_desc; ?>"><?php } ?>

        <!-- Scripts -->
        <script type="text/javascript" src="/assets/js/jquery-1.6.4.min.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/jquery-ui.min.js"></script>
        <script type="text/javascript" src="/assets/js/master.js"></script>
        <?php echo $js; ?>

        <!-- Styles -->
        <link href="/assets/css/reset.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="/assets/css/master.css" rel="stylesheet" type="text/css" media="screen" />
        <?php echo $css; ?>


    </head>
    <body class="ctrl<?php echo $page_controller; ?>" id="<?php if ($page_id != '') { echo $page_id; } else { echo 'front'; } ?>">
        <div id="main">
            <div id="header" class="contain">
                <img src="/assets/images/ship.png" alt="Scally Hatter Pirate Ship" id="logo" />
                <div id="mainnav">
                    <?php echo $navs['main_nav']; ?>
                </div>
                <div id="tagline">
                    Scally Hatter - Ultimate Frisbee Hat Tournament in Tampa Florida
                </div>
            </div>

            <div id="content" class="contain">
                <div id="col1">
                <?php echo $content; ?>
                </div>
                <div id="col2">
                    <div id="headline">
                        <div class="middle">
                            <div id="quickinfo">
                            <?php if (!$this->data['scallyhatter']) { ?>                                
                                <h3>Scally Hatter</h3>
                                <div class="notice">
                                    <p>There is currently no Scally Hatter planned.</p>
                                    <p>Please check back soon.</p>
                                </div>
                            <?php } else { ?>
                                <h3>Scally Hatter <?php echo $scallyhatter['year']; ?></h3>
                                <div id="stats">
                                    <div id="daysleft">
                                        <p><span class="big"><?php echo $scallyhatter['days_left']; ?></span> days</p>
                                    </div>
                                   <div id="daysleftuntilldeadline">
                                        <p><span class="big"><?php echo $scallyhatter['days_left_untill_deadline']; ?></span> days till <br />deadline</p>
                                    </div>                                    
                                    <div id="spotsremaining">
                                        <p><span class="big"><?php if($scallyhatter['remaining_spots'] >= 0) { echo $scallyhatter['remaining_spots']; } else { echo '0'; } ?></span> spots remain</p>
                                    </div>
                                </div>
                                <div id="signuptoday">
                                    <?php echo anchor('signup','Sign Up Today!'); ?>
                                </div>
                            <?php } ?>
                            </div>
                            
                        </div>
                        <div class="bottom"></div>
                    </div>
                    <div id="sidebar">
                        <div id="contactus">
                            <h2>Questions?</h2>
                            <p class="email"><a href="mailto:usfwenches@gmail.com">usfwenches@gmail.com</a></p>
                        </div>
                        <div id="getnotified" class="contain">
                            <h2>Get Notified</h2>
                            <label for="newsletteremail">Enter your email so we can notify you when the next Scally Hatter is near: </label>
                            <?php echo form_input('newsletteremail','','id="newsletteremail"'); ?>
                            <input class="submit button" type="submit" value="GO" />
                        </div>
                        <div id="findus">
                            <h2>Connect</h2>
                            <p><a href="http://www.facebook.com/event.php?eid=229958703706061&ref=ts" class="facebook">Become a fan on Facebook</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="footer">
                Site <a href="http://www.bythepixel.com" title="Web Design and Development Tampa Florida">By The Pixel</a> - Page rendered in {elapsed_time} seconds
            </div>
        </div>
    
    </body>

<!-- Woopra Code Start -->
<script type="text/javascript" src="//static.woopra.com/js/woopra.v2.js"></script>
<script type="text/javascript">
woopraTracker.track();
</script>
<!-- Woopra Code End -->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-18822419-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
    
</html>