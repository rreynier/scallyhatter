<?php $this->site_model->add_js('/assets/js/jquery.tablesorter.min.js'); ?>
<?php $this->site_model->add_js('/assets/js/registered.js'); ?>
<?php $this->site_model->add_css('/assets/css/tablesorter.css'); ?>
<?php $this->site_model->set_title('Players Registered For ' . $scallyhatter['year'] . ' Scally Hatter'); ?>
<div id="banner">
    <img src="/assets/images/banner.jpg" alt="Grass Field" />
</div>
<div id="maincontent">
<h1>Who Is Going</h1>
<h2>Registered players for <?php echo $scallyhatter['year']; ?></h2>

<?php if($registered) { ?>
<table class="sortable">
    <thead>
        <tr>
            <th>Number</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Date Registered</th>

        </tr>
    </thead>
    <tbody>
<?php $count = 0; foreach($registered as $player) { $count++; ?>

        <tr id="player_<?php echo $player['id']; ?>">
            <td><?php echo $count; ?></td>
            <td><?php echo $player['first_name']; ?></td>
            <td><?php echo $player['last_name']; ?></td>
            <td><?php echo date("F j, Y, g:i a",strtotime($player['date_registered'])); ?></td>
  
        </tr>



<?php } ?>
    </tbody>
</table>
<?php } else { ?>

    <p>No one has signed up yet!</p>

<?php } ?>

<p><?php echo anchor('past','Check out who attended in previous years!'); ?></p>

</div>