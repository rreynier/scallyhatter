<?php $this->site_model->add_js('/assets/ckeditor/ckeditor.js'); ?>
<?php $this->site_model->set_breadcrumb(anchor('admin/scallyhatter','Manage')); ?>
<?php $this->site_model->add_breadcrumb(anchor('admin/scallyhatter', 'View All Scallyhatters')); ?>
<?php $this->site_model->add_breadcrumb('<strong>Edit Scallyhatter</strong>'); ?>
<script type="text/javascript">
$(document).ready(function() {
    if (document.getElementById('desc') != null) {  
        CKEDITOR.replace( 'desc', {
            toolbar :
            [
                ['Format'],['Source'],['SpecialChar'],['NumberedList','BulletedList'],
                ['Bold','Italic'],['Link','Unlink','Anchor'],['Image'],['RemoveFormat'],['JustifyLeft','JustifyCenter']
            ],
            height : '400px',
            width : '850px'
        } );
    }
});
</script>


<div id="editscallyhatter" class="normalform">





    <h1><?php echo $action; ?> Scally Hatter</h1>

    <?php echo form_open('admin/scallyhatter/save-scallyhatter/', 'id="savescallyhatter"'); ?>
    <div id="ajaxmessage"></div>
    <?php echo form_hidden('id',$scallyhatter['id']); ?>
    <h2>General Information</h2>
    <ul>
        <li>
            <label for="active">Active (there can only be one tournament active at a time)</label>
            <?php echo form_dropdown(
                'active',
                array( '0' => 'No','1' => 'Yes' ),
                $scallyhatter['active'],
                'class="dropdown"');
            ?>
        </li>
        <li class="small clr">
            <label for="year">Year</label>
            <?php echo form_input( array(
                'name' => 'year',
                'id' => 'year',
                'value' => $scallyhatter['year']
            )); ?>
        </li>
        <li class="small">
            <label for="date">Date</label>
            <?php echo form_input( array(
                'name' => 'date',
                'id' => 'date',
                'value' => $scallyhatter['date'],
                'class' => 'datepicker'
            )); ?>
        </li>
        <li class="small">
            <label for="registration_deadline">Registration Deadline</label>
            <?php echo form_input( array(
                'name' => 'registration_deadline',
                'id' => 'registration_deadline',
                'value' => $scallyhatter['registration_deadline'],
                'class' => 'datepicker'
            )); ?>
        </li>        
        <li class="small">
            <label for="max_players">Max Players</label>
            <?php echo form_input( array(
                'name' => 'max_players',
                'id' => 'max_players',
                'value' => $scallyhatter['max_players']
            )); ?>
        </li>
        <li class="small clr">
            <label for="signup_fee_online">Signup Fee - Online</label>
            <?php echo form_input( array(
                'name' => 'signup_fee_online',
                'id' => 'signup_fee_online',
                'value' => $scallyhatter['signup_fee_online']
            )); ?>
        </li>
        <li class="small">
            <label for="signup_fee_other">Signup Fee - Other</label>
            <?php echo form_input( array(
                'name' => 'signup_fee_other',
                'id' => 'signup_fee_other',
                'value' => $scallyhatter['signup_fee_other']
            )); ?>
        </li>
        <li class="clr wide">
            <label for="desc">Description</label>
            <?php echo form_textarea( array(
                'name' => 'desc',
                'id' => 'desc',
                'value' => $scallyhatter['desc'],
            )); ?>
        </li>
    </ul>
    <h2>Address</h2>
    <p>Please note that this address is used to generate the map found on the location page.</p>
    <ul>
        <li>
            <label for="address">Address</label>
            <?php echo form_input( array(
                'name' => 'address',
                'id' => 'address',
                'value' => $scallyhatter['address']
            )); ?>
        </li>
        <li class="small clr">
            <label for="city">City</label>
            <?php echo form_input( array(
                'name' => 'city',
                'id' => 'city',
                'value' => $scallyhatter['city']
            )); ?>
        </li>
        <li class="small">
            <label for="state">State</label>
            <?php echo form_input( array(
                'name' => 'state',
                'id' => 'state',
                'value' => $scallyhatter['state']
            )); ?>
        </li>
        <li class="small">
            <label for="zip">Zip Code</label>
            <?php echo form_input( array(
                'name' => 'zip',
                'id' => 'zip',
                'value' => $scallyhatter['zip']
            )); ?>
        </li>

        <li class="small clr">
            <label for="longitude">Longitude <span class="note">for Google Maps if available</span></label>
            <?php echo form_input( array(
                'name' => 'longitude',
                'id' => 'longitude',
                'value' => $scallyhatter['longitude']
            )); ?>
        </li>

        <li class="small">
            <label for="latitude">Latitude <span class="note">for Google Maps if available</span></label>
            <?php echo form_input( array(
                'name' => 'latitude',
                'id' => 'latitude',
                'value' => $scallyhatter['latitude']
            )); ?>
        </li>

        <li class="clr">
            <input class="submit" type="submit" value="Save" />
        </li>
    </ul>
    <?php echo form_close(); ?>
</div>