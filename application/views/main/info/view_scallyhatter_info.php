<?php $this->site_model->set_title('Information about this year\'s Scally Hatter'); ?>
<div id="banner">
    <img src="/assets/images/banner.jpg" alt="Grass Field" />
</div>
<div id="maincontent">
<h1>Information about this year's Scally Hatter</h1>
<h2>General Information:</h2>
<ul>
<li>Date: <?php echo $scallyhatter['date']; ?></li>
<li>Currently Registered: <?php echo $registered_count; ?> / <?php echo $scallyhatter['max_players']; ?></li>
<li>People on Waiting List: <?php echo $waiting_list_count; ?></li>
<li>Location: <?php echo $scallyhatter['address'] . ', ' . $scallyhatter['city'] . ', ' . $scallyhatter['state'] . ', ' . $scallyhatter['zip']; ?></li>
<li>Registration Fee: <?php echo money($scallyhatter['signup_fee_online']); ?></li>
<!--<li>Pay at the fields: <?php echo money($scallyhatter['signup_fee_other']); ?></li>-->
</ul>
<h2>Detailed Information:</h2>
<div id="detailedinformation">
    <?php echo $scallyhatter['desc']; ?>
</div>
</div>