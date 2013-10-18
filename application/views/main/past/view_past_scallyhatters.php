<?php $this->site_model->set_title('All Scally Hatters, Past and Present'); ?>
<div id="banner">
    <img src="/assets/images/banner.jpg" alt="Grass Field" />
</div>
<?php $this->site_model->add_js('/assets/js/jquery.tablesorter.min.js'); ?>
<?php $this->site_model->add_js('/assets/js/registered.js'); ?>
<?php $this->site_model->add_css('/assets/css/tablesorter.css'); ?>
<div id="maincontent">
<h1>The Past</h1>
<h2>All Scally Hatters, Past and Present</h2>
<p>Click the "details" link to see who attended each year!</p>

<?php if($scallyhatters) { ?>
<table class="sortable">
    <thead>
        <tr>
            <th>Year</th>
            <th>Date</th>
            <th>Registered/Max</th>
            <th>Who Registered</th>
        </tr>
    </thead>
    <tbody>
<?php $count = 0; foreach($scallyhatters as $scallyhatter) { $count++; ?>

        <tr id="player_<?php echo $scallyhatter['id']; ?>">
            <td><?php echo $scallyhatter['year']; ?></td>
            <td><?php echo $scallyhatter['date']; ?></td>
            <td><?php echo $scallyhatter['registered_count']; ?> / <?php echo $scallyhatter['max_players']; ?></td>
            <td><?php echo anchor('past/view-details/' . $scallyhatter['id'],'Details'); ?></td>


        </tr>



<?php } ?>
    </tbody>
</table>
<?php } else { ?>

    <p>No one has signed up yet!</p>

<?php } ?>
</div>