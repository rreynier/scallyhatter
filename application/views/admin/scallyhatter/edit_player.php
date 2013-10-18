<?php $this->site_model->set_breadcrumb(anchor('admin/scallyhatter','Manage')); ?>
<?php $this->site_model->add_breadcrumb(anchor('admin/scallyhatter','View All Scallyhatters')); ?>
<?php $this->site_model->add_breadcrumb(anchor('admin/scallyhatter/edit-scallyhatter/' .$player['fk_scallyhatter_id'], 'Edit Scallyhatter')); ?>
<?php $this->site_model->add_breadcrumb(anchor('admin/scallyhatter/view-registered/' .$player['fk_scallyhatter_id'], 'Manage Registered Players')); ?>
<?php $this->site_model->add_breadcrumb('<strong>Edit Player - ' . $player['first_name'] . ' ' . $player['last_name'] . '</strong>'); ?>

<div id="editplayer">

    <h1>Edit Player</h1>
    <h2>General Information</h2>
    <?php if($action != 'Add New') { $class = ' class="ajax"'; } else { $class = ''; } ?>
    <?php echo form_open('admin/scallyhatter/save_player/','id="saveplayer"' . $class); ?>
    <div id="ajaxmessage"></div>
    <?php echo form_hidden('player_id',$player['fk_player_id']) ?>
    <?php echo form_hidden('scallyhatter_id',$player['fk_scallyhatter_id']) ?>
    <?php echo form_hidden('player_scallyhatter_id',$player['player_scallyhatter_id']) ?>
    <ul>
        <li>
            <label for="first_name">First Name</label>
            <?php echo form_input( array(
                'name' => 'first_name',
                'id' => 'first_name',
                'value' => $player['first_name']
            )); ?>
        </li>
        <li>
            <label for="last_name">Last Name</label>
            <?php echo form_input( array(
                'name' => 'last_name',
                'id' => 'last_name',
                'value' => $player['last_name']
            )); ?>
        </li>
        <li>
            <label for="email">Email</label>
            <?php echo form_input( array(
                'name' => 'email',
                'id' => 'email',
                'value' => $player['email']
            )); ?>
        </li>
        <li>
            <label for="phone">Phone</label>
            <?php echo form_input( array(
                'name' => 'phone',
                'id' => 'phone',
                'value' => $player['phone']
            )); ?>
        </li>
        <li>
            <label for="gender">Gender</label>
            <?php echo form_dropdown(
                'gender',
                array( 'm' => 'Male','f' => 'Female'),
                $player['gender'],
                'class="dropdown"');
            ?>
        </li>
        <li>
            <label for="skill">Skill Level</label>
            <?php echo form_dropdown(
                'skill',
                array( '1' => '1 - Noob','2' => '2 - Some Experience', '3' => '3 - Decent', '4' => '4 - Baller', '5' => '5 - Frisbee God' ),
                $player['skill'],
                'class="dropdown"');
            ?>
        </li>
        <li>
            <label for="shirt_size">Shirt Size</label>
            <?php echo form_dropdown(
                'shirt_size',
                array( 's' => 'Small','m' => 'Medium', 'l' => 'Large', 'xl' => 'Extra Large' ),
                $player['shirt_size'],
                'class="dropdown"');
            ?>
        </li>

        <li>
            <label for="request">Request</label>
            <?php echo form_textarea( array(
                'name' => 'request',
                'id' => 'request',
                'value' => $player['request']
            )); ?>
        </li>
        <li>
            <label for="status">Status</label>
            <?php echo form_dropdown(
                'status',
                array(
                    'None' => 'None',
                    'Signed Up - Choose Payment' => 'Signed Up - Choose Payment',
                    'Signed Up - Paying Later' => 'Signed Up - Paying Later',
                    'Signed Up - Waiting List' => 'Signed Up - Waiting List',
                    'Paid - Online' => 'Paid - Online',
                    'Paid - Check' => 'Paid - Check',
                    'Paid - Cash' => 'Paid - Cash' ),
                $player['status'],
                'class="dropdown"');
            ?>
        </li>
        <li>
            <input class="submit" type="submit" value="Save" />
        </li>
    </ul>
    <?php echo form_close(); ?>
</div>