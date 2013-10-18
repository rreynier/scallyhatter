<?php $this->site_model->set_title('Pay for Scally Hatter'); ?>
<div id="banner">
    <img src="/assets/images/banner.jpg" alt="Grass Field" />
</div>
<div class="normalform" id="maincontent">
<h1>Pay Online</h1>
<h2>If you have already signed up, but did not pay, this is your chance!</h2>
<p>Please enter the following information about yourself so we can find your signup information:</p>
<?php if($found) { echo $found; } ?>

<?php echo form_open('pay/search','id="saveplayer" class=validateform'); ?>
<ul>
    <li>
        <label for="email">Email Address *</label>
        <?php echo form_input('email','','class="required"'); ?>
    </li>
    <li>
        <label for="year">Last Name</label>
        <?php echo form_input('last_name','','class="required"'); ?>
    </li>
    <li>
        <?php echo form_submit('submit','Pay','class="submit button"'); ?>
    </li>
</ul>
</div>