<?php $this->site_model->set_breadcrumb(anchor('admin/scallyhatter','Manage')); ?>
<?php $this->site_model->add_breadcrumb(anchor('admin/scallyhatter','View All Scallyhatters')); ?>
<?php $this->site_model->add_breadcrumb(anchor('admin/scallyhatter/edit-scallyhatter/' . $scallyhatter['id'], 'Edit ' . $scallyhatter['year'] . ' Scallyhatter')); ?>
<?php $this->site_model->add_breadcrumb('<strong>Manage Registered Players</strong>'); ?>

<h1>Manage registered players for <?php echo $scallyhatter['year']; ?></h1>
<ul id="subnav">
    <li><?php echo anchor('admin/scallyhatter/add_player/' . $scallyhatter['id'],'Add Player'); ?></li>
</ul>

<?php if($registered) { ?>
<table class="sortable">
    <thead>
        <tr>
            <th>Date Registered</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Skill</th>
            <th>Shirt Size</th>
            <th>Request</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
<?php foreach($registered as $player) { ?>
    
        <tr id="player_<?php echo $player['id']; ?>">
            <td><?php echo $player['date_registered']; ?></td>
            <td><?php echo $player['first_name']; ?></td>
            <td><?php echo $player['last_name']; ?></td>
            <td><?php echo $player['email']; ?></td>
            <td><?php echo $player['phone']; ?></td>
            <td><?php echo $player['gender']; ?></td>
            <td><?php echo $player['skill']; ?></td>
            <td><?php echo $player['shirt_size']; ?></td>
            <td><?php echo $player['request']; ?></td>
            <td><?php echo $player['status']; ?></td>
            <td>
                <?php echo anchor('admin/scallyhatter/edit-player/' . $player['fk_player_id'] . '/' . $player['fk_scallyhatter_id'], 'Edit', 'class="edit"'); ?>
                <?php echo anchor('admin/scallyhatter/delete-player/' . $player['fk_player_id'] . '/' . $player['fk_scallyhatter_id'], 'Delete', 'class="ajax delete confirm"'); ?>
            </td>
        </tr>

    

<?php } ?>
    </tbody>
</table>
<?php } else { ?>

    <p>No one has signed up yet!</p>

<?php } ?>
