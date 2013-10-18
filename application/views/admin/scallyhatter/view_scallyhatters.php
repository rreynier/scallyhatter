
<?php $this->site_model->set_breadcrumb('<strong>Manage Scallyhatters</strong>'); ?>

<h1>Manage Scallyhatters</h1>

<ul id="subnav">
    <li><?php echo anchor('admin/scallyhatter/add_scallyhatter','Add New Scallyhatter'); ?></li>
</ul>

<?php if($scallyhatters) { ?>
<table class="sortable">
    <thead>
        <tr>
            <th>Date</th>
            <th>Year</th>
            <th>Signed Up / Max</th>
            <th>Paid / Nonepaid</th>
            <th>Estimated Profit</th>
            <th>Active</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
<?php foreach($scallyhatters as $scallyhatter) { ?>
    
        <tr id="scallyhatter_<?php echo $scallyhatter['id']; ?>">
            <td><?php echo $scallyhatter['date']; ?></td>
            <td><?php echo $scallyhatter['year']; ?></td>
            <td><?php echo $scallyhatter['registered_count']; ?> / <?php echo $scallyhatter['max_players']; ?> </td>
            <td>
                <?php echo $scallyhatter['paid_total_count']; ?>
                <span class="breakdown">(online - <?php echo $scallyhatter['paid_online_count']; ?>, other <?php echo $scallyhatter['paid_other_count']; ?>)</span>
            </td>
            <td><?php echo money($scallyhatter['estimated_profit']); ?></td>
            <td><?php if($scallyhatter['active'] == 1) { echo 'Yes'; } else { echo 'No'; } ?></td>
            <td>
                <?php echo anchor('admin/scallyhatter/view-registered/'.$scallyhatter['id'],'Registered', 'class="view"'); ?>
                <?php echo anchor('admin/scallyhatter/export-registered/'.$scallyhatter['id'],'Export', 'class="export"'); ?>
                <?php echo anchor('admin/scallyhatter/edit-scallyhatter/'.$scallyhatter['id'],'Edit', 'class="edit"'); ?>
                <?php echo anchor('admin/scallyhatter/delete-scallyhatter/' . $scallyhatter['id'], 'Delete', 'class="ajax delete confirm"'); ?>
            </td>
        </tr>

    

<?php } ?>
    </tbody>
</table>
<?php } else { ?>

    <p>No tournaments exist, please create one.</p>

<?php } ?>