<?php $this->site_model->set_title('Sign Up For The Scally Hatter'); ?>

<div id="banner">
    <img src="/assets/images/banner.jpg" alt="Grass Field" />
</div>
<div id="maincontent">
<div class="normalform">
    <h1>Sign up for the <?php echo $scallyhatter['year']; ?> Scally Hatter</h1>
    <?php if($scallyhatter['remaining_spots'] <= 0) { ?>
    <p class="error">The Scally Hatter is currently full.  You may still sign up to be placed on the waiting list.  If someone is unable to make it you will be added to the list automatically.</p>
    <?php } ?>
    <p>Please enter all the required fields.</p>
    <?php echo form_open('signup/save_player/','id="saveplayer" class=validateform'); ?>
    <div id="ajaxmessage"></div>
    <?php echo form_hidden('scallyhatter_id',$scallyhatter['id']) ?>
    <div class="col1">
    <ul>
        <li>
            <label for="first_name">First Name *</label>
            <?php echo form_input( array(
                'name' => 'first_name',
                'id' => 'first_name',
                'class' => 'required'
            )); ?>
        </li>
        <li>
            <label for="last_name">Last Name *</label>
            <?php echo form_input( array(
                'name' => 'last_name',
                'id' => 'last_name',
                'class' => 'required'
            )); ?>
        </li>
        <li>
            <label for="email">Email *</label>
            <?php echo form_input( array(
                'name' => 'email',
                'id' => 'email',
                'class' => 'required emailcheck'
            )); ?>
        </li>
        <li>
            <label for="phone">Phone</label>
            <?php echo form_input( array(
                'name' => 'phone',
                'id' => 'phone'
            )); ?>
        </li>
    </ul>
    </div>
    <div class="col2">
    <ul>
        <li>
            <label for="gender">Gender *</label>
            <?php echo form_dropdown(
                'gender',
                array( '' => 'Choose', 'm' => 'Male','f' => 'Female'),
                '',
                'class="dropdown required" id="gender"');
            ?>
        </li>
        <li>
            <label for="skill">Skill Level *</label>
            <?php echo form_dropdown(
                'skill',
                array( 
                    '' => 'Choose', 
                    '1' => '1 - Noob',
                    '2' => '2 - Some Experience', 
                    '3' => '3 - Decent', 
                    '4' => '4 - Baller', 
                    '5' => '5 - Starter On A Club Team' , 
                    '6' => '6 - Frisbee God (Jimmy Price)' ),
                '',
                'class="dropdown required" id="skill"');
            ?>
        </li>

        <li>
            <label for="shirt_size">Shirt Size *</label>
            <?php echo form_dropdown(
                'shirt_size',
                array( '' => 'Choose', 's' => 'Small','m' => 'Medium', 'l' => 'Large', 'xl' => 'Extra Large' ),
                '',
                'class="dropdown required" id="shirt_size"');
            ?>
        </li>
    </ul>
    </div>
    <ul class="clear">
        <li>
            <label for="request">Request</label>
            <?php echo form_textarea( array(
                'name' => 'request',
                'id' => 'request'
            )); ?>
        </li>		
		<li>
			<p style="color:red; padding-top: 10px;">*Your registration will not be complete untill you pay the registration fee in the next step.</p>
		</li>		
        <li>
            <input class="submit button" type="submit" value="Next" />
        </li>
    </ul>
    <?php echo form_close(); ?>
</div>
</div>