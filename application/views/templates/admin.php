<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
        <title><?php echo $title; ?></title>
        <?php if ($meta_desc) { ?><meta name="description" content="<?php echo $meta_desc; ?>"><?php } ?>

        <!-- Scripts -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/jquery-ui.min.js"></script>
        <script type="text/javascript" src="/assets/js/jquery.tablesorter.min.js"></script>
        <script type="text/javascript" src="/assets/js/admin.master.js"></script>
        <?php echo $js; ?>

        <!-- Styles -->
        <link href="/assets/css/reset.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="/assets/css/admin.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="/assets/css/tablesorter.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="/assets/css/jquery-ui-1.7.2.custom.css" rel="stylesheet" type="text/css" media="screen" />
        <?php echo $css; ?>

        <!-- Browser Specific -->
        <!--[if lte IE 6]><div id="ie6msg"><h4>Your browser is out of date!</h4><p>To get the best possible experience using our website we recommend that you upgrade your browser to a newer version. <br/>The current version is <a class="getie8" href="http://upgradeie.s3.amazonaws.com/eng/index.html">Internet Explorer 8</a>. The upgrade is free. If you're using a PC at work you should contact your IT administrator.</p><p>If you want to you may also try some other popular Internet browsers like <a class="ie6expl" href="http://getfirefox.com">Firefox</a>, <a class="ie6expl" href="http://www.opera.com">Opera</a>, or <a class="ie6expl" href="http://www.apple.com/safari/download/">Safari</a></p></div><![endif]-->


    </head>
    <body>
        <div id="main">
            <div id="header" class="contain">
                <div id="mainnav">
                    <?php if(isset($navs['admin_main_nav'])) { echo $navs['admin_main_nav']; } ?>
                </div>
            </div>       

            <?php if($breadcrumbs) { ?>
            <div id="breadcrumbs">
                <?php echo $breadcrumbs; ?>
            </div>
            <div id="messages">
                <?php echo $this->session->flashdata('errors'); ?>
                <?php echo $errors; ?>
                <?php echo $this->session->flashdata('success'); ?>
                <?php echo $success; ?>
            </div>
            <?php } ?>
            <div id="maincontent">
                <?php echo $content; ?>
            </div>
        </div>





    <p>Page rendered in {elapsed_time} seconds</p>
    </body>

</html>