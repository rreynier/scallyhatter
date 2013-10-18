<ul class="contain">
    <li<?php is_active('home',$levels[0]); ?>>
        <?php echo anchor('','Home'); ?>
    </li>
    <li<?php is_active('info',$levels[0]); ?>>
        <?php echo anchor('info','Info'); ?>
    </li>
    <li<?php is_active('signup',$levels[0]); ?>>
        <?php echo anchor('signup','Sign Up'); ?>
    </li>
    <li<?php is_active('pay',$levels[0]); ?>>
        <?php echo anchor('pay','Pay'); ?>
    </li>
    <li<?php is_active('registered',$levels[0]); ?>>
        <?php echo anchor('registered','Who Is Going'); ?>
    </li>
    <li<?php is_active('location',$levels[0]); ?>>
        <?php echo anchor('location','Location'); ?>
    </li>

</ul>