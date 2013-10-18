<?php $this->site_model->set_title('Sign Up Complete - Choose Payment'); ?>

<script type="text/javascript">
$(document).ready(function() {
    $('#payonline h3').click( function () {
        $('#paypal').submit();
    })
    $('#paylater h3').click( function () {
        var href = $('a.action').attr('href');
        window.location = href;
    })
    $('.action').click( function(e) {
        e.preventDefault();
    }).hide();

});
</script>


<div id="banner">
    <img src="/assets/images/banner.jpg" alt="Grass Field" />
</div>
<div id="maincontent">
<h1>Sign Up Complete</h1>
<p>Thank you <span class="name"><?php echo $player_scallyhatter['first_name'] . ' ' . $player_scallyhatter['last_name']; ?></span> for signing up. Your registration will NOT be complete untill you have paid the registration fee.  Please click "pay now" below to complete your registration.</p>

<div class="contain">
<div id="payonline">
    <h3 class="button">Pay Now <?php echo money($player_scallyhatter['signup_fee_online']); ?><span class="desc">(PayPal)</span></h3>
    <form id="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
        <input type="hidden" name="invoice" id="invoice" value="<?php echo $player_scallyhatter['player_scallyhatter_id']; ?>" />
        <input type="hidden" name="cmd" value="_xclick" />
        <input type="hidden" name="business" id="business" value="usfwenches@gmail.com" />
        <input type="hidden" name="item_name" id="item_name" value="Scally Hatter 2010 - Signup Fee - <?php echo $player_scallyhatter['first_name'] . ' ' . $player_scallyhatter['last_name']; ?> - Invoice #<?php echo $player_scallyhatter['player_scallyhatter_id']; ?>" />
        <input type="hidden" name="amount" value="<?php echo $player_scallyhatter['signup_fee_online']; ?>">
        <input type="hidden" name="currency_code" id="currency_code" value="USD" />
        <input type="hidden" name="notify_url" id="notify_url" value="<?php echo base_url();?>pay/ipn_processor/"/>
        <input type="hidden" name="cancel_return" value="<?php echo base_url(); ?>pay/cancelled/<?php echo $player_scallyhatter['player_scallyhatter_id']; ?>" />
        <input type="hidden" name="return" value="<?php echo base_url(); ?>pay/confirmation/<?php echo $player_scallyhatter['player_scallyhatter_id']; ?>" />
        <input type="hidden" name="no_shipping" id="no_shipping" value="1" />
     </form>
</div>

<!--<div id="paylater">
    <h3 class="button">Pay Later <?php echo money($player_scallyhatter['signup_fee_other']); ?> <span class="desc">(Check/Cash)</span></h3>
    <p>Choose this option if you would like to pay with cash or check.  If you bring a check, please write it out to "USF Women's Ultimate".</p>
     <?php echo anchor('pay/pay-later/' . $player_scallyhatter['player_scallyhatter_id'],'Pay Later', 'class="action"'); ?>
</div>-->
</div>
</div>