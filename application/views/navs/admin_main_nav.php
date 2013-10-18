<ul>
    <!--<li<?php is_active('dashboard',$levels[0]); ?>>
        <?php echo anchor('admin','Dashboard'); ?>
    </li>-->
    <li<?php is_active('manage',$levels[0]); ?>>
        <?php echo anchor('admin/scallyhatter','Manage'); ?>
    </li>
    <li>
        <?php echo anchor('admin/user/logout','logout'); ?>
    </li>

</ul>
